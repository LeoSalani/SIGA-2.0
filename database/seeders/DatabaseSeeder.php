<?php
namespace Database\Seeders;

use App\Models\Aluno;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('tbl_estudante')->insert([
            [
                'Registro_Academico' => 123456,
                'Nome' => 'Nome aleatório',
                'Idade' => 20,
                'Senha' => bcrypt('password123'),
                'Email' => 'qualquercoisa@example.com',
                'RG' => '123456789',
                'CPF' => 123456789,
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
                'CPF' => 987654321,
                'IsPcd' => true,
                'PR' => 7.0,
                'PP' => 8.0,
                'PP_Intercambio' => 6.5,
                'Endereco_ID' => 2,
                'Curso_Id' => 2,
            ]
            ]);

            DB::table('tbl_curso')->insert([
                'Nome' => 'Joazinho',
                'QtdSemestres' => 6,
                'Coordenador_Id' => 1,
                'Modalidade_Id' => 1
            ]);

            DB::table('modalidade')->insert([
                'Titulo' => 'Online'
            ]);

            DB::table('tbl_coordenador')->insert([
                'DataEntrada' => '2001-01-01',
                'DataSaida' => '2002-02-02',
                'Funcionario_Id' => 1,
            ]);

            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
