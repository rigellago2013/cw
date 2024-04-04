@extends('layouts.cryptoapp')

@section('title')
The #1 Cryptocurrency Intelligence Platform | Crypto Experts | CryptoWeekly
@stop
@section('description', 'CryptoWeekly is an intelligence platform for people & businesses invested in cryptocurrency companies. Meet teams building the next wave of crypto companies.')
@section('keywords', 'crypto, blockchain, cryptocurrency, crypto company, investors, founders, CEOs, business, leaders, defi, NFT, content, YouTube, YouTubers, crypto domains, database, CRM lists, cryptocurrency media, crypto media platform, top crypto news, crypto top stories, top cryptourrency news, blockchain news, cryptocurrency news outlet')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')



<div class="container-fluid">

    <!-- TOP PICKS 
        <div class="row ">
                <div class="col-md-12 home_top_gainer card justify-content-center brand_background border-0">
                
                <h5 class="top-picks-title crypto-text-color-blue text-center">Top 10 Coins</h5>

                    <div class="row top_pick_every_five_sec home_top_gainer_card">
                    
                        <div class="card home_top_gainer_card">
                            
                            <div class="spinner-border text-primary text-center " role="status">
                            <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    
                    </div>        
        
    </br>
                </div>
            -->
    <!--  TOP PICK ENDS -->



    <!-- Second ROW -->

    <div class="row justify-content-center" style="padding: 0px 15px;">

        <!-- Left Section -->
        <div class="col-md-6">
            <!-- Top Story Start -->
            <div class="card shadow">

                <a href="{{route('static.crypto_feeds')}}" class="crypto-blue font-weight-bolder ">
                    <h5 class="home-page-widget-title crypto-text-color-blue">Crypto Feed</h5>
                </a>
                <div class="card-body">
                    <div class="row">
                        @foreach($topstories as $ns)

                        <div class="col-md-6 card crypto_feed_card">
                            <?php echo html_entity_decode($ns->video) ?>

                            <div class="crypto_feed_bottom">
                                <span class="crypto_feed_title">{{$ns->title}}</span>
                                <span class="crypto_feed_date crypto-text-color-blue">{{date('M-d-Y', strtotime($ns->upload_date))}}</span>
                            </div>
                        </div>
                        @endforeach

                    </div>

                    <div class="text-right  p-3"> <a href="{{route('static.crypto_feeds')}}" class="crypto-blue font-weight-bolder">Watch more</a>
                    </div>
                </div>

            </div>
            <!-- Top Story Ends -->
            <br />
            <!-- Crypto Banner -->
            <div class="card shadow ">
                <a href="mailto:sales@cryptoweekly.co">
                    <img src="{{ asset('img/banners/banner-cryptoweekly-v5.gif') }}" style="width:100%" />
                </a>

            </div>
            <!-- Crypto Banner End -->
            <br />


        </div>
        <!-- Left Section End -->

        <!-- Right Section -->
        <div class="col-md-6 ">
            <!-- Funding Deals -->
            <div class="card shadow crypto-text-color-blue">

                <a href="{{route('static.funding.deals')}}" class="crypto-blue font-weight-bolder ">
                    <h5 class="home-page-widget-title crypto-text-color-blue">Funding Deals</h5>
                </a>

                <div class="card-body">
                    <table class="table table-responsive-md table-responsive-sm" id="funding_deals">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th>Logo</th>
                                <th>Company</th>
                                <th>Funding (USD)</th>
                                <th>Funding Type</th>
                                <th>Lead Investor</th>
                                <th>Completion Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($funding_deals as $fd)
                            <tr>
                                <td><img src='{{$fd->logo}}' height="30px" /></td>
                                <td><a href="{{$fd->c_website}}" target="_blank">{{$fd->company}}</a></td>

                                <td>{{$fd->funding}}</td>
                                <td>{{$fd->funding_type}}</td>
                                <td><a href="{{$fd->i_website}}" target="_blank">{{$fd->lead_investor}}</a></td>
                                <td>{{$fd->completion_date}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                    <div class="text-right"> <a href="{{route('static.funding.deals')}}" class="crypto-blue font-weight-bolder ">View more</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- Funding Deals End -->




    </div>
    <!-- Right Section End -->

</div>





<!-- last ROW -->
<div class="row justify-content-center" style="padding: 0 15px;">

    <!-- Left Section -->
    <div class="col-md-6">
        <!-- Past News Letter -->


        <div class="card shadow" style="height:100%">

            <a href="{{route('blog.multiple_blog_view')}}" class="crypto-blue font-weight-bolder ">
                <h5 class="home-page-widget-title crypto-text-color-blue">Crypto Blogs</h5>
            </a>

            <div class="row p-3">

                @foreach($blogs as $blog)
                <div class="col-12 col-md-12 col-lg-4 d-flex" style="margin-top:10px;border-radius:10px;" onclick="location.href='/crypto-blog/{{$blog->blog_title}}_{{$blog->blog_id}}'">
                    <div class=" card border shadow" style="box-shadow: 0 0.1rem 0.3rem rgb(52 58 64 / 15;">

                        <div class="">
                            <?php if ($blog->video != "") { ?>
                                <?php echo html_entity_decode($blog->video) ?>
                            <?php } else if ($blog->title_img != "") { ?>
                                <img src="{{$blog->title_img}}" class="card-img-top" />
                            <?php } ?>
                        </div>


                        <div class="card-body ">

                            <p class="text-right font-weight-bold">{{date('F d,Y', strtotime($blog->published_on))}}</p>
                            <h5 class="crypto-text-color-blue font-weight-bold"> {{$blog->blog_title}} </h5>
                        </div>


                    </div>


                </div>


                @endforeach
            </div>
            <div class="text-right p-3"> <a href="{{route('blog.multiple_blog_view')}}" class="crypto-blue font-weight-bolder ">Read more</a>
            </div>
        </div>



        <!-- Past News Letter End -->


    </div>

    <!-- righi Section -->

    <div class="col-md-6">
        <!-- Past News Letter -->

        <div class="card shadow" style="height:100%">
            <a href="{{route('static.newsletter')}}" class="crypto-blue font-weight-bolder ">
                <h5 class="home-page-widget-title crypto-text-color-blue">Past Newsletters</h5>
            </a>

            <div class="card-body text-center">
                <h4 style="text-align :center;color: #B8B8B8
">Subscribe to the CryptoWeekly Newsletter</h4>
                <div class="row ">
                    <div class="subscribe_componenet_alignment" style="width:100%   ">

                        <div class="ctct-inline-form" data-form-id="1b0ec776-776e-4315-a6cf-abe141cae893"></div>
                    </div>
                    @foreach($newsletters as $ns)
                    <div class="col-md-4 news-letter-outer-container" onclick="open_news_letter(this)">
                        <div class="newsletter-container">

                            <div class="newsletter-image-container">
                                <img src='{{asset("newsletters/$ns->image")}}' width="200px" />
                            </div>
                            <!-- <div class="news-letter-title"><p> {{$ns->header}}</p> </div> -->
                            <a href="{{$ns->link}}" target="_blank">{{$ns->header}} </a>

                        </div>
                    </div>

                    @endforeach
                </div>
                <div class="text-right"> <a href="{{route('static.newsletter')}}" class="crypto-blue font-weight-bolder ">Read More</a>
                </div>
            </div>


        </div>

        <!-- Past News Letter End -->


    </div>
</div>





</div>

</div>
</div>
</div>

@component('components.home_page_investor_zopne')

@endcomponent

@include('awards')

@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        function home_top_gainer() {
            $.ajax({
                type: 'get',
                url: '{{route("top_pick.top_pick_for_home_page")}}',
                data: '_token = <?php echo csrf_token() ?>',
                success: function(data) {
                    var data = JSON.parse(data);
                    console.log(data);
                    var conis_Data = "";
                    jQuery.each(data, function(i, val) {
                        //$( "#" + val ).text( "Mine is " + val + "." );                
                        conis_Data += '<div class="card col-md-2 home_top_gainer_card shadow ">';

                        conis_Data += '<div class="card-body top_gainer_body">';



                        conis_Data += '<div class="icon"><img src="' + val.image + '" class="top_gainer_icon" /></div>';
                        //  conis_Data+='<div class="icon"><img src="'+val.image+'" class="top_gainer_icon" />'+val.symbol.toUpperCase()+'</span></div>';
                        conis_Data += "<div class='coin-title'>" + val.name + "</div>";
                        var price_change_24 = val.price_change_percentage_24h;
                        var color = "#00d68f !important";
                        var arrow = "🠕";
                        if (price_change_24 < 0) {
                            color = 'red';
                            arrow = "🠗";
                        }
                        conis_Data += "<span style='color:" + color + "' class='profit_loss_percentage' >" + arrow + "&nbsp;" + val.price_change_percentage_24h.toFixed(2) + "% </span><br/><br/>";
                        // conis_Data+="<button class='btn btn-sm btn-outline-primary'>"+val.current_price.toFixed(2)+"</button>";


                        //  conis_Data+='<p style="font-size:12px;">'+val.price_change_percentage_24h +'</p>'          

                        conis_Data += '<span class="current_price"> $' + val.current_price.toFixed(2) + '  </span>'

                        conis_Data += '</div>';
                        conis_Data += '</div>';
                        // Will stop running after "three"
                        //  return ( val !== "three" );
                    });

                    $(".top_pick_every_five_sec").html(conis_Data);
                }
            });

        }

        home_top_gainer();
    });
</script>