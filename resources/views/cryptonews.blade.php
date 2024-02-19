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
            <div class="page-title-bar">
                <h1>Trending News</h1>
                <p>Lorem ipsum</p>
            </div>
        </div>
    </div>


    <div class="row">
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
                    <div class="col-sm-6 featured-news-main">
                        <div class="card bg-dark text-white">
                            <img src="{{ asset('img/crypto_news/Rectangle 7.png') }}" class="card-img" alt="...">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 featured-news-list">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{{ asset('img/crypto_news/Frame 5.png') }}" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-primary font-weight-bold">DeFi</h5>
                                        <h5 class="card-title font-weight-bold"><a href="" style="color: black;">Pink stairs leading to the sky</a></h5>
                                        <div class="date-time text-muted">
                                            <p>13 hours ago Sep 4, 2023</p>
                                        </div>
                                        <p class="card-text">In my opinion, Ui/Ux design is the foundation of a product, its face and soul. You can create an infinitely high-quality heart, and organize the simulation of breathing, but we <span class="font-weight-bold" style="color: blue;">...read more</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{{ asset('img/crypto_news/image 4376.png') }}" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-primary font-weight-bold">DeFi</h5>
                                        <h5 class="card-title font-weight-bold"><a href="" style="color: black;">Pink stairs leading to the sky</a></h5>
                                        <div class="date-time text-muted">
                                            <p>13 hours ago Sep 4, 2023</p>
                                        </div>
                                        <p class="card-text">In my opinion, Ui/Ux design is the foundation of a product, its face and soul. You can create an infinitely high-quality heart, and organize the simulation of breathing, but we <span class="font-weight-bold" style="color: blue;">...read more</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{{ asset('img/crypto_news/Frame 5.png') }}" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-primary font-weight-bold">DeFi</h5>
                                        <h5 class="card-title font-weight-bold"><a href="" style="color: black;">Pink stairs leading to the sky</a></h5>
                                        <div class="date-time text-muted">
                                            <p>13 hours ago Sep 4, 2023</p>
                                        </div>
                                        <p class="card-text">In my opinion, Ui/Ux design is the foundation of a product, its face and soul. You can create an infinitely high-quality heart, and organize the simulation of breathing, but we <span class="font-weight-bold" style="color: blue;">...read more</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card-deck mt-2 pt-5">
                <div class="card">
                    <img src="{{ asset('img/crypto_news/Frame 5.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('img/crypto_news/Frame 5.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('img/crypto_news/Frame 5.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('img/crypto_news/Frame 5.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5 row border border-secondary border-top-3 px-0 mx-auto">
    </div>
    <div class="row mx-auto">
        <div class="col-lg-9 px-0  ">
            <div class="col-sm-6 featured-news-list px-0">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('img/crypto_news/Frame 5.png') }}" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <div class="date-time text-muted">
                                    <p>13 hours ago Sep 4, 2023</p>
                                </div>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
   
        </div>
    </div>
</div>
@endsection