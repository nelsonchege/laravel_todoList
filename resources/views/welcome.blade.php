@extends('layouts')

@section('content')

<body class="antialiased">
    <h1 class="text-color" class="text-color">todo list</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">is_complete</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($listItems as $listItem )
          <tr>
            <th scope="row">{{ $listItem->id }}</th>
            <td>{{ $listItem->name }}</td>
            <td>{{ $listItem->is_complete }}</td>
            <td>
                <a type="button" href="{{ route('updatePage',['id' => $listItem->id]) }}" class="btn btn-primary">edit</a>
                <a type="button" href="{{ route('deleteItem',['id' => $listItem->id]) }}" class="btn btn-secondary">delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
   
    <form action="{{ route('saveItem') }}" method="post">
        {{ csrf_field() }}

        <label for="listItem" class="text-color">new todo item</label></br>
        <input type="text" name= "listItem" id="listItem">
        <button>button </button>
    </form>
</body>
@endsection