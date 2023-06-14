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
    <h2 class='page-header'>本のタイトルや金額を変更する</h2>
    {!! Form::open(['url' => '/book/update']) !!}
    <div class="form-group">
        {{ Form::hidden('id', $books->id) }}
        {{ Form::label('本のタイトル') }}
        {{ Form::input('text', 'upTitle', $books->title, ['class' => 'form-control']) }}
        {{ Form::label('本の金額') }}
        {{ Form::input('text', 'upPrice', $books->price, ['class' => 'form-control']) }}
    </div>
    <button type="submit" class="btn btn-primary pull-right">更新</button>
    {!! Form::close() !!}
</div>
@endsection
