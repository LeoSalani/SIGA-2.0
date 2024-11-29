<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
    /**
     * Register a new student.
     */
    public function registrarAlunos(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'registro_academico' => 'required|integer|digits_between:1,11|unique:tbl_estudante,registro_academico',
            'nome' => 'required|string|max:100',
            'idade' => 'required|integer|min:0',
            'senha' => 'required|string|min:8',
            'email' => 'required|email|max:256|unique:tbl_estudante,email',
            'rg' => 'nullable|string|max:12',
            'cpf' => 'nullable|integer|digits:10|unique:tbl_estudante,cpf',
            'ispcd' => 'nullable|boolean',
            'pr' => 'nullable|numeric', // PR value as a float
            'pp' => 'nullable|numeric', // PP value as a float
            'pp_intercambio' => 'nullable|numeric', // PP (Intercâmbio)
            'endereco_id' => 'nullable|integer', // Related Address ID
            'curso_id' => 'nullable|integer',
        ]);

        // Create a new student record
        $aluno = Aluno::create([
            'registro_academico' => $validated['registro_academico'],
            'nome' => $validated['nome'],
            'idade' => $validated['idade'],
            'senha' => ($validated['senha']),
            'email' => $validated['email'],
            'rg' => $validated['rg'] ?? null,
            'cpf' => $validated['cpf'] ?? null,
            'ispcd' => $validated['ispcd'] ?? false,
            'pr' => $validated['pr'] ?? null,
            'pp' => $validated['pp'] ?? null,
            'pp_intercambio' => $validated['pp_intercambio'] ?? null,
            'endereco_id' => $validated['endereco_id'] ?? null,
            'curso_id' => $validated['curso_id'] ?? null,
        ]);

        return response()->json([
            'message' => 'Aluno registrado com sucesso', 
            'Aluno' => $aluno], 201);
    }

    public function pegarDadosAluno(Request $request)
    {
        $RegistroAcademico = $request->query('Registro_Academico');

        if(!$RegistroAcademico){

            return response()->json([
                'message' => 'É necessário um RA para acessar'
            ], 400);
        }

        Log::debug("Procurando os dados do aluno");

        $aluno = Aluno::where('Registro_Academico', $RegistroAcademico)->first();

        if(!$aluno){
            return response()->json([
                'message' => 'Aluno não encontrado'
            ], 404);
        }

        return response()->json([
            'Registro_Academico' => $aluno->Registro_Academico,
            'nome' => $aluno->Nome,
            'idade' => $aluno->Idade,
            'email' => $aluno->Email
        ]);

    }

}
