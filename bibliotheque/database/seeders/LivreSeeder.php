<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Livre;


class LivreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Livre::create([
            'titre' => 'Les Misérables',
            'auteur' => 'Victor Hugo',
            'annee_publication' => 1862,
        ]);

        Livre::create([
            'titre' => 'Le Petit Prince',
            'auteur' => 'Antoine de Saint-Exupéry',
            'annee_publication' => 1943,
        ]);

        Livre::create([
            'titre' => '1984',
            'auteur' => 'George Orwell',
            'annee_publication' => 1949,
        ]);

        Livre::create([
            'titre' => 'L\'Étranger',
            'auteur' => 'Albert Camus',
            'annee_publication' => 1942,
        ]);

        Livre::create([
            'titre' => 'Harry Potter à l\'école des sorciers',
            'auteur' => 'J.K. Rowling',
            'annee_publication' => 1997,
        ]);
    }
}
