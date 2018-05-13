@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-12">
        @foreach ($tiles as $tile)
            @include("parts.tile", ["tile" => $tile])
        @endforeach
    </div>
</div>
@endsection
