		<?php $route_name = Route::currentRouteName(); ?>


		{{-- Тут то, что выводится на ВСЕХ страницых --}}
		<!-- *** Libraries For ALL PAGES *** -->


			<!-- *** ФУНКЦИЯ ДЛЯ АЯКСА = ВСЕ ИДЕТ ЧЕРЕЗ НЕЁ *** --> <!-- 1 Kb -->
			<script src="<?php echo $SS_Libs_my; ?>/Univ_Exec_Ajax.js"></script>


		<!-- *** Libraries For ALL PAGES *** -->
		<!-- *** Libraries For ONLY THIS PAGE *** -->

		@if ( $route_name === "landing" )

			<!-- *** Плавная прокрутка (с учетом навбара) *** --> <!-- 4 Kb -->
			<script type="text/javascript">
				var SmSc_header_tag = "nav"; // nav    МОЖНО пустым    header не подойдет
				var SmSc_scroll_speed = 800; // 800мс
			</script>
			<script src="<?php echo $SS_Libs_my; ?>/Smooth-Scroll-Nav/smooth-scroll-nav-final-1.js"></script>

			<!-- TypeWriteText - Имитация печатания LOCAL --> <!-- 2 Kb -->
			<!-- Пример <h1 class="typewritetext" data-period="1000" data-type='[ "1=Пример=1", "2=Пример=2", "3=Пример=3" ]'></h1> -->
			<script src="<?php echo $SS_Libs_common; ?>/TypeWriteText/TypeWriteText.js"></script>

		@elseif ( $route_name === "lorux-landing" )


		@elseif ( $route_name === "123" )
			ПримерПримерПример
		@endif

		<!-- *** Libraries For ONLY THIS PAGE *** -->

		<?php unset($route_name); # 090820 1350 ?>
