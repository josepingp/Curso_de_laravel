<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    //Al usar la convencion de nombres, laravel sabe con que tabla tiene que relacionar
    //el modelo creado si por cualquier causa no podemos seguir la convención
    //podemos indicarselo en el modelo de la siguiente manera si por ejemplo la tabla de la
    //base de datos tiene que llamarse notas en español se lo indicariamos así
    
    // protected $table = 'notas';

    //fillable nos va a servir para indecar que campos de la tabla van
    //a poder ser manipulados por el modelo por ejemplo en esta tabla seria:
    protected $fillable = [
        'title',
        'description',
        'deadline',
        'done'
    ];

    //guraded es el contrario a fillable serian los campos que no podrian ser manipulados
    //por el modelo no es necesario definir los dos pues uno definiria al otro
    // protected $guarded = ['campos'];

    //$casts seriviria para forzar datos en alguno de los campòs por ejemplo
    protected $casts = [
        'deadline' => 'date'
    ];

    //hidden nos va a servir para ocultar datos cuando serializamos por ejemplo 
    //si fuera el modelo user podriamos ocultar el password de los usuarios
    //protected $hidden = ['password']
}
