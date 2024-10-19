<!DOCTYPE html>
<html>
<head>
    <title>Edit Job</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: #ddd;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="number"], select, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h1>Edit Job</h1>
    <form action="{{ route('jobs.update', $job->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $job->title }}" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required>{{ $job->description }}</textarea>
        </div>
        <div>
            <label for="salary">Salary:</label>
            <input type="number" id="salary" name="salary" value="{{ $job->salary }}" required>
        </div>
        <div>
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" value="{{ $job->location }}" required>
        </div>
        <div>
            <label for="company_id">Company:</label>
            <select id="company_id" name="company_id" required>
                <option value="">Bitte wählen...</option>
                @foreach($companies as $company)
                    <option value="{{ $company->id }}" {{ $company->id == $job->company_id ? 'selected' : '' }}>{{ $company->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="category_id">Category:</label>
            <select id="category_id" name="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $job->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Job aktualisieren</button>
    </form>
</body>
</html>