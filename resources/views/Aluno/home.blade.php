@extends('dashboard.layouts.app')

@section('content')
@auth
<div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">
    @include('dashboard.includes.sidebar')
    @include('dashboard.includes.header')

    <main id="main-container">
            <!-- Page Content -->
            <div class="content">
            
                <div class="row row-deck gutters-tiny invisible" data-toggle="appear">
                    <!-- Row #2 -->
                    <div class="col-xl-4">
                        <a class="block block-transparent bg-image d-flex align-items-stretch" href="javascript:void(0)" style="background-image: url('assets/img/photos/photo24@2x.jpg');">
                            <div class="block-content block-sticky-options pt-100 bg-black-op">
                                <div class="block-options block-options-left text-white">
                                    <div class="block-options-item">
                                        <i class="si si-book-open text-white-op"></i>
                                    </div>
                                </div>
                                <div class="block-options text-white">
                                    <div class="block-options-item">
                                        <i class="si si-bubbles"></i> 15
                                    </div>
                                    <div class="block-options-item">
                                        <i class="si si-eye"></i> 3800
                                    </div>
                                </div>
                                <h2 class="h3 font-w700 text-white mb-5">Travel the world</h2>
                                <h3 class="h5 text-white-op">Explore and achieve great things</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <a class="block block-transparent bg-image d-flex align-items-stretch" href="javascript:void(0)" style="background-image: url('assets/img/photos/photo32@2x.jpg');">
                            <div class="block-content block-sticky-options pt-100 bg-primary-dark-op">
                                <div class="block-options block-options-left text-white">
                                    <div class="block-options-item">
                                        <i class="si si-book-open text-white-op"></i>
                                    </div>
                                </div>
                                <div class="block-options text-white">
                                    <div class="block-options-item">
                                        <i class="si si-bubbles"></i> 4
                                    </div>
                                    <div class="block-options-item">
                                        <i class="si si-eye"></i> 1680
                                    </div>
                                </div>
                                <h2 class="h3 font-w700 text-white mb-5">Inspiring Solutions</h2>
                                <h3 class="h5 text-white-op">10 things you should do today</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <a class="block block-transparent bg-image d-flex align-items-stretch" href="javascript:void(0)" style="background-image: url('assets/img/photos/photo10@2x.jpg');">
                            <div class="block-content block-sticky-options pt-100 bg-primary-op">
                                <div class="block-options block-options-left text-white">
                                    <div class="block-options-item">
                                        <i class="si si-book-open text-white-op"></i>
                                    </div>
                                </div>
                                <div class="block-options text-white">
                                    <div class="block-options-item">
                                        <i class="si si-bubbles"></i> 16
                                    </div>
                                    <div class="block-options-item">
                                        <i class="si si-eye"></i> 4450
                                    </div>
                                </div>
                                <h2 class="h3 font-w700 text-white mb-5">Alternative Road</h2>
                                <h3 class="h5 text-white-op">Don't let anything disorient you</h3>
                            </div>
                        </a>
                    </div>
                    <!-- END Row #2 -->
                </div>
             
            
            </div>
            <!-- END Page Content -->
        </main>

    @include('dashboard.includes.footer')
     
</div>



@endauth
@endsection