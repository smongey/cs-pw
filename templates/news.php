<?php include("./head.inc"); ?>

      <div class=wrap>

<section class=news>

	<h1>News</h1>
	
	<div class=entries>


		<?php
		$results = $pages->find("parent=/news/, limit=4, sort=title"); 
		$pagination = $results->renderPager(array(
			

	"nextItemLabel" => "Load More News",
    "previousItemLabel" => "Go Back",
    "listMarkup" => "<ul class='paginate'>{out}</ul>",
    "itemMarkup" => "<li class='{class}'>{out}</li>",
    "linkMarkup" => "<a href='{url}'>{out}</a>" ,
    "nextItemClass" => "more",   
    "previousItemClass" => "more"

		    // 'listMarkup' => "<ul class='paginate'>{out}</ul>",
		    // 'linkMarkup' => "<a href='{url}'>{out}</a>",
		    // 'nextItemLabel' => "Load More News",
		    // 'previousItemLabel' => "Go Back",
		    // 'itemMarkup' => "{out}",
		    // 'nextItemClass' => "more",
		    // 'previousItemClass' => "more",
		    // 'currentItemClass' => 'huh',
		    // 'lastItemClass' => 'last'
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