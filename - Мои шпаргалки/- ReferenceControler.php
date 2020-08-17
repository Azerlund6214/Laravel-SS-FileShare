<?php

namespace App\Http\Controllers; #
use Illuminate\Http\Request; # Стандартный, для получения POST запроса


use App\Task; #Подключение модели
use Illuminate\Foundation\Validation\ValidatesRequests; # Трейт для валидации, надо писать use в классе
use App\Http\Requests\createTaskRequest;
use Illuminate\Support\Facades\Auth;

# Отдельный класс с правилами валидации для ЭТОЙ модели.

#  *** Это контроллер, где я собираю сниппеты ***
#  *** Копировать нужный код отсюда в проект ***

    # Название -> Везде большие буквы. Во множ числе. В конце слово Controller
class ReferenceControler extends Controller
{
    use ValidatesRequests; # Трейт для валидации







    public function hash()
    {
        Hash::make('1234');
        Hash::check('1234', $hash1);
        # Там уже встроенная соль - у каждого хеша она своя.  Всегда 60 символов

        # Начальные символы хэша - это метаданные (первые 7 символов).

        # Laravel использует Bcrypt для хеширования и поэтому генерирует случайную соль во время процесса хеширования.
        # Соль будет частью хэша, поэтому вы получаете два разных результата.
    }

    public function auth()
    {
        if (Auth::check()) {
            $user = Auth::user(); // Get the currently authenticated user...
            $id = Auth::id(); // Get the currently authenticated user's ID...
        }


        $credentials = $request->only('email', 'password');
        #if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
        if ( Auth::attempt($credentials) )
        { // Authentication passed...
        }

    }


    # *** ВСЕ про запросы в БД ***
    public function ORM_DATABASE_SQL()
    {
        # *** Получение записи ***
        $tasks = MyModelClass::all(); # Вытащить ВСЕ записи из БД

        $task = MyModelClass::find($id); # Вытащить запись по её id (id приходит в реквесте)
        MyModelClass::find($id)->delete(); # Удалить запись по id

        $all_messages = MyModelClass::orderBy('id', 'desc')
                                        ->take(50)
                                        ->get();

        ->first();
        ->firstOrFail();
        ->all();


        # *** Добавление записи ***

        $task = new Task;
        $task->fill($request->all()); # Заполняем поля запроса (через $fillable). Имена переменных в бд и в реквесте должны совпадать
        $task->save(); # ЗАПИСЬ в БД

        $task->title = $request->get('title');   # Заполнение поштучно, либо если поля из формы и в БД разные
        $author = $task->getAttribute('author_nickname'); # Получение уже заполненного значения


        # TODO:  Написать про явный запрос SQL   DB::Raw()...


        MyModelClass::create($request->all()); # Создание и сохранение на лету
        # Должны указать в модели какие поля разрешены для массовой записи
    }


    # *** ВСЕ про REQUEST и Валидацию ***
    #public function store(Request $request) # Стандартный вид
    public function store(createTaskRequest $request) # Если есть класс с правилами валидации
    {
        #$request = Это массив пришедших параметров из POST

       $var = $request->all(); # Полчить ВСЕ пришедшие параметры
       $var = $request->only(['title','desc']); # Получить только один или несколько
       $var = $request->except(['title','desc']); # Получить все КРОМЕ этих
       $var = $request->get('title'); # Получить ТОЛЬКО ОДИН


        # *** ВАЛИДАЦИЯ ***

        # Надо подключать класс + подключать его трейт
        $this->validate($request, [
            'title1'=>'required|min:10', # Запись через |
            'title2'=>['required','max:50'], # Запись поштучно

            'email'    => ['required', 'string', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'string', 'max:255', 'min:1', 'confirmed'], # Вернуть 8 симв
        ] ); # Правил ОЧЕНЬ много, смотреть документацию

        # В случае ошибки сразу редирект на страницу откуда пришел запрос.
        # Если ошибка не перехвачена во фронте, то ничего не покажет. Просто обычная страница

        # Что бы поля не сбрасывались - использовать {{old('ИМЯ_ПОЛЯ')}}
        # Очищается после успешного запроса

        # Вывод ошибки

    }



    #  *** Вывод представлений и редиректы + передача переменных ***
    public function VIEWS_REDIRECT()
    {
        # На явный view
        return view('alone-project-tasker.index', ['tasks'=>$tasks , '123'=>$var ]); # Вызов + передача параметров
        return view('alone-project-tasker.create'); # Просто вызов конеретного view

        # По прямой ссылке
        return redirect('/');
        return redirect()->to('auth/login');

        # На именованный роут
        return redirect()->route('login');
        return redirect()->route('profile', ['id' => 1]); # URI: profile/{id}

        # На экшен контроллера
        return redirect()->action('HomeController@index');
        return redirect()->action('UserController@profile', ['id' => 1] );

        # Обратно к заполнению формы
        return back()->withInput(); # Мастхев

        # С добавкой данных в сессию
        return redirect('dashboard')->with('status', 'Профиль изменён!');
        @if (session('status'))
            {{ session('status') }}

    }



        # *** СЕССИЯ и КУКИ ***
    public function SESSION_COOKIE()
    {
        session(['referal_code' => $ref]); # Залить поле в сессию
        session('referal_code'); # Получить

    }


    # *** Про МОДЕЛИ ***    потом убрать
    public function MODEL()
    {
        # Каким полям разрешено массовое заполнение  ($task->fill($request->all());)
        protected $fillable = ['author_nickname', 'message'];

        # Явно указываем с какой таблицей работать
        protected $table = 'online_chat';
        protected $primaryKey = 'id';

        public $timestamps = false; # Юзать ли штампы.  Еще отдельно можно указать их имена

    }



    public function MIGRATIONS()
    {
        $table->string('user_id')->unique();

        $table->timestamp('email_verified_at')->nullable()
            ->comment('123');

        $table->timestamp('failed_at')->useCurrent();

        $table->boolean('have_donation')->default(false)->comment('Донатил ли хотя бы раз');

    }



}
