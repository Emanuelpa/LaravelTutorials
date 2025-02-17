@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $viewData["product"]["name"] }}
                </h5>
                <p class="card-text">Description{{ $viewData["product"]["description"] }}</p>
                <!-- @if($viewData["product"]["price"] > 100)
                    <p class="card-text">Price: <span class="great-price">{{ $viewData["product"]["price"] }}</span></p>
                @else
                    <p class="card-text">Price: {{ $viewData["product"]["price"] }}</p>
                @endif -->

                <!--other option-->
                <p class="card-text">Price: <span class="{{ $viewData["product"]["price"] > 100 ? 'great-price' : '' }}">{{ $viewData["product"]["price"] }}</span></p>
            </div>
        </div>
    </div>
</div>
@endsection
