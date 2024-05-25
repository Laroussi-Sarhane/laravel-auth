@extends('layouts.admin')

@section('content')

<h2>projects </h2>

@if (session('error'))
<div class="alert alert-danger" role="alert">
    {{session('error')}}
  </div>

@endif
@if (session('success'))
<div class="alert alert-success" role="alert">
    {{session('success')}}
  </div>


@endif

<div class="my-4 ">

    <form action="{{route('admin.project.store')}}" method="POST" class=" d-flex ">
        @csrf
        <input class="form-controll me-2 " type="search" placeholder="nuova categoria" name="title">
        <button class="btn btn-outline-success" type="submit" > invia</button>


    </form>
</div>

<table class="table crud-table">
    <thead>
      <tr>

        <th scope="col">project</th>
        <th scope="col">azioni</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($projects as $item )
        <tr>
          <td>
            <input type="text" value="{{$item->title}}">
          </td>
          <td>
            <button class="btn btn-warning "><i class="fa-solid fa-pencil"></i></button>
            <button class="btn btn-danger "><i class="fa-solid fa-trash"></i></button>

          </td>
        </tr>

        @endforeach

    </tbody>
  </table>
@endsection
