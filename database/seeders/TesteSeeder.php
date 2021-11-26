<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TesteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tenant1 = new \App\Models\Tenant;
        $tenant1->name = 'Empresa 01';
        $tenant1->save();

        $tenant2 = new \App\Models\Tenant;
        $tenant2->name = 'Empresa 02';
        $tenant2->save();
        
        $jobs = new \App\Models\User;
        $jobs->name = 'Erick Cordeiro';
        $jobs->email = 'erickcordeiroa@gmail.com';
        $jobs->email_verified_at = now();
        $jobs->password = bcrypt('secret');
        $jobs->remember_token = \Illuminate\Support\Str::random(10);
        $jobs->save();

        $user1 = new \App\Models\User;
        $user1->name = 'Usuário Teste 01';
        $user1->tenant_id = $tenant1->id;
        $user1->email = 'teste01@teste.com';
        $user1->email_verified_at = now();
        $user1->password = bcrypt('secret');
        $user1->remember_token = \Illuminate\Support\Str::random(10);
        $user1->save();
        
        $user2 = new \App\Models\User;
        $user2->name = 'Usuário Teste 02';
        $user2->tenant_id = $tenant2->id;
        $user2->email = 'teste02@teste.com';
        $user2->email_verified_at = now();
        $user2->password = bcrypt('secret');
        $user2->remember_token = \Illuminate\Support\Str::random(10);
        $user2->save();
    }
}
