<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Foundation\Validation\ValidatesRequests; # Трейт для валидации
use Illuminate\Support\Facades\Storage;

use App\AllMyClasses\SF; #

use App\FileShare;

# Модель

    /*
     * Намеренно не использую фасад Storage
     * */

class FileShareController extends Controller
{
    //
    use ValidatesRequests; # Трейт для валидации


    public $storagePath = "storage"; #
    public $storageTimeDays = 7; # Срок хранения файлов
    public $maxStorageSizeMb = 7; # Максмальный объем хранилища Mb TODO
    public $maxFileSizeKb = 1024; # Предельный размер файлв в Кб



    public $admin_token = "token1234321token"; # токен что бы удалять мог только админ
    public $admin_pass = "123pass"; # Пароль админа: 123.com/chat/admin/этот пароль


    public function getFile( $short_url )
    {
        # TODO: Проверка входных данных


        $storagePath  = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();

        dd(Storage::disk('local'));

        $fileExist = FileShare::where('short_url', $short_url )->count() >= 1;

        if ( ! $fileExist)
            return redirect()->route("index")->withErrors("Файл не существует, такой ссылки нет => $short_url");

        $fileInfo = FileShare::where('short_url', $short_url )->first();

        $file_uri = '/'.$this->storagePath.'/'.$fileInfo->file_name;

        echo "<a href='$file_uri' download>$file_uri</a>";

        return response()->download($file_uri);
        return Storage::download('file.jpg');
        dd('Файл есть', $fileInfo);

    }

    public function index($admin_pass="")
    {

        $files_info = FileShare::orderBy('id', 'desc')
                                    ->take(20)
                                    ->get();

        if( $admin_pass === $this->admin_pass)
            return view('alone-project-fileshare.index', ['files_info'=>$files_info, 'admin_token'=>$this->admin_token]);

        return view('alone-project-fileshare.index', ['files_info'=>$files_info, 'admin_token'=>false]); # Без false ошибка
    }


    public function addFile(Request $request)
    {

        $file = $request->file('loaded_file');

        if ( $file === null )
            return back()->withInput()->withErrors("Файл не выбран");


        $fileSizeKb = round( $file->getSize() / 1024, 1 );
        $fileSizeMb = round( $file->getSize() / 1024/1024, 1 );

        $timeNow = \Carbon\Carbon::now();
        $timeLoad = $timeNow->toDateTimeString();
        $timeDelete = $timeNow->add('+'.$this->storageTimeDays.'day')->toDateTimeString();

        $fileAlreadyLoaded = FileShare::where('file_name', $file->getClientOriginalName() )->count() >= 1;


        /*
        echo '<br>File Name: '.$file->getClientOriginalName(); // имя файла
        echo '<br>File Extension: '.$file->getClientOriginalExtension(); // расширение файла
        echo '<br>File Real Path: '.$file->getRealPath(); // фактический путь к файлу
        echo '<br>File Size B: '.$file->getSize(); // размер файла
        echo '<br>File Size Kb: '.$fileSizeKb; // размер файла
        echo '<br>File Size Mb: '.$fileSizeMb; // размер файла
        echo '<br>File Mime Type: '.$file->getMimeType(); // Mime-тип файла
        echo '<br>Время добавки: '.$timeLoad; //
        echo '<br>Время удаления: '.$timeDelete; //
        echo '<br>Уже есть в базе: '; var_export($fileAlreadyLoaded); //
        exit; */


        if ( $fileSizeKb >= $this->maxFileSizeKb )
            return back()->withInput()->withErrors("Файл слишком велик. Файл = $fileSizeKb Kb. Лимит = $this->maxFileSizeKb Kb.");

        if ( $fileAlreadyLoaded )
            return back()->withInput()->withErrors("Файл с этим именем уже есть.");


        # TODO: Проверка на длину имени

        # TODO: Проверка на запрещенные mime

        # TODO: !!!! Проверка на исполняемые и .php файлы (PHP-Injection)
        # TODO: !!!! Это дыра в безопасности. По-идее можно отключить исполнение скриптов в отдельной папке(в .htaccess)

        # TODO: Проверка на первые байты файла (реальный тип файла)

        # TODO: что имя != "." или ".env"


        FileShare::create([
            'short_url'=>SF::Get_Random_String_Readable(8, false),  # Исправить коллизии
            'file_name'=>$file->getClientOriginalName(),

            'file_size_bytes'=>$file->getSize(),
            'file_size_kb'=>$fileSizeKb,
            'file_size_mb'=>$fileSizeMb,
            'file_ext'=>$file->getClientOriginalExtension(),
            'file_mime'=>$file->getMimeType(),

            'storage_time'=>$this->storageTimeDays,
            'date_load'=>$timeLoad,
            'date_delete'=>$timeDelete,
        ]);




        //перемещаем загруженный файл
        #$file->move($this->storagePath, $file->getClientOriginalName());
        Storage::putFile($path, $file);
        Storage::

        return redirect()->route('index');


        dd(123);
        #############

        $this->validate($request, [
                'author_nickname'=>'required|max:10',
                'message'=>'required|max:255',
            ]
        );




    }

    public function delete($id , $admin_token)
    {
        if( $admin_token != $this->admin_token )
            return redirect()->route('chat.index');


        OnlineChat::find($id)->delete();

        return redirect()->route('chat.indexAdmin',['pass'=>$this->admin_pass]);

    }


}
