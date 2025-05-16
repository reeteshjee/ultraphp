<div class="card taja-card">
	<div class="card-header"> ताजा समाचार </div>
	<div class="card-body" style="height:328px;">
		<?php foreach($latest as $news){?>
			<h6> 
				<a href="<?php echo getDetailLink($news);?>"> 
					<?php echo $news['title'];?>
				</a> 
			</h6>
		<?php } ?>
	</div>
</div>