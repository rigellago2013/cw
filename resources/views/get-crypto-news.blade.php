@extends('layouts.cryptoapp')

@section('title')
CryptoList | Cryptocurrency Databases of Top Crypto Companies, Investors and Leaders
@stop
@section('description', 'CryptoList is a cryptocurrency list of 7,500 hand-researched companies, people & communities in crypto. Get verified email addresses of 6,000+ crypto leaders.')
@section('keywords', 'crypto, blockchain, cryptocurrency, crypto company, investors, founders, CEOs, business, leaders, communities, reddit, telegram, twitter, defi, NFT, content, YouTube, YouTubers, crypto domains, database, CRM lists, list of cryptocurrency companies to invest in, cryptocurrency outreach list, list of top cryptocurrencies, cryptocurrency news outlets, top crypto journalists, list of top crypto communities, top crypto companies, top cryptocurrency investors, crypto investors list,')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')
<div class="container-fluid site-width mt-5">
    <div class="row">
        <div class="col-lg-9">
            <div class="news-breadcrumb">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item"><a href="#">News</a></li>
                        <li class="breadcrumb-item font-weight-bold" aria-current="page"> {{ $blog->blog_title}} </li>
                    </ol>
                </nav>
            </div>
            <div class="">
                <img class="img-fluid" src="{{ $blog->title_img }}" class="" alt="...">
            </div>
            <div class="info-box d-flex align-items-center justify-content-between py-3">
                <div class="author d-flex align-items-center">
                    <div class="author__avatar">
                        <img style="width: 50px;" src="{{ $blog->user->profile_link }}" class="rounded-circle" alt="...">                 
                    </div>
                    <div class="author__info ml-2 mt-2">
                        <h5 class="author__name m-0 font-weight-bold">{{ $blog->user->name }}</h5>
                        <p class="news__publish-date m-0"> {{ $blog->published_on_formatted_date_string }} </p>
                    </div>
                </div>
                <!-- <div class="source">
                    <a href="">Source: DeFi News Report</a>
                </div> -->
            </div>
            <div class="news-content">
                <h2 class="font-weight-bold">{{ $blog->blog_title }}</h2>
                <p> {!! $blog->blog !!}</p>

            </div>
            <div class="category-box border-top border-bottom py-4 blue-border">
                <div class="row">
                    <div class="col">
                        <div class="category-buttons d-flex">
                            @foreach($blog->categories as $category)
                            <a class="cat-btn px-2 py-1">{{ $category->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="share-box py-3">
                <div class="row">
                    <div class="col">
                        <div class="share-box__links d-flex justify-content-end align-items-center">
                            <p class="mb-0 mr-5">Share</p>
                            <ul class="d-flex p-0 m-0">
                                <li><i class="fa fa-facebook-square" aria-hidden="true"></i></li>
                                <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-ellipsis-v" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 pt-3">
        <div class="col-lg-12 cw-bg-card px-0 mt-5 pb-2">
                <div class="rounded p-3">
                    <h2 class="cryptohome-header-text ml-2">Top News</h2>
                    <hr>
                    <div class="cw-landing-scrollable-content cw-scrollbar" id="infinite-scroll">
                        <div class="scrolling-pagination">
                            @foreach($topnews as $blog)
                            <div class="pl-2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3 d-flex">
                                            <img src="{{ asset('img/png/cw-icon.png') }}" alt="cw-icon"> {{ $blog->published_on_formatted }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-n-10">
                                    <div class="col-md-12">
                                        <div class="mb-3 ml-2 pl-3 pt-0 border-left border-info border-1">
                                            <!-- put data here -->
                                            <a href="{{ url('/cryptonews/'.$blog->blog_id) }}">{{ $blog->blog_title }}</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{ $topnews->links() }}
                        </div>
                    </div>
                    
                </div>
                <a href="#" class="read-more-link font-weight-bold ml-3">Read more latest news <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <div class="row more-news">
        <div class="col-lg-6">
            <h4 class="font-weight-bold pt-3 border-top">More From The News</h4>
            <div class="row mt-3">
                @foreach($newslist as $news)
                <div class="col-lg-6 mb-4">
                    <div class="card border-0 rounded-lg px-2 gray-bg d-flex flex-column justify-content-between h-100">
                        <img src="{{ $news->title_img }}" class="card-img-top mb-4 rounded" alt="...">
                        <div class="card-body p-2">
                            @foreach ($news->categories->where('name', 'News') as $category)
                                <a href="" class="cat-btn px-2 py-1">{{ $category->name }}</a>
                            @endforeach
                            <h5 class="card-title mt-3 mb-2 font-weight-bold"><a class="text-dark" href="{{ url('/cryptonews/'.$news->blog_id) }}">{{ $news->blog_title }}</a></h5>
                            <p class="date-time d-flex align-items-center justify-content-between"><span>{{ $news->published_on_formatted }} <span class="ml-4">{{ $news->published_on_formatted_date_string }}</span></span><a href="{{ url('/cryptonews/'.$news->blog_id) }}" class="news-link"><img src="{{ asset('img/crypto_news/arrow-upright.png') }}" class="" alt="..."></a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-6">
            <h4 class="font-weight-bold pt-3 border-top">Press Releases</h4>
            <div class="press-releases mt-3">
            @foreach($press_releases as $news)
                <div class="card mb-4 border-0 ">
                    <div class="d-flex align-items-start">
                        <div class="img-col">
                            <div class="press-releases-img">
                                <img src="{{ $news->title_img }}" class="card-img" alt="...">
                            </div>
                        </div>
                        <div class="content-col">
                            <div class="card-body pt-0 pb-0">
                                <h5 class="card-title font-weight-bold" style="color: #1663FF;">{{ preg_replace('/[^A-Za-z0-9 ]/', '', Str::words($news->keywords, 1, '')) }}</h5>
                                <h5 class="card-title mt-3 mb-2 font-weight-bold"><a class="text-dark" href="{{ url('/cryptonews/'.$news->blog_id) }}">{{Str::words(strip_tags($news->blog_title),7,'')}}</a></h5>
                                <p class="date-time d-flex align-items-center justify-content-between"><span>{{ $news->published_on_formatted }} <span class="ml-4">{{ $news->published_on_formatted_date_string }}</span></span><a href="{{ url('/cryptonews/'.$news->blog_id) }}" class="news-link"></a></p>
                                <p class="card-text">{{Str::limit(strip_tags($news->blog),35)}}<span class="font-weight-bold" style="color: #1663FF;"> <a href="{{ url('/cryptonews/'.$news->blog_id) }}">Read more</a> </span></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
<div class="bg-blue py-6 text-center align-items-center text-white">
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