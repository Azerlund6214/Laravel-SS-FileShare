$(document).ready(function()
{
	
	//var SmSc_header_tag = "nav"; // nav     header не подойдет(у него нет высоты)
	//var SmSc_scroll_speed = 800; // 800
	
	
	/*
		ПРИВЯЗКА К ТЕГУ "nav" !!!
		
		Ссылку вида "#" отловить не получается, всегда будет перескок в начало страницы
		
		Если навбар расширяется при выходе из топа 1 секции,
		то при прокрутке будет небольшой отступ наверх (чутка недокрутит куда надо)
		Исправить можно, но юзлесс и крайне геморно.
		Суть: Считывается высота широкого навбара, а по приезду уже виден короткий.
			Разнийа между 2 высотами и будет недокрутом
	*/
	
	
	//alert("Sm-Scr Ready");
	
	// Add smooth scrolling to all links
	$("a").on('click', function(event)
	{
		/* ################################## */
		
		// Наш ли это сайт
		if (location.hostname !== this.hostname)
		{
			//alert("другой сайт"); // ХЗ, не тестил
			return;
		}
		
		// Проверка - Та же это страница или другая
		if (location.pathname.replace(/^\//, '') !== this.pathname.replace(/^\//, '') )
		{
			//alert("другая страница");
			// Переход работает
			return;
		}
		
		/* ################################## */

		//alert("Sm-Scr A-click");

		/* ################################## */
		
		// Store hash
		var hash = this.hash;
		//alert("Sm-Scr hash="+hash);
		
		/* ################################## */
		
		// Если такой ссылки нет
		// Make sure this.hash has a value before overriding default behavior
		if ( typeof $(hash).offset() === "undefined" )
		{
			alert("Sm-Scr hash = undefined (Такая ссылка не существует) - return");
			return;
		}
		
		/* ################################## */
		
		// Prevent default anchor click behavior
		event.preventDefault();
		
		/* ################################## */

		var nav_height = $( SmSc_header_tag ).css("height");  // Дописывал
		
		// Если навбара нет
		// Иначе ниже будет сложение undef и числа и поэтому мгновенная прокрутка
		if ( typeof nav_height === "undefined" ) // Работает
		{
			//alert("Sm-Scr nav_height is undefined");
			nav_height = 0;
		}
		else
		{
			//alert("Sm-Scr nav_height="+nav_height); // 0px 123px
			nav_height = nav_height.replace('px','');
			//alert("Sm-Scr nav_height="+nav_height); // 0 123, без px, СТРОКА - поэтому ниже будет неявное преобразование
			//return;
		}
		
		/* ################################## */

		// Using jQuery's animate() method to add smooth page scroll
		// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		$('html, body').animate({
									scrollTop: ( $(hash).offset().top - nav_height )
								}, SmSc_scroll_speed, function()
												{
													// Add hash (#) to URL when done scrolling (default click behavior)
													//window.location.hash = hash; как было, происходит перескок
													history.pushState(null, null, hash); // Робит
												}
								);
		
	}); // End клик по А
	
	
	
	
	/* Микро версия
	   /*Smooth Scroll /
	   $("a").on('click', function (event) 
	   {
		  event.preventDefault();
		  $('html,body').animate({
			 scrollTop: $(this.hash).offset().top
		  }, 750);
	   });
	*/
	
	
	
	
	
	
});