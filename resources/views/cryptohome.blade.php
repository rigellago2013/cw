@extends('layouts.cryptoapp')

@section('title')
The #1 Cryptocurrency Intelligence Platform | Crypto Experts | CryptoWeekly
@stop
@section('description', 'CryptoWeekly is an intelligence platform for people & businesses invested in cryptocurrency companies. Meet teams building the next wave of crypto companies.')
@section('keywords', 'crypto, blockchain, cryptocurrency, crypto company, investors, founders, CEOs, business, leaders, defi, NFT, content, YouTube, YouTubers, crypto domains, database, CRM lists, cryptocurrency media, crypto media platform, top crypto news, crypto top stories, top cryptourrency news, blockchain news, cryptocurrency news outlet')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')
<div class="container-fluid site-width bg-white d-none d-lg-block  py-5">
    <div class="row">
        <div class="col d-flex p-0 align-items-stretch">
            <div class="col-lg-3">
                <div class="col-lg-12 cw-bg-card px-0 mb-2 d-flex flex-column h-100">
                    <div class="rounded p-3 pb-0 flex-grow-1">
                        <h2 class="cryptohome-header-text ml-2">Top News</h2>
                        <hr>
                        <div class="cw-landing-scrollable-content cw-scrollbar" id="infinite-scroll">
                            <div class="scrolling-pagination">
                                @foreach($blogs as $blog)
                                <div class="pl-2">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3 d-flex">
                                                <img class="mr-1" src="{{ asset('img/png/cw-icon.png') }}" alt="cw-icon"> {{ $blog->published_on_formatted }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-n-10">
                                        <div class="col-md-12">
                                            <div class="mb-3 ml-2 pl-3 pt-0 border-left border-info border-1">
                                                <!-- put data here -->
                                                <a class="text-dark" href="{{ route('cryptonews.get',$blog->blog_id) }}">{{ $blog->blog_title }}</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                {{ $blogs->links() }}
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('cryptonews') }}" class="read-more-link font-weight-bold ml-3 d-flex flex-wrap" style="margin: auto 0 20px;">Read more latest news <img class="ml-1" style="width: 10px; height: 10px; margin-top: 7px;" src="{{ asset('img/crypto_news/arrow-upright.png') }}"> </a>
                    <div class="card border-0 bg-blue text-white">
                        <img class="card-img-top" src="{{asset('/img/OGI 1.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title font-weight-bold">SPONSORED</h6>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small>Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-auto px-0 flex-fill">
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="card h-100">
                    <div class="cw-landing-main-card-bg overflow-hidden position-relative">
                        <div class="mask-center-big">
                            <div class="mask-center-small ">
                                <img style="height: 420px;" src="{{ $newshighlight->title_img }}" alt="">
                            </div>
                        </div>
                        <h3 class="card-title cryptohome-header-text news-highlight fw-700">News Highlight</h3>
                    </div>
                    <div class="card-body cw-landing-main-card-bg">
                        <h2 class="cryptohome-header-text mt-3 news-highlight-blog-title fw-700">{{ $newshighlight->blog_title }}</h2>
                        <p class="card-text">{{ Str::words(strip_tags($newshighlight->blog),150,'') }}...<a href="{{ url('/cryptonews/'.$newshighlight->blog_id) }}">Read more</a></p>
          
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-lg-block d-none">
                <div class="col-lg-12 px-0 h-100">
                    <div class="d-flex flex-column px-1 h-100">
                        <h2 class="p-3 cryptohome-header-text mb-3 cw-bg-card rounded">Funding Deals</h2>
                        <div class="flex-grow-1">
                            <div class="row">
                                <div class="col" id="fundingDealCollapse">
                                    @foreach($funding_deals as $index => $deal)
                                    <div class="shadow-sm" style="@if($index > 0) margin-top: 5px; @endif">
                                        <div class="d-flex pt-3 px-3 rounded bg-white text-primary">
                                            <a href="{{ $deal->c_website }}" type="button">
                                                <img src="{{ $deal->logo }}" alt="funding-deal-icon" style="width: 25px; height: 25px;" class="mr-2">
                                            </a>
                                            <p> <u> <a class="text-primary inter-funding-deals" href="{{ $deal->c_website }}">{{ $deal->company }} </a> </u></p>
                                            <div class="ml-auto text-dark">
                                                {{ $deal->funding}}
                                                <a data-toggle="collapse" data-target="#collapseDeal{{ $index }}" aria-expanded="false" aria-controls="collapseDeal{{ $index }}"> <i class="fa fa-angle-down"></i> </a>
                                            </div>
                                        </div>
                                        <div id="collapseDeal{{ $index }}" class="collapse" data-parent="#fundingDealCollapse">
                                            <div class="card card-body border-left-0 border-right-0 border-bottom-0 rounded-0">
                                                <div class="d-flex border-bottom border-bottom-gray ">
                                                    <div>
                                                        Country:
                                                    </div>
                                                    <div class="ml-auto">
                                                        {{ $deal->country}}
                                                    </div>
                                                </div>
                                                <div class="d-flex border-bottom border-bottom-gray ">
                                                    <div>
                                                        Funding Type:
                                                    </div>
                                                    <div class="ml-auto">
                                                        {{ $deal->funding_type}}
                                                    </div>
                                                </div>
                                                <div class="d-flex border-bottom border-bottom-gray ">
                                                    <div>
                                                        Lead Investor:
                                                    </div>
                                                    <div class="ml-auto text-primary">
                                                       <u>  <a class="text-primary" href="{{ $deal->i_website }}">  {{ $deal->lead_investor }} </a> </u>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div>
                                                        Completion Date:
                                                    </div>
                                                    <div class="ml-auto">
                                                        {{ $deal->completion_date }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <h4> <a href="{{ route('funding-deals') }}" class="mr-3 font-weight-bold">See Full List</a> </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid site-width hero-tabs d-lg-none py-5">
    <div class="row">
        <div class="col w-100">
        <ul class="nav nav-tabs d-flex flex-nowrap w-100" role="tablist">
            <li class="nav-item w-100">
                <a class="nav-link text-center active" data-toggle="tab" href="#tabs-1" role="tab">Latest News</a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link text-center" data-toggle="tab" href="#tabs-2" role="tab">Funding Deals</a>
            </li>
            </ul><!-- Tab panes -->
            <div class="tab-content w-100 pt-4">
                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                    <div class="card h-100">
                        <div class="cw-landing-main-card-bg overflow-hidden position-relative">
                            <div class="mask-center-big">
                                <div class="mask-center-small ">
                                    <img class="" src="{{ $newshighlight->title_img }}" alt="">
                                </div>
                            </div>
                            <h3 class="card-title cryptohome-header-text news-highlight d-none d-sm-block">News Highlight</h3>
                        </div>
                        <div class="card-body cw-landing-main-card-bg">
                            <h3 class="card-title cryptohome-header-text news-highlight d-block d-sm-none position-relative fw-700">News Highlight</h3>
                            <h2 class="cryptohome-header-text mt-3 news-highlight-blog-title fw-700">{{ $newshighlight->blog_title }}</h2>
                            <p class="card-text">{{ Str::limit(strip_tags($newshighlight->blog), 400) }}</p>
                            <a href="">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tabs-2" role="tabpanel">
                    <div class="w-100 rounded px-1 py-3">
                        <h2 class="p-3 cryptohome-header-text mb-3 cw-bg-card rounded">Funding Deals</h2>
                        <div class="d-block d-flex flex-column">
                            <div class="row">
                                <div class="col" id="fundingDealCollapse">
                                    @foreach($funding_deals as $index => $deal)
                                    <div class="shadow-sm" style="@if($index > 0) margin-top: 5px; @endif">
                                        <div class="d-flex pt-3 px-3 rounded bg-white text-primary">
                                        <a href="{{ $deal->c_website }}" type="button">
                                                <img src="{{ $deal->logo }}" alt="funding-deal-icon" style="width: 25px; height: 25px;" class="mr-2">
                                            </a>
                                            <p> <u> <a class="text-primary" href="{{ $deal->c_website }}">{{ $deal->company }} </a></u></p>
                                            <div class="ml-auto text-dark">
                                                {{ $deal->funding}}
                                                <a data-toggle="collapse" data-target="#collapseDeal{{ $index }}" aria-expanded="false" aria-controls="collapseDeal{{ $index }}"> <i class="fa fa-angle-down"></i> </a>
                                            </div>
                                        </div>
                                        <div id="collapseDeal{{ $index }}" class="collapse" data-parent="#fundingDealCollapse">
                                            <div class="card card-body border-left-0 border-right-0 border-bottom-0 rounded-0">
                                                <div class="d-flex border-bottom border-bottom-gray ">
                                                    <div>
                                                        Country:
                                                    </div>
                                                    <div class="ml-auto">
                                                        {{ $deal->country}}
                                                    </div>
                                                </div>
                                                <div class="d-flex border-bottom border-bottom-gray ">
                                                    <div>
                                                        Funding Type:
                                                    </div>
                                                    <div class="ml-auto">
                                                        {{ $deal->funding_type}}
                                                    </div>
                                                </div>
                                                <div class="d-flex border-bottom border-bottom-gray ">
                                                    <div>
                                                        Lead Investor:
                                                    </div>
                                                    <div class="ml-auto">
                                                        {{ $deal->lead_investor }}
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div>
                                                        Completion Date:
                                                    </div>
                                                    <div class="ml-auto">
                                                        {{ $deal->completion_date }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                           <h4> <a href="{{ route('funding-deals') }}" class="mr-3 font-weight-bold mt-2">See Full List</a> </h4> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Advertise Here -->
<div class="container-fluid site-width">
    <div class="row">
        <div class="col-md-12">
            <div class="bg-advertise text-white rounded d-flex justify-content-between align-items-center">
                <div>
                    <img src="{{ asset('img/svg/advertise-atom.svg') }}" alt="">
                </div>
                <div class="mt-2 mr-3">
                    <h1> >>>>> Advertise Here </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Advertise Here -->
<!-- Border -->
<div class="container-fluid site-width py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="border border-secondary border-top-3"></div>
        </div>
    </div>
</div>
<!-- End Border -->
<!--LATEST NEWS SECTION -->
<div class="container-fluid site-width py-4">
    <div class="row">
        <div class="col-md-12">
            <h1 class="cryptohome-header-text mb-4">Latest News</h1>
            <div class="latest-news d-flex flex-wrap">
                @foreach($latest_news as $news)
                <div class="col-md-3 mb-4">
                    <div class="card cw-bg-card rounded-lg h-100 blue-hover">
                        <div class="px-2 ">
                            <a href="{{ url('/cryptonews/'.$news->blog_id) }}">
                                <img class="w-100 cw-landing-latest-news-image" src="{{ $news->title_img }}" class="card-img-top rounded" alt="...">
                            </a>
                        </div>
                        <div class="card-body pb-0">
                            <h5 class="font-weight-bold"> <a class="text-dark" href="{{ url('/cryptonews/'.$news->blog_id) }}">{{ $news->blog_title }}    </a></h5>
                        </div>
                        <div class="d-flex flex-row card-footer border-0 cw-bg-card pt-0">
                            <!-- <p>13 hours ago </p> -->
                            <p class="fs-14">{{ $news->published_on_formatted }} &nbsp; {{ $news->published_on_formatted_date_string }} </p>
                            <a href="{{ url('/cryptonews/'.$news->blog_id) }}" class="ml-auto"> <img class="pt-2" src="{{ asset('img/crypto_news/arrow-upright.png') }}"> </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col d-flex mt-4">
                <a href="{{ route('cryptonews') }}" class="mx-auto"> <img src="{{  asset('img/svg/read-all-btn.svg') }}" alt=""> </a>
            </div>
        </div>
    </div>
</div>
<!--END LATEST NEWS SECTION -->
<div class="container-fluid site-width pt-4 pb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="cta-box position-relative p-4 rounded-lg d-flex align-items-center">
                <div class="cta-box__info">
                    <h2 class="font-weight-bold">Instant Network Expansion: Thousands of Industry Contacts, Just a Click Away.</h2>
                    <p>Get our entire database of over 7,500 hand-researched companies, investors & communities in crypto!</p>
                    <div class="cta-box__info-inner d-flex justify-content-between">
                        <div class="pricing">
                            <h4 class="actual-price align-items-center d-flex"><strong class="mr-2">Actual Price</strong> <s style="color: #828282;">$249</s></h4>
                            <h3 class="offer-price mb-4 align-items-center d-flex font-weight-bold"><span class="mr-2" style="#3297F8">Offer Price</span> <span style="color: #1662FF; font-size: 48px;">$149</span></h3>
                            <div class="pricing__buttons d-flex">
                                <a href="" class="blue-outline-btn">Learn More</a>
                                <a href="" class="blue-outline-light-bg-btn">Buy Now</a>
                            </div>
                        </div>
                        <div class="features">
                            <h4 class="font-weight-bold">Get Full Access To These Databases</h4>
                            <ul class="m-0 p-0" style="columns: 2; list-style: none;">
                                <li><i class="fa fa-check" aria-hidden="true"></i> Crypto Companies</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Crypto Investors</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Crypto Media Outlets</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Crypto Exchanges</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Crypto Journalists</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <img class="acc-img position-absolute" style="z-index: 3;" src="{{ asset('img/svg/computer.png') }}">
            </div>
        </div>
    </div>
</div>
<!--CRYPTO VIDEOS SECTION -->
<div class="container-fluid site-width py-4">
    <div class="row">
        <div class="col-md-12">
            <h1 class="cryptohome-header-text mb-4">Crypto Videos</h1>
            <div class="crypto-videos d-flex flex-wrap">
                @foreach ($cryptovideos as $video)
                    <div class="col-md-3 mb-4 d-flex flex-column justify-content-between blue-hover px-1">
                        <div class="rounded-lg h-100 cw-bg-card">
                            <div class="pb-1">
                                <div class="px-2 embed-responsive embed-responsive-1by1 rounded">
                                    {!! $video->video !!}
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="mt-3 px-3 fs-14">{{ $video->channel_name }}</p>
                                </div>
                                <div class="text-bold px-3">
                                    <h4>  {{ $video->title }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row card-footer border-0 cw-bg-card pt-0">
                            <p class="fs-14"> {{ $video['upload_date_format'] }} </p>
                            <a href="{{ route('cryptoyoutube') }}" class="ml-auto"> <img class="pt-2" src="{{ asset('img/crypto_news/arrow-upright.png') }}">  </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col d-flex mt-3">
                <a href="{{ route('cryptoyoutube') }}" class=" mx-auto"> <img src="{{  asset('img/svg/view-all-btn.svg') }}" alt=""> </a>
            </div>
        </div>
    </div>
</div>
<!--END CRYPTO VIDEOS SECTION -->
<!--PRESS RELEASE SECTION -->
<div class="container-fluid site-width pt-3 pb-4">
    <div class="row">
        <div class="col-md-12">
            <h1 class="cryptohome-header-text">Press Releases</h1>
            <div class="press-release d-flex mobile-flex-column">
                <div class="col-md-6 cw-bg-card rounded mb-4">
                    <div class="px-3 pt-4">
                        <div>
                            <img class="rounded img-fluid" src="{{ $pressreleases[0]['title_img'] }}" alt="Image">
                        </div>
                        <div class="mt-3 pb-3">
                            <h2 class="font-weight-bold"> <a class="text-dark" href="{{ url('/cryptonews/'.$pressreleases[0]['blog_id']) }}"> {{ $pressreleases[0]['blog_title'] }} </a></h2>
                            <p>{{ $pressreleases[0]['published_on_formatted'] }} </p>

                        </div>
                        <p>{{ Str::words(strip_tags($pressreleases[0]['blog']), 40,'' ) }}...<a href="{{ url('/cryptonews/'.$pressreleases[0]['blog_id']) }}">Read more</a></p>

                    </div>
                </div>
                <div class="col-md-6 no-p-mobile">
                    <div class="row align-items-stretch">
                        @php
                        $index = 0;
                        @endphp
                        @foreach($pressreleases as $pressrelease)
                        @if($index > 0)
                        <div class="col-md-6 d-flex mb-4">
                            <div class="cw-bg-card rounded-lg w-100 blue-hover">
                                <div class="px-2 pb-2 d-flex flex-column h-100">
                                    <div>
                                        <img class="rounded img-fluid" src="{{ $pressrelease->title_img }}" alt="Image">
                                    </div>
                                    <div class="mt-3 flex-grow-1">
                                        <h4 class="font-weight-bold mb-2"> <a class="text-dark" href="{{ url('/cryptonews/'.$pressrelease->blog_id) }}">{{ $pressrelease->blog_title }}</a></h4>
                                    </div>
                                    <div class="d-flex card-footer border-0 cw-bg-card p-0" style="margin-top: auto;">
                                        <p class="mb-0 fs-14">{{ $blog->published_on_formatted }} &nbsp;  &nbsp; {{ $blog->published_on_formatted_date_string }} </p>
                                        <a href="{{ url('/cryptonews/'.$pressrelease->blog_id) }}" class="ml-auto"> <img class="pt-2" src="{{ asset('img/crypto_news/arrow-upright.png') }}">  </a>
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
            <div class="col-lg-12 d-flex mt-3 mb-3">
                <a href="{{ url('cryptonews') }}" class=" mx-auto"> <img src="{{  asset('img/svg/read-all-btn.svg') }}" alt=""> </a>
            </div>
        </div>
    </div>
</div>
<!--END PRESS RELEASE SECTION -->
<!-- Advertise Here -->
<div class="container-fluid site-width">
    <div class="row">
        <div class="col-md-12">
            <div class="bg-advertise text-white rounded d-flex justify-content-between align-items-center">
                <div>
                    <img src="{{ asset('img/svg/advertise-atom.svg') }}" alt="">
                </div>
                <div class="mt-2 mr-3">
                    <h1> >>>>> Advertise Here </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Advertise Here -->
<!-- Border -->
<div class="container-fluid site-width pt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="border border-secondary border-top-3"></div>
        </div>
    </div>
</div>
<!-- End Border -->
<div class="container-fluid site-width py-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="cryptohome-header-text text-center">Industry Awards</h1>
            <p class="text-center">Top crypto figures</p>
            <div class="d-flex flex-wrap justify-content-center award-container">
                <div class="award-item">
                    <img src="{{ asset('img/svg/100mostinfluential.svg') }}" alt="100 Most Influential People In Crypto">
                </div>
                <div class="award-item">
                    <img src="{{ asset('img/svg/250toporganizations.svg') }}" alt="250 Top Organisations In Crypto">
                </div>
                <div class="award-item">
                    <img src="{{ asset('img/svg/50mostinfluentialwomen.svg') }}" alt="50 Most Influential Women In Crypto">
                </div>
                <div class="award-item">
                    <img src="{{ asset('img/svg/50topprojectsofdefi.svg') }}" alt="50 Project Of DeFi In Crypto">
                </div>
                <div class="award-item">
                    <img src="{{ asset('img/svg/20topyoutubers.svg') }}" alt="20 Top Youtubers In Crypto">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-blue py-6 text-center align-items-center text-white left-rotating-text">
    <div class="row">
        <div class="col-md-12">
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

<div class="modal" id="myModal">
    <div class="custom-modal py-4 px-3 w-100 position-relative" style="max-width: 680px; margin: 0 auto; background-color: #fff;">
        <div class="close-modal position-absolute" style="top: 10px; right: 10px; cursor: pointer;">
            <img class="" src="{{ asset('img/popup-close.png') }}" alt="">
        </div>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="custom-modal__img">
                    <img class="rounded-lg" src="{{ asset('img/popup-img.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="custom-modal__logo mb-1">
                    <img src="{{ asset('img/popup-logo.png') }}" alt="">
                </div>
                <div class="custom-modal__content">
                    <h2 class="mb-4">Don’t be that guy in a crypto conversation.</h2>
                    <h3 class="font-weight-bold mb-4">Join our Newsletter.</h3>
                    <form action="#" method="post">
                        <div class="form-fields-container d-flex" style="gap: 10px;">
                            <input type="email" name="email" placeholder="Enter email address" required>
                            <input type="submit" value="Subscribe">
                        </div>
                    </form>
                </div>
            </div>
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

        $(window).on('load',function(){
            // Check if the modal should be displayed
            var showModal = localStorage.getItem("modalClosed") !== "true";
            if (showModal) {
                $('#myModal').addClass('d-flex');
            }
        });

        $( '.close-modal' ).on( "click", function() {
            $('#myModal').removeClass('d-flex');
            // Set a flag in local storage indicating that the modal has been closed
            localStorage.setItem("modalClosed", "true");
        } );
    });
</script>