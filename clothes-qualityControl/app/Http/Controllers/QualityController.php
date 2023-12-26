<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class QualityController extends Controller
{
    public function show()
    {
        $filePath = 'public/data-qualityControl.json';

        if (Storage::exists($filePath)) {
            $json = Storage::get($filePath);

            $products = json_decode($json, true);

            return response()->json($products);
        }

        return response()->json(['error' => 'Fichier non trouvé'], 404);
    }


public function showById($id)
{

$products = [
    [
        "id" => 1,
        "product_name" => "Chemise",
        "quality_status" => "Bonne",
        "defects" => [],
        "inspection_date" => "2023-12-02",
        "remarks" => "Aucune remarque"
    ],
    [
        "id" => 2,
        "product_name" => "Pantalon",
        "quality_status" => "Moyenne",
        "defects" => ["Couture lâche"],
        "inspection_date" => "2023-12-06",
        "remarks" => "À vérifier pour la couture"
    ],
    [
        "id" => 3,
        "product_name" => "Robe",
        "quality_status" => "Bonne",
        "defects" => [],
        "inspection_date" => "2023-11-30",
        "remarks" => "Aucune remarque"
    ],
    [
        "id" => 4,
        "product_name" => "Jupe",
        "quality_status" => "Moyenne",
        "defects" => ["Tache légère"],
        "inspection_date" => "2023-12-11",
        "remarks" => "Nettoyage nécessaire"
    ],
    [
        "id" => 5,
        "product_name" => "Costume",
        "quality_status" => "Bonne",
        "defects" => [],
        "inspection_date" => "2023-12-16",
        "remarks" => "Aucune remarque"
    ],
    [
        "id" => 6,
        "product_name" => "T-shirt",
        "quality_status" => "Bonne",
        "defects" => [],
        "inspection_date" => "2023-12-09",
        "remarks" => "Aucune remarque"
    ],
    [
        "id" => 7,
        "product_name" => "Veste",
        "quality_status" => "Moyenne",
        "defects" => ["Fermeture éclair cassée"],
        "inspection_date" => "2023-12-04",
        "remarks" => "Réparation nécessaire"
    ],
    [
        "id" => 8,
        "product_name" => "Pull",
        "quality_status" => "Bonne",
        "defects" => [],
        "inspection_date" => "2023-12-21",
        "remarks" => "Aucune remarque"
    ],
    [
        "id" => 9,
        "product_name" => "Chaussures",
        "quality_status" => "Mauvaise",
        "defects" => ["Semelle décollée"],
        "inspection_date" => "2023-12-19",
        "remarks" => "Réparation urgente"
    ],
    [
        "id" => 10,
        "product_name" => "Short",
        "quality_status" => "Mauvaise",
        "defects" => ["Couture défaite"],
        "inspection_date" => "2023-12-13",
        "remarks" => "Réparation nécessaire"
    ],
    [
        "id" => 11,
        "product_name" => "Chapeau",
        "quality_status" => "Bonne",
        "defects" => [],
        "inspection_date" => "2023-12-26",
        "remarks" => "Aucune remarque"
    ],
    [
        "id" => 12,
        "product_name" => "Écharpe",
        "quality_status" => "Moyenne",
        "defects" => ["Fil tiré"],
        "inspection_date" => "2023-12-23",
        "remarks" => "Réparation mineure nécessaire"
    ],
    [
        "id" => 13,
        "product_name" => "Sac à dos",
        "quality_status" => "Bonne",
        "defects" => [],
        "inspection_date" => "2023-12-18",
        "remarks" => "Aucune remarque"
    ],
    [
        "id" => 14,
        "product_name" => "Montre",
        "quality_status" => "Bonne",
        "defects" => [],
        "inspection_date" => "2023-12-20",
        "remarks" => "Aucune remarque"
    ],
    [
        "id" => 15,
        "product_name" => "Portefeuille",
        "quality_status" => "Moyenne",
        "defects"=> ["Couture décousue"],
        "inspection_date" =>"2023-12-14",
        "remarks" => "Réparation nécessaire"
    ]   ];


 $product = collect($products)->firstWhere('id', $id);

        if ($product) {
            return response()->json($product);
        } else {
            return response()->json(['error' => 'Produit non trouvé'], 404);
        }
    }
}

