<?php include("./head.inc"); ?>

      <div class=wrap>

<section class=music>

	<h1>Music</h1>
	
	<div class=album>
		<div class=front>
			<img src='<?php echo $page->album_cover->url ?>' alt="<?php echo $page->album_cover->description ?>">
		</div>
		<div class=back>
			<h2><?php echo $page->title ?> <span><?php echo $page->album_date ?></span></h2>
			<?php echo $page->body ?>
			<div class=buy>
				<ul>
				<?php 
				$last = $page->buy->last();
				foreach($page->buy as $link) { ?>
					<li>
					<a href='<?php echo $link->link ?>'><?php echo $link->title ?></a><?php if($link === $last) { echo ''; } else { echo ' |'; } ?>
					</li>
				<?php } ?>
				</ul>
			</div>
			<div class=share>
				<h4>Share</h4>
				<ul>
					<li><a href=#><span class=icon-social-twitter></span></a></li>
					<li><a href=#><span class=icon-social-facebook></span></a></li>
				</ul>
			</div>
		</div>
	</div>


	<div class=albums>
		<h2>Previous Releases</h2>
		<ul>
		<?php
			$albums = $pages->find("parent=/music/, limit=6"); 
			foreach($albums as $album) { 
			

				if($album === $page) {
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
		</ul>

	</div>

</section>

</div>

<?php include('./foot.inc') ?>