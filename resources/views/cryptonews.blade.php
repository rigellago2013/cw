@extends('layouts.cryptoapp')

@section('title')
The #1 Cryptocurrency Intelligence Platform | Crypto Experts | CryptoWeekly
@stop
@section('description', 'CryptoWeekly is an intelligence platform for people & businesses invested in cryptocurrency companies. Meet teams building the next wave of crypto companies.')
@section('keywords', 'crypto, blockchain, cryptocurrency, crypto company, investors, founders, CEOs, business, leaders, defi, NFT, content, YouTube, YouTubers, crypto domains, database, CRM lists, cryptocurrency media, crypto media platform, top crypto news, crypto top stories, top cryptourrency news, blockchain news, cryptocurrency news outlet')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')

<div class="container-fluid site-width pt-5">
    <div class="row pb-5 border-bottom">
        <div class="col">
            <h1 class="font-weight-bold">Trending News</h1>
            <div class="tab-header mb-5">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a href="#" class="nav-link align-middle"><img class="mr-2" src="{{ asset('img/crypto_news_icon/img.png') }}" alt=""> News</a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link align-middle"><img class="mr-2" src="{{ asset('img/crypto_news_icon/img (1).png') }}" alt=""> CW's Picks</a></li>
                    <li class="nav-item"><a href="#" class="nav-link align-middle"><img class="mr-2" src="{{ asset('img/crypto_news_icon/img (2).png') }}" alt=""> Technology</a></li>
                    <li class="nav-item"><a href="#" class="nav-link align-middle"><img class="mr-2" src="{{ asset('img/crypto_news_icon/img (3).png') }}" alt=""> NFTs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link align-middle"><img class="mr-2" src="{{ asset('img/crypto_news_icon/img (4).png') }}" alt=""> Coins</a></li>
                    <li class="nav-item"><a href="#" class="nav-link align-middle"><img class="mr-2" src="{{ asset('img/crypto_news_icon/img (5).png') }}" alt=""> DeFi</a></li>
                    <li class="nav-item"><a href="#" class="nav-link align-middle"><img class="mr-2" src="{{ asset('img/crypto_news_icon/img (5).png') }}" alt=""> DEX</a></li>
                </ul>
            </div>
            <div class="featured-news-container">
                <div class="row">
                    <div class="col-lg-6 d-flex">
                        <div class="featured-news-main mb-4 flex-column d-flex">
                            <div class="card bg-dark text-white p-0 rounded-lg flex-grow-1 h-100">
                                <img class="h-100" src="{{ $top5[0]['title_img'] }}" alt="">
                                <div class="h-100 rounded-lg flex-grow-1 position-absolute d-flex flex-column justify-content-between">
                                    <div class="meta-box p-4">
                                        @foreach($top5[0]['categories'] as $category)
                                        <a class="cat-btn px-2 py-1">{{ $category['name'] }}</a>
                                        @endforeach
                                    </div>
                                    <div class="info-box p-4">
                                        <h3 class="card-title"> <a class="text-light" href="{{ url('/cryptonews/'.$top5[0]['blog_id']) }}">{{ $top5[0]['blog_title'] }} </a> </h3>
                                        <p class="card-text">{{Str::words(strip_tags($top5[0]['blog']),50,'')}}...<a href="{{ url('/cryptonews/'.$top5[0]['blog_id']) }}">Read more</a></p>
                                        <p class="card-text">{{ $top5[0]['published_on_formatted']}}<span class="pl-4"> {{ $top5[0]['published_on_formatted_date_string']}} </span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 featured-news-list">
                        @php
                        $index = 0;
                        @endphp
                        @foreach($top5 as $top)
                        @if($index > 0)
                        <div class="card mb-4 border-0 ">
                            <div class="d-flex align-items-start tablet-flex-column">
                                <div class="img-col">
                                    <div class="top-news-img">
                                        <img src="{{ $top->title_img }}" class="card-img" alt="...">
                                    </div>
                                </div>
                                <div class="content-col">
                                    <div class="card-body pt-0 pb-0">
                                        <h5 class="card-title font-weight-bold" style="color: #1663FF;">
                                        {{ preg_replace('/[^A-Za-z0-9 ]/', '', Str::words($top->keywords, 1, '')) }}
                                        </h5>
                                        <p class="card-title font-weight-bold"><a class="text-dark" href="{{ url('/cryptonews/'.$top->blog_id) }}">{{ $top->blog_title }} </a></p>
                                        <p class="card-text"><small class="text-muted">{{ $top->published_on_formatted }} <span class="pl-4"> {{ $top->published_on_formatted_date_string }}</span></small></p>
                                        <p class="card-text">{{Str::words(strip_tags($top->blog),7,'')}}...<span class="font-weight-bold" style="color: #1663FF;"> <a href="{{ url('/cryptonews/'.$top->blog_id) }}">Read more</a> </span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @php
                        $index++;
                        @endphp
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid site-width pt-5">
    <div class="row pb-5 border-bottom">
        <div class="d-flex mobile-flex-column">
            @foreach($top4 as $blog)
            <div class="col-md-3">
                <div class="card m]\b-4 border-0 rounded-lg px-2 flex-fill h-100">
                    <img src="{{ $blog->title_img }}" class="card-img-top rounded" alt="...">
                    <div class="card-body px-2 py-3 cw-bg-card">
                        <div class="cat-buttons d-flex flex-wrap">
                            @foreach($blog->categories as $key => $category)
                            <a href="" class="cat-btn px-2 py-1">{{ $category->name }}@if($key < count($blog->categories) - 1) @endif </a>
                            @endforeach
                        </div>
                        <h5 class="card-title mt-3 mb-2 font-weight-bold"><a class="text-dark" href="{{ url('/cryptonews/'.$blog->blog_id) }}">{{ $blog->blog_title }}</a></h5>
                        <p class="date-time d-flex align-items-center justify-content-between"><span>{{ $blog->published_on_formatted }} <span class="ml-4">{{ $blog->published_on_formatted_date_string }}</span></span><a href="{{ url('/cryptonews/'.$blog->blog_id) }}" class="news-link"><img src="{{ asset('img/crypto_news/arrow-upright.png') }}" class="" alt="..."></a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="container-fluid site-width py-5">    
    <div class="row">
        <div class="col-lg-7 featured-news-list border-bottom top-news-scrollable-content cw-scrollbar" id="infinite-scroll">
            <div class="scrolling-pagination">
                @foreach($blogs as $blog)
                <div class="card mb-4 border-0 ">
                    <div class="d-flex align-items-start tablet-flex-column">
                        <div class="img-col">
                            <div class="news-img">
                                <img src="{{ $blog->title_img }}" class="card-img" alt="...">
                            </div>
                        </div>
                        <div class="content-col">
                            <div class="card-body pt-0 pb-0">
                                <h5 class="card-title font-weight-bold" style="color: #1663FF;">
                                  {{ $blog->keywords }}
                                </h5>
                                <h5 class="card-title font-weight-bold"> <a class="text-dark" href="{{ url('/cryptonews/'.$blog->blog_id) }}">{{ $blog->blog_title }}</a> </h5>
                                <p class="card-text"><small class="text-muted">{{ $blog->published_on_formatted }}<span class="pl-4">{{ $blog->published_on_formatted_date_string }}</span></small></p>
                                <p class="card-text"> {{ Str::limit(strip_tags($blog->blog), 70) }} <span class="font-weight-bold" style="color: #1663FF;"> <a href="{{ url('/cryptonews/'.$blog->blog_id) }}">Read more</a> </span></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{ $blogs->links() }}
            </div>
        </div>
        <div class="col-lg-5 advertise">
            <div class="ad-box p-3 rounded d-flex">
                <h3 class="text-light"><strong>>>>>> Advertise Here</strong></h3>
                <div class="position-absolute acc-img">
                    <img src="{{ asset('img/crypto_news/Layer_1.png') }}" class="" alt="...">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-blue py-6 text-center align-items-center text-white left-rotating-text">
    <div class="row">
        <div class="col p-0">
            <h1 class="font-weight-bold news-letter-font">Join Our Newsletter</h1>
            <p>Get the latest trends and updates on our crypto community.</p>
            <form action="#" method="post" class="mb-4">
                <div class="d-flex justify-content-center">
                    <div>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email Address">
                    </div>
                    <div class="ml-2">
                        <button type="submit" class="btn btn-subscribe">Subscribe Now</button>
                        <div class="pointer-icon">
                            <svg width="34" height="45" viewBox="0 0 34 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32 18.1941V16.1941H30V14.1941H26V12.1941H20V10.1941H16V2.19409H14V0.194092H10V2.19409H8V20.1941H6V18.1941H0V26.1941H2V30.1941H4V34.1941H6V38.1941H8V44.1941H30V36.1941H32V30.1941H30V36.1941H28V42.1941H10V38.1941H8V34.1941H6V30.1941H4V26.1941H2V20.1941H6V22.1941H8V28.1941H10V2.19409H14V20.1941H16V12.1941H20V20.1941H22V14.1941H26V22.1941H28V16.1941H30V18.1941H32V30.1941H34V18.1941H32Z" fill="white" />
                            </svg>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
<script>
    jQuery(document).ready(function($) {
        // Your jScroll initialization code here
        $('ul.pagination').hide();
        $('#infinite-scroll').jscroll({
            debug: true,
            autoTrigger: true,
            padding: 0,
            nextSelector: '.pagination li.active + li a',
            contentSelector: 'div.scrolling-pagination',
            callback: function() {
                $('ul.pagination').hide();
            }
        });
    });
</script>