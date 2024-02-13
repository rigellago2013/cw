@extends('layouts.cryptoapp')

@section('title')
The #1 Cryptocurrency Intelligence Platform | Crypto Experts | CryptoWeekly
@stop
@section('description', 'CryptoWeekly is an intelligence platform for people & businesses invested in cryptocurrency companies. Meet teams building the next wave of crypto companies.')
@section('keywords', 'crypto, blockchain, cryptocurrency, crypto company, investors, founders, CEOs, business, leaders, defi, NFT, content, YouTube, YouTubers, crypto domains, database, CRM lists, cryptocurrency media, crypto media platform, top crypto news, crypto top stories, top cryptourrency news, blockchain news, cryptocurrency news outlet')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')
<div class="container-fluid px-5">
    <div class="d-flex justify-content-between mx-auto bg-blue text-white rounded">
        <div>
            <img src="{{ asset('img/svg/advertise-atom.svg') }}" alt="100 Most Influential People In Crypto" >
        </div>
        <div class="mt-4 mr-4">
            <h1> >>>>> Advertise Here </h1>
        </div>
    </div>
    <hr>
    <div class="d-flex flex-column align-items-center">
        <h1 class="industry-awards-text">Industry Awards</h1>
        <p>Top crypto figures</p>
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
@endsection