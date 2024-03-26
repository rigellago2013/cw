@extends('layouts.cryptoapp')

@section('title')
The #1 Cryptocurrency Intelligence Platform | Crypto Experts | CryptoWeekly
@stop
@section('description', 'CryptoWeekly is an intelligence platform for people & businesses invested in cryptocurrency companies. Meet teams building the next wave of crypto companies.')
@section('keywords', 'crypto, blockchain, cryptocurrency, crypto company, investors, founders, CEOs, business, leaders, defi, NFT, content, YouTube, YouTubers, crypto domains, database, CRM lists, cryptocurrency media, crypto media platform, top crypto news, crypto top stories, top cryptocurrency news, blockchain news, cryptocurrency news outlet')
@section('robots', 'index, follow')
@section('revisit-after', '3 days')

@section('content')
<div class="container-fluid site-width pt-5">
    <div class="row">
        <div class="col">
            <h1 class="font-weight-bold">Trending Videos</h1>
            <div class="row">
                <div class="col-lg-8">
                    <div class="featured-video position-relative  d-flex align-items-stretch h-100">
                        <div class="embed-responsive embed-responsive-21by9 rounded-lg">
                            {!! $top2[0]['video'] !!}
                        </div>
                        <div class="featured-video__info text-light ml-3" style="position: absolute; bottom: 70px;">
                            <!-- <h3 class="font-weight-bold mt-2" style="margin-top:40% !important;">{{ $top2[0]['title'] }} </h3> -->
                            <div class="author d-flex align-items-center">
                                <!-- <div class="author__avatar">
                                    <img src="{{ asset('img/pp.png') }}" class="rounded-circle" alt="...">
                                </div> -->
                                <div class="author__info" >
                                    <h5 class="author__name m-0 font-weight-bold">{{ $top2[0]['channel_name'] }}</h5>
                                    <p class="news__publish-date m-0">{{ $top2[0]['upload_date_formatted'] }} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="featured-video position-relative featured-video position-relative d-flex align-items-stretch h-100">
                        <div class="embed-responsive embed-responsive-1by1 rounded-lg">
                            {!! $top2[1]['video'] !!}
                        </div>
                        <!-- <h3 class="font-weight-bold mt-2">{{ $top2[1]['title'] }} </h3>  -->
                        <div class="featured-video__info text-light" style="position: absolute; bottom: 70px;">
                            <div class="author  d-flex align-items-center">
                                <!-- <div class="author__avatar">
                                    <img src="{{ asset('img/pp.png') }}" class="rounded-circle" alt="...">
                                </div> -->
                                <div class="author__info ml-2">
                                    <h5 class="author__name m-0 font-weight-bold">{{ $top2[1]['channel_name'] }}</h5>
                                    <p class="views-date m-0">{{ $top2[1]['upload_date_formatted']  }} </p>
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
    <div class="row">
        <div class="col-lg-12">
            <h2 class="font-weight-bold mb-4">Crypto Videos</h2>
            <div class="row" id="cryptoVideos">

            </div>
      
        </div>
    </div>
    <div class="ajax-load text-center" style="display:none">
        <i class="mdi mdi-48px mdi-spin mdi-loading"></i> Loading ...
    </div>
</div>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    var page = 1; // Initialize page number
    var loading = false; // Flag to track whether AJAX request is in progress
    var noMoreData = false; // Flag to indicate if there's no more data to load

    $(document).ready(function () {
        // Function to load more data when user scrolls to the bottom
        $(window).scroll(function () {
            if (!loading && !noMoreData && $(window).scrollTop() + $(window).height() >= $(document).height()) {
                loadMoreData();
            }
        });

        // Function to load more data via AJAX
        function loadMoreData() {
            loading = true; // Set loading flag to true
            // Show loader
            $('.ajax-load').show();

            // AJAX request to fetch more videos
            $.ajax({
                url: '{{ route("cryptoyoutube") }}',
                type: 'get',
                data: {page: page},
                success: function (data) {
                    if(data.data.length > 0) {
                        // Render the HTML based on JSON data
                        renderVideos(data);
                        page++; // Increment page number
                    } else {
                        // No more data available
                        noMoreData = true;
                    }
                },
                error: function (xhr, status, error) {
                    // Handle error (e.g., display a message)
                    console.error(xhr.responseText);
                },
                complete: function () {
                    loading = false; // Reset loading flag
                    // Hide loader
                    $('.ajax-load').hide();
                }
            });
        }

        // Function to render videos based on JSON data
        function renderVideos(data) {
            var html = '';
            data.data.forEach(function (video) {
                // Construct HTML for each video
                html += '<div class="col-lg-3 mb-3">';
                html += '<div class="card border-0 rounded-lg px-2 gray-bg  flex-fill h-100">';
                html += '<div class="embed-responsive embed-responsive-4by3 rounded">';
                html += video.video; // Assuming video is a HTML string
                html += '</div>';
                html += '<div class="card-body p-2 d-flex flex-column justify-content-between">';
                html += '<div class="author d-flex align-items-center">';
                html += '<div class="author__avatar">';
                html += '<img src="{{ asset("img/pp.png") }}" class="rounded-circle" alt="...">';
                html += '</div>';
                html += '<div class="author__info ml-2">';
                html += '<h5 class="author__name m-0 font-weight-bold">' + video.channel_name + '</h5>';
                html += '</div>';
                html += '</div>';
                html += '<h5 class="card-title mt-3 mb-2 font-weight-bold">' + video.title + '</h5>';
                html += '<p class="views-date d-flex align-items-center justify-content-between">' + video.upload_date_format + '<a href="#" class="news-link"><img src="{{ asset('img/crypto_news/arrow-upright.png') }}" class="" alt="..."></a></p>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
            });

            // Append HTML to the container
            $('#cryptoVideos').append(html);
        }
    });
</script>
