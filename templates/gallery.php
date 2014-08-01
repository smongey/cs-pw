<?php include('./head.inc'); ?>

      <div class=wrap>

<section class=gallery>

	<h1>Gallery</h1>
	
	<div class=images>


	<?php 
		foreach($page->gallery as $pic) {
			
			if($pic->size == 1) {

		?>

		<div class="item w2">
			<a href=#>
			<img src='<?php echo $pic->images->size(600)->url ?>' alt="<?php $pic->main_image->description ?>">
			<h5><?php echo $pic->title ?></h5>
			</a>
		</div>
 
		<?php	} else { ?>

		<div class="item">
			<a href=#>
			<img src='<?php echo $pic->images->width(295)->url ?>' alt="<?php $pic->main_image->description ?>">
			<h5><?php echo $pic->title ?></h5>
			</a>
		</div>


		<?php } } ?>

	</div>

</section>

</div>

<?php include('./foot.inc') ?>