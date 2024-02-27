@extends('layouts.cryptoapp')

@section('title')
The #1 Cryptocurrency Intelligence Platform | Crypto Experts | CryptoWeekly
@stop
@section('description', 'CryptoWeekly is an intelligence platform for people & businesses invested in cryptocurrency companies. Meet teams building the next wave of crypto companies.')
@section('keywords', 'crypto, blockchain, cryptocurrency, crypto company, investors, founders, CEOs, business, leaders, defi, NFT, content, YouTube, YouTubers, crypto domains, database, CRM lists, cryptocurrency media, crypto media platform, top crypto news, crypto top stories, top cryptourrency news, blockchain news, cryptocurrency news outlet')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')

<div class="container-fluid px-7 mt-5">
    <div class="row">
        <div class="col">
            <h1 class="font-weight-bold">Trending Videos</h1>
            <p>Lorem ipsum dolor</p>
            <div class="row">
                <div class="col-lg-9">
                    <div class="featured-video position-relative">
                        <img src="{{ asset('img/crypto_youtube/image 4380.png') }}" class="mb-3" alt="...">
                        <h2 class="font-weight-bold">Bitcoin Hash Rate Hits All-Time High!</h2>
                        <div class="featured-video__info">
                            <div class="author d-flex align-items-center">
                                <div class="author__avatar">
                                    <img src="{{ asset('img/single_news/author.png') }}" class="rounded-circle" alt="...">                 
                                </div>
                                <div class="author__info ml-2">
                                    <h5 class="author__name m-0 font-weight-bold">Anthony Pompliano</h5>
                                    <p class="news__publish-date m-0">53K views  •  2 weeks ago</p>
                                </div>
                            </div>
                            <div class="video-duration rounded-lg position-absolute">10 min</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="featured-video position-relative">
                        <img src="{{ asset('img/crypto_youtube/image 4377.png') }}" class="mb-3" alt="...">
                        <h2 class="font-weight-bold">Bitcoin Hash Rate Hits All-Time High!</h2>
                        <div class="featured-video__info">
                            <div class="author">
                                <div class="author__info">
                                    <h5 class="author__name m-0 font-weight-bold">Anthony Pompliano</h5>
                                    <p class="views-date m-0">53K views  •  2 weeks ago</p>
                                </div>
                                <div class="author__avatar">
                                    <img src="{{ asset('img/single_news/author.png') }}" class="rounded-circle" alt="...">                 
                                </div>
                            </div>
                            <div class="video-duration rounded-lg position-absolute">10 min</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2 class="font-weight-bold mb-4">Crypto Videos</h2>
            <div class="crypto-videos">
                <div class="row">
                    <div class="col-lg-3 mb-4">
                        <div class="card border-0 rounded-lg px-2 gray-bg">
                            <img src="https://www.shutterstock.com/image-vector/cryptocurrency-financial-items-altcoins-collection-600nw-2025103145.jpg" class="card-img-top mb-4 rounded" alt="...">
                            <div class="card-body p-2">  
                                <div class="duration-box d-flex justify-content-end mb-3">                          
                                    <div class="video-duration rounded-lg" style="margin-left: auto;"><i class="fa fa-clock-o" aria-hidden="true"></i> 10 min</div>
                                </div>
                                <div class="author d-flex justify-content-between align-items-center">
                                    <div class="author__info">
                                        <h5 class="author__name m-0 font-weight-bold">Anthony Pompliano</h5>
                                    </div>
                                    <div class="author__avatar">
                                        <img src="{{ asset('img/single_news/author.png') }}" class="rounded-circle" alt="...">                 
                                    </div>
                                </div>
                                <h5 class="card-title mt-3 mb-2 font-weight-bold">Jack Dorsey Is Over Performance Reviews And Names New CTO</h5>
                                <p class="views-date d-flex align-items-center justify-content-between">53K views  •  2 weeks ago<a href="#" class="news-link"><img src="{{ asset('img/crypto_news/arrow-upright.png') }}" class="" alt="..."></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card border-0 rounded-lg px-2 gray-bg">
                            <img src="https://www.shutterstock.com/image-vector/cryptocurrency-financial-items-altcoins-collection-600nw-2025103145.jpg" class="card-img-top mb-4 rounded" alt="...">
                            <div class="card-body p-2">  
                                <div class="duration-box d-flex justify-content-end mb-3">                          
                                    <div class="video-duration rounded-lg" style="margin-left: auto;"><i class="fa fa-clock-o" aria-hidden="true"></i> 10 min</div>
                                </div>
                                <div class="author d-flex justify-content-between align-items-center">
                                    <div class="author__info">
                                        <h5 class="author__name m-0 font-weight-bold">Anthony Pompliano</h5>
                                    </div>
                                    <div class="author__avatar">
                                        <img src="{{ asset('img/single_news/author.png') }}" class="rounded-circle" alt="...">                 
                                    </div>
                                </div>
                                <h5 class="card-title mt-3 mb-2 font-weight-bold">Jack Dorsey Is Over Performance Reviews And Names New CTO</h5>
                                <p class="views-date d-flex align-items-center justify-content-between">53K views  •  2 weeks ago<a href="#" class="news-link"><img src="{{ asset('img/crypto_news/arrow-upright.png') }}" class="" alt="..."></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card border-0 rounded-lg px-2 gray-bg">
                            <img src="https://www.shutterstock.com/image-vector/cryptocurrency-financial-items-altcoins-collection-600nw-2025103145.jpg" class="card-img-top mb-4 rounded" alt="...">
                            <div class="card-body p-2">  
                                <div class="duration-box d-flex justify-content-end mb-3">                          
                                    <div class="video-duration rounded-lg" style="margin-left: auto;"><i class="fa fa-clock-o" aria-hidden="true"></i> 10 min</div>
                                </div>
                                <div class="author d-flex justify-content-between align-items-center">
                                    <div class="author__info">
                                        <h5 class="author__name m-0 font-weight-bold">Anthony Pompliano</h5>
                                    </div>
                                    <div class="author__avatar">
                                        <img src="{{ asset('img/single_news/author.png') }}" class="rounded-circle" alt="...">                 
                                    </div>
                                </div>
                                <h5 class="card-title mt-3 mb-2 font-weight-bold">Jack Dorsey Is Over Performance Reviews And Names New CTO</h5>
                                <p class="views-date d-flex align-items-center justify-content-between">53K views  •  2 weeks ago<a href="#" class="news-link"><img src="{{ asset('img/crypto_news/arrow-upright.png') }}" class="" alt="..."></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card border-0 rounded-lg px-2 gray-bg">
                            <img src="https://www.shutterstock.com/image-vector/cryptocurrency-financial-items-altcoins-collection-600nw-2025103145.jpg" class="card-img-top mb-4 rounded" alt="...">
                            <div class="card-body p-2">  
                                <div class="duration-box d-flex justify-content-end mb-3">                          
                                    <div class="video-duration rounded-lg" style="margin-left: auto;"><i class="fa fa-clock-o" aria-hidden="true"></i> 10 min</div>
                                </div>
                                <div class="author d-flex justify-content-between align-items-center">
                                    <div class="author__info">
                                        <h5 class="author__name m-0 font-weight-bold">Anthony Pompliano</h5>
                                    </div>
                                    <div class="author__avatar">
                                        <img src="{{ asset('img/single_news/author.png') }}" class="rounded-circle" alt="...">                 
                                    </div>
                                </div>
                                <h5 class="card-title mt-3 mb-2 font-weight-bold">Jack Dorsey Is Over Performance Reviews And Names New CTO</h5>
                                <p class="views-date d-flex align-items-center justify-content-between">53K views  •  2 weeks ago<a href="#" class="news-link"><img src="{{ asset('img/crypto_news/arrow-upright.png') }}" class="" alt="..."></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection