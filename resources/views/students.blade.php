<!-- resources/views/students.blade.php -->

@foreach($students as $student)
    <p>{{ $student->student_name }}</p>
    <!-- Display other student attributes as needed -->
@endforeach
