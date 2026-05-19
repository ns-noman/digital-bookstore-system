<style>
    *{
        box-sizing: border-box;
    }

    body{
        overflow-x:hidden;
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

    /* =========================
       LOGO
    ========================= */
    .navbar-brand img,
    .mobile-logo-img {
        max-width: 100%;
        height: auto;
    }

    .mobile-logo-img{
        max-height:45px;
    }

    /* =========================
       SEARCH
    ========================= */
    .search_form{
        width:100%;
        position:relative;
    }

    .search-bar-input,
    .search-bar-input-mobile{
        width:100%;
        padding-right:50px;
    }

    /* =========================
       NAVBAR
    ========================= */
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

    /* =========================
       SOCIAL ICONS
    ========================= */
    .social-icons {
        display: flex;
        gap: 12px;
    }

    .social-icons .icon {
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        color: #fff!important;
        text-decoration: none;
        transition: 0.3s ease;
        font-size: 16px;
    }

    .facebook { background: #1877F2; }
    .youtube   { background: #FF0000; }
    .linkedin  { background: #0A66C2; }
    .x         { background: #000000; }
    .google    { background: #DB4437; }

    /* =========================
       MOBILE FIX
    ========================= */
    @media(max-width:991px){

        .navbar-collapse{
            background:#fff;
            padding:15px;
            border-radius:8px;
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
    }

    @media(max-width:767px){
        .top-navbar{
            display:none;
        }
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<header class="box-shadow-sm rtl">
    <!-- TOP BAR -->
    <div class="top-navbar">
        <div class="container-fluid custom-container">
    
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
    


   <!-- MOBILE HEADER -->
<div class="d-md-none border-bottom bg-light py-2">

    <div class="d-flex align-items-center gap-2 px-2">

        <!-- MOBILE LOGO -->
        <a href="{{ route('home') }}" class="flex-shrink-0">
            <img
                src="{{ asset('storage/app/public/company') . '/' . $web_config['mob_logo']->value }}"
                onerror="this.src='{{ asset('public/assets/front-end/img/image-place-holder.png') }}'"
                alt="{{ $web_config['name']->value }}"
                class="mobile-logo-img"
            >
        </a>

        <!-- SEARCH -->
        <form action="{{ route('products') }}" method="GET" class="flex-grow-1 position-relative">

            <input
                class="form-control search-bar-input-mobile rounded-pill pe-5 ps-3"
                type="text"
                autocomplete="off"
                placeholder="{{ \App\CPU\translate('search') }}"
                name="name"
            >

            <input name="data_from" value="search" hidden>
            <input name="page" value="1" hidden>

            <!-- SEARCH BUTTON -->
            <button type="submit"
                class="btn position-absolute top-50 translate-middle-y border-0 bg-transparent"
                style="{{ Session::get('direction') === 'rtl' ? 'left:10px;' : 'right:10px;' }}">
                <i class="czi-search"></i>
            </button>

            <!-- LIVE SEARCH RESULT -->
            <div class="card search-card position-absolute w-100 mt-1"
                 style="z-index:999; display:none;">
                <div class="card-body search-result-box"></div>
            </div>

        </form>

    </div>
</div>

    <div class="navbar-sticky bg-light mobile-head d-none d-md-block">

        <!-- TOP NAVBAR -->
        <div class="navbar navbar-expand-md navbar-light">
            <div class="container-fluid custom-container">

                <button class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarCollapse">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <!-- LOGO -->
                <a class="navbar-brand flex-shrink-0"
                   href="{{route('home')}}">

                    <img style="width: 75px;" src="{{asset("storage/app/public/company")."/".$web_config['web_logo']->value}}"
                         onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                         alt="{{$web_config['name']->value}}"/>

                </a>

                <!-- DESKTOP SEARCH -->
                <div class="input-group-overlay d-none d-md-block mx-4" >

                    <form action="{{route('products')}}"
                          type="submit"
                          class="search_form">

                        <input class="form-control appended-form-control search-bar-input"
                           type="text"
                           autocomplete="off"
                           placeholder="{{\App\CPU\translate('search')}}"
                           name="name"
                           style="border-radius: 50px !important;border-color: #47B5EB;">

                        <input name="data_from" value="search" hidden>
                        <input name="page" value="1" hidden>

                        <button style="border-radius: 50px;" class="input-group-append-overlay search_button"
                                type="submit"
                                style="border-radius: {{Session::get('direction') === "rtl" ? '7px 0px 0px 7px; right: unset; left: 0' : '0px 7px 7px 0px; left: unset; right: 0'}};">

                            <span class="input-group-text">
                                <i class="czi-search text-dark"></i>
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
            <div class="container-fluid custom-container d-flex justify-content-center">
                <div class="collapse navbar-collapse d-flex justify-content-between align-items-center" id="navbarCollapse">
                    <?php
                        $categories_menu=\App\Model\Category::limit(10)
                        ->with(['childes.childes'])
                        ->where('position', 0)
                        ->orderBy('order', 'asc')
                        ->get();
                    ?>
                    <ul class="navbar-nav flex-wrap tab-menu">
                        <li class="nav-item {{request()->is('/')?'active':''}}">
                            <a class="nav-link" href="{{ route('home') }}">
                                হোম
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
                            <a class="nav-link" href="{{route('categories')}}">
                                সব ক্যাটাগরি
                            </a>
                        </li>
                    
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('categories')}}">
                                ব্লগ
                            </a>
                        </li>
                    </ul>
                    <div class="social-icons">
                        <a href="#" class="icon facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="icon youtube"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="icon linkedin"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="icon x"><i class="fab fa-x-twitter"></i></a>
                        <a href="#" class="icon google"><i class="fab fa-google"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-expand-md navbar-stuck-menu" style="border-top: 1px solid #47B5EB;">
            <div class="container-fluid custom-container  d-flex justify-content-center">
                <div class="navbar-collapse d-flex justify-content-between align-items-center">
                    <ul class="navbar-nav flex-wrap">

                        @php
                            $data_from = request()->get('data_from');
                            $id = $data_from == 'category' ? request()->get('id') : 10;
                        
                            $subMenus = \App\Model\Category::with(['childes.childes'])
                                ->where('parent_id', $id)
                                ->orderBy('order', 'asc')
                                ->get();
                        @endphp
                        
                        @foreach($subMenus as $item)
                        
                            <li class="nav-item dropdown">
                        
                                <a class="nav-link" href="{{route('products',['id'=> $item->id,'data_from'=>'category','page'=>1])}}">
                                    {{$item->name}} 
                                    @if($item->childes->count())
                                        <i class="fa fa-chevron-down"></i>
                                    @endif
                                </a>
                        
                                {{-- LEVEL 2 --}}
                                @if($item->childes->count())
                                    <ul class="dropdown-menu">
                        
                                        @foreach($item->childes as $child)
                        
                                            <li class="dropdown-submenu">
                                                <a class="dropdown-item" href="{{route('products',['id'=> $child->id,'data_from'=>'category','page'=>1])}}">
                                                    {{$child->name}}
                        
                                                    @if($child->childes->count())
                                                        <i class="fa fa-chevron-right float-end"></i>
                                                    @endif
                                                </a>
                        
                                                {{-- LEVEL 3 --}}
                                                @if($child->childes->count())
                                                    <ul class="dropdown-menu">
                        
                                                        @foreach($child->childes as $subChild)
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="{{route('products',['id'=> $subChild->id,'data_from'=>'category','page'=>1])}}">
                                                                    {{$subChild->name}}
                                                                </a>
                                                            </li>
                                                        @endforeach
                        
                                                    </ul>
                                                @endif
                        
                                            </li>
                        
                                        @endforeach
                        
                                    </ul>
                                @endif
                        
                            </li>
                        
                        @endforeach
                        
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
