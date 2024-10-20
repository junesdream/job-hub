<!DOCTYPE html>
<html>
<head>
    <title>Create New Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create New Company</h1>
        <form action="{{ route('companies.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" id="location" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="industry">Industry</label>
                <input type="text" name="industry" id="industry" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="founded_at">Founded At</label>
                <input type="date" name="founded_at" id="founded_at" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="website">Website</label>
                <input type="url" name="website" id="website" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Company</button>
        </form>
    </div>
</body>
</html>