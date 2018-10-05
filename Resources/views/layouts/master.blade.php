@extends('layouts.admin')
@section('head')
    <title>Module Reporter {{ isset($title)? " :: $title": '' }}</title>
@endsection
@section('styles')
{{-- <link rel="stylesheet" href="{{ mix('css/reporter.css') }}"> --}}
@endsection
@section('layout')
<div id="reporter" class="reporter">
    @yield('content')
</div>
@endsection
@section('scripts')
{{-- <script src="{{ mix('js/reporter.js') }}"></script> --}}
@endsection
