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
                    <img src="{{ asset('img/funding_deals/funding-deals-hero.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="row py-5">
        <div class="col">
            <div class="newsletter-form d-flex flex-column">
                <h2 class="text-center font-weight-bold">The Top 250 Companies To Watch In 2024</h2>
                <p class="text-center">- Meet the companies building the most impressive project in crypto -</p>
                
            </div>
        </div>
    </div>
    <div class="row pb-5">
        <div class="col">
            <div class="thank-you-sponsor d-flex align-items-center rounded-lg px-3 py-2" style="background-color: #CCE5FD;">
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
    <div class="row py-5 align-items-stretch">
        <div class="col-lg-3 mb-4">
            <div class="company-ranking-box box-shadow-gray pt-4 pb-0 d-flex flex-column justify-content-between" style="border-radius: 8px; height: 100%;">
                <div class="company-ranking-box__image ">
                    <img src="{{ asset('img/company_ranking/eth-logo.png') }}" alt="">
                </div>
                <a href="" class="company-ranking-box__title d-flex text-center text-light font-weight-bold p-2 justify-content-center" style="border-radius: 8px; background-color: #1663FF; margin-top: auto;">Ethereum</a>
            </div>
        </div>
        <div class="col-lg-3 mb-4">
            <div class="company-ranking-box box-shadow-gray pt-4 pb-0 d-flex flex-column justify-content-between" style="border-radius: 8px; height: 100%;">
                <div class="company-ranking-box__image ">
                    <img src="{{ asset('img/company_ranking/grayscale-logo.png') }}" alt="">
                </div>
                <a href="" class="company-ranking-box__title d-flex text-center text-light font-weight-bold p-2 justify-content-center" style="border-radius: 8px; background-color: #1663FF; margin-top: auto;">Grayscale</a>
            </div>
        </div>
        <div class="col-lg-3 mb-4">
            <div class="company-ranking-box box-shadow-gray pt-4 pb-0 d-flex flex-column justify-content-between" style="border-radius: 8px; height: 100%;">
                <div class="company-ranking-box__image ">
                    <img src="{{ asset('img/company_ranking/chainlink-logo.png') }}" alt="">
                </div>
                <a href="" class="company-ranking-box__title d-flex text-center text-light font-weight-bold p-2 justify-content-center" style="border-radius: 8px; background-color: #1663FF; margin-top: auto;">Chainlink</a>
            </div>
        </div>
        <div class="col-lg-3 mb-4">
            <div class="box-shadow-gray p-4" style="border-radius: 8px; height: 100%;">
                <p class="m-0">Launched in 2012, Coinbase is one of the most popular crypto exchange and custody providers in the world while simultaneously providing merchant payment solutions to enable crypto transactions. As of now, users can buy and trade 14 cryptocurrencies with both crypto and FIAT. Merchants can also use Coinbase to accept payment for their services.</p>
            </div>
        </div>
        <div class="col-lg-3 mb-4">
            <div class="company-ranking-box box-shadow-gray pt-4 pb-0 d-flex flex-column justify-content-between" style="border-radius: 8px; height: 100%;">
                <div class="company-ranking-box__image ">
                    <img src="{{ asset('img/company_ranking/polkadot-logo.png') }}" alt="">
                </div>
                <a href="" class="company-ranking-box__title d-flex text-center text-light font-weight-bold p-2 justify-content-center" style="border-radius: 8px; background-color: #1663FF; margin-top: auto;">Polkadot</a>
            </div>
        </div>
        <div class="col-lg-3 mb-4">
            <div class="company-ranking-box box-shadow-gray pt-4 pb-0 d-flex flex-column justify-content-between" style="border-radius: 8px; height: 100%;">
                <div class="company-ranking-box__image ">
                    <img src="{{ asset('img/company_ranking/aave-logo.png') }}" alt="">
                </div>
                <a href="" class="company-ranking-box__title d-flex text-center text-light font-weight-bold p-2 justify-content-center" style="border-radius: 8px; background-color: #1663FF; margin-top: auto;">Aave</a>
            </div>
        </div>
        <div class="col-lg-3 mb-4">
            <div class="company-ranking-box box-shadow-gray pt-4 pb-0 d-flex flex-column justify-content-between" style="border-radius: 8px; height: 100%;">
                <div class="company-ranking-box__image ">
                    <img src="{{ asset('img/company_ranking/uniswap-logo.png') }}" alt="">
                </div>
                <a href="" class="company-ranking-box__title d-flex text-center text-light font-weight-bold p-2 justify-content-center" style="border-radius: 8px; background-color: #1663FF; margin-top: auto;">Uniswap</a>
            </div>
        </div>
        <div class="col-lg-3 mb-4">
            <div class="company-ranking-box box-shadow-gray pt-4 pb-0 d-flex flex-column justify-content-between" style="border-radius: 8px; height: 100%;">
                <div class="company-ranking-box__image ">
                    <img src="{{ asset('img/company_ranking/gemini-logo.png') }}" alt="">
                </div>
                <a href="" class="company-ranking-box__title d-flex d-flex text-center text-light font-weight-bold p-2 justify-content-center" style="border-radius: 8px; background-color: #1663FF; margin-top: auto;">Gemini</a>
            </div>
        </div>
    </div>
</div>
@endsection
