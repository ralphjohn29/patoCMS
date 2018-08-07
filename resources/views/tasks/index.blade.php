<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
</head>
<body>
        <table class="table table-striped">
                @foreach ($tasks as $task)
            <thead>
                <tr>
                    <th><a href="/tasks/{{ $task->id }}">{{ $task->title }}</a></th>
                </tr>
            </thead>
            <tbody>
                <tbody>
                    <tr>
                        <td>{{ $task->body }}</td>
                    </tr>
                </tbody>
            </tbody>


            @endforeach
        </table>
</body>
</html>