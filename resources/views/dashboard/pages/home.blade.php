@extends('dashboard.layouts.app')

@section('css-app')

@yield('css-home')
    
@endsection


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



@endauth
@endsection

@section('scripts')

@yield('sc')

@endsection



