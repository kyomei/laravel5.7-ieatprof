<?php

namespace escola;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = array('nome', 'email', 'senha', 'cargo');
}
