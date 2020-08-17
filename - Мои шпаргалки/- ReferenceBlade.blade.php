
Это файл со сниппетами и примерами фронтенда

{!! Form::open(['route'=>['tasks.update',$task->id], "method"=>'PUT']) !!}
{!! Form::open(['url'=>route('chat.addmsg'), 'id'=>'form_get_tbl', 'method'=>'POST']) !!}
<div class="form-inline " style="display: block; ">
<div class="form-group ">

    <input type="text" class="form-control" name="title" value="{{old('title')}}">
    <button class="btn btn-success">Submit</button>

    <a href="{{route('chat.index')}}">
        <button class="btn btn-danger" type="button">Обновить</button>
    </a>


    {!! Form::open(['route'=>[ 'chat.delete',$msg->id ], "method"=>'DELETE']) !!}
        <button onclick="return confirm('Удалить?');" class="btn btn-danger">Удалить</button>
    {!! Form::close() !!}


{!! Form::close() !!}





    <a href="{{route('tasks.create')}}" class="btn btn-success">Create</a>
    <a href="{{route('tasks.show', $task->id)}}">


    @extends('alone-project-tasker.layout')
    @section('content')
        123
    @endsection

    @php
    @endphp

    @if ( $route_name === "main-template" )
    @elseif ( $route_name === "123" )
    @endif


    @include('landing-test.PRELOADER=id-1-univ')


    @auth
        Авторизован: id={{Auth::id()}}
    @else
        НЕ Авторизован
    @endauth


    @guest
        ГОСТЬ
    @else
        НЕ Гость
    @endguest

    @if (Route::has('login'))

        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth




    @foreach($all_messages as $msg)
        <tr>
            <td>{{$msg->id}}</td>
            <td>{{$msg->created_at}}</td>
            <td>{{$msg->author_nickname}}</td>
            <td>{{$msg->message}}</td>

            @if( $admin_token )
                <td>
                    {!! Form::open(['route'=>['chat.delete',$msg->id,$admin_token], "method"=>'DELETE']) !!}
                    <button onclick="return confirm('Удалить?');" class="btn btn-danger">
                        Удалить
                    </button>
                    {!! Form::close() !!}
                </td>
            @endif

        </tr>
    @endforeach


<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
{{ $errors->has() }}
{{ $errors->first('email') }}
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

@if ($errors->has('email'))
	<span class="help-block">
		<strong>{{ $errors->first('email') }}</strong>
	</span>
@endif


123
