<?php include("./head.inc"); ?>

      <div class=wrap>

<section class=mainvideo>

	<h1>Videos</h1>

	<?php 
	$videos = $pages->find("parent=/video/, limit=1"); 
	foreach($videos as $video) { 
	?>
	<div class=latest>
		<?php echo $video->video_link ?>

		<div class=info>
			<h2><?php echo $video->title ?></h2>
			<h3>Posted <?php echo $video->album_date ?></h3>
			
			<div class=arrows>
				<?php if($video->prev != '') { ?><a class=prev href='<?php echo $video->prev->url ?>'>Previous</a><?php } ?>
				<?php if($video->next != '') { ?><a class=next href='<?php echo $video->next->url ?>'>Next</a><?php } ?>
			</div>
			<div class=share>
				<h4>Share</h4>
				<ul>
					<li><a href='http://www.twitter.com/share?url=<?php echo $video->url ?>'><span class=icon-social-twitter></span></a></li>
					<li><a href='https://www.facebook.com/sharer/sharer.php?u=<?php echo $video->url ?>'><span class=icon-social-facebook></span></a></li>
				</ul>
			</div>
		</div>
	</div>
	<?php } ?>

	<div class=videos>
		<ul>

		<?php
			$count = 0;
			$videos = $pages->find("parent=/video/, limit=30"); 
			foreach($videos as $video) { 
				$count++;
				if($count === 1) {
					echo '';
				} else { ?>

				<li>
					<a href='<?php echo $video->url ?>'>
						<img src='<?php echo $video->images->size(200, 130)->url ?>' alt="<?php echo $video->images->first()->description ?>">
						<h5><?php echo $video->title ?></h5>
					</a>
				</li>

		<?php 	}
		} ?>
		</ul>

	</div>

</section>

</div>

<?php include('./foot.inc') ?>