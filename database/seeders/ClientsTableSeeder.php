<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insérer des données de test dans la table clients
        DB::table('clients')->insert([
            [
                'nom' => 'Dupont',
                'prenom' => 'Jean',
                'dateNaissance' => '1985-01-15',
                'adresse' => '123 Rue de Paris',
                'tel' => '0123456789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Martin',
                'prenom' => 'Marie',
                'dateNaissance' => '1990-03-22',
                'adresse' => '456 Avenue des Champs',
                'tel' => '0987654321',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Durand',
                'prenom' => 'Pierre',
                'dateNaissance' => '1980-07-10',
                'adresse' => '789 Boulevard Victor Hugo',
                'tel' => '0147258369',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
