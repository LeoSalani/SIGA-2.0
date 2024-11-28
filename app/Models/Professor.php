<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; 

class Professor extends Model
{

    use HasFactory;

    protected $table = 'tbl_professor';

    protected $fillable = ['Id_Professor', 'Nome', 'Email', 'Senha', 'RG', 'CPF'];

    public function user(){

        return $this->belongsTo(User::class);
    }
}