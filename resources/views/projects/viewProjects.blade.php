<!DOCTYPE html>
<html>
<head>
    <title>Bird Board</title>
</head>
<body>

    <h1>Birdboard</h1>
    <ul>
        @if(!empty($projects))
            @foreach($projects as $project)
                <li>{{ $project->title }}</li>
            @endforeach

        @endif



    </ul>



</body>
</html>