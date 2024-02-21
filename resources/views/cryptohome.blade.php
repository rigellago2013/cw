@extends('layouts.cryptoapp')

@section('title')
The #1 Cryptocurrency Intelligence Platform | Crypto Experts | CryptoWeekly
@stop
@section('description', 'CryptoWeekly is an intelligence platform for people & businesses invested in cryptocurrency companies. Meet teams building the next wave of crypto companies.')
@section('keywords', 'crypto, blockchain, cryptocurrency, crypto company, investors, founders, CEOs, business, leaders, defi, NFT, content, YouTube, YouTubers, crypto domains, database, CRM lists, cryptocurrency media, crypto media platform, top crypto news, crypto top stories, top cryptourrency news, blockchain news, cryptocurrency news outlet')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')
<div class="container-fluid px-7 bg-white">
    <div class="row mt-5 mb-4">
        <div class="col-lg-3 d-flex flex-column">
            <div class="col-lg-12 cw-bg-card  px-0 mb-2 flex-fill h-100">
                <div class="rounded p-3">
                    <h2 class="cryptohome-header-text ml-2">Top News</h2>
                    <hr>
                    <div class="cw-landing-scrollable-content cw-scrollbar">
                        <div class="pl-2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <img src="{{ asset('img/png/cw-icon.png') }}" alt="cw-icon"> just now
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-n-10">
                                <div class="col-md-12">
                                    <div class="mb-3 ml-2 pl-3 pt-0 border-left border-info border-1">
                                        Wallet Of Satoshi Is No Longer Available For US Customers
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="read-more-link font-weight-bold">Read more latest news <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-lg-12 mt-auto px-0 flex-fill">
                <div class="card border-0 bg-blue text-white h-100">
                    <img class="card-img-top" src="https://miro.medium.com/v2/resize:fit:900/1*wnYZ2svg4x1OE7CrtZ1rWA.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title font-weight-bold">SPONSORED</h6>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card h-100">
            <div class="cw-landing-main-card-bg">
                <div class="mask-center-big">
                <div class="mask-center-small ">
                    
                    </div>

                </div>

            </div>
                <div class="card-body cw-landing-main-card-bg">
                    <h3 class="card-title cryptohome-header-text">News Highlight</h3>
                    <h2 class="cryptohome-header-text mt-4">Argentina Will Have A New Bitcoin Friendly President</h2>
                    <p class="card-text">In a historic triumph, Javier Milei has secured the presidential seat in Argentina, indicating a potential significant change in the economic landscape of the nation going forward. Milei, renowned for fervently supporting Bitcoin and strongly criticizing.</p>
                    <a href="">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="col-lg-12 px-0 h-100">
                <div class="cw-bg-card rounded p-3 flex-fill h-100">
                    <h2 class="cryptohome-header-text mb-3">Funding Deals</h2>
                    <div class="d-block d-flex flex-column">
                        <div class="row">
                            <div class="col" id="fundingDealCollapse">
                            @foreach($funding_deals as $index => $deal)
                            <div style="@if($index > 0) margin-top: 5px; @endif">
                            <div class="d-flex py-2 px-3 rounded bg-white text-primary">
                                <a type="button" >
                                    <img src="{{ $deal->logo }}" alt="funding-deal-icon" style="width: 25px; height: 25px;" class="mr-2">{{ $deal->company }}
                                </a>
                                <div class="ml-auto text-dark">
                                    {{ $deal->funding}}
                                    <a data-toggle="collapse" data-target="#collapseDeal{{ $index }}" aria-expanded="false" aria-controls="collapseDeal{{ $index }}"> <i class="fa fa-angle-down"></i> </a>
                                </div>
                            </div>                                       
                            <div id="collapseDeal{{ $index }}" class="collapse" data-parent="#fundingDealCollapse">
                                <div class="card card-body border-left-0 border-right-0 border-bottom-0 rounded-0">                             
                                    <div class="d-flex border-bottom border-bottom-gray ">
                                        <div>
                                            Country: 
                                        </div>
                                        <div class="ml-auto">
                                            {{ $deal->country}}
                                        </div>
                                    </div>          
                                    <div class="d-flex border-bottom border-bottom-gray ">
                                        <div>
                                            Funding Type: 
                                        </div>
                                        <div class="ml-auto">
                                            {{ $deal->funding_type}}
                                        </div>
                                    </div>   
                                    <div class="d-flex border-bottom border-bottom-gray ">
                                        <div>
                                            Lead Investor: 
                                        </div>
                                        <div class="ml-auto">
                                            {{ $deal->lead_investor }}
                                        </div>
                                    </div> 
                                    <div class="d-flex">
                                        <div>
                                            Completion Date: 
                                        </div>
                                        <div class="ml-auto">
                                            {{ $deal->completion_date }}
                                        </div>
                                    </div>               
                                </div>
                            </div>
                            </div>
                                @endforeach
                            </div>
                            </div>
                        </div>
                    <div class="d-flex justify-content-end">
                        <a href="#" class="mr-3 font-weight-bold mt-2">See Full List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Advertise Here -->
    <div class="row mx-auto">
        <div class="col-lg-12 bg-blue text-white rounded d-flex justify-content-between align-items-center">
            <div>
                <img src="{{ asset('img/svg/advertise-atom.svg') }}" alt="">
            </div>
            <div class="mt-4 ml-3">
                <h1> >>>>> Advertise Here </h1>
            </div>
        </div>
    </div>
     <!-- End Advertise Here -->
    <!-- Border -->
    <div class="mt-4 mb-4 mx-auto row border border-secondary border-top-3">
    </div>
    <!-- End Border -->
    <!--LATEST NEWS SECTION -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <h1 class="cryptohome-header-text">Latest News</h1>
        </div>
        <div class="col-lg-3 ">
            <div class="card cw-bg-card border-0">
                <div class="px-2">
                    <img src="https://media.istockphoto.com/id/1369150014/vector/breaking-news-with-world-map-background-vector.jpg?s=612x612&w=0&k=20&c=9pR2-nDBhb7cOvvZU_VdgkMmPJXrBQ4rB1AkTXxRIKM=" class="card-img-top" alt="...">
                </div>
                <div class="card-body pb-0">
                    <h5 class="font-weight-bold">Card title</h5>
                </div>
                <div class="d-flex flex-row card-footer border-0 cw-bg-card pt-0">
                    <p>13 hours ago </p>
                    <p class="ml-3">Sep 4, 2023</p>
                    <a href="https://google.com" class="ml-auto"> <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 ">
            <div class="card cw-bg-card border-0">
                <div class="px-2">
                    <img src="https://media.istockphoto.com/id/1369150014/vector/breaking-news-with-world-map-background-vector.jpg?s=612x612&w=0&k=20&c=9pR2-nDBhb7cOvvZU_VdgkMmPJXrBQ4rB1AkTXxRIKM=" class="card-img-top" alt="...">
                </div>
                <div class="card-body pb-0">
                    <h5 class="font-weight-bold">Card title</h5>
                </div>
                <div class="d-flex flex-row card-footer border-0 cw-bg-card pt-0">
                    <p>13 hours ago </p>
                    <p class="ml-3">Sep 4, 2023</p>
                    <a href="https://google.com" class="ml-auto"> <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 ">
            <div class="card cw-bg-card border-0">
                <div class="px-2">
                    <img src="https://media.istockphoto.com/id/1369150014/vector/breaking-news-with-world-map-background-vector.jpg?s=612x612&w=0&k=20&c=9pR2-nDBhb7cOvvZU_VdgkMmPJXrBQ4rB1AkTXxRIKM=" class="card-img-top" alt="...">
                </div>
                <div class="card-body pb-0">
                    <h5 class="font-weight-bold">Card title</h5>
                </div>
                <div class="d-flex flex-row card-footer border-0 cw-bg-card pt-0">
                    <p>13 hours ago </p>
                    <p class="ml-3">Sep 4, 2023</p>
                    <a href="https://google.com" class="ml-auto"> <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 ">
            <div class="card cw-bg-card border-0">
                <div class="px-2">
                    <img src="https://media.istockphoto.com/id/1369150014/vector/breaking-news-with-world-map-background-vector.jpg?s=612x612&w=0&k=20&c=9pR2-nDBhb7cOvvZU_VdgkMmPJXrBQ4rB1AkTXxRIKM=" class="card-img-top" alt="...">
                </div>
                <div class="card-body pb-0">
                    <h5 class="font-weight-bold">Card title</h5>
                </div>
                <div class="d-flex flex-row card-footer border-0 cw-bg-card pt-0">
                    <p>13 hours ago </p>
                    <p class="ml-3">Sep 4, 2023</p>
                    <a href="https://google.com" class="ml-auto"> <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                </div>
            </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
        <a href="" class=" mx-auto"> <img src="{{  asset('img/svg/read-all-btn.svg') }}" alt=""> </a>
        </div>
    </div>
     <!--END LATEST NEWS SECTION -->

    <div class="row mt-4 mb-4">
        <div class="col-lg-12">
            <img src="{{ asset('img/svg/banner.svg') }}" style="width: 100%;">
        </div>
    </div>

    <!--CRYPTO VIDEOS SECTION -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <h1 class="cryptohome-header-text">Crypto Videos</h1>
        </div>

        <div class="col-lg-3">
            <div class="cw-bg-card rounded">
                <div class="pb-3">
                    <div class="px-2">
                        <img class="rounded" src="https://media.licdn.com/dms/image/D4D12AQGQFiOvxvA20g/article-cover_image-shrink_720_1280/0/1682758304423?e=2147483647&v=beta&t=T_m6Cj_F9IDuPjn1NL9TBgcpjIxCctnghbXhHAxSK2k" alt="Image" style="max-width: 100%;">
                    </div>
                    <div class="d-flex justify-content-between">
                        <h5 class="mt-3 px-3">Andy Williams</h5>
                    </div>
                    <div class="text-bold px-3">
                        <h3> <strong> Basic how to ride your skateboard comfortly Lorem Ipsum </strong></h3>
                    </div>
                    <div class="d-flex flex-row card-footer border-0 cw-bg-card pt-0">
                        <a href="https://google.com" class="ml-auto"> <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="cw-bg-card rounded">
                <div class="pb-3">
                    <div class="px-2">
                        <img class="rounded" src="https://media.licdn.com/dms/image/D4D12AQGQFiOvxvA20g/article-cover_image-shrink_720_1280/0/1682758304423?e=2147483647&v=beta&t=T_m6Cj_F9IDuPjn1NL9TBgcpjIxCctnghbXhHAxSK2k" alt="Image" style="max-width: 100%;">
                    </div>
                    <div class="d-flex justify-content-between">
                        <h5 class="mt-3 px-3">Andy Williams</h5>
                    </div>
                    <div class="text-bold px-3">
                        <h3> <strong> Basic how to ride your skateboard comfortly Lorem Ipsum </strong></h3>
                    </div>
                    <div class="d-flex flex-row card-footer border-0 cw-bg-card pt-0">
                        <a href="https://google.com" class="ml-auto"> <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="cw-bg-card rounded">
                <div class="pb-3">
                    <div class="px-2">
                        <img class="rounded" src="https://media.licdn.com/dms/image/D4D12AQGQFiOvxvA20g/article-cover_image-shrink_720_1280/0/1682758304423?e=2147483647&v=beta&t=T_m6Cj_F9IDuPjn1NL9TBgcpjIxCctnghbXhHAxSK2k" alt="Image" style="max-width: 100%;">
                    </div>
                    <div class="d-flex justify-content-between">
                        <h5 class="mt-3 px-3">Andy Williams</h5>
                    </div>
                    <div class="text-bold px-3">
                        <h3> <strong> Basic how to ride your skateboard comfortly Lorem Ipsum </strong></h3>
                    </div>
                    <div class="d-flex flex-row card-footer border-0 cw-bg-card pt-0">
                        <a href="https://google.com" class="ml-auto"> <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="cw-bg-card rounded">
                <div class="pb-3">
                    <div class="px-2">
                        <img class="rounded" src="https://media.licdn.com/dms/image/D4D12AQGQFiOvxvA20g/article-cover_image-shrink_720_1280/0/1682758304423?e=2147483647&v=beta&t=T_m6Cj_F9IDuPjn1NL9TBgcpjIxCctnghbXhHAxSK2k" alt="Image" style="max-width: 100%;">
                    </div>
                    <div class="d-flex justify-content-between">
                        <h5 class="mt-3 px-3">Andy Williams</h5>
                    </div>
                    <div class="text-bold px-3">
                        <h3> <strong> Basic how to ride your skateboard comfortly Lorem Ipsum </strong></h3>
                    </div>
                    <div class="d-flex flex-row card-footer border-0 cw-bg-card pt-0">
                        <a href="https://google.com" class="ml-auto"> <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 text-center mt-5">
        <a href="https://google.com" class=" mx-auto"> <img src="{{  asset('img/svg/view-all-btn.svg') }}" alt=""> </a>
        </div>
    </div>
    <!--END CRYPTO VIDEOS SECTION -->
    <!--PRESS RELEASE SECTION -->
    <div class="row mb-2 mx-auto">
        <div class="col-lg-12 p-0 mb-4">
            <h1 class="cryptohome-header-text">Press Releases</h1>
        </div>
        <div class="col-lg-6 cw-bg-card rounded">
            <div class="px-3 pt-4">
                <div>
                    <img class="rounded" src="https://media.licdn.com/dms/image/D4D12AQGQFiOvxvA20g/article-cover_image-shrink_720_1280/0/1682758304423?e=2147483647&v=beta&t=T_m6Cj_F9IDuPjn1NL9TBgcpjIxCctnghbXhHAxSK2k" alt="Image" style=" max-width: 100%; width: 100%; height:400px">
                </div>
                <div class="mt-3 pb-3">
                    <h2 class="font-weight-bold">Jack Dorsey Is Over Performance Reviews And Names New CTO</h2>
                    <p>13 hours </p>
                    <p>Similar to the contextual text color classes, easily set the background of an element to any contextual class. Anchor components will darken on hover, just like the text classes. Background utilities do not set color, so in some cases you’ll want to use .text-* utilities.</p>
                </div>

            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="cw-bg-card rounded">
                        <div class="px-2 pb-1">
                            <div>
                                <img class="rounded" src="https://media.licdn.com/dms/image/D4D12AQGQFiOvxvA20g/article-cover_image-shrink_720_1280/0/1682758304423?e=2147483647&v=beta&t=T_m6Cj_F9IDuPjn1NL9TBgcpjIxCctnghbXhHAxSK2k" alt="Image" style="max-width: 100%;">
                            </div>
                            <div class="mt-3">
                                <h2 class="font-weight-bold">Jack Dorsey Is Over Performance Reviews And Names New CTO.</h2>
                            </div>
                            <div class="d-flex flex-row card-footer border-0 cw-bg-card p-0">
                                <p>13 hours ago </p>
                                <a href="https://google.com" class="ml-auto"> <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="cw-bg-card rounded">
                        <div class="px-2 pb-1">
                            <div>
                                <img class="rounded" src="https://media.licdn.com/dms/image/D4D12AQGQFiOvxvA20g/article-cover_image-shrink_720_1280/0/1682758304423?e=2147483647&v=beta&t=T_m6Cj_F9IDuPjn1NL9TBgcpjIxCctnghbXhHAxSK2k" alt="Image" style="max-width: 100%;">
                            </div>
                            <div class="mt-3">
                                <h2 class="font-weight-bold">Jack Dorsey Is Over Performance Reviews And Names New CTO.</h2>
                            </div>
                            <div class="d-flex flex-row card-footer border-0 cw-bg-card p-0">
                                <p>13 hours ago </p>
                                <a href="https://google.com" class="ml-auto"> <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="cw-bg-card rounded">
                        <div class="px-2 pb-1">
                            <div>
                                <img class="rounded" src="https://media.licdn.com/dms/image/D4D12AQGQFiOvxvA20g/article-cover_image-shrink_720_1280/0/1682758304423?e=2147483647&v=beta&t=T_m6Cj_F9IDuPjn1NL9TBgcpjIxCctnghbXhHAxSK2k" alt="Image" style="max-width: 100%;">
                            </div>
                            <div class="mt-3">
                                <h2 class="font-weight-bold">Jack Dorsey Is Over Performance Reviews And Names New CTO.</h2>
                            </div>
                            <div class="d-flex flex-row card-footer border-0 cw-bg-card p-0">
                                <p>13 hours ago </p>
                                <a href="https://google.com" class="ml-auto"> <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="cw-bg-card rounded">
                        <div class="px-2 pb-1">
                            <div>
                                <img class="rounded" src="https://media.licdn.com/dms/image/D4D12AQGQFiOvxvA20g/article-cover_image-shrink_720_1280/0/1682758304423?e=2147483647&v=beta&t=T_m6Cj_F9IDuPjn1NL9TBgcpjIxCctnghbXhHAxSK2k" alt="Image" style="max-width: 100%;">
                            </div>
                            <div class="mt-3">
                                <h2 class="font-weight-bold">Jack Dorsey Is Over Performance Reviews And Names New CTO.</h2>
                            </div>
                            <div class="d-flex flex-row card-footer border-0 cw-bg-card p-0">
                                <p>13 hours ago </p>
                                <a href="https://google.com" class="ml-auto"> <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 text-center mt-5 mb-3">
        <a href="https://google.com" class=" mx-auto"> <img src="{{  asset('img/svg/read-all-btn.svg') }}" alt=""> </a>
        </div>
    </div>
    <!--END PRESS RELEASE SECTION -->
    <!-- Advertise Here -->
    <div class="row mx-auto mt-4">
        <div class="col-lg-12 bg-blue text-white rounded d-flex justify-content-between align-items-center">
            <div>
                <img src="{{ asset('img/svg/advertise-atom.svg') }}" alt="">
            </div>
            <div class="mt-4 ml-3">
                <h1> >>>>> Advertise Here </h1>
            </div>
        </div>
    </div>
     <!-- End Advertise Here -->
    <div class="mt-4 mb-4 row border border-secondary border-top-3 mx-auto">
    </div>
    <div class="row flex-column align-items-center pb-5 mt-5">
        <h1 class="cryptohome-header-text">Industry Awards</h1>
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