<?php

		
			/**
			 * Мои глобальные настройки для всего проекта
			 * Можно переопределять эти переменные в нужных view
			 *
			 * Этот файл подключается в /.php
			 * Скорее всего это не самое удачное место для include
			 */
			
						
			# Сделать норм имена переменных
			
			$SS_Main_path    = "/s-script";
			$SS_Favicon_path = "/s-script/favicon";
			$SS_Assets_dev   = "/s-script/assets-dev";
			$SS_Assets_eternal   = "/s-script/assets-eternal-storage";
			
			$SS_Fonts_local = "s-script/fonts/fonts-local/";   # Проверить правильность
			$SS_Fonts_extra = "s-script/fonts/fonts-extra/";
			
			$SS_Libs_common  = "/s-script/libs/common";
			$SS_Libs_my      = "/s-script/libs/my";
			
			$Project_libs   = "project/libs";
			$Project_assets = "project/assets";
			
			
			
			# Смотреть полный список в папке s-script/fonts     NOSTYLE
			$PROJECT_FONTS = array(
			"CDN-GF# main #Roboto      #400,700#cyrillic#sans-serif",
			"CDN-GF#   1  #Open+Sans   #400,700#cyrillic#sans-serif",
			"CDN-GF#   2  #Montserrat  #400,700#cyrillic#sans-serif",
			"CDN-GF# NOSTYLE #Merriweather#400,700#cyrillic#serif",    );
			
			# !!! Смотреть полый список в папке s-script/css-selectable   # Возможные значения не всегда актуальны
			$PROJECT_SELECTABLE_CSS = array(
				"text-sel-color" => "1",   # 0 1 2
				"scrollbar"      => "1",   # 0 1 2 ftc
				"body-bg-color"  => "1",   # 0 1 2 3
				"link-a-color"   => "1",   # 0 1
				"brk-colors"     => "ftc"  ); # ftc(дефолт)

?>