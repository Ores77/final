@extends('layouts.app-master')

@section('content')
@auth
<a href="workers/create" class="nav-link px-2 text-black">Add</a>
@endauth
<div class="card-deck">
  @foreach ($works as $work)
    <div class="card">
      @auth
      <form action="workers/{{$work->id}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="text-red">Istrinti</button>
      </form>
    @endauth
      @auth
      <a href="workers/{{$work->id}}/edit">Edit</a>
      @endauth
      <img src="{{$work->image}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$work->vardas}} {{$work->pavarde}}</h5>
        <p class="card-text">{{$work->miestas}},{{$work->servisas}}</p>
      </div>
      <div class="card-footer">
        <a href="" class="card-link">Sirdele</a>
      </div>
    </div>
  @endforeach
</div>
@endsection
