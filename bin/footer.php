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
			<a href="https://twitter.com/_matys" alt="Matías Sanchez Twitter"><h3 id="followers">628</h3></a>
		</div>
		<div class="five columns">
			<h5>Cities where I've been</h5>
			<a href="http://www.tripadvisor.com.ar/TravelMap?uid=6762B10F5DCF55C88A16E597385BF453" alt="TripAdvisor Map"><h3>50</h3></a>
		</div>
	</div>
</footer>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
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