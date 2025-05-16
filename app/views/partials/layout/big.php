<div class="card">
	<div class="card-body p-0">
		<div class="row m-0">
    		<div class="col-md-8 big-news-block" data-link="<?php echo getDetailLink($slider[0]);?>">
       			<figure>
       				<img class="w-100" src="<?php echo defaultImage();?>" data-src="<?php echo getImage($slider[0]['featured_image']);?>"> 
       			</figure>
       			<div class="hover-box">
          			<div class="title"> 
          				<span class="category-tag" data-link="<?php echo getCategoryLink($slider[0]);?>"> 
							<?php echo $slider[0]['category'];?> 
						</span> 
          				<a href="<?php echo getDetailLink($slider[0]);?>"> 
          					<?php echo $slider[0]['title'];?>
          				</a> 
          			</div>
   				</div>
    		</div>
			<?php array_shift($slider);?>
    		<div class="col-md-4 p-0">
       			<div class="big-side-news">
          			<ul>
						<?php foreach($slider as $news){?>
							<li> 
								<span class="category-tag" data-link="<?php echo getLink('category/'.$news['slug']);?>"> 
									<?php echo $news['category'];?>
								</span> 
								<a href="<?php echo getDetailLink($news);?>"> 
									<?php echo $news['title'];?>
								</a> 
							</li>
						<?php } ?>
      				</ul>
       			</div>
    		</div>
 		</div>
	</div>
</div>