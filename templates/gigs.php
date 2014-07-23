<?php include('./head.inc'); ?>

      <div class='wrap'>
<div class='portrait2' style="background-image: url('<?php echo $page->bg->url ?>');"></div>
<section class='gigs'>

	<h1>Gigs</h1>
	
	<ul>
	<?php foreach($page->gigs as $gig){ ?>
		<li>
			<span class=date><?php echo $gig->gigs_date ?></span>
			<span class=venue><?php echo $gig->gigs_venue ?></span>
			<?php if($gig->gigs_info) { ?><a href='<?php echo $gig->gigs_info ?>' class=info>Info</a><?php } ?>
			<?php if($gig->gigs_book) { ?><a href='<?php echo $gig->gigs_book ?>' class=book>Book Tickets</a><?php } ?>
		</li>

	<?php } ?>
		<li>
			<h3><?php echo $page->tour_title ?></h3>
		</li>
	<?php foreach($page->gigs_tour as $gig){ ?>
		<li>
			<span class=date><?php echo $gig->gigs_date ?></span>
			<span class=venue><?php echo $gig->gigs_venue ?></span>
			<?php if($gig->gigs_info) { ?><a href='<?php echo $gig->gigs_info ?>' class=info>Info</a><?php } ?>
			<?php if($gig->gigs_book) { ?><a href='<?php echo $gig->gigs_book ?>' class=book>Book Tickets</a><?php } ?>
		</li>

	<?php } ?>

	</ul>

	</section></div>

</div>

<?php include('./foot.inc'); ?>
