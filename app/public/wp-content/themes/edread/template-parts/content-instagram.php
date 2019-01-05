<div class="fade">
  <a href="https://www.instagram.com/mrnedread/" target="_blank"><h2 class="insta-headline mb3 mb4-ns bold tc">@MrNedRead</h2></a>
  <div class="flex flex-wrap mb5 justify-between"  id="instafeed"></div>
      <script type="text/javascript">
       var feed = new Instafeed({
          get: 'user',
          userId: 19240815,
          accessToken: '19240815.ee202c5.2b4f5c93c4494914b2dcbee0c566d6e4',
          limit: 3,
          resolution: 'standard_resolution',
          template: '<div class="insta-pic mb2"><a target="_blank" href="{{link}}"><div class="overlay"><div class="caption"><div class="likes"><div class="heart"><?php echo wp_get_attachment_image(102, 'full'); ?></div><h5>{{likes}}</h5></div><h5>{{caption}}</h5></div></div><img src="{{image}}"/></a></div>'
        });

        feed.run();
      </script>

  </div>
