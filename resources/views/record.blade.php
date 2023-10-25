<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Form Data</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    </style>  
</head>
<body>

<div class="card-body">
    <h1>All Medical Records</h1>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Patient</th>
                <th>Doctor</th>
                <th>Condition</th>
                <th>Temperature</th>
                <th>File</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Records as $record)
            <tr>
                <td>{{ $record->patient->name }}</td>
                <td>{{ $record->doctor->name }}</td>
                <td>{{ $record->condition }}</td>
                <td>{{ $record->temperature }}</td>
                <td>{{ $record->file }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>