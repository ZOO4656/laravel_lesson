@extends ('layouts.app')
@section ('content')
<h1 class="page-header">ToDo一覧</h1>
<p class="text-right">
  <!-- routeのtodo/create接続時のコントロール発火 -->
  <a class="btn btn-success" href="/todo/create">ToDoを追加</a>
</p>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th>やること</th>
      <th>作成日時</th>
      <th>更新日時</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <!-- $todosにtodosテーブルを配列として格納されており一つずつ$todoに代入される -->
    <!-- $todosと$todoはどんな型のなにが入っているのか -->

    {{-- $todosにはコレクションインスタンスが入っており、$todoでforeachで回すことで中に持っているTodoインスタンスを取り出すことができる。 --}}
    {{-- Todoインスタンスはプロパティとしてtitleやcreated_atをkeyにテーブルから取得した値を持っている。 --}}
    @foreach ($todos as $todo)
    <tr>
      <td class="align-middle">{{ $todo->title }}</td>
      <td class="align-middle">{{ $todo->created_at }}</td>
      <td class="align-middle">{{ $todo->updated_at }}</td>
      <td><a class="btn btn-primary" href="{{ route('todo.edit', $todo->id) }}">編集</a></td>
      <td>
        {!! Form::open(['route' => ['todo.destroy', $todo->id], 'method'=> 'DELETE']) !!}
          {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
