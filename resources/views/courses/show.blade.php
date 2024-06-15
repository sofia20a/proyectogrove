<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details</title>
</head>
<body>
    <h1>Course Details</h1>
    <p><strong>Name:</strong> {{ $course->name }}</p>
    <p><strong>Events ID:</strong> {{ implode(', ', $course->events_id) }}</p>
    <!-- Other details you want to show -->
</body>
</html>