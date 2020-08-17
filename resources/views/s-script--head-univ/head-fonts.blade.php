		<!-- *** PROJECT - FONTS *** -->
			<!-- Оптимизация = Предвыбор DNS + Предподключение к облаку -->
			<link rel="dns-prefetch" href="//fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
			
			<!-- АВТО-Сгенерированные строки подключения и стили -->
			<?php
			
			
			
			foreach ( $PROJECT_FONTS as $font_string )
			{
				$font_string_arr = explode( "#" , $font_string );
				
				#var_dump( $font_string_arr  );
				#exit;
				
				switch( trim( $font_string_arr[0] ) )
				{
					case "CDN-GF":   # Пример: CDN-GF # main # Roboto # 400,700 # cyrillic # sans-serif
								echo "\n";
								
								$url = "https://fonts.googleapis.com/css?family=";
								$url .= trim( $font_string_arr[2] ) . ":" ;
								$url .= trim( $font_string_arr[3] ) . "&display=swap&subset=" ;
								$url .= trim( $font_string_arr[4] ) . "" ;
								
								echo '			<link href="' . $url . '"  rel="stylesheet">';
								echo "\n";
								
								if( trim( $font_string_arr[1] ) === "NOSTYLE" )
									{   echo "			<style> /* Надо только скачать */ </style>\n";  break; }
								
								$style  = ".font-" . trim($font_string_arr[1]) ;
								$style .= ' { font-family: "' . str_replace( "+", " ", trim($font_string_arr[2]) );
								$style .= '" , ' . trim($font_string_arr[5]) . ' ; }';
								
								echo "			<style> $style </style>";
								echo "\n";
								
								break;
								
					case "LOCAL":   # Пример: LOCAL # main # Имя папки
									
									echo "\n";
									
									# Тут только фонт фейс
									$path = $SS_Fonts_local . trim($font_string_arr[2]) . "/font_includer.css";
									
									echo '			<link href="' . $path . '"  rel="stylesheet">';
									echo "\n";
									
									$path = $SS_Fonts_local . trim($font_string_arr[2]) . "/font_class.html"; # Внутри $font_string_arr[1] ставится в класс
									
									include $path;
									echo "\n";
									
								break;
					
					case "EXTRA": # Пример: EXTRA # Имя папки
								
								echo "\n";
								
								$path = $SS_Fonts_extra . trim($font_string_arr[1]) . "/font_includer.css";

								echo '			<link href="' . $path . '"  rel="stylesheet">';
								echo "\n";
								
								break;
				
				} # End switch type
			} # End foreach font
			
			unset ($PROJECT_FONTS);
			
			unset ($SS_Fonts_local);
			unset ($SS_Fonts_extra);
			unset ($font_string_arr);
			unset ($path);
			
			?>
		<!-- *** PROJECT - FONTS *** -->