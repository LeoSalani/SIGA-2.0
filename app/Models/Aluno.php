<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;

class Aluno extends Authenticable{
    //
    use HasFactory;

    protected $table = 'tbl_estudante';

    protected $fillable = [
        'Registro Academico',
        'Nome',
        'Idade',
        'Senha',
        'Email',
        'RG',
        'CPF',
        'IsPcd',
        'PR',
        'PP',
        'PP(Intercambio)',
        'Endereco_Id',
        'Curso_Id',
    ];

    protected $hidden = [
        'password',
        'RG',
        'CPF',
        'Endereco_Id',
        'Registro_Academico'
    ];

    public function notas()
    {
        return $this->hasMany(notas::class, 'aluno_id');
    }

    public function aulas()
    {
        return $this->belongsToMany(aula::class, 'Aluno_Disciplina', 'aluno_id', 'aula_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
