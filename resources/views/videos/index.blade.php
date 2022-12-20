@extends('videos.layout')
@section('content')

@foreach ($videos as $video)
    <article class="video">
        <header>
            <h1 class="mp0">{{ $video->title }}</h1>
        </header>
        <main class="mp0">
            <video src="{{ $video->path }}"></video>
        </main>
    </article>
@endforeach

@endsection

<style>
    .video header
    {
        padding: 10px 30px;
    }
    .mp0
    {
        margin: 0px;
        padding: 0px;
    }
</style>
