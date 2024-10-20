<!DOCTYPE html>
<html>
<head>
    <title>Companies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Companies</h1>
        <a href="{{ route('companies.create') }}" class="btn btn-primary mb-3">Create New Company</a>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Industry</th>
                    <th>Founded At</th>
                    <th>Website</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($companies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->location }}</td>
                    <td>{{ $company->industry }}</td>
                    <td>{{ $company->founded_at }}</td>
                    <td><a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></td>
                    <td>
                        <a href="{{ route('companies.show', $company->id) }}" class="btn btn-info btn-sm">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>