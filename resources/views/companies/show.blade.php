<!DOCTYPE html>
<html>
<head>
    <title>Company Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Company Details</h1>
        <div class="card">
            <div class="card-header">
                {{ $company->name }}
            </div>
            <div class="card-body">
                <p><strong>Description:</strong> {{ $company->description }}</p>
                <p><strong>Location:</strong> {{ $company->location }}</p>
                <p><strong>Industry:</strong> {{ $company->industry }}</p>
                <p><strong>Founded At:</strong> {{ $company->founded_at }}</p>
                <p><strong>Website:</strong> <a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></p>
            </div>
            <div class="card-footer">
                <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('companies.destroy', $company->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>