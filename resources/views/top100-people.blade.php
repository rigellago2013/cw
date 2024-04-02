@extends('layouts.cryptoapp')

@section('title')
CryptoList | Cryptocurrency Databases of Top Crypto Companies, Investors and Leaders
@stop
@section('description', 'CryptoList is a cryptocurrency list of 7,500 hand-researched companies, people & communities in crypto. Get verified email addresses of 6,000+ crypto leaders.')
@section('keywords', 'crypto, blockchain, cryptocurrency, crypto company, investors, founders, CEOs, business, leaders, communities, reddit, telegram, twitter, defi, NFT, content, YouTube, YouTubers, crypto domains, database, CRM lists, list of cryptocurrency companies to invest in, cryptocurrency outreach list, list of top cryptocurrencies, cryptocurrency news outlets, top crypto journalists, list of top crypto communities, top crypto companies, top cryptocurrency investors, crypto investors list,')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')
<div class="container-fluid site-width pt-5">
    <div class="row py-5 border-bottom">
        <div class="col">
            <div class="hero d-flex justify-content-center">
                <div class="hero-img">
                    <img src="{{ asset('img/influencial_people/top-people-hero.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid site-width py-5">
    <div class="row">
        <div class="col">
            <div class="newsletter-form d-flex flex-column">
                <h2 class="text-center font-weight-bold">The 100 Most Influential People In Crypto</h2>
                <p class="text-center">- 2024 Edition -</p>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid site-width pb-5">
    <div class="row">
        <div class="col thank-you-sponsor d-flex align-items-center rounded-lg px-3 py-2" style="background-color: #CCE5FD;">
            <div class="thank-you-sponsor__image">
                <img src="{{ asset('img/influencial_people/sponsor_logo.png') }}" alt="">
            </div>
            <div class="thank-you-sponsor__content">
                <h5 class="font-weight-bold mb-1">Thank you to our sponsor</h5>
                <p class="mb-0">We want to give a special thanks to our sponsor, Crypto.com, who are doing amazing work with mass crypto adoption via their easy-to-use mobile app, Visa cards (with amazing rewards) and their crypto exchange for more advanced traders.</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid site-width">
    <div class="row">
        <div class="col-lg-12 bg-advertise text-white rounded d-flex justify-content-between align-items-center">
            <div>
                <img src="{{ asset('img/svg/advertise-atom.svg') }}" alt="">
            </div>
            <div class="mt-2 ml-3">
                <h1> >>>>> Advertise Here </h1>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid site-width pt-5">
    <div class="row">
        @php
        $counter = 0;
        @endphp
        @foreach($top100 as $index => $person)
        @if ($counter % 20 == 0 && $counter != 0)
        <div style="width: 98.9%;" class="mx-auto">
            <div class="col-lg-12 bg-advertise text-white rounded d-flex justify-content-between align-items-center mt-2 mb-4 mx-auto">
                <div>
                    <img src="{{ asset('img/svg/advertise-atom.svg') }}" alt="">
                </div>
                <div class="mt-2 ml-3">
                    <h1> >>>>> Advertise Here </h1>
                </div>
            </div>
        </div>
        @endif
        <div class="col-md-6 mt-4">
            <div class="ranking-box rounded-lg box-shadow-gray p-3 position-relative h-100">
                <div class="ranking-box__header d-flex justify-content-between mb-3">
                    <div class="ranking-box__info d-flex align-items-center">
                        <div class="ranking-box__image mr-3">
                            <img src="{{ $person->head_url }}" alt="" onerror='this.onerror=null; this.src=`{{ asset("img/Crypto 100 Badge.png") }}`'>
                        </div>
                        <div class="ranking-box__title">
                            <h5 class="m-0" style="color: #1662FF; font-weight: 500;">{{ $person->name }}</h5>
                            <a href="">{{ $person->twitter_handle }}</a>
                        </div>
                    </div>
                    <div class="ranking-box__ranking position-absolute">{{ $person->position }}</div>
                </div>
                <div class="ranking-box__content">
                    <p>{{ $person->description }}</p>
                </div>
            </div>
        </div>
        @php
        $counter++;
        @endphp
        @endforeach
    </div>
</div>
@endsection