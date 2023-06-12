<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="container">

    <header>
        <a href="/index"><h1>Laravelを使ったCRUD機能の実装</h1></a>
    </header>

    <div class="container">
        <p class="pull-right"><a class="btn btn-success" href="/create-form">登録する</a></p>
        <h2 class="page-header">本のリスト一覧</h2>
        <table class='table table-hover'>
            <tr>
                <th>No</th>
                <th>タイトル</th>
                <th>著者名</th>
                <th>金額</th>
                <th>登録日時</th>
                <th></th>
            </tr>
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author->name }}</td>
                <td>{{ $book->price }}</td>
                <td>{{ $book->created_at }}</td>
                <td><a class="btn btn-primary" href="/book/{{$book->id}}/update-form">更新</a></td>
            </tr>
            @endforeach
        </table>
    </div>
    <footer>
        <small>Laravel@test.curriculum</small>
    </footer>
</body>

</html>
