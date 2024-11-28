<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->name }} - Fuzzy SAW Results</title>
</head>
<body>
    <h1>{{ $project->name }}</h1>
    <p>{{ $project->description }}</p>

    <h2>Results</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Alternative</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody>
            @foreach($results as $alternativeId => $score)
                <tr>
                    <td>{{ \App\Models\Alternative::find($alternativeId)->name }}</td>
                    <td>{{ $score }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
