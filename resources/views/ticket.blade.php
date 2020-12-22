@extends('app')

@section('content')
        <div class="col-md-6">
            <h1 style="color: white;" class="text-center">Ticket List</h1>
            <ul>
                @foreach($tickets as $ticket)
                    <li class="list-group-item"><h5>{{ $ticket }}</h5></li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-6">
            <h1 style="color: white;" class="text-center">Last relese Movies</h1>
                @include('dashboard')
        </div>
        <div class="col-md-12">
            @include('profile')
        </div> 
@endsection
