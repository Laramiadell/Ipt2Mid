@extends('base')

@section('content')
  <div class="container">
    <h1 class="headertxt">Authors</h1>
    <hr>
    @foreach($users as $user)
    @if ($user->gender == 'Male')
    <div class="card m-1 mb-3 pb-3 pt-3" style="background-color: lightblue">
    @else
    <div class="card m-1 mb-3 pb-3 pt-3" style="background-color: lightpink">
    @endif
    <div class="card-body">
      <h5 class="card-title">
        <i class="fas fa-user"></i> {{$user->name}}
      </h5>
      <h3>
      <a href="/authors/{{$user->id}}" class="btn text-white">Author Posts <i class="fas fa-comment-edit"></i></a>
      </h3>
    </div>
    @endforeach
  </div> 
@endsection