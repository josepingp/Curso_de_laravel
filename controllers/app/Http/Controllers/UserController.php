<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        //Usando el ORM Eloquent para traer los datos;
        //la ventaja principal de trabajar con eloquent es que te abstraes totalmente del sistema de persistencia
        //La desventaje de utilizar eloquent es que vamos a tener mucho aclopamiento con laravel osea seríamos dependientes
        // de laravel y otra es que no seremos conscientes de la eficiencia de las consultas.
        
        //El metodo all nos va a traer todos los registros
        // $users = User::all();

        // El método estatico Where no va a permitir poner condiciones
        // $users = User::where('age', 18)->where('zip_code', 33402);//donde age sea = a 18 y el zip_code sea 33402
        // $users = User::where('age', '>', 18) age mayor a 18 o los otros comparativos logicos
        // $users = User::where('age', 25)->orWhere('zip_code', 33402);//donde age sea = a 25 o el zip_code sea 33402
        
        //cuando establecemos todas las condiciones nos traemos los datos con get
        // $users = User::where('age', 25)->orWhere('zip_code', 33403)->get();

        //tambien podemos establecerle un limite con limit()(primer parametro) y un offset(segundo parametro) que seria cuantos se tiene que saltar
        // $users = User::where('age','>','25')->orderBy('age', 'desc')->limit(1, 5)->get();

        //si queremos traernos solo uno en ved de get podemos usar first()
        // $users = User::where('age','>','25')->orderBy('age', 'desc')->first();

        //si queremos buscar uno por id podemos usar find()
        // $users = User::find(1);

        //tambien podemos ordenar los datos con orderBy
        // $users = User::where('age','>','25')->orderBy('age', 'desc')->get();

        // -----------------------------------------------------------------

        // usando la clase db para traernos los datos
        $users = DB::select( "SELECT * FROM users" );

        //Cuando la clave de acceso es igual al nombre de la array que pasamos podemos usar
        //el metodo compact() con el que podemos evitar doblar la informacion escrita
        return view('user.index', compact('users'));
    }

    public function create()
    {
        //vamos a crear algunos datos de prueba con eloquent para probar
        $user = new User();
        $user->name = 'Jose';
        $user->email = 'prueba@gmail.com';
        $user->password = Hash::make('1234');
        $user->age = 25;
        $user->address = 'calle demostracion 12';
        $user->zip_code = 33403;
        $user->save();

        //podemos hacer todo lo anterior usando esto
        User::create([
            'name' => 'Luis',
            'email' => 'prueba2@mail.com',
            'password' => Hash::make('1234'),
            'age' => 37,
            'address' => 'calle demostracion 11',
            'zip_code' => 33402
        ]);
        
        User::create([
            'name' => 'Garcia',
            'email' => 'prueba3@mail.com',
            'password' => Hash::make('1234'),
            'age' => 35,
            'address' => 'calle demostracion 9',
            'zip_code' => 33402
        ]);

        //para redireccionar a raiz
        return redirect()->route('user.index');
    }
}
