<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Autore
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Libro[] $libros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Autore extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function libros()
    {
        return $this->hasMany('App\Libro', 'autorid', 'id');
    }
    

}
