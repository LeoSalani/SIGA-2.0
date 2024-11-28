<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Register a new student.
     */
    public function register(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'Registro_Academico' => 'required|integer|max:11',
            'nome' => 'required|string|max:100',
            'idade' => 'required|integer|min:0',
            'senha' => 'required|string|min:8',
            'email' => 'required|email|max:256|unique:tbl_estudante,email',
            'rg' => 'nullable|string|max:12',
            'cpf' => 'nullable|integer|digits:11|unique:tbl_estudante,cpf',
            'is_pcd' => 'nullable|boolean',
            'pr' => 'nullable|numeric', // PR value as a float
            'pp' => 'nullable|numeric', // PP value as a float
            'pp_intercambio' => 'nullable|numeric', // PP (Intercâmbio)
            'endereco_id' => 'nullable|integer', // Related Address ID
        ]);

        // Create a new student record
        $aluno = Aluno::create([
            'Registro_Academico' => $validated['Registro_Academico'],
            'nome' => $validated['nome'],
            'idade' => $validated['idade'],
            'senha' => Hash::make($validated['senha']),
            'email' => $validated['email'],
            'rg' => $validated['rg'] ?? null,
            'cpf' => $validated['cpf'] ?? null,
            'is_pcd' => $validated['is_pcd'] ?? false,
            'pr' => $validated['pr'] ?? null,
            'pp' => $validated['pp'] ?? null,
            'pp_intercambio' => $validated['pp_intercambio'] ?? null,
            'endereco_id' => $validated['endereco_id'] ?? null,
        ]);

        return response()->json(['message' => 'Aluno registrado com sucesso', 'Aluno' => $aluno], 201);
    }

    public function pegarDadosAluno(Request $request)
    {
        $RegistroAcademico = $request->query('Registro_Academico');

        if(!$RegistroAcademico){

            return response()->json([
                'message' => 'É necessário um RA para acessar'
            ], 400);
        }

        $aluno = Aluno::where('Registro_Academico', $RegistroAcademico)->first();

        if(!$aluno){
            return response()->json([
                'message' => 'Aluno não encontrado'
            ], 404);
        }

        return response()->json([
            'Registro_Academico' => $aluno->Registro_Academico,
            'nome' => $aluno->nome,
            'idade' => $aluno->idade
        ]);

    }

}
