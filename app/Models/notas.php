<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{
    use HasFactory;

    protected $fillable = [
        'Aluno_id',
        'Disciplina_id',
        'nota',
    ];

    public function student()
    {
        return $this->belongsTo(Aluno::class, 'Aluno_id');
    }

    public function classe()
    {
        return $this->belongsTo(Disciplina::class, 'Disciplina_Id');
    }
}
