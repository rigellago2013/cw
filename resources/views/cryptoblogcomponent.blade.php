
  @foreach($blogs as $blog)
  <div class="col-12 col-md-6 col-lg-4 d-flex"  style="margin-top:10px;border-radius:10px;"  onclick="location.href='/crypto-blog/{{$blog->blog_title}}_{{$blog->blog_id}}'">
            <div class=" card border shadow" style="box-shadow: 0 0.1rem 0.3rem rgb(52 58 64 / 15;"> 
        
      <div class="">
            <?php if($blog->video!=""){?>
            <?php echo html_entity_decode($blog->video) ?>
            <?php }else if($blog->title_img!=""){ ?>
                <img src="{{$blog->title_img}}" class="card-img-top"/>
            <?php } ?>
      </div>
    

            <div class="card-body " >
            
            <h5 class="crypto-text-color-blue font-weight-bold"> {{$blog->blog_title}} </h5>
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
            </div>
          
              </div>

            </div>

           
        </div>    

     
  @endforeach
           