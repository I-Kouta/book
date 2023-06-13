@extends("app")
@section("content")
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
