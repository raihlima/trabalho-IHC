<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $faker = Faker::create('pt_BR');

        //Criando usuário do professor
        foreach (range(1,40) as $index) {
            DB::table('users')->insert([
	            'name' => $faker->name,
	            'matricula' => (100000+$index),
	            'password' => bcrypt('1234'),
	        ]);
            //Adicionando na tabela do professor
            if(($index%10) !=0){
                DB::table('professor')->insert([
                    'id_usuario' => $index,
                    'estagio_probatorio' => (0),
                ]);
            } else {
                DB::table('professor')->insert([
                    'id_usuario' => $index,
                    'estagio_probatorio' => (1),
                ]);
            }
        }
        //Adicionando chefe de departamento
        DB::table('chefe_departamento')->insert([
            'id_usuario' => 1,
        ]);

        //Adicionando coordenador de curso
        DB::table('coordenador_curso')->insert([
            'id_usuario' => 2,
            'curso' => 'CC-D',
        ]);
        DB::table('coordenador_curso')->insert([
            'id_usuario' => 3,
            'curso' => 'CC-N',
        ]);
        DB::table('coordenador_curso')->insert([
            'id_usuario' => 4,
            'curso' => 'SI',
        ]);
        DB::table('coordenador_curso')->insert([
            'id_usuario' => 4,
            'curso' => 'EC',
        ]);
        
        
        //Criando Disciplinas
        
        DB::table('disciplina')->insert([
            'codigo' => 'DCC001',
            'nome' => 'Análise de Sistemas',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC002',
            'nome' => 'Laboratório de Programação I',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC003',
            'nome' => 'Laboratório de Programação II',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC004',
            'nome' => 'Sistemas Distribuídos',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC005',
            'nome' => 'Algoritmos',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC006',
            'nome' => 'Seminário I',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC007',
            'nome' => 'Seminário II',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC008',
            'nome' => 'Laboratório de Programação III',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC009',
            'nome' => 'Análise de Redes',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC010',
            'nome' => 'Teoria de Redes',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC011',
            'nome' => 'Teoria da Computação ',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC012',
            'nome' => 'Estrutura de Dados',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC013',
            'nome' => 'Sistemas Operacionais',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC014',
            'nome' => 'Análise de Banco de Dados',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC015',
            'nome' => 'Sistemas Web',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC016',
            'nome' => 'Estrutura de Dados',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC017',
            'nome' => 'Laboratório de Programação IV',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC018',
            'nome' => 'Seminário III',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC019',
            'nome' => 'Estrutura de Dados',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC020',
            'nome' => 'Teoria de Compiladores',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC021',
            'nome' => 'Teoria em Sistemas Distribuídos',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC022',
            'nome' => 'Teoria em Pesquisa',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC023',
            'nome' => 'Análise de Software',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC024',
            'nome' => 'Laboratório de Web I',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC025',
            'nome' => 'Interação-Humano-Computador',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC026',
            'nome' => 'Sistemas de Aplicação Web',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC027',
            'nome' => 'Laboratório de Web II',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC028',
            'nome' => 'Laboratório de Sistemas Operacionais',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC029',
            'nome' => 'Laboratório de Redes',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC030',
            'nome' => 'Análise de Projetos',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC031',
            'nome' => 'Teoria em Análise de Dados',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC032',
            'nome' => 'Análise de Dados',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC033',
            'nome' => 'Seminário IV',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC034',
            'nome' => 'Teoria em Redes',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC035',
            'nome' => 'Seminário V',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC036',
            'nome' => 'Sistemas de Redes',
        ]);
        DB::table('disciplina')->insert([
                    'codigo' => 'DCC037',
            'nome' => 'Sistemas Operacionais II',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC038',
            'nome' => 'Teoria de Segurança Web',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC039',
            'nome' => 'Sistemas Web II',
        ]);
        DB::table('disciplina')->insert([
            'codigo' => 'DCC040',
            'nome' => 'Análise em Sistemas de Segurança',
        ]);

        
    }
}
