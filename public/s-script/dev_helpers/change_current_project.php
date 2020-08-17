<?php

# Закончен 240320 2130

echo "Это скрипт изменения текущего активного проекта <br>";
echo "Параметры get: pass + text <br>";
echo "<hr>";



$file_name = "../current_project.txt";
$pass = "123"; # Пароль для перезаписи


$get_pass = trim( @$_GET["pass"] );
$get_text = trim( @$_GET["text"] );



if ( $get_pass != "") { echo "Пароль получен = "; var_dump($get_pass); echo "<br>"; } 
else { echo "Пароль НЕ получен = "; var_dump($get_pass); echo "<br>"; }

if ( $get_text != "") { echo "Проект получен = "; var_dump($get_text); echo "<br>"; } 
else { echo "Проект НЕ получен = "; var_dump($get_text); echo "<br>"; }

echo "<br>";




if( $get_pass != $pass)
{
	echo "Неверный пароль.<br>";

}
else
{
	echo "Верный пароль.<br>";
	
	if ( $get_text != "")
	{
		file_put_contents( $file_name , $get_text );
		echo "Внесен новый текст. Выведен текущий(новый) рабочий текст<br>";	
	}
	else
	{
		echo "Текст пуст - запись отменена.<br>";
	}
}


echo "<hr color=red><pre>";
echo "Текущее значение: "; var_dump ( file_get_contents( $file_name ) );
echo "</pre><hr color=red>";

exit;



?>