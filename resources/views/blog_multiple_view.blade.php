@extends('layouts.cryptoapp')

@section('content')



<div class="bg-white">


<section class="pt-0 pb-0 bg-white">
    <div class="height-40 py-3 py-md-4">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-md-12 col-lg-10 spacer-y-3">
     
                    <img  class="display-4 mb-4 text-dark aos-init aos-animate" data-aos="fade-up" style="
    width: 250px;" src="{{asset('img/CryptoBlog.png')}}"  />
                    <input type="text" placeholder="Search a topic"  onkeyup="loadMoreData(this)" id="fsearch" class="form-control"/>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container   ">

  <div class="row posts" >
    
  @foreach($blogs as $blog)
  <div class="col-12 col-md-6 col-lg-4 d-flex"  style="margin-top:10px;border-radius:10px;"  onclick="location.href='/crypto-blog/{{str_replace('?','',$blog->blog_title)}}_{{$blog->blog_id}}'">
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
            <h5 class="crypto-text-color-blue font-weight-bold"> {{$blog->blog_title}} </h5>
            <div class="" style="height:200px;overflow:hidden;">
                <?php $bcontent=$blog->blog;?>
                <?php $bcontent=str_replace("&39","'",$bcontent); ?>
                <?php $bcontent=str_replace("&rsquo","'",$bcontent); ?>
                <?php $bcontent=str_replace("&rdquo","\"",$bcontent); ?>
                <?php $bcontent=str_replace("&rsquo","\"",$bcontent); ?>
                <?php $bcontent=str_replace("&rsquo","'",$bcontent); ?>


    <?php $bcontent=str_replace("&amp39","'",$bcontent); ?>
                <?php $bcontent=str_replace("&amprsquo","'",$bcontent); ?>
                <?php $bcontent=str_replace("&amprdquo","\"",$bcontent); ?>
                <?php $bcontent=str_replace("&amprsquo","\"",$bcontent); ?>
                <?php $bcontent=str_replace("&amprsquo","'",$bcontent); ?>


                                    <?php echo $bcontent;?>
            </div>
          
              </div>

            </div>

           
        </div>    

     
  @endforeach
           

  </div>
</br>

</div>







<section class="pt-0 pb-0 bg-white">
    <div class="height-40 py-3 py-md-4">
        <div class="container">
            <div class="row text-center justify-content-center">
              
                    {{$blogs->links()}}
              
            </div>
        </div>
    </div>
</section>




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


   


  $('.load_more').on('mouseover', function(e){
     console.log("asdasdf");
       var c=$(".current_page").val();
       $(".current_page").val(Number(c)+1);
    e.preventDefault();
    var url = "{{route('blog.multiple_blog_view')}}"+"?page="+$(".current_page").val()+"&multi=true";
    $.get(url, $('#search').serialize(), function(data){
       // console.log(data);
        $('.posts').append(data);
    });
  });

});
</script>