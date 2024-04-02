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
                @foreach($fundingdeals as $deal)
                    <tr>
                        <td ><img src="{{ $deal->logo }}" class="fundingdeal-logo"  onerror='this.onerror=null; this.src=`{{ asset("img/popup-logo.png") }}`'></td>
                        <td class="font-weight-bold" style="color: #1662FF;">{{ $deal->company }}</td>
                        <td class="font-weight-bold">{{ $deal->country }}</td>
                        <td class="font-weight-bold">{{ $deal->funding }}</td>
                        <td class="font-weight-bold">{{ $deal->funding_type }}</td>
                        <td class="font-weight-bold"><a href="{{ $deal->c_website }}" style="color: #1662FF;"><u>{{ $deal->lead_investor }}</u></a></td>
                        <td class="font-weight-bold">{{ $deal->new_completion_date }}</td>
                    </tr>
                @endforeach
                </tbody>
           
            </table>

            <div class="d-flex align-items-center justify-content-center">
            {{ $fundingdeals->links()}}
            </div>
           
        </div>
    </div>
</div>

@endsection
