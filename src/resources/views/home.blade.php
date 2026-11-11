<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Logger</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>description</td>
            </tr>
        </thead>
        <tbody>
                @foreach ($data as $row )
            <tr>
                <td>{{$row->name}}</td>
                <td>{{$row->description}}</td>
            </tr>
                @endforeach
        </tbody>
    </table>

    

    @if(config('laravel-logger.enabled'))
   
    @for ($i =0; $i<=100;$i++)
    <p>Welcome To My Package User Count {{ $i }}</p>
    @endfor
    @else
    <p style="color: red;">Laravel Logger Is Disabled</p>
    @endif 
</body>
</html>