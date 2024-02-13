@foreach($domains as $dom)
        <div class="col-md-3 card crypto_feed_card" style="margin-top:5px;">
            <?php echo html_entity_decode($dom->video) ?>

            <div class="crypto_feed_bottom">
            <span class="crypto_feed_title">{{$dom->title}}</span>
            <span class="crypto_feed_date crypto-text-color-blue">{{date('M-d-Y', strtotime($dom->upload_date))}}</span>
            </div>
         </div> 
         <br/>
      @endforeach