<?php if($breaking){?>
	<?php foreach($breaking as $break){?>
		<div class="container breaking-container">
			<div class="breaking-news" style="border-bottom: 1px solid #ddd;padding-bottom:20px;">
				<h2> 
					<a href="<?php echo getDetailLink($break);?>"> 
						<?php echo $break['title'];?>
					</a> 
				</h2>
				<?php if($break['breaking_image']){?>
					<figure> 
						<a href="<?php echo getDetailLink($break);?>"> 
							<img class="w-100" src="/default.png" data-src="<?php echo getImage($break['featured_image']);?>"> 
						</a>
					</figure>
				<?php } ?>
			</div>
		</div>
	<?php } ?>
<?php } ?>