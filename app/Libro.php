<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 *
 * @property $id
 * @property $autorid
 * @property $Titulo
 * @property $created_at
 * @property $updated_at
 *
 * @property Autore $autore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{
    
    static $rules = [
		'autorid' => 'required',
		'Titulo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['autorid','Titulo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function autore()
    {
        return $this->hasOne('App\Autore', 'id', 'autorid');
    }
    

}
