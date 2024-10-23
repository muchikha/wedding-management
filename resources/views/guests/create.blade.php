<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Guest</title>
</head>
<body>
    <h1>Add Guest to Event: {{ $event->name }}</h1> <!-- Assuming you have a name attribute -->
    <form action="{{ url('/guests') }}" method="POST">
        @csrf
        <input type="hidden" name="event_id" value="{{ $event->id }}">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <label for="RSVP_status">RSVP Status:</label>
        <select name="RSVP_status" required>
            <option value="yes">Yes</option>
            <option value="no">No</option>
            <option value="maybe">Maybe</option>
        </select>
        <br>
        <button type="submit">Add Guest</button>
    </form>
</body>
</html>
