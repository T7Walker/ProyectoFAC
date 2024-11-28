<?php

namespace App\Models;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
	/*
		Estas en el modelo de Mapas, aqui se establece todo lo importante, es como el esqueleto de una tabla pero en Laravel. Asi que vamos por partes:
		
		- protected $table es para asignarle a tu modelo que tabla esta tomando en cuenta cuando se vaya a trabajar con esta trabla, ya que como habras visto en el login o register, estos toman el modelo para poder guardar datos, entonces es importante que al modelo, se le indique que tabla esta perteneciendo su esqueleto. Por asi decirlo.
		
		- protected $fillable es una lista o array de todos los artributos que se pueden rellenar al momento de usar esta tabla para guardar en la base de datos, asi como en login o register, tomamos su name o email, aqui mismo pasaria pero con los valores de este modelo.
		
		- public $timestamps (OPCIONAL) este a mi gusto personal, prefiero dejarlo en false. ¿Por que? Si recuerdas antes de cambiarte todo, en tus tablas al migrarlas, salian otros artributos como update_at y create_at. Pues con esto ya no saldran mas, solo moletan y estos solo se actualizan cuando se hace x migracion cada cierto tiempo. Totalmente inecesario.
		
		- EL resto que son funciones, es para indicar las relaciones, ya sea de 1-1, 1-N o N-N. Eso no creo que tenga que explicarlo. Pero para dejar en claro una cosa, es que:
		Para relaciones 1-N o Viceversa, se usa:
			hasOne para la tabla que es 1 o da 1, y belongsTo para la tabla que recibe o es N.
			hasOne para la tabla que es 1 o da 1, y hasOne para la tabla que recibe o es 1.
			belongsToMany para la tabla que es N o da N, y belongsToMany para la tabla que recibe o es N.
			
		De resto pues no hace falta decir que en tus migraciones, añadas las llaves foraneas dependiendo el caso de relacion.
	*/
	
    protected $table = "publicaciones";
    protected $fillable = ['user_id', 'content', 'url_file', 'date'];
    public $timestamps = false;

    public function usuario()
    {
        $this->belongsTo(Usuario::class, 'user_id');
    }
}
