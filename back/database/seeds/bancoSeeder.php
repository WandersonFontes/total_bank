<?php
use App\Models\banco;
use Illuminate\Database\Seeder;

class bancoSeeder extends Seeder
{
    public function run()
    {
        factory(banco::class, 10)->create();
    }
}
