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
            <video src="{{ 'storage/'.$video->path }}" controls></video>
        </main>
    </article>
    @if ($loop->iteration % 3 == 0)
    {{-- <ins class="adsbyexoclick" data-zoneid="4869496"></ins>  --}}
    @endif
@endforeach

@endsection

@section('footer')
{{ $videos->url($videos->lastPage()) }}
{{ $videos->lastPage() }}
{{ $videos->total() }}
{{ $videos->count() }}
{{-- <script>(AdProvider = window.AdProvider || []).push({"serve": {}});</script> --}}
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
        aspect-ratio: 16/9;
    }
</style>
