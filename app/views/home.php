<?php view('partials/meta');?>
   <body>
  		<?php view('partials/header');?>
  		<?php view('partials/marquee');?>
		<?php view('partials/breaking');?>
		
      
      <div class="container big-news-container">
         <div class="row">
            <div class="col-md-8">
               <?php view('partials/layout/big');?>
            </div>
            <div class="col-md-4">
               <?php view('partials/layout/latest');?>
            </div>
         </div>
      </div>

      <?php view('partials/saturday');?>
      
      <div class="container">
         <div class="row">
            <div class="col-md-9">
               <?php view('partials/video');?>
               <div class="row">
                  <?php echo $category_html;?>
               </div>
            </div>
            <div class="col-md-3">
               <div class="sticky">
                  <?php view('partials/tabs');?>
                  <?php view('partials/kheladi');?>
               </div>
            </div>
         </div>
      </div>
      <?php view('partials/footer');?>
   </body>
</html>