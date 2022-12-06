<?php

namespace Database\Seeders;

use App\Models\Core\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(["name" => "Voyage & Transport"]);
        Category::create(["name" => "Modes & Accessoires"]);
        Category::create(["name" => "Maison Déco Electromenager"]);
        Category::create(["name" => "High-Tech & Technologie"]);
        Category::create(["name" => "Brico Jardin Animalerie"]);
        Category::create(["name" => "Beauté & Bien-Être"]);
        Category::create(["name" => "Loisir Culture Cadeaux"]);
        Category::create(["name" => "Jouets & Enfants"]);
        Category::create(["name" => "Sport & Plein Air"]);
        Category::create(["name" => "Auto & Moto"]);
        Category::create(["name" => "Alimentation Cuisine Vin"]);
        Category::create(["name" => "Service"]);
        Category::create(["name" => "Achat Pro & Fourniture"]);
    }
}
