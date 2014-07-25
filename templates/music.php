<?php include("./head.inc"); ?>

      <div class=wrap>

<section class=music>

	<h1>Music</h1>

	<?php 
		$albums = $pages->find("parent=/music/, limit=1"); 
		foreach($albums as $album) { 
	?>
	
	<div class=album>
		<div class=front>

			<img src="<?php echo $album->album_cover->url ?>" alt="<?php echo $album->album_cover->description ?>">
		</div>
		<div class=back>
			<h2><?php echo $album->title ?> <span><?php echo $album->album_date ?></span></h2>
			<?php echo $album->body ?>
			<div class=buy>
				<ul>
				<?php 
				$last = $album->buy->last();
				foreach($album->buy as $link) { ?>
					<li>
					<a href='<?php echo $link->link ?>'><?php echo $link->title ?></a><?php if($link === $last) { echo ''; } else { echo ' |'; } ?>
					</li>
				<?php } ?>
				</ul>
			</div>
			<div class=share>
				<h4>Share</h4>
				<ul>
						<li><a href='http://www.twitter.com/share?url=<?php echo $album->url ?>'><span class=icon-social-twitter></span></a></li>
						<li><a href='https://www.facebook.com/sharer/sharer.php?u=<?php echo $album->url ?>'><span class=icon-social-facebook></span></a></li>
				</ul>
			</div>
		</div>
	</div>

	<?php } ?>

	<div class=albums>
		<h2>Previous Releases</h2>
		<ul>

	<?php
		$count = 0;
		$albums = $pages->find("parent=/music/, limit=6"); 
		foreach($albums as $album) { 
			$count++;

			if($count === 1) {
				echo '';
			} else { ?>

			<li>
				<a href='<?php echo $album->url ?>'>
					<img src='<?php 
					echo $album->album_cover->url;
					echo $img ?>' alt="<?php echo $album->album_cover->description ?>">
					<h4><?php echo $album->title ?></h4>
				</a>
			</li>


	<?php 	}
		} ?>

<!-- 			<li>
				<a href=#>
					<img src=http://placehold.it/200x200/666 alt="">
					<h4>Album Title</h4>
				</a>
			</li>
			<li>
				<a href=#>
					<img src=http://placehold.it/200x200/666 alt="">
					<h4>Album Title</h4>
				</a>
			</li>
			<li>
				<a href=#>
					<img src=http://placehold.it/200x200/666 alt="">
					<h4>Album Title</h4>
				</a>
			</li>
			<li>
				<a href=#>
					<img src=http://placehold.it/200x200/666 alt="">
					<h4>Album Title</h4>
				</a>
			</li>
			<li>
				<a href=#>
					<img src=http://placehold.it/200x200/666 alt="">
					<h4>A Little Yearning</h4>
				</a>
			</li>
			<li>
				<a href=#>
					<img src=http://placehold.it/200x200/666 alt="">
					<h4>Live at the Olympia</h4>
				</a>
			</li> -->
		</ul>

	</div>

</section>

</div>

<?php include('./foot.inc') ?>