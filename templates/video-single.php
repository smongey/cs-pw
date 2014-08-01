<?php include("./head.inc"); ?>

      <div class=wrap>

<section class=mainvideo>

	<h1>Videos</h1>
	
	<div class=latest>
		<?php echo $page->video_link ?>

		<div class=info>
			<h2><?php echo $page->title ?></h2>
			<?php if($video->album_date) { ?>
			<h3>Posted <?php echo $video->album_date ?></h3>
			<?php } ?>

			<div class=arrows>
				<?php if($page->prev != '') { ?><a class=prev href='<?php echo $page->prev->url ?>'>Previous</a><?php } ?>
				<?php if($page->next != '') { ?><a class=next href='<?php echo $page->next->url ?>'>Next</a><?php } ?>
			</div>
			<div class=share>
				<h4>Share</h4>
				<ul>
					<li><a href='http://www.twitter.com/share?url=<?php echo $page->url ?>'><span class=icon-social-twitter></span></a></li>
					<li><a href='https://www.facebook.com/sharer/sharer.php?u=<?php echo $page->url ?>'><span class=icon-social-facebook></span></a></li>
				</ul>
			</div>
		</div>
		
	</div>


	<div class=videos>
		<ul>
		<?php
			$videos = $pages->find("parent=/video/, limit=6"); 
			foreach($videos as $video) { 
			

				if($video === $page) {
					echo '';
				} else { ?>

				<li>
					<a href='<?php echo $video->url ?>'>
					<img src='<?php echo $video->images->size(200, 130)->url ?>' alt="">
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