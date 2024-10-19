<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #333;
            color: #ddd;
            font-family: Arial, sans-serif;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-container {
            max-width: 700px;
            width: 100%;
            background-color: #444;
            padding: 30px;
            border-radius: 8px;
        }
        label {
            margin-top: 10px;
        }
        .button-group {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="text-center mb-4">Job Detail</h2>
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $job->title }}" readonly>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4" readonly>{{ $job->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="salary" class="form-label">Salary:</label>
            <input type="number" class="form-control" id="salary" name="salary" value="{{ $job->salary }}" readonly>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location:</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ $job->location }}" readonly>
        </div>

        <div class="mb-3">
            <label for="company_id" class="form-label">Company:</label>
            <input type="text" class="form-control" id="company_id" name="company_id" value="{{ $job->company->name }}" readonly>
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Category:</label>
            <input type="text" class="form-control" id="category_id" name="category_id" value="{{ $job->category->name }}" readonly>
        </div>

        <div class="button-group">
            <a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-primary">Edit Job</a>
            <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Job</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>