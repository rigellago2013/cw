@extends('layouts.cryptoapp')

@section('title')
Cryptocurrency Newsletter | Crypto Newsletter Subscription | CryptoWeekly


@stop
@section('description', 'Subscribe to the CryptoWeekly Newsletter. Get the top crypto stories, funding deals, content, technical analysis and more delivered to your inbox every week.')
@section('keywords', 'crypto newsletter, top crypto newsletter, crypto stories weekly, weekly crypto update, crypto technical anaylsis, top funding deals, weekly crypto newsletter, crypto inbox, crypto newsletter subscription, crypto newsletters, crypto capital newsletter, crypto investment newsletter, cryptocurrency newsletter, best crypto newsletter, cryptocurrency email newsletter, cryptoweekly newsletter, crypto weekly newsletter, the top newsletter in crypto, best blockchain newsletter, weekly blockchain newsletter, bitcoin newsletter,')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')
@section('content')

@section('content')

<div class="container-fluid mt-5 newsletter">
    <div class="row">
        <div class="col">
            <div class="hero d-flex justify-content-center border-bottom">
                <div class="hero-img">
                    <img src="{{ asset('img/crypto_news/newsletter-hero.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="row py-5">
        <div class="col">
            <div class="newsletter-form d-flex flex-column">
                <h2 class="text-center"><strong>Newsletters</strong></h2>
                <p class="text-center mb-3">Crpytoweekly’s regular newsletters bring you the latest news and analysis of the fast-moving crypto and DeFi markets.</p>
                <form class="d-flex justify-content-center align-items-center">
                    <input type="email" class="form-control mr-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email Address">
                    <button type="submit" class="btn btn-primary">Subscribe Now</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

