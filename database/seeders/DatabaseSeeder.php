<?php

namespace Database\Seeders;

use App\Models\User;
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
        $accounts = [
          ['name' => 'Josephine Cacao', 'created_at'=>now(), 'updated_at'=>now()],
          ['name' => 'Leonilo Cacao', 'created_at'=>now(), 'updated_at'=>now()],
          ['name' => 'Fernando Giba Jr', 'created_at'=>now(), 'updated_at'=>now()],
          ['name' => 'Chenny Cao', 'created_at'=>now(), 'updated_at'=>now()],
          ['name' => 'Merry', 'created_at'=>now(), 'updated_at'=>now()],
          ['name' => 'Ken Somirachi', 'created_at'=>now(), 'updated_at'=>now()],
          ['name' => 'Nicka Mendoza', 'created_at'=>now(), 'updated_at'=>now()],
          ['name' => 'Rosheen Perdillo', 'created_at'=>now(), 'updated_at'=>now()],
          ['name' => 'Jason Prado', 'created_at'=>now(), 'updated_at'=>now()],
          ['name' => 'Joan Berlin', 'created_at'=>now(), 'updated_at'=>now()],
        ];
        DB::table('accounts')->insert($accounts);
    }
}
