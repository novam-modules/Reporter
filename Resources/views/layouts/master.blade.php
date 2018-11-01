@extends('layouts.master')
@section('styles')
@parent
<link rel="stylesheet" href="{{ mix('css/reporter.css') }}">
@endsection
@section('layout')
    <main id="reporter">
        @yield('content')
    </main>
@endsection
@section('scripts')
@parent
<script src="{{ mix('js/reporter.js') }}"></script>
@endsection
