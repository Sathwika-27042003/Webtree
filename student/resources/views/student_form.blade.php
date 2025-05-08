<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
    <h2>Add Student</h2>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    @if($errors->any())
        <ul style="color:red">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('student.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Roll Number:</label>
        <input type="text" name="roll_number" required><br><br>

        <button type="submit">Add Student</button>
    </form>
</body>
</html>
