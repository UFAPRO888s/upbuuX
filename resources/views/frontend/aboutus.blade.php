@extends('layouts.app')
@section('content')
    <div class="mx-auto">
        <bannercomponent status="1" data="test" src="{{ asset('images/Contact_Us/LINE_ALBUM.jpg')}}" text="About Us"></bannercomponent>
    </div>
    <div class="mx-auto mb-5 mt-10 w-full">
        <aboutusboxcomponent></aboutusboxcomponent>
    </div>
    <div class="mx-auto mb-5 mt-16 w-full">
        <aboutuscomponent></aboutuscomponent>
    </div>
    <div class="mx-auto mb-5 mt-16 w-full">
        <cooperationcomponent></cooperationcomponent>
    </div>
@endsection
