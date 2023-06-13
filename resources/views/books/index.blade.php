@extends("app")
@section("content")
<div class="container">
    <form action="/search" method="post">
        @csrf
        <input type="text" name="keyword" class="form" placeholder="タイトルで検索">
        <button type="submit" class="btn btn-success">検索</button>
        @if(!empty($keyword))
        <div>検索ワード：{{ $keyword }}</div>
        @endif
    </form>
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
            <th></th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author->name }}</td>
            <td>{{ $book->price }}</td>
            <td>{{ $book->created_at }}</td>
            <td><a class="btn btn-primary" href="/book/{{$book->id}}/update-form">更新</a></td>
            <td><a class="btn btn-danger" href="/book/{{$book->id}}/delete" onclick="return confirm('こちらの本を削除してもよろしいでしょうか？')">削除</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
