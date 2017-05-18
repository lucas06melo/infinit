<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'tipo',
    'titulo',
    'slug',
    'subtitulo',
    'texto',
    'resumo',
    'imagemdestaque',
    'legendaimagem',
    'status'
    ];

    protected $primaryKey = 'id';

    public function getPriceAttribute()
	{
    	$pubs = 'Publicado';
    	$rasc = 'Rascunho';
  	}

}
