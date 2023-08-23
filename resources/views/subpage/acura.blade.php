@extends('layouts.header1')

@section('content')

{!! $brand->discripition !!}
<input type="hidden" name="name" class="get_brand" value="{{ $brand->name }}">

@endsection
