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
        <a href="/index"><h1 class="page-header">Laravelを使ったCRUD機能の実装</h1></a>
    </header>
    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <div class="container">
        <h2 class="page-header">著者を登録する</h2>
        {!! Form::open(['url' => '/author/create']) !!}
        <div class="form-group">
            {{ Form::input('text', 'authorName', null, ['required', 'class' => 'form-control', 'placeholder' => '著者名']) }}
        </div>
        <button type="submit" class="btn btn-success pull-right">追加</button>
        {!! Form::close() !!}
    </div>

    <div class="container">
      <h2 class="page-header">本を登録する</h2>
      <div class="form-group">
        <form action="/book/create" method="post">
          @csrf
          <select class="form-select" aria-label="Default select example" name="author_id">
            <option value="">著者を選択してください。</option>
            @foreach($authors as $author)
            <option value="{{ $author->id }}">
              {{ $author->name }}
            </option>
            @endforeach
          </select>
          <input type="text" name="title" value="" class="form-control" placeholder="本のタイトル" required>
          <input type="text" name="price" value="" class="form-control" placeholder="本の金額" required>
          <button type="submit" class="btn btn-success pull-right">追加</button>
        </form>
      </div>
    </div>

    <footer>
        <small>Laravel@test.curriculum</small>
    </footer>
</body>

</html>
