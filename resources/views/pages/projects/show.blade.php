@extends('layouts.app')

@section('content')

<main class="container py-3">
    <h1>{{$project->title}}</h1>

    @if($project->thumb)
        <img src="{{ asset('/storage/'.$project->thumb)}}" alt="" class="col-6 mb-3">
    @endif

    <p>
        {{$project->descriptions}}
    </p>
</main>
        
@endsection