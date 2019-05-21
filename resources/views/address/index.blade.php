@extends('main.app')


@section('content')
    <div class="container-fluid d-none d-md-block">
        <div class="row">
            <div class="col-2 px-0 sidebar address-yellow">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                        <a class="nav-link sidebar-button active" href="/landlordsearch">
                            <svg xmlns="http://www.w3.org/2000/svg" class="main-sidebar-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            房東找行業 
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link sidebar-button" href="/shopownersearch">
                            <svg xmlns="http://www.w3.org/2000/svg" class="main-sidebar-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            創業找店面
                        </a>
                        </li>
                        
                        <li class="nav-item">
                        <a class="nav-link sidebar-button" href="https://www.cakeresume.com/hsu-mingkai">
                            <svg xmlns="http://www.w3.org/2000/svg" class="main-sidebar-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                            關於我
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sidebar-button" href="https://github.com/hsumingkai/AddressForYou">
                            <svg xmlns="http://www.w3.org/2000/svg" class="main-sidebar-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                            Github
                        </a>
                    </li>
                        {{-- <li class="nav-item">
                        <a class="nav-link sidebar-button" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="main-sidebar-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                            Reports
                        </a>
                        </li>
                        <li class="nav-item"> --}}
                        {{-- <a class="nav-link sidebar-button" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="main-sidebar-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                            Integrations
                        </a> --}}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-10 address-background">
                <div id="carouselExampleControls" class="carousel slide m-5" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item address-slide active">
                            <div class="container mx-auto">
                                <div class="row bg-content">
                                    <div class="col-3"><img src="{{ asset('img/mountain-climb.png') }}"></div>
                                    <div class="col-9">
                                        <div class="bfont">&nbsp;用大數據決定你的新店面	
                                            <div class="cfont">&nbsp;依照商圈特性發掘行業與店面的<br>&nbsp;最佳組合</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                        <div class="carousel-item address-slide ">
                            <div class="container mx-auto">
                                <div class="row bg-content">
                                    <div class="col-3"><img src="{{ asset('img/map-grid-with-placeholder-interface-symbol.png') }}"></div>
                                    <div class="col-9">
                                        <div class="bfont">&nbsp;掌握在地脈絡
                                            <div class="cfont">&nbsp;解構錯綜複雜的地緣網絡關係</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item address-slide">
                            <div class="container mx-auto">
                                <div class="row bg-content">
                                    <div class="col-3"><img src="{{ asset('img/transparent-cube.png') }}"></div>
                                    <div class="col-9">
                                        <div class="bfont">&nbsp;資料透明不黑箱
                                            <div class="cfont"> &nbsp;利用Open Data建構全新平台</div>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                        <div class="carousel-item address-slide ">
                            <div class="container mx-auto">
                                <div class="row bg-content">
                                    <div class="col-3"><img src="{{ asset('img/linked-databases.png') }}"></div>
                                    <div class="col-9">
                                        <div class="bfont">&nbsp;串聯多維度視角
                                            <div class="cfont">&nbsp;結合統計、地理、零售管理創造<br>&nbsp;全方位視野</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item address-slide ">
                            <div class="container mx-auto">
                                <div class="row bg-content">
                                    <div class="col-3"><img src="{{ asset('img/mountain-climb.png') }}"></div>
                                    <div class="col-9">
                                        <div class="bfont">&nbsp;址因位鄰，只因為您
                                            <div class="cfont">&nbsp; 為您量身訂做的決策支援系統</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item address-slide ">
                            <div class="container mx-auto">
                                <div class="row bg-content">
                                    <div class="col-3"><img src="{{ asset('img/binary-mind.png') }}"></div>
                                    <div class="col-9">
                                        <div class="bfont">&nbsp;串聯多維度視角
                                            <div class="cfont">&nbsp;結合統計、地理、零售管理創造<br>&nbsp;全方位視野</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-md-none">
        <div class="row ">
            <div class="col-sm-6 pt-4">
                <div class="card" style=>
                    <div class="card-landlord card-img-top"></div>
                    <div class="card-body">
                        <h5 class="card-title">房東找行業</h5>
                        <p class="card-text">快速找到適合租的房客類型，幫助房東可以找到可以久租的房客</p>
                        <a href="#" class="btn btn-primary">來試試看吧</a>
                    </div>
                </div>
            </div>            
            <div class="col-sm-6 pt-4">
                <div class="card" >
                    <div class="card-business card-img-top"></div>
                    <div class="card-body">
                        <h5 class="card-title">創業找店面</h5>
                        <p class="card-text">幫忙找到適合開店的位置，來找找有什麼好店面吧</p>
                        <a href="#" class="btn btn-primary">來試試看吧</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection