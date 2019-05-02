@extends('dashboard.layouts.app')



@section('content')
@auth
<div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">
    @include('dashboard.includes.sidebar')
    @include('dashboard.includes.header')
    
    <main id="main-container">
            <!-- Page Content -->
            <div class="content">
            
            @yield('main')

            </div>
            <!-- END Page Content -->
        </main>
    
    @include('dashboard.includes.footer')
</div>


@yield('scrip')
@endauth






@endsection



