<?php include("./head.inc"); ?>

    <section class=slider>
	<ul class=slider__wrapper>

		<?php foreach($page->slider as $slide){ ?>
		<li class=slider__item>
			<div class=box style="background: #e6e6e6 url('<?php echo $slide->slider_image->url ?>') center center no-repeat; background-size: cover">
				<div class=quote>
					<h2>
						<?php echo $slide->slider_quote ?>
					</h2>
					<span class=credit><?php echo $slide->slider_credit ?></span>
				</div>
			</div>
		</li>
		<?php } ?>

	</ul>
</section>
<a href=# class=down>Scroll Down</a>

<div class=wrap>

<?php echo $page->body; ?>

<section class=home>
	<div class=left>
		<div class=music style="background: url('<?php echo $page->music_image->url ?>') center center no-repeat; background-size: cover">
			<a href="music/">
				<h3>Music</h3>
			</a>
		</div>
		<div class=newsletter>
			<a href="<?php echo $page->newsletter_link ?>">
				<span class=icon-social-envelope></span>
				<h3>Newsletter</h3>
				<p><?php echo $page->newsletter_text ?></p>
			</a>
		</div>
	</div>
	<div class=middle>
		<?php foreach($page->find('parent=/news/, limit=2') as $entry) { ?>
		<div class=news style="background:url('<?php echo $entry->main_image->url ?>') center center no-repeat; background-size: cover">
			
			<a href="<?php echo $entry->url ?>">
				<h3><?php echo $entry->title ?></h3>
			</a>
		</div>
		<?php } ?>
	</div>
	<div class=right>
		<div class=gigs style="background: url('<?php echo $page->gigs_image->url ?>') center center no-repeat; background-size: cover">
			<h3>Gigs <span>&amp; Upcoming <br>Shows</span></h3>
		</div>
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

			<!-- <p>Lovely feargal murray outside the <a href=#>@TheRSC</a> Swan Theatre Stratford Upon Avon, back tonight performing Lucrece again!!</p> -->
			<a href=http://twitter.com/Camilleos class=follow>
				<span class=icon-social-twitter></span> 
				<p>Follow Camille</p>
			</a>
		</div>
	</div>
</section>

</div>

<?php include("./foot.inc"); ?>