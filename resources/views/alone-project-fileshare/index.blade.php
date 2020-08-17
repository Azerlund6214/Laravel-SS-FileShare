<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html">
		<meta name="viewport" content="width=device-width, initial-scale=1"> {{-- Есть в бутстрапе --}}


		{{-- Тут лежат ВСЕ Title Description Keywords для ВСЕХ страниц. Все в одном файле. --}}
        <title>Файлообменник.</title>
        <meta name="description" content="Онлайн-Чат без регистрации"/>
        <meta name="keywords" content=""/>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


        <?php include "s-script/for-all-pages--s-script-settings.php"; ?>


		{{-- Весь хедер для всего проекта подключается в одном файле. --}}
		{{-- Если надо что-то менять для конкретной страницы - копипастить все оттуда и менять тут руками. --}}
		@include('s-script--head-univ.ALL_INCLUDER')


		{{-- Подключение общих библиотек и индивидуальных, только для этой страницы. --}}
		{{--@include('for-all-pages--head-end')--}}

        <style>

            body
            {
                min-height: 100vh;
            }

            h1,h2,h3,h4,h5,h6
            {
                margin: 0;
            }

            #row_banner
            {
                height: 10vh;
            }

            #row_form
            {
                height: 10vh;
            }

            input
            {
                height: 45px;
                border-radius: 20px;
            }

            #textinput_name
            {
                text-align: center;
                width: 10%;
            }

            #textinput_msg
            {
                padding-inline-start: 30px;
                width: 50%;
            }

            #row_footer
            {
                height: 10vh;
            }
            /* ############ */

            .grad-35 				 { background-image: linear-gradient(45deg, #2A9EFF, #FF4968); }
            .grad-cyan-dark-green 	 { background-image: linear-gradient(45deg, #0097a7, #b2ff59); }
            .grad-purple-deep-orange { background-image: linear-gradient(45deg, #8e24aa, #ff6e40); }
            .grad-plum 				 { background-image: linear-gradient(45deg, #e35c67, #381ce2); }
            .grad-passion-fruit		 { background-image: linear-gradient(45deg, #8137F7, #F6AB3E); }
            .grad-sublime-vivid 	 { background-image: linear-gradient(45deg, #FC466B, #3F5EFB); }

        </style>

        <style>


            table.result_table td:nth-child(1) { width: 5%; }
            table.result_table td:nth-child(2) { width: 15%; }
            table.result_table td:nth-child(3) { width: 15%; }
            table.result_table td:nth-child(4) { width: 65%; }



            table.result_table {
                border: 2px solid #1C6EA4;
                background-color: #EEEEEE;
                width: 100%;
                text-align: center;
                border-collapse: collapse;
            }


            table.result_table td, table.result_table th {
                border: 1px solid #AAAAAA;
                padding: 3px 2px;
            }

            table.result_table tbody td {
                font-size: 14px;
            }

            table.result_table tbody tr   /* Высота строк */
            {
                height: 45px;
            }

            table.result_table tr:nth-child(even) {
                background: #D0E4F5;
            }


            table.result_table thead {
                font-size: 20px;
                background: #1C6EA4;
                background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
                background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
                background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
                border-bottom: 2px solid #444444;
            }

            table.result_table thead th {

                font-weight: bold;
                color: #FFFFFF;
                text-align: center;
                border-left: 2px solid #D0E4F5;
            }

            table.result_table thead th:first-child {
                border-left: none;
            }

        </style>

        @php
        $arr_gradients = Array( "grad-35" , "grad-cyan-dark-green" , "grad-purple-deep-orange" , "grad-plum" , "grad-passion-fruit" , "grad-sublime-vivid" );
        $target_grad = $arr_gradients[array_rand( $arr_gradients , 1 )];
        @endphp

	</head>
	<body class="<?php echo $target_grad; ?>">

        <div class="container-fluid  ">

            <!-- Banner -->
            <div id="row_banner" class="row  text-center">
                <div  class="col-12 m-auto ">
                    <h2>Файлообменник</h2>
                </div>
            </div>
            <!-- Banner -->

            <!-- Форма -->
            <div id="row_form" class="row text-center">
                <div class="col-md-10 m-auto ">

                    {!! Form::open(['url'=>route('addFile'), 'id'=>'form_get_tbl', 'method'=>'POST', 'files'=>'true']) !!}

                        <div class="form-inline " style="display: block; ">

                            <a href="{{route('index')}}">
                                <button class="btn btn-danger" type="button">Обновить</button>
                            </a>

                            {!! Form::file('loaded_file') !!}

                            <button class="btn btn-success">Отправить</button>

                        </div>

                    {!! Form::close() !!}

                </div>
            </div>
            <!-- /Форма -->

            @if($errors->any())
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10 m-auto">
                            <div class="alert alert-danger">
                                <ul class="m-auto">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Таблица -->
                <div class="row">

                    <div class="col-md-10 col-md-offset-1 m-auto" style="padding-top: 30px;">
                        <table class="result_table">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>Ссылка</td>
                                <td>Скачать</td>
                                <td>Имя файла</td>
                                <td>Размер Кб</td>
                                <td>Расширение</td>
                                <td>Mime Тип</td>
                                <td>Загрузок</td>
                                <td>Дата удаления</td>

                                @if( $admin_token )
                                    <td>Удалить</td>
                                @endif
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($files_info as $msg)
                                <tr>
                                    <td>{{$msg->id}}</td>
                                    <td>
                                        <a href="{{route('downloadFile',['short_url'=>$msg->short_url])}}">
                                            <button class="btn btn-success">
                                                {{$msg->short_url}}
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <button onclick="window.open('{{route('downloadFile',['short_url'=>$msg->short_url])}}', '_blank');" class="btn btn-success">
                                            Скачать
                                        </button>
                                    </td>
                                    <td>{{$msg->file_name}}</td>
                                    <td>{{$msg->file_size_kb}}</td>
                                    <td>{{strtoupper($msg->file_ext)}}</td>
                                    <td>{{$msg->file_mime}}</td>
                                    <td>{{$msg->loads_count}}</td>
                                    <td>{{$msg->date_delete}}</td>

                                    @if( $admin_token )
                                        <td>
                                            {!! Form::open(['route'=>['delete',$msg->id,$admin_token], "method"=>'DELETE']) !!}
                                            <button onclick="return confirm('Удалить?');" class="btn btn-danger">
                                                Удалить
                                            </button>
                                            {!! Form::close() !!}
                                        </td>
                                    @endif

                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            <!-- /Таблица -->

            <!-- Футер -->
                <div id="row_footer" class="row  text-center">
                    <div  class="col-12 m-auto ">
                        <h4>https://github.com/Azerlund6214/Laravel-SS-FileShare</h4>
                    </div>
                </div>
            <!-- Футер -->

        </div>
	</body>
</html>
