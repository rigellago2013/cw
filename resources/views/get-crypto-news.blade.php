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
    <div class="row">
        <div class="col-lg-10">
            <div class="news-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active font-weight-bold" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
            <div class="news-featured-image">
                <img src="{{ asset('img./single_news/Mask Group (3).png') }}" class="" alt="...">
            </div>
            <div class="info-box d-flex align-items-center justify-content-between py-3">
                <div class="author d-flex align-items-center">
                    <div class="author__avatar">
                        <img src="{{ asset('img./single_news/author.png') }}" class="rounded-circle" alt="...">                 
                    </div>
                    <div class="author__info ml-2">
                        <h5 class="author__name m-0 font-weight-bold">Haider Jamal</h5>
                        <p class="news__publish-date m-0">20th December 2023</p>
                    </div>
                </div>
                <div class="source">
                    <a href="">Source: DeFi News Report</a>
                </div>
            </div>
            <div class="news-content">
                <h2 class="font-weight-bold">Huge Security Vulnerability Discovered By Thirdweb</h2>

                <p>Thirdweb, a smart contract development entity operating within the Web3 ecosystem, has detected a security vulnerability that has the potential to impact a variety of smart contracts in the Web3 domain. The company, which supplies tools for deploying multi-chain smart contracts in areas like gaming, minting, marketplaces, and wallets, caters to a user base exceeding 70,000 developers.</p>

                <strong>No panic just yet</strong>

                <p>On December 4th, Thirdweb revealed a vulnerability in a widely used open-source library, affecting specific pre-built smart contracts, including some developed by the company. Despite the identification of this vulnerability, the investigations have determined that there has been no exploitation of the flaw in smart contracts. This presents a limited timeframe for Web3 firms to implement preventive measures and avoid potential security breaches.</p>


                <em>“Bitcoin consolidating for a long time. Bullish outlook with 0.618 Fib retracement at 48500 and 45K providing strong resistance. Past tests make 45K weaker. Bullish potential towards a new ATH.”</em>
                <img src="{{ asset('img/single_news/no-panic.png') }}" class="mb-3" alt="...">

                <p>Thirdweb nevertheless stressed the urgency of addressing the vulnerability promptly, highlighting the risk associated with affected pre-built contracts such as DropERC20, ERC721, ERC1155 (all versions), and AirdropERC20 if left unrectified.</p>

                <p>In response to the discovery, Thirdweb issued a proactive warning to the Web3 ecosystem, urging users who deployed its contracts before November 22nd to take independent mitigation steps or use a tool provided by the company.</p>

                <div class="ad-box my-3 p-4 rounded">
                    <h3 class="text-light"><strong>>>>>> Advertise Here</strong></h3>
                </div>
                <strong>Time is of the essence</strong>
                
                <p>Thirdweb recommended that developers assist users in revoking approvals on all affected contracts using revoke.cash, as suggested by DefiLlama developer 0xngmi. This measure aimed to offer additional protection to users who might choose not to implement contract mitigation steps.</p>

                <p>In light of the identified vulnerability in the open-source library, Thirdweb has taken proactive measures. The company has reached out to the maintainers of the open-source library responsible for the vulnerability and contacted other teams that may be affected. Thirdweb has also committed to enhancing its investment in security, doubling bug bounty payouts to $50,000, and implementing a more rigorous auditing process for its smart contract deployment tools.</p>

                <p>Moreover, Thirdweb is providing a grant to cover contract mitigations for affected users, although the full details of the vulnerability remain undisclosed for security reasons. It is noteworthy that Thirdweb successfully raised $24 million in a Series A funding round in August 2022, with contributions via prominent entities like Haun Ventures, Shopify, Coinbase, and Polygon.</p>
            </div>
            <div class="category-box border-top border-bottom py-4 blue-border">
                <div class="row">
                    <div class="col">
                        <div class="category-buttons d-flex">
                            <a href="" class="cat-btn px-2 py-1">CATEGORY</a>
                            <a href="" class="cat-btn px-2 py-1">CATEGORY</a>
                            <a href="" class="cat-btn px-2 py-1">CATEGORY</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="share-box py-3">
                <div class="row">
                    <div class="col">
                        <div class="share-box__links d-flex justify-content-end align-items-center">
                            <p class="mb-0 mr-5">Share</p>
                            <ul class="d-flex p-0 m-0">
                                <li><i class="fa fa-facebook-square" aria-hidden="true"></i></li>
                                <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-ellipsis-v" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            
        </div>
    </div>
    <div class="row more-news">
        <div class="col-lg-6">
            <h4 class="font-weight-bold pt-3 border-top">More From The News</h4>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card border-0 rounded-lg px-2 gray-bg">
                        <img src="https://www.shutterstock.com/image-vector/cryptocurrency-financial-items-altcoins-collection-600nw-2025103145.jpg" class="card-img-top mb-4 rounded" alt="...">
                        <div class="card-body p-2">
                            <a href="" class="cat-btn px-2 py-1">CATEGORY</a>
                            <h5 class="card-title mt-3 mb-2 font-weight-bold">Jack Dorsey Is Over Performance Reviews And Names New CTO</h5>
                            <p class="date-time d-flex align-items-center justify-content-between"><span>13 hours ago <span class="ml-4"> Sep 4, 2023</span></span><a href="#" class="news-link"><img src="{{ asset('img/crypto_news/arrow-upright.png') }}" class="" alt="..."></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card border-0 rounded-lg px-2 gray-bg">
                        <img src="https://www.shutterstock.com/image-vector/cryptocurrency-financial-items-altcoins-collection-600nw-2025103145.jpg" class="card-img-top mb-4 rounded" alt="...">
                        <div class="card-body p-2">
                            <a href="" class="cat-btn px-2 py-1">CATEGORY</a>
                            <h5 class="card-title mt-3 mb-2 font-weight-bold">Jack Dorsey Is Over Performance Reviews And Names New CTO</h5>
                            <p class="date-time d-flex align-items-center justify-content-between"><span>13 hours ago <span class="ml-4"> Sep 4, 2023</span></span><a href="#" class="news-link"><img src="{{ asset('img/crypto_news/arrow-upright.png') }}" class="" alt="..."></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card border-0 rounded-lg px-2 gray-bg">
                        <img src="https://www.shutterstock.com/image-vector/cryptocurrency-financial-items-altcoins-collection-600nw-2025103145.jpg" class="card-img-top mb-4 rounded" alt="...">
                        <div class="card-body p-2">
                            <a href="" class="cat-btn px-2 py-1">CATEGORY</a>
                            <h5 class="card-title mt-3 mb-2 font-weight-bold">Jack Dorsey Is Over Performance Reviews And Names New CTO</h5>
                            <p class="date-time d-flex align-items-center justify-content-between"><span>13 hours ago <span class="ml-4"> Sep 4, 2023</span></span><a href="#" class="news-link"><img src="{{ asset('img/crypto_news/arrow-upright.png') }}" class="" alt="..."></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card border-0 rounded-lg px-2 gray-bg">
                        <img src="https://www.shutterstock.com/image-vector/cryptocurrency-financial-items-altcoins-collection-600nw-2025103145.jpg" class="card-img-top mb-4 rounded" alt="...">
                        <div class="card-body p-2">
                            <a href="" class="cat-btn px-2 py-1">CATEGORY</a>
                            <h5 class="card-title mt-3 mb-2 font-weight-bold">Jack Dorsey Is Over Performance Reviews And Names New CTO</h5>
                            <p class="date-time d-flex align-items-center justify-content-between"><span>13 hours ago <span class="ml-4"> Sep 4, 2023</span></span><a href="#" class="news-link"><img src="{{ asset('img/crypto_news/arrow-upright.png') }}" class="" alt="..."></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card border-0 rounded-lg px-2 gray-bg">
                        <img src="https://www.shutterstock.com/image-vector/cryptocurrency-financial-items-altcoins-collection-600nw-2025103145.jpg" class="card-img-top mb-4 rounded" alt="...">
                        <div class="card-body p-2">
                            <a href="" class="cat-btn px-2 py-1">CATEGORY</a>
                            <h5 class="card-title mt-3 mb-2 font-weight-bold">Jack Dorsey Is Over Performance Reviews And Names New CTO</h5>
                            <p class="date-time d-flex align-items-center justify-content-between"><span>13 hours ago <span class="ml-4"> Sep 4, 2023</span></span><a href="#" class="news-link"><img src="{{ asset('img/crypto_news/arrow-upright.png') }}" class="" alt="..."></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card border-0 rounded-lg px-2 gray-bg">
                        <img src="https://www.shutterstock.com/image-vector/cryptocurrency-financial-items-altcoins-collection-600nw-2025103145.jpg" class="card-img-top mb-4 rounded" alt="...">
                        <div class="card-body p-2">
                            <a href="" class="cat-btn px-2 py-1">CATEGORY</a>
                            <h5 class="card-title mt-3 mb-2 font-weight-bold">Jack Dorsey Is Over Performance Reviews And Names New CTO</h5>
                            <p class="date-time d-flex align-items-center justify-content-between"><span>13 hours ago <span class="ml-4"> Sep 4, 2023</span></span><a href="#" class="news-link"><img src="{{ asset('img/crypto_news/arrow-upright.png') }}" class="" alt="..."></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <h4 class="font-weight-bold pt-3 border-top">Press Releases</h4>
            <div class="press-releases">
                <div class="card mb-4 border-0 ">
                    <div class="d-flex align-items-start">
                        <div class="img-col">
                            <div class="news-img">
                                <img src="{{ asset('img/crypto_news/Frame 5.png') }}" class="card-img" alt="...">
                            </div>
                        </div>
                        <div class="content-col">
                            <div class="card-body pt-0 pb-0">
                                <h5 class="card-title font-weight-bold" style="color: #1663FF;">DeFi</h5>
                                <h5 class="card-title font-weight-bold">Pink stairs leading to the sky</h5>
                                <p class="card-text"><small class="text-muted">13 hours ago <span class="pl-4"> Sep 4, 2023</span></small></p>
                                <p class="card-text">In my opinion, Ui/Ux design is the foundation of a product, its face and soul. You can create an infinitely high-quality heart, and organize the simulation of breathing, but we <span class="font-weight-bold" style="color: #1663FF;">...read more</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 ">
                    <div class="d-flex align-items-start">
                        <div class="img-col">
                            <div class="news-img">
                                <img src="{{ asset('img/crypto_news/Frame 5.png') }}" class="card-img" alt="...">
                            </div>
                        </div>
                        <div class="content-col">
                            <div class="card-body pt-0 pb-0">
                                <h5 class="card-title font-weight-bold" style="color: #1663FF;">DeFi</h5>
                                <h5 class="card-title font-weight-bold">Pink stairs leading to the sky</h5>
                                <p class="card-text"><small class="text-muted">13 hours ago <span class="pl-4"> Sep 4, 2023</span></small></p>
                                <p class="card-text">In my opinion, Ui/Ux design is the foundation of a product, its face and soul. You can create an infinitely high-quality heart, and organize the simulation of breathing, but we <span class="font-weight-bold" style="color: #1663FF;">...read more</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 ">
                    <div class="d-flex align-items-start">
                        <div class="img-col">
                            <div class="news-img">
                                <img src="{{ asset('img/crypto_news/Frame 5.png') }}" class="card-img" alt="...">
                            </div>
                        </div>
                        <div class="content-col">
                            <div class="card-body pt-0 pb-0">
                                <h5 class="card-title font-weight-bold" style="color: #1663FF;">DeFi</h5>
                                <h5 class="card-title font-weight-bold">Pink stairs leading to the sky</h5>
                                <p class="card-text"><small class="text-muted">13 hours ago <span class="pl-4"> Sep 4, 2023</span></small></p>
                                <p class="card-text">In my opinion, Ui/Ux design is the foundation of a product, its face and soul. You can create an infinitely high-quality heart, and organize the simulation of breathing, but we <span class="font-weight-bold" style="color: #1663FF;">...read more</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 ">
                    <div class="d-flex align-items-start">
                        <div class="img-col">
                            <div class="news-img">
                                <img src="{{ asset('img/crypto_news/Frame 5.png') }}" class="card-img" alt="...">
                            </div>
                        </div>
                        <div class="content-col">
                            <div class="card-body pt-0 pb-0">
                                <h5 class="card-title font-weight-bold" style="color: #1663FF;">DeFi</h5>
                                <h5 class="card-title font-weight-bold">Pink stairs leading to the sky</h5>
                                <p class="card-text"><small class="text-muted">13 hours ago <span class="pl-4"> Sep 4, 2023</span></small></p>
                                <p class="card-text">In my opinion, Ui/Ux design is the foundation of a product, its face and soul. You can create an infinitely high-quality heart, and organize the simulation of breathing, but we <span class="font-weight-bold" style="color: #1663FF;">...read more</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
