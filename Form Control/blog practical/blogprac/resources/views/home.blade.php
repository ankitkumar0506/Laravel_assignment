<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homepage</title>
</head>
<body>
    <h1>homepage</h1>
    <hr>
    <ul>
        <li><a href="home">home</a></li>
        <li><a href="blogpost">Post your blog</a></li>
    </ul>
<br><br>
    <hr>


    @foreach ($blogdata as $value)
    <table border="" cellspacing="0" cellpadding="0" width="60%">

        <tr>
            <td>{{ $value->name }}</td>
            <td>{{ $value->desc }}</td>
        </tr>
        </table>
    @endforeach

</body>
</html>
