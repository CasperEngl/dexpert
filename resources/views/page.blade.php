@extends('layouts.app')

@section('title', $content->matter('title'))

@section('content')
<section class="page">
    <div class="my-16 container markdown">
        <h1 class="mb-4">{{ $content->matter('title') }}</h1>
        @markdown($content->body())
    </div>
</section>
@endsection