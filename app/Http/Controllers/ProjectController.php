<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FuzzySAWService;
use App\Models\Project;

class ProjectController extends Controller
{
    protected $fuzzySAWService;

    public function __construct(FuzzySAWService $fuzzySAWService)
    {
        $this->fuzzySAWService = $fuzzySAWService;
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        $results = $this->fuzzySAWService->calculate($id);

        return view('projects.show', compact('project', 'results'));
    }
}
