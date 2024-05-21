<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    const CREATED_AT = 'created_date';
    const UPDATED_AT = 'updated_date';

    use HasFactory;
    protected $table = 'produtos';
    public $timestamps = false;

    protected $fillable = array('nome', 'descricao', 'valor', 'quantidade', 'responsavelCadastro', 'created_date', 'updated_date');
    protected $guarded = ['id'];
}
