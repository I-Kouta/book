@extends("app")
@section("content")
<div class="container">
  <h2 class="page-header">著者を登録する</h2>
  @if($errors->first("authorName"))
  <div class="alert alert-danger">
    <li>{{ $errors->first("authorName") }}</li>
  </div>
  @endif
  {!! Form::open(['url' => '/author/create']) !!}
  <div class="form-group">
    {{ Form::input('text', 'authorName', null, ['class' => 'form-control', 'placeholder' => '著者名']) }}
  </div>
  <button type="submit" class="btn btn-success pull-right">追加</button>
  {!! Form::close() !!}
</div>

<div class="container">
  <h2 class="page-header">本を登録する</h2>
  <div class="form-group">
    @if($errors->first("author_id"))
    <div class="alert alert-danger">
      <li>{{ $errors->first("author_id") }}</li>
    </div>
    @endif

    @if($errors->first("title"))
    <div class="alert alert-danger">
      <li>{{ $errors->first("title") }}</li>
    </div>
    @endif

    @if($errors->first("price"))
    <div class="alert alert-danger">
      <li>{{ $errors->first("price") }}</li>
    </div>
    @endif
    <form action="/book/create" method="post">
      @csrf
      <select class="form-select" aria-label="Default select example" name="author_id">
        <option value="0">著者を選択してください。</option>
        @foreach($authors as $author)
        <option value="{{ $author->id }}">
          {{ $author->name }}
        </option>
        @endforeach
      </select>
      <input type="text" name="title" value="" class="form-control" placeholder="本のタイトル">
      <input type="text" name="price" value="" class="form-control" placeholder="本の金額">
      <button type="submit" class="btn btn-success pull-right">追加</button>
    </form>
  </div>
</div>
@endsection
