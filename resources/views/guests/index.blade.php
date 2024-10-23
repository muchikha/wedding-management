<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest List</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Wedding Guest List</h1>

    <!-- Guest Form -->
    <form action="/guests" method="POST">
        @csrf
        <!-- If you're adding a guest to a specific event, use a hidden field for event_id -->
        <input type="hidden" name="event_id" value="{{ $event->id }}"> <!-- Include this if $event is passed to the view -->

        <!-- Optionally, you can also use a dropdown to select the event if multiple events exist -->
        <!-- Uncomment the code below if you want to select an event from a list -->
        <!--
        <label for="event_id">Event:</label>
        <select name="event_id" required>
            @foreach ($events as $event)
                <option value="{{ $event->id }}">{{ $event->name }}</option>
            @endforeach
        </select>
        -->

        <label for="name">Guest Name:</label>
        <input type="text" name="name" placeholder="Guest Name" required>

        <label for="email">Guest Email:</label>
        <input type="email" name="email" placeholder="Guest Email" required>

        <label for="RSVP_status">RSVP Status:</label>
        <select name="RSVP_status">
            <option value="yes">Yes</option>
            <option value="no">No</option>
            <option value="maybe">Maybe</option>
        </select>

        <label for="dietary_preferences">Dietary Preferences:</label>
        <input type="text" name="dietary_preferences" placeholder="Dietary Preferences">

        <button type="submit">Add Guest</button>
    </form>

    <!-- Guest List -->
    <h2>Guest List</h2>
    <ul>
        @foreach ($guests as $guest)
            <li>{{ $guest->name }} ({{ $guest->RSVP_status }})</li>
        @endforeach
    </ul>
</body>
</html>
