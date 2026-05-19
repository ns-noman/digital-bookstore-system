@php
    $iosSrc= "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJQAAAAyCAYAAAC6efInAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpBMENEMkU4NkJDRDVFQzExQjQ5Nzk2REY3MEQ1NEYxNCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo5ODc5Q0RCREQ1QkMxMUVDQUVGMkZDOTAzQTg3M0FDRCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo5ODc5Q0RCQ0Q1QkMxMUVDQUVGMkZDOTAzQTg3M0FDRCIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkEwQ0QyRTg2QkNENUVDMTFCNDk3OTZERjcwRDU0RjE0IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkEwQ0QyRTg2QkNENUVDMTFCNDk3OTZERjcwRDU0RjE0Ii8+IDwvcmRmOkRlc2NyaXB0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"; 
@endphp
@php
    $androidSrc= "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKgAAAAyCAYAAADItpCRAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo5RkNEMkU4NkJDRDVFQzExQjQ5Nzk2REY3MEQ1NEYxNCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo5Q0UwNTFFOEQ1QkMxMUVDOUUxOERFRjY1NTc2Qzc5QyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo5Q0UwNTFFN0Q1QkMxMUVDOUUxOERFRjY1NTc2Qzc5QyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjlGQ0QyRTg2QkNENUVDMTFCNDk3OTZERjcwRDU0RjE0IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjlGQ0QyRTg2QkNENUVDMTFCNDk3OTZERjcwRDU0RjE0Ii8+IDwvcmRmOkRlc2NyaXB0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";
@endphp
@php
    $siteSrc= "data:image/png;base64,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";
@endphp
<style>
    .just-padding {
        padding: 15px;
        border: 1px solid #ccccccb3;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        height: 100%;
        background-color: white;
    }

    /* ── Banner heights ── */
    .main-carousel-img {
        height: 285px;
        object-fit: cover;
    }

    .fixed-banner {
        width: 100%;
        height: 160px;
        object-fit: cover;
        border-radius: 6px;
        display: block;
    }

    /* ── Promo card ── */
    .promo-card {
        background: linear-gradient(0deg, #3C8FE5, #142C46);
        border-radius: 25px;
        padding: 16px;
    }

    .promo-card .promo-title {
        font-size: 22px;
    }

    .promo-code-pill {
        display: inline-flex;
        align-items: center;
        overflow: hidden;
        gap: 4px;
        flex-wrap: wrap;
        justify-content: center;
    }

    /* ── Tablet (md) ── */
    @media (max-width: 991.98px) {
        .main-carousel-img {
            height: 220px;
        }

        .fixed-banner {
            height: 120px;
        }

        .promo-card {
            margin-top: 16px;
        }

        .promo-card .promo-title {
            font-size: 18px;
        }
    }

    /* ── Mobile (sm / xs) ── */
    @media (max-width: 767.98px) {
        .custom-container {
            padding: 0 10px !important;
        }

        .main-carousel-img {
            height: 190px;
        }

        /* Stack footer banners vertically on very small screens */
        .footer-banner-col {
            padding-left: 4px;
            padding-right: 4px;
        }

        .fixed-banner {
            height: 90px;
            border-radius: 4px;
        }

        .promo-card {
            flex-direction: row !important;
            align-items: center;
            gap: 12px;
            border-radius: 16px;
            padding: 12px 14px;
        }

        .promo-card .promo-text-block {
            flex: 1;
        }

        .promo-card .promo-title {
            font-size: 15px;
        }

        .promo-card .promo-apps-block {
            flex-shrink: 0;
        }

        .promo-card .promo-apps-block img.qr {
            width: 70px !important;
        }

        .promo-card .promo-apps-block img.store-badge {
            max-width: 110px !important;
        }

        .promo-code-pill span {
            padding: 6px 14px !important;
            font-size: 13px;
        }
    }

    /* ── Extra-small (< 400 px) – hide QR, keep badges ── */
    @media (max-width: 399.98px) {
        .qr-hide-xs {
            display: none !important;
        }
    }
    .mobile-logo-img {
        height: 40px;
        width: auto;
        object-fit: contain;
    }
</style>

<div class="container-fluid rtl custom-container">
    <div class="row mt-4">

        {{-- ── LEFT: Carousel + Footer Banners ── --}}
        <div class="col-lg-8 col-md-12 col-12">

            @php($main_banner = \App\Model\Banner::where('banner_type','Main Banner')->where('published',1)->orderBy('id','desc')->get())

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    @foreach($main_banner as $key => $banner)
                        <li data-target="#carouselExampleIndicators"
                            data-slide-to="{{ $key }}"
                            class="{{ $key == 0 ? 'active' : '' }}">
                        </li>
                    @endforeach
                </ol>

                <div class="carousel-inner">
                    @foreach($main_banner as $key => $banner)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <a href="{{ $banner['url'] }}">
                                <img
                                    class="d-block w-100 main-carousel-img"
                                    src="{{ asset('storage/app/public/banner') }}/{{ $banner['photo'] }}"
                                    onerror="this.src='{{ asset('public/assets/front-end/img/image-place-holder.png') }}'"
                                    alt="">
                            </a>
                        </div>
                    @endforeach
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
                
                

            </div>

            {{-- Footer Banners --}}
            <div class="row mt-2 no-gutters" style="margin-left: -4px; margin-right: -4px;">
                @foreach(\App\Model\Banner::where('banner_type','Footer Banner')->where('published',1)->orderBy('id','desc')->take(3)->get() as $banner)
                    <div class="col-4 footer-banner-col" style="padding: 0 4px;">
                        <a data-toggle="modal" data-target="#quick_banner{{ $banner->id }}">
                            <img class="fixed-banner"
                                 src="{{ asset('storage/app/public/banner') }}/{{ $banner['photo'] }}"
                                 onerror="this.src='{{ asset('public/assets/front-end/img/image-place-holder.png') }}'"
                                 alt="">
                        </a>
                    </div>
                @endforeach
            </div>

        </div>

        {{-- ── RIGHT: Promo Card ── --}}
        <div class="col-lg-4 col-md-12 col-12 mb-1">

            <div class="promo-card d-flex flex-column align-items-center text-light">

                {{-- Title block --}}
                <div class="promo-text-block mb-1 text-center">
                    <p class="fw-bold mb-1 promo-title">কেকেএমএল অ্যাপে</p>
                    <p class="fw-bold mb-1 promo-title">প্রথম অর্ডারে</p>
                    <p class="fw-bold mb-0 promo-title">ফ্রি শিপিং</p>
                </div>

                {{-- Promo code --}}
                <div class="mb-2 text-center">
                    <p class="mb-0 promo-code-pill">
                        <span class="fw-bold px-4 py-1 text-light rounded-pill border border-light"
                              style="background-color: #9D1414;">
                            প্রোমোকোডঃ
                        </span>
                        <span class="fw-bold px-4 py-1 text-light rounded-pill border border-3"
                              style="background-color: transparent;">
                            KKML0526
                        </span>
                    </p>
                </div>

                {{-- QR + App badges --}}
                <div class="promo-apps-block d-flex align-items-center gap-1 flex-wrap justify-content-center">
                    <img src="{{ $siteSrc }}" alt="QR Code"
                         class="img-fluid qr qr-hide-xs"
                         style="width: 100px; height: auto; border-radius: 5px;">
                    <div class="d-flex flex-column p-2">
                        <a href="https://khoshrozltd.monospool.com.bd/" target="_blank" class="mb-2">
                            <img src="{{ $iosSrc }}" alt="App Store"
                                 class="img-fluid store-badge"
                                 style="max-width: 140px;">
                        </a>
                        <a href="https://khoshrozltd.monospool.com.bd/" target="_blank">
                            <img src="{{ $androidSrc }}" alt="Google Play"
                                 class="img-fluid store-badge"
                                 style="max-width: 140px;">
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<script>
    $(function () {
        $('.list-group-item').on('click', function () {
            $('.glyphicon', this)
                .toggleClass('glyphicon-chevron-right')
                .toggleClass('glyphicon-chevron-down');
        });
    });
</script>