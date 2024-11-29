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
        'registro_academico',
        'nome',
        'idade',
        'senha',
        'email',
        'rg',
        'cpf',
        'ispcd',
        'pr',
        'pp',
        'pp(intercambio)',
        'endereco_id',
        'curso_id',
    ];

    protected $attributes = [
        'nome' => 'Nome',
        'idade' => 'Idade',
        'email' => 'Email',
        // 'Registro_Academico' => 0,
    ];

    protected $hidden = [
        'password',
        'rg',
        'cpf',
        'endereco_id',
        'registro_academico'
    ];

    public $timestamps = false;

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
