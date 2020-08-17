		<?php $route_name = Route::currentRouteName(); ?>
		
		
		{{-- Тут то, что выводится на ВСЕХ страницых --}}
		<!-- *** Libraries For ALL PAGES *** -->
		
		
			<!-- *** Тут то, что выводится на ВСЕХ страницых *** -->
		
		
		<!-- *** Libraries For ALL PAGES *** -->
		<!-- *** Libraries For ONLY THIS PAGE *** -->
		
		@if ( $route_name === "main-template" )
			
			<!-- *** Только в header-test *** --> <!-- 4 Kb -->
			
		@elseif ( $route_name === "123" )
			ПримерПримерПример
		@endif
		
		<!-- *** Libraries For ONLY THIS PAGE *** -->
		
		<?php unset($route_name); # 090820 1355 ?>