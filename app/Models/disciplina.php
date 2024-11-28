<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{

    use HasFactory;

    protected $fillable = [
        'Nome',
        'Horario',
        'DiaSemana',
        'FormatoNotaFinal',
        'Semestre',
        'Descricao',
        'Curso_Id'
    ];

    public function alunos()
    {
        return $this->belongsToMany(Aluno::class, 'aluno_discplina', 'Disciplina_Id', 'Aluno_Id');
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class, 'Professor_Id');
    }
    //
}
