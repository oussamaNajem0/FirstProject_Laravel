@extends('layout.master')
@section('title','Home Page')
@section('content')
    <main class="max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold">{{$heading}}</h1>
        <br>
        @if (count($listing) == 0)
            <p>No listing Found 🙂 </p>
        @endif
        @foreach ($listing as $listing)
            <h2 class="font-bold">{{$listing['title']}}</h2>
            <p>{{$listing['description']}}</p>
        @endforeach
    </main>
@endsection
