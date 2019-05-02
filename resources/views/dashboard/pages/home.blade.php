@extends('dashboard.layouts.app')



@section('content')
@auth
<div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">
    @include('dashboard.includes.sidebar')
    @include('dashboard.includes.header')
    
    @include('dashboard.includes.footer')
</div>



@endauth
@endsection