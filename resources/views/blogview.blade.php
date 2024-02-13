
@extends('layouts.cryptoapp')


@section('content')



    <div class="pt-0 mt-minus-3 bg-white">
        <div class="container-fluid ">
                <div class="row justify-content-center text-center mb-3  ">
                        

                            <div class=" col-md-11 col-lg-10 col-xl-9" >
                            @foreach($blogs as $blog)
                            <div class="row justify-content-center text-center mb-3">
                                <div class="col-md-11 col-lg-10 col-xl-9">
                                    <div class="my-3" style="margin-bottom:1.5rem !important;">
                                        <h1 class="crypto-text-color-blue font-weight-bold">{{$blog->blog_title}}</h1>
                                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                                        

                                            <div class="d-flex">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <section class="pt-0 mt-minus-3 bg-white">
                        <div class="container">
                            <div class="row justify-content-center mb-4 mb-md-5">
                                <div class="col-xl-10 mt-minus-3">
                                    <?php if($blog->video!=""){?>
                                                            <?php echo html_entity_decode($blog->video) ?>
                                                            <?php }else if($blog->title_img!=""){ ?>
                                                                <img src="{{$blog->title_img}}" class="rounded shadow-lg" style="width:100%"/>
                                                            <?php } ?>

                                </div>
                            </div>
                            
                            <a class="btn btn-sm btn-outline-dark" href="{{route('blog.multiple_blog_view')}}">Return to Crypto blogs</a>
                            <div class="row justify-content-center" style="text-align:justify;">
                                <div class="col-md-12 col-lg-12 col-xl-12">
                                    
                                <div class="tags text-align-right" >

                    <div class="crypto-100-title">
                    <div class="crypto-100-img">
                    <img src="{{$blog->profile_link}}" class="crypto-100-card-image" />
                    </div>

                    <div class="crypto-100-customer-details ">
                        <div class="name crypto-text-color-blue">{{$blog->name}}</div> 

                    <?php if($blog->youtube) {?>
                    <a href="{{$blog->youtube}}" class="btn crypto-text-color-blue" style="border:1px solid;"><i class="fa fa-youtube-play" ></i></a>

                    <?php }?>
                    <?php if($blog->facebook) {?>
                    <a href="{{$blog->facebook}}" class="btn  crypto-text-color-blue"style="border:1px solid;" ><i class="fa fa fa-facebook-official" ></i> </a>
                    <?php }?>
                    <?php if($blog->twitter) {?>
                    <a href="{{$blog->twitter}}" class="btn crypto-text-color-blue"style="border:1px solid;" ><i class="fa fa-twitter" ></i> </a>
                    <?php }?>

                    <?php if($blog->linkedin) {?>
                    <a href="{{$blog->linkedin}}" class="btn crypto-text-color-blue" style="border:1px solid;"><i class="fa fa-linkedin" ></i> </a>
                                    
                    <?php }?>                   

                        <div class="crypto-text-color-blue font-weight-bold">{{date('F d,Y', strtotime($blog->published_on))}}</div>
                    </div>
                            </div>
                        
                        </div> 

                    <hr/>
                                    <article style="font-size:16px">
                                       <?php $bcontent=$blog->blog;?>
                <?php $bcontent=str_replace("&amp39","'",$bcontent); ?> 
                <?php $bcontent=str_replace("&rsquo","'",$bcontent); ?>
                <?php $bcontent=str_replace("&rdquo","\"",$bcontent); ?>
                <?php $bcontent=str_replace("&rsquo","\"",$bcontent); ?>
                <?php $bcontent=str_replace("&rsquo","'",$bcontent); ?>

                <?php $bcontent=str_replace("&amprsquo","'",$bcontent); ?>
                <?php $bcontent=str_replace("&amprdquo","\"",$bcontent); ?>
                <?php $bcontent=str_replace("&amprsquo","\"",$bcontent); ?>
                <?php $bcontent=str_replace("&amprsquo","'",$bcontent); ?>
                                  
                                    
                                    <?php echo htmlspecialchars_decode($bcontent);
                                    
                                    ?>
                                    
                                    
                                </article>
                                </div>
                            </div>
                        </div>
                    </section>



           
                    @endforeach



                </div>
  
  
           



                
        </div>


                        



<div class="container card shadow">
                <div class="row text-center">
                    <div class="col-md-12">
                        <br/> <br/> <br/>
                        <img src="{{ asset('img/CryptoWeekly-Logo.png.webp') }}" class="newsletter-popup-logo" height="auto" />
                        <br/> <br/> <br/>
                        <h4 class="newsletter-popup-header">Subscribe to the CryptoWeekly Newsletter</h4>

                        <div class="subscribe_componenet_alignment">
                                                    <!-- Begin Constant Contact Inline Form Code -->
                            <div class="ctct-inline-form" data-form-id="1b0ec776-776e-4315-a6cf-abe141cae893"></div>
                            <!-- End Constant Contact Inline Form Code -->
                        </div>

                        <p class="text-center ">
                            Get the top stories, funding deals, technical analysis, cryptocurrency jobs and much more delivered to your inbox, every Monday morning.
                        </p>
                    </div>
                </div>
            </div>

            </div>


                    </br>
        <div class="container">
            <div class="row">
                @foreach($tempblogs as $blog)
                <div class="col-12 col-md-6 col-lg-4 d-flex"  style="margin-top:10px;border-radius:10px;"   onclick="location.href='/crypto-blog/{{str_replace('?','',$blog->blog_title)}}_{{$blog->blog_id}}'">
                    
                            <div class=" card border shadow" style="box-shadow: 0 0.1rem 0.3rem rgb(52 58 64 / 15;"> 
                        
                    <div class="">
                            <?php if($blog->video!=""){?>
                            <?php echo html_entity_decode($blog->video) ?>
                            <?php }else if($blog->title_img!=""){ ?>
                                <img src="{{$blog->title_img}}" class="card-img-top"/>
                            <?php } ?>
                    </div>
                    

                            <div class="card-body " >
                            
            <p class="text-right font-weight-bold">{{date('F d,Y', strtotime($blog->published_on))}}</p>
                            <h5 class="crypto-text-color-blue font-weight-bold "> {{$blog->blog_title}} </h5>
                            <div class="" style="height:200px;overflow:hidden;">
                                
                                                           <?php $bcontent=$blog->blog;?>
                <?php $bcontent=str_replace("&amp39","'",$bcontent); ?> 
                <?php $bcontent=str_replace("&rsquo","'",$bcontent); ?>
                <?php $bcontent=str_replace("&rdquo","\"",$bcontent); ?>
                <?php $bcontent=str_replace("&rsquo","\"",$bcontent); ?>
                <?php $bcontent=str_replace("&rsquo","'",$bcontent); ?>

                <?php $bcontent=str_replace("&amprsquo","'",$bcontent); ?>
                <?php $bcontent=str_replace("&amprdquo","\"",$bcontent); ?>
                <?php $bcontent=str_replace("&amprsquo","\"",$bcontent); ?>
                <?php $bcontent=str_replace("&amprsquo","'",$bcontent); ?>
                                  
                                    
                                    <?php echo htmlspecialchars_decode($bcontent);
                                    
                                    ?>
                                
                              <?php //echo  str_replace("&39","'",$blog->blog); ; ?>
                            </div>
                        
                            </div>

                            </div>

                        
                        </div>    

                    
                @endforeach
            </div>
        </div>

       
<section class="pt-0 pb-0 bg-white">
    <div class="height-40 py-3 py-md-4">
        <div class="container">
            <div class="row text-center justify-content-center">
              
                    {{$tempblogs->links()}}
              
            </div>
        </div>
    </div>
</section>
    </div>

@endsection 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

function loadMoreData(a){
      
	  $.ajax(
	        {
	            url: "{{route('blog.multiple_blog_view')}}",
	            type: "get",
                data: 
                {
                     search:a.value  ,
                     ajax:"search"
                },
	            beforeSend: function()
	            {
	               // $('.ajax-load').show();
	            }
	        })
	        .done(function(data)
	        {
	            if(data.html == ""){
	             //  $('.ajax-load').html("");
                   // page=-1;
	                return;
	            }
	           // $('.ajax-load').hide();
	            $(".posts").html(data);
	        })
	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
	             // alert('server not responding...');  
                 //console.log(throwError)
	        });
	}

$(document).ready(function(){


    var fixmeTop = $('.fixme').offset().top;
$(window).scroll(function() {
    var currentScroll = $(window).scrollTop();
    if (currentScroll >= fixmeTop) {
        $('.side_bar').css({
            position: 'fixed',
            top: '0',
            right: '250',
            width: "19%"
     
        });
    } else {
        $('.side_bar').css({
            position: 'static',
            width: "55%"
   
        });
    }
});


   $('.load_more').on('mouseover', function(e){
       var c=$(".current_page").val();
       $(".current_page").val(Number(c)+1);
    e.preventDefault();
    var url = "{{route('blog.multiple_blog_view')}}"+"?page="+$(".current_page").val();
    $.get(url, $('#search').serialize(), function(data){
       // console.log(data);
        $('.posts').append(data);
    });
});

});
</script>