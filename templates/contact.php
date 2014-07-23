<?php include('./head.inc') ?>
<?php echo $pages->get("/")->management_link ?>
<div class=wrap>
<div class='portrait3' style='background-image: url("<?php echo $page->bg->url ?>");'></div>

<section class=contact>

	<h1>Contact</h1>
	
	<div>
		<a href='mailto:<?php echo $page->contact_email ?>'><?php echo $page->contact_email ?></a>
		<?php echo $page->body ?>

		<ul class=social>
			<li>Follow me on:</li>
			<li><a href='<?php echo $pages->get("/")->facebook ?>'>Facebook</a></li>
			<li><a href='<?php echo $pages->get("/")->twitter ?>'>Twitter</a></li>
			<li><a href='<?php echo $pages->get("/")->youtube ?>'>YouTube</a></li>
		</ul>
	</div>


</section>

</div>

<?php include('./foot.inc') ?>