<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}"/> 

    <title>Tasks</title>
</head>
<body>
    <table class="table">
        <tr><th>{{ $tasks->title }}</th></tr>
        <tr>
            <td>{{ $tasks->body }}</td>
        </tr>
    </table>
</body>
</html>