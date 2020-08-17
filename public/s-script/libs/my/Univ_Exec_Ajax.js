
/* 	Пример вызова:					куда			что		  куда вывести
	function fun_DB() {	Exec_AJAX( "main.php" , "#mainform" , "#div_DB" ); }
	
	<form method="POST" id="mainform" action="javascript:void(null);" onsubmit="fun_DB()">
		<input type="submit" value="Выполнить"/>
	
	<div id="div_DB"> </div >
*/

function Exec_AJAX( php_target_script , id_form_for_send , id_div_output )
{
	$.ajax({  type: 'POST',
			  url: php_target_script,
			  data: $( id_form_for_send ).serialize(),
			  success: function(data) { $( id_div_output ).html(data); },
			  error:   function(xhr, str){ alert('Возникла ошибка: ' + xhr.responseCode + str); }				});
} //End
