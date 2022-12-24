@extends('videos.layout')
@section('content')

@foreach ($videos as $video)
    <article class="post">
        {{-- 
        <header>
            <h3 class="mp0">{{ $video->title }} {{ $loop->iteration }}</h3>
        </header>
        --}}
        <main class="">
            {{-- <video src="{{ $video->path }}" controls></video> --}}
        </main>
    </article>
    @if ($loop->iteration % 3 == 0)
    <ins class="adsbyexoclick" data-zoneid="4869496"></ins> 
    @endif
@endforeach

@endsection

@section('footer')
<script>(AdProvider = window.AdProvider || []).push({"serve": {}});</script>
@endsection

<style>
    .post
    {
        padding: 0px;
    }
    .post header
    {
        padding: 20px 30px;
        margin: 0px;
    }
    .post video
    {
        width: 100%;
    }
</style>
