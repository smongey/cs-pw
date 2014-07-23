<?php include('./head.inc'); ?>

      <div class=wrap>

<section class=news>

	<h1>News</h1>
	
	<div class=entries>

		<div class=entry>
			<img src="<?php echo $page->main_image->url ?>" alt="<?php echo $page->main_image->description ?>">
			<div class=info>
				<h2><?php echo $page->title; ?></h2>
				<?php echo $page->body; ?>
				<span class=date>Posted <?php echo date("j F, Y", $page->created); ?></span>
				<div class=share>
					<h4>Share</h4>
					<ul>
						<li><a href=#><span class=icon-social-twitter></span></a></li>
						<li><a href=#><span class=icon-social-facebook></span></a></li>
					</ul>
				</div>
			</div>
		</div>

	</div>

	<aside>
		<div class=tweets>

			<?php 
			$options = array(
			  'limit' => 1, 
			  'cacheSeconds' => 600,
			  'showDate' => '',
			  'listItemOpen' => '<p>',
			  'listItemClose' => '</p>'
			  ); 
			$t = $modules->get('MarkupTwitterFeed'); 
			echo $t->render($options); 
			?>

			<a href=http://twitter.com/Camilleos class=follow>
				<span class=icon-social-twitter></span> 
				<p>Follow Camille</p>
			</a>
		</div>
		<div class=archive>
			<h3>News Archive</h3>
			<ul>
			<?php 
			$newspage = $pages->get('1007');
			foreach($newspage->news_archive as $entry) { ?>

				<li>
					<a href="<?php echo $entry->url ?>">
					<h4><?php echo $entry->title ?></h4>
					<span class=date><?php echo date("j F, Y", $entry->created); ?></span>
					</a>
				</li>
					
			<?php } ?>

			</ul>
		</div>
	</aside>

</section>

</div>

<?php include('./foot.inc') ?>