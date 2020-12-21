@extends('app')

@section('content')
        <div class="col-md-6">
            <h1 style="color: white;" class="text-center">All Movies List</h1>
            <ul>
                @foreach($movieList as $movie)
                    <li class="list-group-item"><h5>{{ $movie }}</h5></li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-6">
            <h1 style="color: white;" class="text-center">Last relese Movies</h1>
                @include('dashboard')
        </div>
@endsection
