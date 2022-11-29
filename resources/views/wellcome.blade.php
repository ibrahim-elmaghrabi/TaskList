@extends('layouts.app') 

@section('content')
<h1 class="text-center">Task List</h1>
   @if (Auth::check())
        <h2 class="text-center">Wellcom {{ Auth()->user()->name }}</h2>
    @else
    <h2 class="text-center">Login To Get Access !</h2>
    @endif
@endsection