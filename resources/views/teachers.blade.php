<!-- resources/views/students.blade.php -->

@foreach($teachers as $teacher)
    <p>{{ $teacher->teacher_name }}</p>
    <!-- Display other student attributes as needed -->
@endforeach
