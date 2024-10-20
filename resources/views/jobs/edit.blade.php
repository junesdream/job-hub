<!DOCTYPE html>
<html>
<head>
    <title>Edit Job</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #333;
            color: #ddd;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Edit Job</h1>
        <form action="{{ route('jobs.update', $job->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $job->title }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $job->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="salary" class="form-label">Salary</label>
                <input type="number" class="form-control" id="salary" name="salary" value="{{ $job->salary }}" required>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ $job->location }}" required>
            </div>
            <div class="mb-3">
                <label for="company_id" class="form-label">Company</label>
                <select class="form-select" id="company_id" name="company_id" required>
                    <option value="">Bitte wählen...</option>
                    @foreach($companies as $company)
                        <option value="{{ $company->id }}" {{ $company->id == $job->company_id ? 'selected' : '' }}>{{ $company->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select" id="category_id" name="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $job->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Update Job</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
