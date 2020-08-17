		<!-- *** BOOTSTRAP-4 CDN *** -->
			<!-- Bootstarp 4.4.1 + JQuery 3.4.1 + Popper 1.16.1 -->
			<!-- Оптимизация = Предвыбор DNS + Предподключение к облаку -->
			<link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
			<link rel="preconnect" href="https://cdnjs.cloudflare.com/" crossorigin>
			
			
			<!-- Для просмотра с моб устройств -->
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			
			<!-- Главный CSS -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
			
			<!-- Notice: jQuery first, then Popper.js, then Bootstrap JS -->
			<script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <!-- !!! Иногда тупит загрузка !!! -->
			<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/popper.min.js"></script>
			<script src = "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<!-- *** BOOTSTRAP-4 CDN *** -->{{--
	===================================================
		
	КАК БЫЛО - Поменял ВСЕ на CDN CF   https://cdnjs.com/libraries/twitter-bootstrap/4.4.1
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	
	<script src = "https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	КАК БЫЛО
	
	==============================
	
	CSS
	<!-- Стоит раньше моих стилей чтоб не преопределял мои стили body и тд -->
	<!-- # Полная версия "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">", -->
	
	===================================================

	JQUERY
	
	<!--
	# Старый, робит "<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js\"></script>",
	# из бутстрапа, не робит прелоадер "<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"                          integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>",
	# с офф сайта, не робит прелоадер "<script   src=\"https://code.jquery.com/jquery-3.4.1.min.js\"   integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\"   crossorigin=\"anonymous\"></script>",
	
	# Др версия
	# 2.0.2 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	# 3.3.1 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	# Полная версия "<script   src=\"https://code.jquery.com/jquery-2.2.4.min.js\"   integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\"   crossorigin=\"anonymous\"></script>",
	-->

	<!-- === === === -->
	
	POPPER
	
	<!--
	# Полная версия "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>",
	-->
	
	<!-- === === === -->
	B4 MIN JS
	
	<!--
	# Полная версия "<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"    integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>",
	-->
	
	<!-- === === === -->

	
	--}}