<style>
    *{
        box-sizing: border-box;
    }

    body{
        overflow-x:hidden;
    }

    .card-body.search-result-box {
        max-height: 400px;
        overflow-y: auto;
        overflow-x: hidden;
    }

    .active .seller {
        font-weight: 700;
    }

    .for-count-value {
        position: absolute;
        right: 0.6875rem;
        width: 1.25rem;
        height: 1.25rem;
        border-radius: 50%;
        color: {{$web_config['primary_color']}};
        font-size: .75rem;
        font-weight: 500;
        text-align: center;
        line-height: 1.25rem;
    }

    .count-value {
        width: 1.25rem;
        height: 1.25rem;
        border-radius: 50%;
        color: {{$web_config['primary_color']}};
        font-size: .75rem;
        font-weight: 500;
        text-align: center;
        line-height: 1.25rem;
    }

    .navbar-brand img,
    .mobile-logo-img {
        max-width: 100%;
        height: auto;
    }

    .mobile-logo-img{
        max-height:45px;
    }

    .search_form{
        width:100%;
        position:relative;
    }

    .search-bar-input,
    .search-bar-input-mobile{
        width:100%;
        padding-right:50px;
    }

    .search-card{
        width:100% !important;
        left:0;
        right:0;
    }

    .navbar-nav{
        flex-wrap:wrap;
    }

    .navbar-nav .nav-link{
        white-space:nowrap;
        font-size:14px;
    }

    .navbar-toolbar{
        gap:10px;
        flex-wrap:wrap;
    }

    .sell-btn{
        background:black;
        margin-top:5px;
        border-radius:5px;
    }

    .sell-btn .nav-link{
        color:#fff !important;
    }

    .dropdown-menu{
        transition:all .3s ease;
    }

    #anouncement {
        width: 100%;
        padding: 2px 0;
        text-align: center;
        color:white;
    }

    @media (min-width: 992px) {
        .navbar-sticky.navbar-stuck .navbar-stuck-menu.show {
            display: block;
            height: auto !important;
        }
    }

    @media (min-width: 768px) {
        .navbar-stuck-menu {
            background-color: {{$web_config['primary_color']}};
            line-height: 15px;
            padding-bottom: 6px;
        }
    }

    @media(max-width:991px){

        .navbar-collapse{
            background:#fff;
            padding:15px;
            border-radius:8px;
        }

        .navbar-toolbar{
            justify-content:center;
            margin-top:10px;
        }

        .navbar-nav{
            width:100%;
        }

        .navbar-nav .nav-item{
            width:100%;
        }

        .navbar-nav .nav-link{
            display:block;
            padding:10px;
            white-space:normal;
        }

        .navbar-stuck-menu{
            height:auto !important;
            padding:10px 0;
        }

        .mega-nav1{
            width:100%;
            margin-bottom:10px;
        }
    }

    @media (max-width: 767px) {

        .mobile-head{
            padding:5px;
        }

        .search_button {
            background-color: transparent !important;
        }

        .search_button .input-group-text i {
            color: {{$web_config['primary_color']}} !important;
        }

        .navbar-expand-md .dropdown-menu > .dropdown > .dropdown-toggle {
            position: relative;
            padding-{{Session::get('direction') === "rtl" ? 'left' : 'right'}}: 1.95rem;
        }

        .mega-nav1 {
            background: white;
            color: {{$web_config['primary_color']}} !important;
            border-radius: 3px;
        }

        .mega-nav1 .nav-link {
            color: {{$web_config['primary_color']}} !important;
        }

        .navbar-brand{
            max-width:140px;
        }

        .navbar-toolbar{
            width:100%;
            justify-content:space-between;
        }

        .navbar-tool-text{
            display:none;
        }

        .dropdown-menu{
            position:static !important;
            float:none;
            width:100%;
            border:none;
            box-shadow:none;
        }

        .dropdown-item{
            white-space:normal;
        }

        .sell-btn{
            width:100%;
            text-align:center;
        }
    }

    @media (max-width: 480px){

        .navbar-brand{
            max-width:110px;
        }

        .navbar-tool-icon{
            font-size:18px;
        }

        .search_button .input-group-text{
            font-size:16px !important;
        }
    }
    
/* =========================
   MOBILE MENU FIX
========================= */

@media(max-width:991px){

    .navbar-collapse{
        background:#ffffff !important;
    }

    .navbar-collapse .nav-link{
        color:#222 !important;
        font-weight:500;
    }

    .navbar-collapse .nav-link:hover{
        color:{{$web_config['primary_color']}} !important;
    }

    .navbar-collapse .nav-item{
        border-bottom:1px solid #f1f1f1;
    }

    .navbar-collapse .sell-btn{
        background:{{$web_config['primary_color']}} !important;
        margin-top:10px;
    }

    .navbar-collapse .sell-btn .nav-link{
        color:#fff !important;
        text-align:center;
    }

    .navbar-collapse .active .nav-link{
        color:{{$web_config['primary_color']}} !important;
        font-weight:700;
    }
}

    /* =========================
       TOP BAR
    ========================= */
    
    .top-navbar{
        background: #D8D8D8;
        color:#fff;
        font-size:13px;
        padding:8px 0;
    }
    
    .top-navbar-wrapper{
        display:flex;
        align-items:center;
        justify-content:space-between;
        gap:15px;
        flex-wrap:wrap;
    }
    
    .top-navbar-left,
    .top-navbar-right{
        display:flex;
        align-items:center;
        gap:18px;
        flex-wrap:wrap;
    }
    
    .top-navbar a{
        color:#fff;
        text-decoration:none;
        transition:0.3s;
    }
    
    .top-navbar a:hover{
        color:{{$web_config['primary_color']}};
    }
    
    .top-navbar i{
        margin-right:5px;
    }
    
    /* MOBILE */
    
    @media(max-width:767px){
    
        .top-navbar{
            display:none;
        }
    
    }
    /*.mobile-logo img{*/
    /*    max-height:45px;*/
    /*    width:auto;*/
    /*}*/

</style>

<header class="box-shadow-sm rtl">
    <!-- TOP BAR -->
    <div class="top-navbar">
        <div class="container">
    
            <div class="top-navbar-wrapper p-2">

                <!-- LEFT -->
                <div class="top-navbar-left">
    
                    <a href="tel:{{ $web_config['phone']->value }}">
                        <i class="fa fa-phone"></i>
                        Hotline: {{ $web_config['phone']->value }}(9 AM to 6 PM)
                    </a>
    
                    <a href="mailto:{{ $web_config['email']->value }}">
                        <i class="fa fa-envelope"></i>
                        {{ $web_config['email']->value }}
                    </a>
    
                </div>
    
                <!-- RIGHT -->
                <div class="top-navbar-right text-dark">
    
                    <a href="#">
                        <i class="fa fa-truck"></i>
                        অর্ডার ট্রাক করুন
                    </a>
                    <span>|</span>
                    <a href="{{route('seller.auth.login')}}">
                        <i class="fa fa-briefcase"></i>
                        উদ্যোক্তা
                    </a>
                    <span>|</span>
                    <a href="{{route('seller.auth.login')}}">
                        <i class="fa fa-store"></i>
                        ঘরে বসে আয়  করুন</a>
                    <span>|</span>
                    <a href="{{route('customer.auth.login')}}">
                        <i class="fa fa-user"></i>
                        লগইন
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- MOBILE LOGO -->
    <div class="d-md-none bg-light py-2 text-center border-bottom">
    
        <a href="{{route('home')}}" class="mobile-logo">
    
            <img src="{{asset("storage/app/public/company")."/".$web_config['mob_logo']->value}}"
                 onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                 alt="{{$web_config['name']->value}}">
    
        </a>
    
    </div>

    <!-- MOBILE SEARCH -->
    <div class="input-group-overlay d-md-none mb-3">
        <form action="{{route('products')}}" type="submit" class="search_form">

            <input class="form-control appended-form-control search-bar-input-mobile"
                   type="text"
                   autocomplete="off"
                   placeholder="{{\App\CPU\translate('search')}}"
                   name="name">

            <input name="data_from" value="search" hidden>
            <input name="page" value="1" hidden>

            <button class="input-group-append-overlay search_button"
                    type="submit"
                    style="border-radius: {{Session::get('direction') === "rtl" ? '7px 0px 0px 7px; right: unset; left: 0' : '0px 7px 7px 0px; left: unset; right: 0'}};">

                <span class="input-group-text">
                    <i class="czi-search text-white"></i>
                </span>

            </button>

            <div class="card search-card"
                 style="position:absolute;background:white;z-index:999;display:none">

                <div class="card-body search-result-box"></div>

            </div>
        </form>
    </div>

    <div class="navbar-sticky bg-light mobile-head d-none d-md-block">

        <!-- TOP NAVBAR -->
        <div class="navbar navbar-expand-md navbar-light">
            <div class="container">

                <button class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarCollapse">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <!-- LOGO -->
                <a class="navbar-brand flex-shrink-0"
                   href="{{route('home')}}">

                    <img src="{{asset("storage/app/public/company")."/".$web_config['web_logo']->value}}"
                         onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                         alt="{{$web_config['name']->value}}"/>

                </a>

                <!-- DESKTOP SEARCH -->
                <div class="input-group-overlay d-none d-md-block mx-4">

                    <form action="{{route('products')}}"
                          type="submit"
                          class="search_form">

                        <input class="form-control appended-form-control search-bar-input"
                               type="text"
                               autocomplete="off"
                               placeholder="{{\App\CPU\translate('search')}}"
                               name="name">

                        <input name="data_from" value="search" hidden>
                        <input name="page" value="1" hidden>

                        <button class="input-group-append-overlay search_button"
                                type="submit"
                                style="border-radius: {{Session::get('direction') === "rtl" ? '7px 0px 0px 7px; right: unset; left: 0' : '0px 7px 7px 0px; left: unset; right: 0'}};">

                            <span class="input-group-text">
                                <i class="czi-search text-white"></i>
                            </span>

                        </button>

                        <div class="card search-card"
                             style="position:absolute;background:white;z-index:999;display:none">

                            <div class="card-body search-result-box"></div>

                        </div>

                    </form>

                </div>

                <!-- TOOLBAR -->
                <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">

                    <a class="navbar-tool navbar-stuck-toggler" href="#">
                        <div class="navbar-tool-icon-box">
                            <i class="navbar-tool-icon czi-menu"></i>
                        </div>
                    </a>

                    <div class="navbar-tool dropdown">
                        <a class="navbar-tool-icon-box bg-secondary dropdown-toggle"
                           href="{{route('wishlists')}}">

                            <span class="navbar-tool-label">
                                <span class="countWishlist">
                                    {{session()->has('wish_list')?count(session('wish_list')):0}}
                                </span>
                            </span>

                            <i class="navbar-tool-icon czi-heart"></i>

                        </a>
                    </div>

                    <div id="cart_items">
                        @include('layouts.front-end.partials.cart')
                    </div>

                </div>

            </div>
        </div>
        <!-- MENU -->
        <div class="navbar navbar-expand-md navbar-stuck-menu">
            <div class="container">
                <div class="collapse navbar-collapse"
                     id="navbarCollapse">
                    <?php
                        $categories_menu=\App\Model\Category::limit(10)
                        ->with(['childes.childes'])
                        ->where('position', 0)
                        ->orderBy('order', 'asc')
                        ->get();
                    ?>
                    <ul class="navbar-nav flex-wrap">
                        <li class="nav-item {{request()->is('/')?'active':''}}">
                            <a class="nav-link" href="{{ route('home') }}">
                                <i class="fa fa-home"></i> হোম
                            </a>
                        </li>
                        @foreach($categories_menu as $item)
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{route('products',['id'=> $item->id,'data_from'=>'category','page'=>1])}}">

                                {{$item->name}}

                            </a>
                        </li>
                        @endforeach
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{route('categories')}}">
                               সব ক্যাটাগরি
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{route('categories')}}">
                               ব্লগ
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
function myFunction() {
    $('#anouncement').addClass('d-none').removeClass('d-flex')
}
</script>
