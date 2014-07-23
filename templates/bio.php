<?php include("./head.inc"); ?>

<div class=wrap>

<div class='portrait' style='background-image: url("<?php if($page->bg) echo $page->bg->url; ?>");'></div>
<section class=bio>

<h1><?php echo $page->title; ?></h1>

	<div>
		<h2><?php echo $page->standfirst; ?></h2>

		<?php echo $page->body; ?>
	</div>

</section>

</div>

<?php include("./foot.inc"); ?>