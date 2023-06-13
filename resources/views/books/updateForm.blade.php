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
        <h2 class='page-header'>本のタイトルや金額を変更する</h2>
        {!! Form::open(['url' => '/book/update']) !!}
        <div class="form-group">
            {{ Form::hidden('id', $books->id) }}
            {{ Form::label('本のタイトル') }}
            {{ Form::input('text', 'upTitle', $books->title, ['required', 'class' => 'form-control']) }}
            {{ Form::label('本の金額') }}
            {{ Form::input('text', 'upPrice', $books->price, ['required', 'class' => 'form-control']) }}
        </div>
        <button type="submit" class="btn btn-primary pull-right">更新</button>
        {!! Form::close() !!}
    </div>
    <footer>
        <small>Laravel@test.curriculum</small>
    </footer>
</body>

</html>
