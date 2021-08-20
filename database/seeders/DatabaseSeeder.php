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

        //Criando turma
        //Turma A
        foreach (range(1,40) as $index) {
            DB::table('turma')->insert([
                'id_disciplina' => $index,
                'id_professor' => $index,
                'codigo' => 'A',
                'data_inicio' => '2020-08-01 00:00:00',
            ]);
        }

        //Turma B
        foreach (range(1,20) as $index) {
            DB::table('turma')->insert([
                'id_disciplina' => $index,
                'id_professor' => ($index + 10),
                'codigo' => 'B',
                'data_inicio' => '2020-08-01 00:00:00',
            ]);
        }

        //Turma C
        foreach (range(1,10) as $index) {
            DB::table('turma')->insert([
                'id_disciplina' => $index,
                'id_professor' => ($index + 20),
                'codigo' => 'C',
                'data_inicio' => '2020-08-01 00:00:00',
            ]);
        }

        //Criando banco de dados de Alunos
        foreach (range(41,440) as $index) {
            DB::table('users')->insert([
	            'name' => $faker->name,
	            'matricula' => (201565000+$index),
	            'password' => bcrypt('1234'),
	        ]);
            //Adicionando na tabela do professor
            if(($index%5) ==0){
                DB::table('estudante')->insert([
                    'id_usuario' => $index,
                    'curso' => 'CC-D',
                ]);
            } elseif(($index%5) ==1) {
                DB::table('estudante')->insert([
                    'id_usuario' => $index,
                    'curso' => 'CC-N',
                ]);
            } elseif(($index%5) ==2) {
                DB::table('estudante')->insert([
                    'id_usuario' => $index,
                    'curso' => 'EX',
                ]);
            } elseif(($index%5) ==3) {
                DB::table('estudante')->insert([
                    'id_usuario' => $index,
                    'curso' => 'SI',
                ]);
            } else{
                DB::table('estudante')->insert([
                    'id_usuario' => $index,
                    'curso' => 'EC',
                ]);
            }
        }
        

        //Adicionando estudante na turma
        foreach (range(1,400) as $index) {
            DB::table('turma_estudante')->insert([
                'id_turma' => (($index%70)+1),
                'id_estudante' => ($index+40),
            ]);

            DB::table('turma_estudante')->insert([
                'id_turma' => (((1+$index)%70)+1),
                'id_estudante' => ($index+40),
            ]);

            DB::table('turma_estudante')->insert([
                'id_turma' => (((2+$index)%70)+1),
                'id_estudante' => ($index+40),
            ]);

        }

        //Adicionando avaliação dos alunos
        foreach (range(1,1000) as $index) {
            DB::table('avaliacao')->insert([
	            'id_turma_estudante' => $index,
                'p1' => rand(2,5),
                'p2' => rand(2,5),
                'p3' => rand(2,5),
                'p4' => rand(2,5),
                'p5' => rand(2,5),
                'p6' => rand(2,5),
                'p7' => rand(2,5),
                'p8' => rand(2,5),
                'p9' => rand(2,5),
                'p10' => rand(2,5),
                'p11' => rand(2,5),
                'p12' => rand(2,5),
                'p13' => rand(2,5),
                'a1' => rand(2,5),
                'a2' => rand(2,5),
                'a3' => rand(2,5),
                'a4' => rand(2,5),
                'a5' => rand(2,5),
                'a6' => rand(2,5),
                'a7' => rand(2,5),
                'a8' => rand(2,5),
                'a9' => rand(2,5),
                'a10' => rand(2,5),
                'concluido' => (1),
                'data_resposta' => '2020-12-01 00:00:00',
	        ]);
        }
        //Diminuindo
        foreach (range(1001,1100) as $index) {
            DB::table('avaliacao')->insert([
	            'id_turma_estudante' => $index,
                'p1' => 1,
                'p2' => 1,
                'p3' => 1,
                'p4' => 1,
                'p5' => 1,
                'p6' => 1,
                'p7' => 1,
                'p8' => 1,
                'p9' => 1,
                'p10' => 1,
                'p11' => 1,
                'p12' => 1,
                'p13' => 1,
                'a1' => 1,
                'a2' => 1,
                'a3' => 1,
                'a4' => 1,
                'a5' => 1,
                'a6' => 1,
                'a7' => 1,
                'a8' => 1,
                'a9' => 1,
                'a10' => 1,
                'concluido' => (1),
                'data_resposta' => '2020-12-01 00:00:00',
	        ]);
        }

            //Criando banco de dados da Progepe
            foreach (range(1,10) as $index) {
                DB::table('users')->insert([
                    'name' => $faker->name,
                    'matricula' => (1000+$index),
                    'password' => bcrypt('1234'),
                ]);

                DB::table('progepe')->insert([
                    'id_usuario' => (440+$index),
                ]);
            }
    }
}
