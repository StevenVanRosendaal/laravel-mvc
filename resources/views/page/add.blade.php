<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <form method="post" action="{{ route('processAddPage') }}">
            @csrf
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" placeholder="Title"><br>
            <label for="content">Content:</label><br>
            <input type="text" id="content" name="content" placeholder="Content"><br><br>
            <input type="submit" value="Submit">
        </form>
        </br>
        <a href="{{ route('addPage') }}">Add Page</a>
    </body>
</html>