<?php
namespace App\Services;

use App\Models\Criteria;
use App\Models\Alternative;
use App\Models\Value;

class FuzzySAWService
{
    public function calculate($projectId)
    {
        // Ambil kriteria dan alternatif untuk proyek tertentu
        $criteria = Criteria::where('project_id', $projectId)->get();
        $alternatives = Alternative::where('project_id', $projectId)->get();

        // Inisialisasi array untuk normalisasi
        $normalized = [];

        // Proses normalisasi untuk setiap kriteria
        foreach ($criteria as $criterion) {
            // Ambil nilai dan alternatif yang terkait dengan kriteria ini
            $values = Value::where('criterias_id', $criterion->id)->pluck('value', 'alternative_id');

            // Lewati kriteria tanpa nilai
            if ($values->isEmpty()) {
                continue;
            }

            // Hitung nilai maksimum dan minimum
            $max = $values->max();
            $min = $values->min();

            // Validasi untuk mencegah division by zero
            if ($max == 0 || $min == 0) {
                throw new \Exception("Division by zero encountered for criteria ID {$criterion->id}");
            }

            // Normalisasi nilai untuk setiap alternatif
            foreach ($alternatives as $alternative) {
                $alternativeId = $alternative->id;

                // Gunakan default 0 jika nilai tidak ditemukan
                $value = $values[$alternativeId] ?? 0;

                $normalized[$alternativeId][$criterion->id] =
                    $criterion->type === 'benefit' ? ($value / $max) : ($min / max($value, 1));
            }
        }

        // Perhitungan preferensi untuk setiap alternatif
        $results = [];
        foreach ($alternatives as $alternative) {
            $alternativeId = $alternative->id;
            $results[$alternativeId] = 0;

            foreach ($criteria as $criterion) {
                // Lewati jika tidak ada nilai normalisasi
                if (!isset($normalized[$alternativeId][$criterion->id])) {
                    continue;
                }

                // Hitung skor total dengan mengalikan normalisasi dan bobot kriteria
                $results[$alternativeId] +=
                    $normalized[$alternativeId][$criterion->id] * $criterion->weight;
            }
        }

        // Urutkan hasil berdasarkan skor tertinggi
        arsort($results);

        return $results;
    }
}
