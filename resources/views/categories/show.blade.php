<!DOCTYPE html>
<html>
<head>
    <title>Category Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Category Details</h1>
        <div class="card">
            <div class="card-header">
                {{ $category->name }}
            </div>
            <div class="card-body">
                <p><strong>Description:</strong> {{ $category->description }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>