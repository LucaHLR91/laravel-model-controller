@extends('layout.app')

@section('title', 'Home')

@section('movies')
    <main>
        <h1 class="main_title">I nostri film</h1>

        <div class="movies-list">
            <ul>
                @foreach ($movies as $index => $movie)
                    <li>{{ $movie['title'] }}</li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection