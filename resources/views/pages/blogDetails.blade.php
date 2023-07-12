@extends('main')
@section('content')

@foreach ($data as $item )
  

<div class="card mb-3">
  <img src="{{ $item->image }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $item->title }}</h5>
    <p class="card-text">{{ $item->fullPost }}</p>
    <p class="card-text"><small class="text-muted">{{ $item->updated_at }}</small></p>
  </div>
</div>

@endforeach

@endsection