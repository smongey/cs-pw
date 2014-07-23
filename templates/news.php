<?php include("./head.inc"); ?>

      <div class=wrap>

<section class=news>

	<h1>News</h1>
	
	<div class=entries>


		<?php
		$results = $pages->find("parent=/news/, limit=4, sort=title"); 
		$pagination = $results->renderPager(array(
			
		    'listMarkup' => "<ul class='paginate'>{out}</ul>",
		    'linkMarkup' => "<a href='{url}' class='more'>{out}</a>",
		    'nextItemLabel' => "Load More News",
		    'previousItemLabel' => "Go Back",
		    'itemMarkup' => "{out}",
		    'nextItemClass' => "more",
		    'previousItemClass' => "more",
		));

		$count = 0;
		foreach($results as $entry) { 
		$count++;
		?>

		<div class="entry<?php if ($count == 2) { echo ' half'; } elseif ($count == 3) { echo ' half second'; } ?>">
			<a href="<?php echo $entry->url ?>">
			<img src="<?php echo $entry->main_image->url ?>" alt="<?php echo $entry->main_image->description ?>">
			<div class=info>
				<h2><?php echo $entry->title ?></h2>
				<?php echo $entry->body ?>
				
				<span class=date>Posted <?php echo date("j F, Y", $page->created); ?></span>
				<div class=share>
					<h4>Share</h4>
					<ul>
						<li><a href=#><span class=icon-social-twitter></span></a></li>
						<li><a href=#><span class=icon-social-facebook></span></a></li>
					</ul>
				</div>
			</div>
			</a>
		</div>

		<?php 
		}
		echo $pagination;  
		?> 

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
			<?php foreach ($page->news_archive as $entry) { ?>

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

<?php include("./foot.inc"); ?>