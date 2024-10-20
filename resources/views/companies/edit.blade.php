<!DOCTYPE html>
<html>
<head>
    <title>Edit Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Company</h1>
        <form action="{{ route('companies.update', $company->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $company->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required>{{ $company->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" id="location" class="form-control" value="{{ $company->location }}" required>
            </div>
            <div class="form-group">
                <label for="industry">Industry</label>
                <input type="text" name="industry" id="industry" class="form-control" value="{{ $company->industry }}" required>
            </div>
            <div class="form-group">
                <label for="founded_at">Founded At</label>
                <input type="date" name="founded_at" id="founded_at" class="form-control" value="{{ $company->founded_at }}" required>
            </div>
            <div class="form-group">
                <label for="website">Website</label>
                <input type="url" name="website" id="website" class="form-control" value="{{ $company->website }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Company</button>
        </form>
        <form action="{{ route('companies.destroy', $company->id) }}" method="POST" class="mt-3">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete Company</button>
        </form>
    </div>
</body>
</html>