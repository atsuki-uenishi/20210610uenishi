<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="card">
            <p>Todo List</p>
            <div class="list">
                <form class="add-input" action="/todo/create" method="POST">
                @csrf
                    <input type="text" class="add-text" name="content">
                    <input type="submit" class="add-button" value="追加">
                </form>
                <table>
                    <tr>
                        <th>作成日</th>
                        <th>タスク名</th>
                        <th>更新</th>
                        <th>削除</th>
                    </tr>
                    @if (count($errors) > 0)
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                        @endforeach
                    </ul>
                    @endif
                    @foreach ($contents as $content)
                    <tr>
                        <td>{{$content->created_at}}</td>
                        <form action="/todo/update" method="POST">
                        @csrf
                            <input type="hidden" name="id" value="{{$content->id}}">
                        <td>
                            <input type="text" class="update-text" value="{{$content->content}}" name="content">
                        </td>
                        <td>
                            <input type="submit" value="更新" class="update-button">
                        </td>
                        </form>
                        <td>
                            <form action="/todo/delete" method="POST">
                            @csrf
                                <input type="hidden" name="id" value="{{$content->id}}">
                                <input type="submit" class="delete-button" value="削除" name="content">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>