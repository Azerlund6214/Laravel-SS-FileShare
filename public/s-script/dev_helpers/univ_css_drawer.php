<?php

$Def_form_css_path = "../s-script/frontend-univ-vars/css_colors/gradients-alone-best.css";

############


$from_form = @$_POST["from_form"]; # bool

$css_file_path = @$_POST["css_file_path"]; #
$body_bg = @$_POST["body_bg"]; # Цвет боди
#$type = @$_POST["type"]; # text  bg_color  = radio


$div_height = @$_POST["div_height"];
$div_margin = @$_POST["div_margin"];
$div_border_size  = @$_POST["div_border_size"];
$div_border_color = @$_POST["div_border_color"];

$text_size = @$_POST["text_size"];


#######
$file_caller = __FILE__; # ПОЛНЫЙ путь до этого ФАЙЛА
$file_caller = str_replace ( "\\", "/", $file_caller); # Нужно только для локалки, на хосте все слеши сразу правильные
$this_file_path = str_replace ( $_SERVER['DOCUMENT_ROOT'] , "" , $file_caller );
#######


#	<input type="radio" name="type" value="text" checked /> text <br>
#	<input type="radio" name="type" value="bg_color"     /> bg_color   <br>
	

if ( $from_form !== "true" )
{
	echo ('
	<hr color=green>
	
	<form method="POST" id="123" action=" ' . $this_file_path . ' " >
	<pre>
	<h1> Настройки </h1>
	В пути недопустимы - пробелы и русские буквы
	Можно вводить ссылки на ксс с реальных сайтов

	<input type="hidden" name="from_form" value="true" />
	http://localhost/s-script/frontend-univ-vars/css_colors/gradients-alone-best.css
	http://localhost/s-script/frontend-univ-vars/css_colors/gradients-alone-good.css
	http://localhost/s-script/frontend-univ-vars/css_colors/gradients-alone-test.css
	http://localhost/s-script/frontend-univ-vars/css_colors/colors-all.css
	
	http://localhost/s-script/frontend-univ-vars/css_colors/gradients_brk_hex.css
	http://localhost/s-script/frontend-univ-vars/css_colors/gradients_brk_rgb.css
	
	http://localhost/s-script/frontend-univ-full/css_for_div/css=div=radius.css
	http://localhost/s-script/frontend-univ-full/css_for_div/css=div=light-bg.css
	http://localhost/s-script/frontend-univ-full/css_for_dev/css=dev=border-for-dev.css
	http://localhost/s-script/frontend-univ-full/css_for_dev/css=dev=fast-bg.css
	http://localhost/s-script/frontend-univ-full/css_for_text/css=text=font-size.css
	http://localhost/s-script/frontend-univ-full/css_for_text/css=text=light-text.css
	
	
	
	 Путь:   <input type="text" name="css_file_path" size=80 value="' . $Def_form_css_path . '">
	 Цвет body:   <input type="text" name="body_bg" value="#c05cff">
	
	 Div - Высота:   <input type="text" name="div_height" value="40px"> 40 400
	 Div - Margin:   <input type="text" name="div_margin" value="20px">
	 Div - Толщина рамки:   <input type="text" name="div_border_size" value="2px">
	 Div - Цвет рамки:   <input type="text" name="div_border_color" value="orange">
	 Размер текста:   <input type="text" name="text_size" value="26px">

	<input type="submit" value="Выполнить"/>
		
	</pre>
	</form>
	
	<hr color=green>
	');
	
	exit ("EXIT - Форма выведена.");
}



echo "<html>";
echo "<body class=\"body_bg body_fs\">";

echo '<link href="'.$css_file_path.'" rel="stylesheet" type="text/css">';
echo "<style> body { background: $body_bg ; } </style>";

echo "<style> div  { height: $div_height ; border: $div_border_size solid $div_border_color; margin: $div_margin;} </style>";
echo "<style> body { font-size: $text_size ; } </style>";


#exit;


function get_classes_arr( $css_path )
{

	# Считать весь файл
	$full_file = file_get_contents( $css_path );

	$buf = explode ( "{" , $full_file );

	$buf2 = array();

	foreach( $buf as $elem )
	{	
		$buf_each = explode ( "." , $elem );
		
		
		# {бла. бла  бла.}  .CSS_CLASS    експлодим по точке и забираем край с ксс
		$buf2 []= trim ( $buf_each[count($buf_each)-1] );
	}

	unset ( $buf2[count($buf2)-1] ); # Последний элемент с мусором


	echo count($buf2);
#	echo "<pre>"; var_dump($buf2); echo "</pre>";


	return $buf2;
	
}


########
echo ' <link href="/s-script/frontend-selectable/brk-colors/brk-colors-main-css.css"  rel="stylesheet" type="text/css"> ';
echo ' <link href="/s-script/frontend-selectable/brk-colors/brk-colors-ftc-hex.css"       rel="stylesheet" type="text/css"> ';
echo ' <link href="/s-script/frontend-selectable/brk-colors/brk-colors-ftc-rgb.css"       rel="stylesheet" type="text/css"> ';
########

foreach ( get_classes_arr( $css_file_path ) as $css_class_name )
{
	echo "<div class=\"$css_class_name\">";	
	echo "CSS_CLASS = $css_class_name";
	echo "</div>";
}



echo "</body>";
echo "</html>";





?>