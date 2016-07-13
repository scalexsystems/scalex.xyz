@extends('_includes.base')

@section('head')
    <link rel="profile" href="http://microformats.org/profile/hcard">
@endsection

@section('body')
    <div class="wrapper">
        <div class="contact-card">
            @yield('contact')
        </div>
    </div>
@endsection