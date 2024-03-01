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
                <h2 class="text-center font-weight-bold">Intelligence on Latest Crypto Funding Deals</h2>
                <p class="text-center">Meet the teams building the next generation of crypto companies before anyone else</p>
                
            </div>
        </div>
    </div>
    <div class="row py-5">
        <div class="col-lg-12">
            <table class="table funding-deals-table table-hover rounded-lg overflow-hidden box-shadow-gray">
                <thead style="background-color: #1662FF; color: white;">
                    <tr>
                        <th scope="col" class="">Logo</th>
                        <th scope="col">Company</th>
                        <th scope="col">Country</th>
                        <th scope="col">Funding (USD)</th>
                        <th scope="col">Funding Type</th>
                        <th scope="col">Lead Investor</th>
                        <th scope="col">Completion Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td ><img src="{{ asset('img/funding_deals/image 4340.png') }}" class=""></td>
                        <td class="font-weight-bold" style="color: #1662FF;">bitsCrunch</td>
                        <td class="font-weight-bold">Germany</td>
                        <td class="font-weight-bold">$3.8M</td>
                        <td class="font-weight-bold">Initial Coin Offering</td>
                        <td class="font-weight-bold"><a href="https://cryptoweekly.co/fundingdeals" style="color: #1662FF;"><u>Unknown</u></a></td>
                        <td class="font-weight-bold">12/14/2023</td>
                    </tr>
                    <tr>
                        <td ><img src="{{ asset('img/funding_deals/image 4341.png') }}" class=""></td>
                        <td class="font-weight-bold" style="color: #1662FF;">Ivorypay</td>
                        <td class="font-weight-bold">South Africa</td>
                        <td class="font-weight-bold">$170k</td>
                        <td class="font-weight-bold">Pre-Seed</td>
                        <td class="font-weight-bold"><a href="https://blockchainff.com/" style="color: #1662FF;"><u>Blockchain Founders Fund</u></a></td>
                        <td class="font-weight-bold">12/1/2023</td>
                        </tr>
                    <tr>
                        <td ><img src="{{ asset('img/funding_deals/image 4342.png') }}" class=""></td>
                        <td class="font-weight-bold" style="color: #1662FF;">Term Structure Labs</td>
                        <td class="font-weight-bold">United Kingdom</td>
                        <td class="font-weight-bold">$4.2M</td>
                        <td class="font-weight-bold">Seed</td>
                        <td class="font-weight-bold"><a href="https://cumberland.io/" style="color: #1662FF;"><u>Cumberland</u></a></td>
                        <td class="font-weight-bold">11/30/2023</td>
                    </tr>
                    <tr>
                        <td ><img src="{{ asset('img/funding_deals/image 4343.png') }}" class=""></td>
                        <td class="font-weight-bold" style="color: #1662FF;">Pocket Network</td>
                        <td class="font-weight-bold">United States</td>
                        <td class="font-weight-bold">$7.9M</td>
                        <td class="font-weight-bold">Venture-Series Unknown</td>
                        <td class="font-weight-bold"><a href="" style="color: #1662FF;"><u>Unknown</u></a></td>
                        <td class="font-weight-bold">11/30/2023</td>
                    </tr>
                    <tr>
                        <td ><img src="{{ asset('img/funding_deals/image 4344.png') }}" class=""></td>
                        <td class="font-weight-bold" style="color: #1662FF;">Wormhole</td>
                        <td class="font-weight-bold">Cayman Islands</td>
                        <td class="font-weight-bold">$225M</td>
                        <td class="font-weight-bold">Venture-Series Unknown</td>
                        <td class="font-weight-bold"><a href="" style="color: #1662FF;"><u>Unknown</u></a></td>
                        <td class="font-weight-bold">11/29/2023</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
