@extends('layouts.app')

@section('content')
    <div id="page" class="container">
        <ul class="style1">
            @forelse ($workouts as $workout)
                <li class="first">
                    <h3><a href="#">{{$workout->notes}}</a></h3>
                </li>
            @empty
                <p>No Relevant Info</p>
            @endforelse
        </ul>
    </div>
@endsection
