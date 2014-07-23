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
			<p>Lovely feargal murray outside the <a href=#>@TheRSC</a> Swan Theatre Stratford Upon Avon, back tonight performing Lucrece again!!</p>
			<a href=http://twitter.com/Camilleos class=follow>
				<span class=icon-social-twitter></span> 
				<p>Follow Camille</p>
			</a>
		</div>
		<div class=archive>
			<h3>News Archive</h3>
			<ul>
				<li>
					<a href=#>
					<h4>Headline Title</h4>
					<span class=date>Posted 21 June, 2010</span>
					</a>
				</li>
				<li>
					<a href=#>
					<h4>Headline Title</h4>
					<span class=date>Posted 21 June, 2010</span>
					</a>
				</li>
				<li>
					<a href=#>
					<h4>Headline Title</h4>
					<span class=date>Posted 21 June, 2010</span>
					</a>
				</li>
				<li>
					<a href=#>
					<h4>Headline Title</h4>
					<span class=date>Posted 21 June, 2010</span>
					</a>
				</li>
				<li>
					<a href=#>
					<h4>Headline Title</h4>
					<span class=date>Posted 21 June, 2010</span>
					</a>
				</li>
			</ul>
		</div>
	</aside>

</section>

</div>

<?php include('./foot.inc') ?>