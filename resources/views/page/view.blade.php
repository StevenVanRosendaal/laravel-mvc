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
        <table>
            <tr>
                <th>Title</th>
                <th>Content</th>
            </tr>
            @foreach ($pages as $page)
            <tr>
                <td>{{ $page->title }}</td>
                <td>{{ $page->content }}</td>
            </tr>
            @endforeach
        </table>
        </br>
        <a href="{{ route('addPage') }}">Add Page</a>
    </body>
</html>