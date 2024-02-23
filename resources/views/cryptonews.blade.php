@extends('layouts.cryptoapp')

@section('title')
The #1 Cryptocurrency Intelligence Platform | Crypto Experts | CryptoWeekly
@stop
@section('description', 'CryptoWeekly is an intelligence platform for people & businesses invested in cryptocurrency companies. Meet teams building the next wave of crypto companies.')
@section('keywords', 'crypto, blockchain, cryptocurrency, crypto company, investors, founders, CEOs, business, leaders, defi, NFT, content, YouTube, YouTubers, crypto domains, database, CRM lists, cryptocurrency media, crypto media platform, top crypto news, crypto top stories, top cryptourrency news, blockchain news, cryptocurrency news outlet')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')

<div class="container-fluid mt-5 px-10 ">
    <div class="row">
        <div class="col">
            <div class="page-title-bar">
                <h1 class="font-weight-bold">Trending News</h1>
                <p>Lorem ipsum</p>
            </div>
        </div>
    </div>
    <div class="row pb-5 border-bottom">
        <div class="col">
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
                    <div class="col-lg-6 featured-news-main flex-column">
                        <div class="card bg-dark text-white p-0 rounded-lg">
                            <img src="{{ asset('img/crypto_news/Rectangle 7.png') }}" class="card-img" alt="...">
                            <div class="card-img-overlay info d-flex flex-column justify-content-between p-0 rounded-lg">
                                <div class="meta-box p-4">
                                    <a href="" class="cat-btn px-2 py-1">CATEGORY</a>
                                    <a href="" class="tag-btn px-4 py-1"><img src="{{ asset('img/crypto_news/tag.png') }}" alt="..." class="mr-2"> NFTs</a>
                                </div>
                                <div class="info-box p-4">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <p class="card-text">13 hours ago <span class="pl-4"> Sep 4, 2023</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 featured-news-list">
                        <div class="card mb-4 border-0 ">
                            <div class="d-flex align-items-start">
                                <div class="img-col">
                                    <div class="news-img">
                                        <img src="{{ asset('img/crypto_news/Frame 5.png') }}" class="card-img" alt="...">
                                    </div>
                                </div>
                                <div class="content-col">
                                    <div class="card-body pt-0 pb-0">
                                        <h5 class="card-title font-weight-bold" style="color: #1663FF;">DeFi</h5>
                                        <h5 class="card-title font-weight-bold"><a href="{{ url('cryptonews/1') }}">  Pink stairs leading to the sky </a></h5>
                                        <p class="card-text"><small class="text-muted">13 hours ago <span class="pl-4"> Sep 4, 2023</span></small></p>
                                        <p class="card-text">In my opinion, Ui/Ux design is the foundation of a product, its face and soul. You can create an infinitely high-quality heart, and organize the simulation of breathing, but we <span class="font-weight-bold" style="color: #1663FF;">...read more</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4 border-0 ">
                            <div class="d-flex align-items-start">
                                <div class="img-col">
                                    <div class="news-img">
                                        <img src="{{ asset('img/crypto_news/Frame 5.png') }}" class="card-img" alt="...">
                                    </div>
                                </div>
                                <div class="content-col">
                                    <div class="card-body pt-0 pb-0">
                                        <h5 class="card-title font-weight-bold" style="color: #1663FF;">DeFi</h5>
                                        <h5 class="card-title font-weight-bold">Pink stairs leading to the sky</h5>
                                        <p class="card-text"><small class="text-muted">13 hours ago <span class="pl-4"> Sep 4, 2023</span></small></p>
                                        <p class="card-text">In my opinion, Ui/Ux design is the foundation of a product, its face and soul. You can create an infinitely high-quality heart, and organize the simulation of breathing, but we <span class="font-weight-bold" style="color: #1663FF;">...read more</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4 border-0 ">
                            <div class="d-flex align-items-start">
                                <div class="img-col">
                                    <div class="news-img">
                                        <img src="{{ asset('img/crypto_news/Frame 5.png') }}" class="card-img" alt="...">
                                    </div>
                                </div>
                                <div class="content-col">
                                    <div class="card-body pt-0 pb-0">
                                        <h5 class="card-title font-weight-bold" style="color: #1663FF;">DeFi</h5>
                                        <h5 class="card-title font-weight-bold">Pink stairs leading to the sky</h5>
                                        <p class="card-text"><small class="text-muted">13 hours ago <span class="pl-4"> Sep 4, 2023</span></small></p>
                                        <p class="card-text">In my opinion, Ui/Ux design is the foundation of a product, its face and soul. You can create an infinitely high-quality heart, and organize the simulation of breathing, but we <span class="font-weight-bold" style="color: #1663FF;">...read more</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4 border-0 ">
                            <div class="d-flex align-items-start">
                                <div class="img-col">
                                    <div class="news-img">
                                        <img src="{{ asset('img/crypto_news/Frame 5.png') }}" class="card-img" alt="...">
                                    </div>
                                </div>
                                <div class="content-col">
                                    <div class="card-body pt-0 pb-0">
                                        <h5 class="card-title font-weight-bold" style="color: #1663FF;">DeFi</h5>
                                        <h5 class="card-title font-weight-bold">Pink stairs leading to the sky</h5>
                                        <p class="card-text"><small class="text-muted">13 hours ago <span class="pl-4"> Sep 4, 2023</span></small></p>
                                        <p class="card-text">In my opinion, Ui/Ux design is the foundation of a product, its face and soul. You can create an infinitely high-quality heart, and organize the simulation of breathing, but we <span class="font-weight-bold" style="color: #1663FF;">...read more</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-5 border-bottom">
        <div class="col">
            <div class="card-deck ">
                <div class="card border-0 rounded-lg px-2">
                    <img src="https://www.shutterstock.com/image-vector/cryptocurrency-financial-items-altcoins-collection-600nw-2025103145.jpg" class="card-img-top mb-4 rounded" alt="...">
                    <div class="card-body p-2">
                        <a href="" class="cat-btn px-2 py-1">CATEGORY</a>
                        <h5 class="card-title mt-3 mb-2 font-weight-bold">Jack Dorsey Is Over Performance Reviews And Names New CTO</h5>
                        <p class="date-time d-flex align-items-center justify-content-between"><span>13 hours ago <span class="ml-4"> Sep 4, 2023</span></span><a href="#" class="news-link"><img src="{{ asset('img/crypto_news/arrow-upright.png') }}" class="" alt="..."></a></p>
                    </div>
                </div>
                <div class="card border-0 rounded-lg px-2">
                    <img src="https://www.shutterstock.com/image-vector/cryptocurrency-financial-items-altcoins-collection-600nw-2025103145.jpg" class="card-img-top mb-4 rounded" alt="...">
                    <div class="card-body p-2">
                        <a href="" class="cat-btn px-2 py-1">CATEGORY</a>
                        <h5 class="card-title mt-3 mb-2 font-weight-bold">Jack Dorsey Is Over Performance Reviews And Names New CTO</h5>
                        <p class="date-time d-flex align-items-center justify-content-between"><span>13 hours ago <span class="ml-4"> Sep 4, 2023</span></span><a href="#" class="news-link"><img src="{{ asset('img/crypto_news/arrow-upright.png') }}" class="" alt="..."></a></p>
                    </div>
                </div>
                <div class="card border-0 rounded-lg px-2">
                    <img src="https://www.shutterstock.com/image-vector/cryptocurrency-financial-items-altcoins-collection-600nw-2025103145.jpg" class="card-img-top mb-4 rounded" alt="...">
                    <div class="card-body p-2">
                        <a href="" class="cat-btn px-2 py-1">CATEGORY</a>
                        <h5 class="card-title mt-3 mb-2 font-weight-bold">Jack Dorsey Is Over Performance Reviews And Names New CTO</h5>
                        <p class="date-time d-flex align-items-center justify-content-between"><span>13 hours ago <span class="ml-4"> Sep 4, 2023</span></span><a href="#" class="news-link"><img src="{{ asset('img/crypto_news/arrow-upright.png') }}" class="" alt="..."></a></p>
                    </div>
                </div>
                <div class="card border-0 rounded-lg px-2">
                    <img src="https://www.shutterstock.com/image-vector/cryptocurrency-financial-items-altcoins-collection-600nw-2025103145.jpg" class="card-img-top mb-4 rounded" alt="...">
                    <div class="card-body p-2">
                        <a href="" class="cat-btn px-2 py-1">CATEGORY</a>
                        <h5 class="card-title mt-3 mb-2 font-weight-bold">Jack Dorsey Is Over Performance Reviews And Names New CTO</h5>
                        <p class="date-time d-flex align-items-center justify-content-between"><span>13 hours ago <span class="ml-4"> Sep 4, 2023</span></span><a href="#" class="news-link"><img src="{{ asset('img/crypto_news/arrow-upright.png') }}" class="" alt="..."></a></p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="row py-5">
        <div class="col-lg-7 featured-news-list">
            <div class="card mb-4 border-0 ">
                <div class="d-flex align-items-start">
                    <div class="img-col">
                        <div class="news-img">
                            <img src="{{ asset('img/crypto_news/Frame 5.png') }}" class="card-img" alt="...">
                        </div>
                    </div>
                    <div class="content-col">
                        <div class="card-body pt-0 pb-0">
                            <h5 class="card-title font-weight-bold" style="color: #1663FF;">DeFi</h5>
                            <h5 class="card-title font-weight-bold">Pink stairs leading to the sky</h5>
                            <p class="card-text"><small class="text-muted">13 hours ago <span class="pl-4"> Sep 4, 2023</span></small></p>
                            <p class="card-text">In my opinion, Ui/Ux design is the foundation of a product, its face and soul. You can create an infinitely high-quality heart, and organize the simulation of breathing, but we <span class="font-weight-bold" style="color: #1663FF;">...read more</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4 border-0 ">
                <div class="d-flex align-items-start">
                    <div class="img-col">
                        <div class="news-img">
                            <img src="{{ asset('img/crypto_news/Frame 5.png') }}" class="card-img" alt="...">
                        </div>
                    </div>
                    <div class="content-col">
                        <div class="card-body pt-0 pb-0">
                            <h5 class="card-title font-weight-bold" style="color: #1663FF;">DeFi</h5>
                            <h5 class="card-title font-weight-bold">Pink stairs leading to the sky</h5>
                            <p class="card-text"><small class="text-muted">13 hours ago <span class="pl-4"> Sep 4, 2023</span></small></p>
                            <p class="card-text">In my opinion, Ui/Ux design is the foundation of a product, its face and soul. You can create an infinitely high-quality heart, and organize the simulation of breathing, but we <span class="font-weight-bold" style="color: #1663FF;">...read more</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4 border-0 ">
                <div class="d-flex align-items-start">
                    <div class="img-col">
                        <div class="news-img">
                            <img src="{{ asset('img/crypto_news/Frame 5.png') }}" class="card-img" alt="...">
                        </div>
                    </div>
                    <div class="content-col">
                        <div class="card-body pt-0 pb-0">
                            <h5 class="card-title font-weight-bold" style="color: #1663FF;">DeFi</h5>
                            <h5 class="card-title font-weight-bold">Pink stairs leading to the sky</h5>
                            <p class="card-text"><small class="text-muted">13 hours ago <span class="pl-4"> Sep 4, 2023</span></small></p>
                            <p class="card-text">In my opinion, Ui/Ux design is the foundation of a product, its face and soul. You can create an infinitely high-quality heart, and organize the simulation of breathing, but we <span class="font-weight-bold" style="color: #1663FF;">...read more</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4 border-0 ">
                <div class="d-flex align-items-start">
                    <div class="img-col">
                        <div class="news-img">
                            <img src="{{ asset('img/crypto_news/Frame 5.png') }}" class="card-img" alt="...">
                        </div>
                    </div>
                    <div class="content-col">
                        <div class="card-body pt-0 pb-0">
                            <h5 class="card-title font-weight-bold" style="color: #1663FF;">DeFi</h5>
                            <h5 class="card-title font-weight-bold">Pink stairs leading to the sky</h5>
                            <p class="card-text"><small class="text-muted">13 hours ago <span class="pl-4"> Sep 4, 2023</span></small></p>
                            <p class="card-text">In my opinion, Ui/Ux design is the foundation of a product, its face and soul. You can create an infinitely high-quality heart, and organize the simulation of breathing, but we <span class="font-weight-bold" style="color: #1663FF;">...read more</span></p>
                        </div>
                    </div>
                </div>
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
@endsection