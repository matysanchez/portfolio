<footer>
	<div class="container">
		<div class="five columns">
			<h5>Days without drinking soda</h5>
			<?php
			function days_withoutSoda($dateInit, $dateEnd){
                $days   = (strtotime($dateInit) - strtotime($dateEnd)) / 86400;
				$days 	= abs($days);
                $days   = floor($days);
				if( $days != 0 )
                    return $days;
                else
                    return "NaN";
			}
			echo "<h3>". days_withoutSoda('2013-4-22', date('Y-m-d') ) ."</h3>"; // Almost 4/20
			?>
		</div>
		<div class="five columns">
			<h5>Twitter followers</h5>
			<a href="https://twitter.com/_matys" alt="Matías Sanchez Twitter"><h3 id="tw_followers">628</h3></a>
		</div>
		<div class="five columns">
			<h5>Cities where I've been</h5>
			<a href="http://www.tripadvisor.com.ar/TravelMap?uid=6762B10F5DCF55C88A16E597385BF453" alt="TripAdvisor Map"><h3 id="ta_cities">50</h3></a>
		</div>
	</div>
</footer>

<script type="text/javascript">
$(function(){
	/* Yeah, Twitter and TripAdvisor support on the Bottom :). Using kimono, and cookies. */

	if($.cookie('ta_cities')){
		$("#ta_cities").text( $.cookie('ta_cities') ); // If exist: we set the current value
	}else{
		tripAdvisor_Cookie(); // If not, set the value for that cookie.
	}

	if($.cookie('tw_followers')){
		$("#tw_followers").text( $.cookie('tw_followers') ); // If exist: we set the current value
	}else{
		twitter_Cookie(); // If not, set the value for that cookie.
	}

	$(window).scroll(function(){
		if($(window).scrollTop() <= 120)
			$('header').removeClass('trans')
		else
			$('header').addClass('trans')
	});
	<?php if( $where == 'contact' ) echo '$("#more_space").height( $(document).height() - $("html").height() );'; ?>
});
</script>
</body>
</html>