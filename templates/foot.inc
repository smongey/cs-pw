      <footer>
	<section>
		<div>
			<p>&copy; Camille O’Sullivan <?php echo date("Y") ?>. All Rights Reserved.</p>
			<ul>
				<li><a href="privacy/">Privacy Policy</a></li>
				<li><a href="terms/">Terms of Service</a></li>
			</ul>
		</div>
		<div>
			<ul>
				<li>Contact:</li>
				<li><a href='mailto:<?php echo $pages->get("/")->management_link ?>'>Management</a> /</li>
				<li><a href='mailto:<?php echo $pages->get("/")->booking_link ?>'>Booking</a></li>
			</ul>
		</div>
	</section>
</footer>
      </div>
    </div>

    <script src="<?php echo $config->urls->templates?>scripts/app.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='//www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','UA-XXXXX-X');ga('send','pageview');
</script>

  </body>
</html>