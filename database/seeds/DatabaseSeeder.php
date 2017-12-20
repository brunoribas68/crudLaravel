<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(CategoriaTableSeeder::class);
    }
}
class CategoriaTableSeeder extends Seeder{

  public function run()
  {
      Categoria::create(['nome' => 'Eletronico']);
      Categoria::create(['nome' => 'Eletrodomestico']);
      Categoria::create(['nome' => 'Brinquedo']);
      Categoria::create(['nome' => 'Esportes']);

  }
}
