<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Aluno;

class TabelaAlunosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Aluno::factory()->create([
            [
                'Registro_Academico' => 123456,
                'Nome' => 'Nome aleatório',
                'Idade' => 20,
                'Senha' => bcrypt('password123'),
                'Email' => 'qualquercoisa@example.com',
                'RG' => '123456789',
                'CPF' => 12345678900,
                'IsPcd' => false,
                'PR' => 8.5,
                'PP' => 9.0,
                'PP_Intercambio' => 7.5,
                'Endereco_ID' => 1,
                'Curso_Id' => 1,
            ],
            [
                'Registro_Academico' => 654321,
                'Nome' => 'Alguém random',
                'Idade' => 22,
                'Senha' => bcrypt('securepass'),
                'Email' => 'holyemail@example.com',
                'RG' => '987654321',
                'CPF' => 98765432100,
                'IsPcd' => true,
                'PR' => 7.0,
                'PP' => 8.0,
                'PP_Intercambio' => 6.5,
                'Endereco_ID' => 2,
                'Curso_Id' => 2,
            ]
            ]);
        //
    }
}
