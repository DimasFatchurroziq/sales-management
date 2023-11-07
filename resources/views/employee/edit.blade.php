<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h2>Edit Event</h2>
        <form action="{{ route('employee.update', $employee->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="employee_name">Employee Name</label>
                <input type="text" name="employee_name" class="form-control" value="{{ $employee->employee_name }}" required>
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" name="position" class="form-control" value="{{ $employee->position }}" required>
            </div>
            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="number" name="salary" class="form-control" value="{{ $employee->salary }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Event</button>
        </form>
    </div>
</body>
</html>


