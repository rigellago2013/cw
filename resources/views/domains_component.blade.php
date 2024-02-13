@foreach($domains as $dom)
    <div class="card col-md-3 domains_card" >
      <?php if($dom->sale_cost==0){ ?>
      <img class="card-img-top"src="{{asset('img/domains-Grey-stroke.png')}}" alt="Card image cap">
      <?php }else{ ?>
        <img class="card-img-top"src="{{asset('img/Grey-stroke-on-sale.png')}}" alt="Card image cap">
        <?php } ?>
        <div class="card-body">

        
        <?php if($dom->sale_cost==0){ ?>


          <h5 class="card-title crypto-text-color-blue domains_title " >{{$dom->domain}}</h5>

          <span class="domain-mini-title <?php echo $dom->currency ?>  " style="    float: left;">  <?php echo round($dom->actual_cost,2);?> </span>

      <?php }else{ ?>
        
        <h5 class="card-title crypto-text-color-blue domains_title " >{{$dom->domain}}</h5>
          <span class="domain-mini-title <?php echo $dom->currency ?>  "> <del> <?php echo round($dom->actual_cost,2);?></del>  </span>
          <span class="domain-mini-title <?php echo $dom->currency ?> text-success"> <?php echo round($dom->sale_cost,2);?></span>

        
        <?php } ?>
      
          <a href="{{$dom->url}}" type="button" target="_blank" class="domain-buy-btton-link"><button class="btn btn-sm btn-primary domain-buy-btton">Buy Now</button></a>
            <table class="text-center text-sm " >
          
      
           
            </table>
      </div>
  </div> 
 
      
    @endforeach
