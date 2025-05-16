<div class="saturday-special">
 	<div class="container">
         <div class="saturday-title"> <a href="/saturday-list" style="text-decoration: none;color:#fff;">शनिबारको दिन</a> </div>
            <div class="row saturday-sponsored d-none">
                  <div class="col-12 p-md-0"> 
                     <img class="w-100" src="banner.png"> 
                  <i class="fa fa-close" onclick="showSaturday();"></i> 
               </div>
            </div>
        <div class="row saturday-row d-flex">
         <?php foreach($saturdays as $sat){?>
            <div class="col-md-3 saturday-box">
               <a href="/saturday-articles/<?php echo $sat[0]['saturday_date'];?>" style="font-size:22px;margin-bottom:10px;display:block;">
                  <span><?php echo getFormattedDate($sat[0]['published_on']);?></span> 
               </a> 
              <a href="<?php echo getDetailLink($sat[0]);?>">
                  <figure class="saturday-item" style="height:200px;"> 
                     <img class="w-100" style="height:100%;object-fit:cover;" src="<?php echo defaultImage();?>" data-src="<?php echo getImage($sat[0]['featured_image']);?>"> 
                  </figure>
              </a>
              <div class="saturday-item-title">
                 <ul style="height:220px;overflow: auto;">
                     <?php array_shift($sat); foreach($sat as $news){?>
                        <li style="margin-top:0;padding-top:0;margin-bottom:10px;padding-bottom:10px;border:none;border-bottom:1px solid #666;"> 
                           <a href="<?php echo getDetailLink($news);?>"> 
                              <?php echo $news['title'];?>
                           </a> 
                        </li>
                     <?php } ?>
                 </ul>
              </div>
           </div>
           <?php } ?>
        </div>
     </div>
  </div>