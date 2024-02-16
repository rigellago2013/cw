@extends('layouts.cryptoapp')

@section('title')
The #1 Cryptocurrency Intelligence Platform | Crypto Experts | CryptoWeekly
@stop
@section('description', 'CryptoWeekly is an intelligence platform for people & businesses invested in cryptocurrency companies. Meet teams building the next wave of crypto companies.')
@section('keywords', 'crypto, blockchain, cryptocurrency, crypto company, investors, founders, CEOs, business, leaders, defi, NFT, content, YouTube, YouTubers, crypto domains, database, CRM lists, cryptocurrency media, crypto media platform, top crypto news, crypto top stories, top cryptourrency news, blockchain news, cryptocurrency news outlet')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')
<div class="container-fluid px-5 bg-white">
    <div class="row mt-5 mb-3 d-flex">
        <div class="col-lg-3 px-0">
            <div class="col-lg-12 px-0 flex-fill">
                <div class="cw-bg-card rounded p-3 h-100">
                    <h2 class="crptohome-header-text">Top News</h2>
                    <hr>
                    <div class="cw-landing-scrollable-content">

                    </div>
                    <a href="#" class="read-more-link">Read more latest news <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-lg-12 mt-3 px-0 flex-fill">
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
                <img src="https://bitpanda-academy.imgix.net/2fe0c1ee-9c2b-4ed9-927d-43f835193cd4/bitpanda-academy-intermediate-22-bitcoin-halving-header-NEW.png?auto=compress%2Cformat&fit=min&fm=jpg&q=80&w=2100" class="card-img-top" alt="...">
                <div class="card-body cw-landing-main-card-bg">
                    <h5 class="card-title">News Highlight</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="col-lg-12 px-0 h-100">
                <div class="cw-bg-card rounded p-3 flex-fill h-100 ">
                    <h2 class="crptohome-header-text">Funding Deals</h2>
                    <hr>
                    <div class="d-block d-flex flex-column">
                        <p>
                            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Collapse Button
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>



                    </div>
                    <div class="float-right bottom-0">
                        <a href="#">See Full List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row bg-blue text-white rounded">
        <div>
            <img src="{{ asset('img/svg/advertise-atom.svg') }}" alt="">
        </div>
        <div class="mt-4 pr-3 ml-auto">
            <h1> >>>>> Advertise Here </h1>
        </div>
    </div>
    <div class="mt-5 mb-5 row border border-secondary border-top-3">
    </div>
    <div class="row">
        <div class="col-lg-12 p-0 mb-4">
            <h1 class="crptohome-header-text">Latest News</h1>
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
    </div>

    <div class="row mt-5 mb-5">
        <div class="col-lg-12">
            <img src="{{ asset('img/svg/banner.svg') }}" style="width: 100%;">
        </div>
    </div>

    <!--CRYPTO VIDEOS SECTION -->
    <div class="row">
        <div class="col-lg-12 p-0 mb-4">
            <h1 class="crptohome-header-text">Crypto Videos</h1>
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

        <div class="col-lg-12 text-center mt-3">
            <a class="btn cw-landing-page-btn-view-all" href="#" role="button" style=""></a>
        </div>
    </div>
    <!--END CRYPTO VIDEOS SECTION -->
    <!--PRESS RELEASE SECTION -->
    <div class="row mb-2">
        <div class="col-lg-12 p-0 mb-4">
            <h1 class="crptohome-header-text">Press Releases</h1>
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
        <div class="col-lg-6 ml-auto pr-0">
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
    </div>
    <!--PRESS RELEASE SECTION -->
    <div class="row justify-content-between bg-blue text-white rounded">
        <div>
            <img src="{{ asset('img/svg/advertise-atom.svg') }}" alt="">
        </div>
        <div class="mt-4 mr-4">
            <h1> >>>>> Advertise Here </h1>
        </div>
    </div>
    <div class="mt-5 mb-5 row border border-secondary border-top-3">
    </div>
    <div class="row flex-column align-items-center pb-5">
        <h1 class="crptohome-header-text">Industry Awards</h1>
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