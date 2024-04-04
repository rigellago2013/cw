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
    <div class="row pb-5 border-bottom justify-content-center">
        <div class="col-">
            <div class="hero d-flex ">
                <div class="hero-img">
                    <img src="{{ asset('img/investor_zone/investor-hero.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid site-width py-5">
    <div class="row justify-content-center">
        <div class="col-">
            <div class="newsletter-form d-flex flex-column">
                <h2 class="text-center font-weight-bold">Get our entire database of over 7,500 hand-researched companies,
                    investors & communities in crypto</h2>
                <p class="text-center mb-3">- With over 6,000 verified emails -</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid site-width py-5">
    <div class="row">
        <div class="col-md-12">
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
</div>

<div class="container-fluid site-width py-5">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="font-weight-bold mb-3 text-center">- Our Customers -</h2>
            <div class="row customers-logo align-items-center justify-content-between">
                <div class="customer-logo__img d-flex justify-content-center">
                    <img class="" src="{{ asset('img/investor_zone/image 4368.png') }}">
                </div>
                <div class="customer-logo__img d-flex justify-content-center">
                    <img class="" src="{{ asset('img/investor_zone/image 4369.png') }}">
                </div>
                <div class="customer-logo__img d-flex justify-content-center">
                    <img class="" src="{{ asset('img/investor_zone/image 4370.png') }}">
                </div>
                <div class="customer-logo__img d-flex justify-content-center">
                    <img class="" src="{{ asset('img/investor_zone/image 4371.png') }}">
                </div>
                <div class="customer-logo__img d-flex justify-content-center">
                    <img class="" src="{{ asset('img/investor_zone/image 4372.png') }}">
                </div>
                <div class="customer-logo__img d-flex justify-content-center">
                    <img class="" src="{{ asset('img/investor_zone/image 4373.png') }}">
                </div>
                <div class="customer-logo__img d-flex justify-content-center">
                    <img class="" src="{{ asset('img/investor_zone/image 4374.png') }}">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid site-width py-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="cta-box blue-bg position-relative p-4 d-flex align-items-center">
                <div class="cta-box__info text-center">
                    <h2 class="font-weight-bold mb-3 text-light" style="font-size: 40px;">Download the Investor Zone List</h2>
                    <h3 class="font-weight-bold text-light" style="font-size: 25px;">Actual Price <s style="color: #9BBBFF;">$249</s></h3>
                    <h3 class="font-weight-bold text-light mb-3" style="font-size: 60px;">Offer Price <span style="color: #F5C92F;">$149</span></h3>
                    <div class="d-flex justify-content-center">
                        <a href="https://commerce.coinbase.com/checkout/e5c3ec44-3f6c-4418-b07f-f209c62595ee" class="btn-buynow-investor-zone d-flex flex-row align-items-center btn-buynow font-weight-bold">Buy Now <img src="{{  asset('img/svg/emojione_credit-card.svg') }}" alt=""> </a>
                    </div>

                </div>
                <img class="acc-img position-absolute" style="z-index: 3;" src="{{ asset('img/svg/computer.png') }}">
            </div>
        </div>
    </div>
</div>


<div class="container-fluid site-width py-5">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="font-weight-bold mb-3 text-center">- Our Databases -</h2>
            <p class="text-center mb-5">In individual files for easy reference, CryptoList includes:</p>
            <div class="row database-boxes justify-content-center align-items-stretch">

                <div class="col-lg-3 mb-4 ">
                    <div class="flip-container">
                    <div class="database-box rounded-lg flipper">
                        <div class="front p-4 text-center">
                            <div class="database-img mb-2 d-flex justify-content-center">
                                <img class="" src="{{ asset('img/investor_zone/database-img.png') }}">
                            </div>
                            <p class="m-0">Crypto Companies</p>
                        </div>
                        <div class="back px-4 pt-3 pb-5">
                            <div class="offer-box__inner d-flex flex-column justify-content-center">
                                <h4 class="font-weight-bold">Crypto Companies</h4>
                                <p>A list of over 4,000 crypto companies you need to know. Use this list for your own research, or simply to learn more about the crypto ecosystem.</p>
                                <div class="offer-info d-flex justify-content-between align-items-center">
                                    <h3 class="m-0 font-weight-bold" style="color: #1662FF; font-size: 40px;">$79</h3>
                                    <a href="https://app.simplegoods.co/i/PODEKZWU" class="btn-buynow-investor-zone d-flex flex-row align-items-center btn-buynow font-weight-bold">Buy Now <img src="{{  asset('img/svg/emojione_credit-card.svg') }}" alt=""> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">
                    <div class="flip-container">
                    <div class="database-box rounded-lg flipper">
                        <div class="front p-4 text-center">
                            <div class="database-img mb-2 d-flex justify-content-center">
                                <img class="" src="{{ asset('img/investor_zone/database-img.png') }}">
                            </div>
                            <p class="m-0">Crypto Investors</p>
                        </div>
                        <div class="back px-4 pt-3 pb-5">
                            <div class="offer-box__inner d-flex flex-column justify-content-center">
                                <h4 class="font-weight-bold">Crypto Investors</h4>
                                <p class="fs-12">Over 500 of the most influential VCs and funds in crypto, all in one place. Use this list to start your outreach research, or build relationships with high-quality investors.</p>
                                <div class="offer-info d-flex justify-content-between align-items-center">
                                    <h3 class="m-0 font-weight-bold" style="color: #1662FF; font-size: 40px;">$79</h3>
                                    <a href="https://app.simplegoods.co/i/ZQGYOHZA" class="btn-buynow-investor-zone d-flex flex-row align-items-center btn-buynow font-weight-bold">Buy Now <img src="{{  asset('img/svg/emojione_credit-card.svg') }}" alt=""> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>


                <div class="col-lg-3 mb-4">
                    <div class="flip-container">
                    <div class="database-box rounded-lg text-center flipper">
                        <div class="front p-4 text-center">
                            <div class="database-img mb-2 d-flex justify-content-center">
                                <img class="" src="{{ asset('img/investor_zone/database-img.png') }}">
                            </div>
                            <p class="m-0">Crypto News Outlets</p>
                        </div>
                        <div class="back px-4 pt-3 pb-5">
                            <div class="offer-box__inner d-flex flex-column justify-content-center">
                                <h4 class="font-weight-bold">Crypto News Outlets</h4>
                                <p>If you’re looking to gain exposure for your next crypto project, this hand-researched list of 276 news outlets will save you hundreds of hours.</p>
                                <div class="offer-info d-flex justify-content-between align-items-center">
                                    <h3 class="m-0 font-weight-bold" style="color: #1662FF; font-size: 40px;">$79</h3>
                                    <a href="https://app.simplegoods.co/i/FJCIMRRY" class="btn-buynow-investor-zone d-flex flex-row align-items-center btn-buynow font-weight-bold">Buy Now <img src="{{  asset('img/svg/emojione_credit-card.svg') }}" alt=""> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                
                <div class="col-lg-3 mb-4">
                    <div class="flip-container">
                    <div class="database-box rounded-lg text-center flipper">
                            <div class="front p-4 text-center">
                                <div class="database-img mb-2 d-flex justify-content-center">
                                    <img class="" src="{{ asset('img/investor_zone/database-img.png') }}">
                                </div>
                                <p class="m-0">Crypto Exchanges</p>
                            </div>
                            <div class="back px-4 pt-3 pb-5">
                                <div class="offer-box__inner d-flex flex-column justify-content-center">
                                    <h4 class="font-weight-bold">Crypto Exchanges</h4>
                                    <p>Use this list to identify which crypto exchanges might be worth your time, or to conduct outreach for your next crypto project.</p>
                                    <div class="offer-info d-flex justify-content-between align-items-center">
                                        <h3 class="m-0 font-weight-bold" style="color: #1662FF; font-size: 40px;">$79</h3>
                                        <a href="https://app.simplegoods.co/i/OPYFPQNK" class="btn-buynow-investor-zone d-flex flex-row align-items-center btn-buynow font-weight-bold">Buy Now <img src="{{  asset('img/svg/emojione_credit-card.svg') }}" alt=""> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                     
                <div class="col-lg-3 mb-4">
                    <div class="flip-container">
                    <div class="database-box rounded-lg text-center flipper">
                            <div class="front p-4 text-center">
                                <div class="database-img mb-2 d-flex justify-content-center">
                                    <img class="" src="{{ asset('img/investor_zone/database-img.png') }}">
                                </div>
                                <p class="m-0">Crypto Journalists</p>
                            </div>
                            <div class="back px-4 pt-3 pb-5">
                                <div class="offer-box__inner d-flex flex-column justify-content-center">
                                    <h4 class="font-weight-bold">Crypto Journalists</h4>
                                    <p>Looking to drum up some press for your next crypto project? Leverage this list of crypto journalists to kick off your outreach efforts.</p>
                                    <div class="offer-info d-flex justify-content-between align-items-center">
                                        <h3 class="m-0 font-weight-bold" style="color: #1662FF; font-size: 40px;">$79</h3>
                                        <a href="https://app.simplegoods.co/i/OLHXIDJK" class="btn-buynow-investor-zone d-flex flex-row align-items-center btn-buynow font-weight-bold">Buy Now <img src="{{  asset('img/svg/emojione_credit-card.svg') }}" alt=""> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">
                    <div class="flip-container">
                    <div class="database-box rounded-lg text-center flipper">
                            <div class="front p-4 text-center">
                                <div class="database-img mb-2 d-flex justify-content-center">
                                    <img class="" src="{{ asset('img/investor_zone/database-img.png') }}">
                                </div>
                                <p class="m-0">Crypto Communities</p>
                            </div>
                            <div class="back px-4 pt-3 pb-5">
                                <div class="offer-box__inner d-flex flex-column justify-content-center">
                                    <h4 class="font-weight-bold">Crypto Communities</h4>
                                    <p class="fs-12">Looking to find other cryptocurrency investors that speak your language? Use these lists to find the most active crypto communities on Facebook, Reddit and Telegram.</p>
                                    <div class="offer-info d-flex justify-content-between align-items-center">
                                        <h3 class="m-0 font-weight-bold" style="color: #1662FF; font-size: 40px;">$79</h3>
                                        <a href="https://app.simplegoods.co/i/GOQPQPQH" class="btn-buynow-investor-zone d-flex flex-row align-items-center btn-buynow font-weight-bold">Buy Now <img src="{{  asset('img/svg/emojione_credit-card.svg') }}" alt=""> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="container-fluid site-width py-5">
    <div class="row py-4 rounded-lg" style="background-color: #1662FF;">
        <div class="col-lg-12">
            <div class="align-items-center justify-content-center d-flex flex-column">
                <h2 class="text-light font-weight-bold mb-3 text-center">Get a FREE Sample of the Crypto List Database</h2>
                <div id="btn-download">
                    <a href="" class="btn-download-investor-zone">Download <i class="fa fa-download" style="margin-left: 10px;" aria-hidden="true"></i></a>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container-fluid site-width py-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="cta-box position-relative p-4 rounded-lg d-flex align-items-center">
                <div class="cta-box__info">
                    <h2 class="font-weight-bold">Instant Network Expansion: Thousands of Industry Contacts, Just a Click Away.</h2>
                    <p>Get our entire database of over 7,500 hand-researched companies, investors & communities in crypto!</p>
                    <div class="cta-box__info-inner d-flex justify-content-between">
                        <div class="pricing">
                            <h4 class="actual-price align-items-center d-flex"><strong class="mr-2">Actual Price</strong> <s style="color: #828282;">$249</s></h4>
                            <h3 class="offer-price mb-4 align-items-center d-flex font-weight-bold"><span class="mr-2" style="#3297F8">Offer Price</span> <span style="color: #1662FF; font-size: 48px;">$149</span></h3>
                            <div class="pricing__buttons d-flex">
                                <a href="" class="blue-outline-btn d-flex flex-row align-items-center btn-learnmore font-weight-bold">Learn More</a>
                                <a href="https://commerce.coinbase.com/checkout/e5c3ec44-3f6c-4418-b07f-f209c62595ee" class="btn-buynow-investor-zone d-flex flex-row align-items-center btn-buynow font-weight-bold">Buy Now <img src="{{  asset('img/svg/emojione_credit-card.svg') }}" alt=""> </a>
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


@endsection
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the parent element of the existing button
        var parentElement = document.getElementById('btn-download');

        // Find the existing button element
        var downloadButton = parentElement.querySelector('.btn-download-investor-zone');

        // Create a new button element
        var buyNowButton = document.createElement('a');
        buyNowButton.setAttribute('href', 'https://commerce.coinbase.com/checkout/e5c3ec44-3f6c-4418-b07f-f209c62595ee');
        buyNowButton.setAttribute('class', 'btn-buynow-investor-zone-transfomer');
        buyNowButton.innerHTML = 'Buy Now  <i class="fa fa-credit-card" style="margin-left: 10px;" aria-hidden="true"></i>';

        // Add event listeners to change button when hovered
        parentElement.addEventListener('mouseenter', function() {
            parentElement.replaceChild(buyNowButton, downloadButton);
        });

        parentElement.addEventListener('mouseleave', function(event) {
            // Check if the mouse is leaving the parent element or entering one of its children

            parentElement.replaceChild(downloadButton, buyNowButton);

        });
    });
</script>