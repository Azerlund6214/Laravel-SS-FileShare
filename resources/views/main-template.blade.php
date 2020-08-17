<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html">
		<meta name="viewport" content="width=device-width, initial-scale=1"> {{-- Есть в бутстрапе --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

		{{-- Все пути к SS + Все общие настройки хедера
		убрал в файл с секцией
		<?php include "s-script/for-all-pages--s-script-settings.php"; ?>
		--}}


		<?php
			# echo session('referal_code');
		?>

		<?php $ignore_title_not_found = false; # Игнорировать ли отсутствие в списках? ?>
		{{-- Тут лежат ВСЕ Title Description Keywords для ВСЕХ страниц. Все в одном файле. --}}
		@include('for-all-pages--head-page-title-meta')


		{{-- Весь хедер для всего проекта подключается в одном файле. --}}
		@include('s-script--head-univ.ALL_INCLUDER')


		{{-- Подключение общих библиотек и индивидуальных, только для этой страницы. --}}
		@include('for-all-pages--head-end')

	</head>
	<body>



        @yield('content')



        {{--
		<?php $route_name = Route::currentRouteName(); ?>

		@if     ( $route_name === "main-template" )
			@include('landing-test.MAIN-BODY-INCLUDER')
		@elseif ( $route_name === "123" )
			ПримерПримерПример
		@endif
        --}}


		<all-scripts>

			{{-- Подключение общих библиотек + индивидуальных, только для этой страницы. --}}
			@include('for-all-pages--body-end')

		</all-scripts>
	</body>
</html>
