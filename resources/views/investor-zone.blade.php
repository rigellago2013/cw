@extends('layouts.cryptoapp')

@section('title')
CryptoList | Cryptocurrency Databases of Top Crypto Companies, Investors and Leaders
@stop
@section('description', 'CryptoList is a cryptocurrency list of 7,500 hand-researched companies, people & communities in crypto. Get verified email addresses of 6,000+ crypto leaders.')
@section('keywords', 'crypto, blockchain, cryptocurrency, crypto company, investors, founders, CEOs, business, leaders, communities, reddit, telegram, twitter, defi, NFT, content, YouTube, YouTubers, crypto domains, database, CRM lists, list of cryptocurrency companies to invest in, cryptocurrency outreach list, list of top cryptocurrencies, cryptocurrency news outlets, top crypto journalists, list of top crypto communities, top crypto companies, top cryptocurrency investors, crypto investors list,')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')

<div class="container-fluid px-7 mt-5">
    <div class="row py-5 border-bottom">
        <div class="col">
            <div class="hero d-flex justify-content-center">
                <div class="hero-img">
                    <img src="{{ asset('img/investor_zone/investor-hero.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="row py-5">
        <div class="col">
            <div class="newsletter-form d-flex flex-column">
                <h2 class="text-center font-weight-bold">Get our entire database of over 7,500 hand-researched companies,
investors & communities in crypto</h2>
                <p class="text-center mb-3">- With over 6,000 verified emails -</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="cta-box position-relative p-4 rounded-lg d-flex align-items-center">
                <div class="cta-box__info">
                    <h2 class="font-weight-bold mb-4">We spent thousands of hours researching the crypto ecosystem so you don't have to.</h2>
                    <h5 style="color:#1662FF;">How many can you convert into customers?</h5>
                    <p>Use our database of 7,500+ companies and people in crypto with 6,000+ verified email addresses to get access to the businesses and individuals that matter most to your business. Hours of research have gone into making this a must-have resource that you’ll come back to time and time again. 
                    Whether you’re launching your own crypto startup and want to connect with industry leaders, invest in crypto or just looking to make your first few investments in cryptocurrencies, you’ll be sure to get value out of CryptoList.
                    We’ve spent thousands of hours resea</p>
                </div>
                <img class="acc-img position-absolute" style="z-index: 3;" src="{{ asset('img/svg/computer.png') }}">
            </div>
        </div>
    </div>
    <div class="row py-5">
        <div class="col-lg-12">
            <h2 class="font-weight-bold mb-3 text-center">- Our Customers -</h2>
            <div class="row customers-logo align-items-center justify-content-between">
                <div class="customer-logo__img">
                    <img class="" src="{{ asset('img/investor_zone/image 4368.png') }}">
                </div>
                <div class="customer-logo__img">
                    <img class="" src="{{ asset('img/investor_zone/image 4369.png') }}">
                </div>
                <div class="customer-logo__img">
                    <img class="" src="{{ asset('img/investor_zone/image 4370.png') }}">
                </div>
                <div class="customer-logo__img">
                    <img class="" src="{{ asset('img/investor_zone/image 4371.png') }}">
                </div>
                <div class="customer-logo__img">
                    <img class="" src="{{ asset('img/investor_zone/image 4372.png') }}">
                </div>
                <div class="customer-logo__img">
                    <img class="" src="{{ asset('img/investor_zone/image 4373.png') }}">
                </div>
                <div class="customer-logo__img">
                    <img class="" src="{{ asset('img/investor_zone/image 4374.png') }}">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="cta-box blue-bg position-relative p-4 d-flex align-items-center">
                <div class="cta-box__info text-center">
                    <h2 class="font-weight-bold mb-3 text-light" style="font-size: 40px;">Download the Investor Zone List</h2>
                    <h3 class="font-weight-bold text-light" style="font-size: 25px;">Actual Price <s style="color: #9BBBFF;">$249</s></h3>
                    <h3 class="font-weight-bold text-light mb-3" style="font-size: 60px;">Offer Price <span style="color: #F5C92F;">$149</span></h3>
                    <a href="" class="blue-outline-light-bg-btn py-2 px-3">Buy Now</a>
                </div>
                <img class="acc-img position-absolute" style="z-index: 3;" src="{{ asset('img/svg/computer.png') }}">
            </div>
        </div>
    </div>
    <div class="row py-5">
        <div class="col-lg-12">
            <h2 class="font-weight-bold mb-3 text-center">- Our Databases -</h2>
            <p class="text-center mb-5">In individual files for easy reference, CryptoList includes:</p>
            <div class="row database-boxes justify-content-center align-items-stretch">
                <div class="col-lg-3 mb-4">
                    <div class="database-box p-4 rounded-lg text-center">
                        <div class="database-img mb-2">
                            <img class="" src="{{ asset('img/investor_zone/database-img.png') }}">
                        </div>
                        <p class="m-0">Crypto Companies</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="database-box p-4 rounded-lg text-center">
                        <div class="database-img mb-2">
                            <img class="" src="{{ asset('img/investor_zone/database-img.png') }}">
                        </div>
                        <p class="m-0">Crypto Investors</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="database-box p-4 rounded-lg text-center">
                        <div class="database-img mb-2">
                            <img class="" src="{{ asset('img/investor_zone/database-img.png') }}">
                        </div>
                        <p class="m-0">Crypto News Outlets</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="database-box offer-box p-4 rounded-lg d-flex align-tems-center">
                        <div class="offer-box__inner d-flex flex-column justify-content-center">
                            <h4 class="font-weight-bold">Crypto Exchanges</h4>
                            <p>Use this list to identify which crypto exchanges might be worth your time, or to conduct outreach for your next crypto project.</p>
                            <div class="offer-info d-flex justify-content-between align-items-center">
                                <h3 class="m-0 font-weight-bold" style="color: #1662FF; font-size: 40px;">$79</h3>
                                <a href="" class="blue-outline-light-bg-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="database-box p-4 rounded-lg text-center">
                        <div class="database-img mb-2">
                            <img class="" src="{{ asset('img/investor_zone/database-img.png') }}">
                        </div>
                        <p class="m-0">Crypto Journalists</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="database-box p-4 rounded-lg text-center">
                        <div class="database-img mb-2">
                            <img class="" src="{{ asset('img/investor_zone/database-img.png') }}">
                        </div>
                        <p class="m-0">Crypto Communities</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-4 rounded-lg" style="background-color: #1662FF;">
        <div class="col-lg-12">
            <div class="align-items-center justify-content-center d-flex flex-column">
                <h2 class="text-light font-weight-bold mb-3 text-center">Get a FREE Sample of the Crypto List Database</h2>
                <a href="" class="blue-outline-light-bg-btn">Download <i class="fa fa-download" style="margin-left: 10px;" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>

@endsection
