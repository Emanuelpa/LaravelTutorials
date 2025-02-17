@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
    <div class="row">
        <div class="text-center">
            <p>{{ $viewData["description"] }}</p>
        </div>
    </div>
</div>

@endsection
