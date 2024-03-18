@extends('layouts.cryptoapp')

@section('title')
CryptoList | Cryptocurrency Databases of Top Crypto Companies, Investors and Leaders
@stop
@section('description', 'CryptoList is a cryptocurrency list of 7,500 hand-researched companies, people & communities in crypto. Get verified email addresses of 6,000+ crypto leaders.')
@section('keywords', 'crypto, blockchain, cryptocurrency, crypto company, investors, founders, CEOs, business, leaders, communities, reddit, telegram, twitter, defi, NFT, content, YouTube, YouTubers, crypto domains, database, CRM lists, list of cryptocurrency companies to invest in, cryptocurrency outreach list, list of top cryptocurrencies, cryptocurrency news outlets, top crypto journalists, list of top crypto communities, top crypto companies, top cryptocurrency investors, crypto investors list,')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')
<div class="container-fluid px-7">
    <div class="row py-5 border-bottom">
        <div class="col">
            <div class="hero d-flex justify-content-center">
                <div class="hero-img">
                    <img src="{{ asset('img/top_youtubers/top-youtubers-hero.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="row py-5">
        <div class="col">
            <div class="newsletter-form d-flex flex-column">
                <h2 class="text-center font-weight-bold">The Top 20 Crypto Youtubers in 2024</h2>
                <p class="text-center">- Meet the top YouTube Influencers of 2024 -</p>
                
            </div>
        </div>
    </div>
    <div class="row mx-auto">
        <div class="col-lg-12 bg-blue text-white rounded d-flex justify-content-between align-items-center">
            <div>
                <img src="{{ asset('img/svg/advertise-atom.svg') }}" alt="">
            </div>
            <div class="mt-2 ml-3">
                <h1> >>>>> Advertise Here </h1>
            </div>
        </div>
    </div>
    <div class="row py-5">
        @foreach($top20 as $youtuber)
        <div class="col-lg-6 mt-3">
           <div class="ranking-box rounded-lg box-shadow-gray p-3 position-relative">
                <div class="ranking-box__header d-flex justify-content-between mb-3">
                    <div class="ranking-box__info d-flex align-items-center">
                        <div class="ranking-box__image mr-3">
                            <img src="{{ $youtuber->logo_url }}" alt="">
                        </div>
                        <div class="ranking-box__title">
                            <h5 class="m-0" style="color: #1662FF; font-weight: 500;">{{ $youtuber->channel }}</h5>
                            <div class="youtube-box d-flex align-items-center mt-2">
                                <a href="" class="youtube-link text-light py-1 px-2 mr-1" style="background-color: #FF0000;"><i class="fa fa-youtube-play" aria-hidden="true"></i>{{ $youtuber->subscriber }}</a>
                                <a href="{{ $youtuber->about_page }}" class="youtube-link text-light py-1 px-2" style="background-color: #1662FF;"><i class="fa fa-youtube-play" aria-hidden="true"></i> Watch Youtube Content</a>
                            </div>
                        </div>
                    </div>
                    <div class="ranking-box__ranking position-absolute">{{ $youtuber->position }}</div>
                </div>
                <div class="ranking-box__content">
                    <p>{{ $youtuber->description }}</p>
                </div>
           </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
