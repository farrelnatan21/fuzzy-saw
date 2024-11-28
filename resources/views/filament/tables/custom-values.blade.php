<table border="1" style="width: 100%; text-align: center; border-collapse: collapse;">
    <thead>
        <tr>
            <th>Alternative</th>
            @foreach ($criterias as $criterion)
                <th>{{ $criterion->name }} <br> <span style="font-size: 12px; color: gray;">({{ $criterion->type }})</span></th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($alternatives as $alternative)
            <tr>
                <td>{{ $alternative->name }}</td> <!-- Menampilkan alternatif -->
                @foreach ($criterias as $criterion)
                    <td>
                        @php
                            // Mencari nilai berdasarkan alternative_id dan criterias_id
                            $value = $values->where('alternative_id', $alternative->id)
                                            ->where('criterias_id', $criterion->id)
                                            ->first();
                        @endphp
                        {{ $value ? $value->value : '-' }} <!-- Menampilkan nilai atau '-' jika tidak ada -->
                    </td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
