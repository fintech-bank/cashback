<?php

namespace Database\Seeders;

use App\Models\Core\Subcategory;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    public function run()
    {
        Subcategory::create(['name' => "Hotel", "category_id" => 1]);
        Subcategory::create(['name' => "Train Bus Taxi", "category_id" => 1]);
        Subcategory::create(['name' => "Location de voiture", "category_id" => 1]);
        Subcategory::create(['name' => "Séjour & Vol+Hotel", "category_id" => 1]);
        Subcategory::create(['name' => "Club de vacance & camping", "category_id" => 1]);
        Subcategory::create(['name' => "Appartement, Villas & Chambres d'Hotes", "category_id" => 1]);
        Subcategory::create(['name' => "Séjour Montagne/Ski", "category_id" => 1]);
        Subcategory::create(['name' => "Vols & Compagnie Aeriennes", "category_id" => 1]);
        Subcategory::create(['name' => "Croisiere & Ferrie", "category_id" => 1]);
        Subcategory::create(['name' => "Chaussure", "category_id" => 2]);
        Subcategory::create(['name' => "Mode Femme", "category_id" => 2]);
        Subcategory::create(['name' => "Mode Homme", "category_id" => 2]);
        Subcategory::create(['name' => "Mode Enfant", "category_id" => 2]);
        Subcategory::create(['name' => "Grande marque de mode", "category_id" => 2]);
        Subcategory::create(['name' => "Bijoux & Montres", "category_id" => 2]);
        Subcategory::create(['name' => "Sacs & Bagages", "category_id" => 2]);
        Subcategory::create(['name' => "Sous-vetement", "category_id" => 2]);
        Subcategory::create(['name' => "Destockage", "category_id" => 2]);
        Subcategory::create(['name' => "Mode Grande Taille", "category_id" => 2]);
        Subcategory::create(['name' => "Electromenager", "category_id" => 3]);
        Subcategory::create(['name' => "Ameublement", "category_id" => 3]);
        Subcategory::create(['name' => "Literie", "category_id" => 3]);
        Subcategory::create(['name' => "Linge de maison", "category_id" => 3]);
        Subcategory::create(['name' => "Luminaire", "category_id" => 3]);
        Subcategory::create(['name' => "Objets Pratique", "category_id" => 3]);
        Subcategory::create(['name' => "Cuisine", "category_id" => 3]);
        Subcategory::create(['name' => "Energie", "category_id" => 3]);
        Subcategory::create(['name' => "Sécurité & Domotique", "category_id" => 3]);
        Subcategory::create(['name' => "Informatique & Tablette", "category_id" => 4]);
        Subcategory::create(['name' => "Téléphonie & Box Internet", "category_id" => 4]);
        Subcategory::create(['name' => "TV & Son", "category_id" => 4]);
        Subcategory::create(['name' => "Photo & Vidéo", "category_id" => 4]);
        Subcategory::create(['name' => "Imprimante & Consommable", "category_id" => 4]);
        Subcategory::create(['name' => "Composants & Electronique", "category_id" => 4]);
        Subcategory::create(['name' => "Logiciels", "category_id" => 4]);
        Subcategory::create(['name' => "Gadget", "category_id" => 4]);
        Subcategory::create(['name' => "Console & Jeux Vidéo", "category_id" => 4]);
        Subcategory::create(['name' => "Grande Marque High Tech", "category_id" => 4]);
    }
}
