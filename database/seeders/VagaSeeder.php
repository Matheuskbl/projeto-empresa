<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vaga;

class VagaSeeder extends Seeder
{
    
    public function run(): void
    {
    Vaga::create([
        'titulo' => 'Desenvolvedor PHP Júnior',
        'descricao' => 'Atuar na manutenção de sistemas legados e novos projetos.',
        'tipo' => 'CLT',
        'salario' => 3000.00,
    ]);

    Vaga::create([
        'titulo' => 'Estagiário de Front-end',
        'descricao' => 'Aprender Bootstrap e SCSS na prática.',
        'tipo' => 'Estágio',
        'salario' => 1200.00,
    ]);
    }
}
