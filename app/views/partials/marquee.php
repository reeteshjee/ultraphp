<div class="slider-news">
	<div class="container">
		<marquee loop="-1" behavior="scroll" onmouseover="this.stop()" onmouseout="this.start()" direction="left" scrollamount="8" style="padding:6px 10px 0px;">
			<?php foreach($latest as $news){?>
				<a href="<?php echo getDetailLink($news);?>">
					<?php echo $news['title'];?>
				</a> 
			<?php } ?>
		</marquee>
	</div>
</div>
