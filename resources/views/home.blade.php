<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <ul>
        @foreach ($videos as $video)
            <li>{{ $video->title }}</li>
        @endforeach
        </ul>
    </div>
     
    {{ $videos->links() }}
</body>
</html>