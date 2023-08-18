<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Faketube</title>
</head>
<body>
    <h1>Faketube</h1>
    <ul>
        @foreach ($channels as $channel)
            <li>
                <a href="{{ route('channel', $channel->id) }}">{{ $channel->name }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>