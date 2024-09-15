@extends('templates.main')

@section('content')

<a href="{{route('color.create')}}" class="btn btn primary mt - 3">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000" class="bi bi-plus-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
    </svg>
</a>



<table  class="table  table-striped">
    <thead  class="table table-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NOME</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($data as $item )    

      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
      </tr>

    @endforeach
    </tbody>
  </table>

@endsection