<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FabricationController extends Controller
{
    public function show()
    {
        $filePath = 'public/data-fabrication.json';

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
                "quantity" => 100,
                "manufacturer" => "ABC Clothing",
                "production_date" => "2023-12-01",
                "status" => "En cours de fabrication"
            ],
            [
                "id" => 2,
                "product_name" => "Pantalon",
                "quantity" => 80,
                "manufacturer" => "XYZ Apparel",
                "production_date" => "2023-12-05",
                "status" => "En attente"
            ],
            [
                "id" => 3,
                "product_name" => "Robe",
                "quantity" => 120,
                "manufacturer" => "Fashion House",
                "production_date" => "2023-11-28",
                "status" => "Terminé"
            ],
            [
                "id" => 4,
                "product_name" => "Jupe",
                "quantity" => 60,
                "manufacturer" => "Trendy Wear",
                "production_date" => "2023-12-10",
                "status" => "En attente"
            ],
            [
                "id" => 5,
                "product_name" => "Costume",
                "quantity" => 150,
                "manufacturer" => "Formal Attire Co.",
                "production_date" => "2023-12-15",
                "status" => "En cours de fabrication"
            ],
            [
                "id" => 6,
                "product_name" => "T-shirt",
                "quantity" => 200,
                "manufacturer" => "Casual Wear Inc.",
                "production_date" => "2023-12-08",
                "status" => "En cours de fabrication"
            ],
            [
                "id" => 7,
                "product_name" => "Veste",
                "quantity" => 90,
                "manufacturer" => "Outerwear Unlimited",
                "production_date" => "2023-12-03",
                "status" => "Terminé"
            ],
            [
                "id" => 8,
                "product_name" => "Pull",
                "quantity" => 110,
                "manufacturer" => "Warm Clothing Co.",
                "production_date" => "2023-12-20",
                "status" => "En attente"
            ],
            [
                "id" => 9,
                "product_name" => "Chaussures",
                "quantity" => 70,
                "manufacturer" => "Footwear Emporium",
                "production_date" => "2023-12-18",
                "status" => "En cours de fabrication"
            ],
            [
                "id" => 10,
                "product_name" => "Short",
                "quantity" => 50,
                "manufacturer" => "Sportswear Pro",
                "production_date" => "2023-12-12",
                "status" => "En attente"
            ],
            [
                "id" => 11,
                "product_name" => "Chapeau",
                "quantity" => 30,
                "manufacturer" => "Headgear Haven",
                "production_date" => "2023-12-25",
                "status" => "Terminé"
            ],
            [
                "id" => 12,
                "product_name" => "Écharpe",
                "quantity" => 40,
                "manufacturer" => "Accessory Zone",
                "production_date" => "2023-12-22",
                "status" => "En cours de fabrication"
            ],
            [
                "id" => 13,
                "product_name" => "Sac à dos",
                "quantity" => 120,
                "manufacturer" => "Travel Gear Ltd.",
                "production_date" => "2023-12-17",
                "status" => "En cours de fabrication"
            ],
            [
                "id" => 14,
                "product_name" => "Montre",
                "quantity" => 80,
                "manufacturer" => "Timepiece Company",
                "production_date" => "2023-12-19",
                "status" => "En attente"
            ],
            [
                "id" => 15,
                "product_name" => "Portefeuille",
                "quantity" => 60,
                "manufacturer" => "Leather Goods Inc.",
                "production_date" => "2023-12-13",
                "status" => "Terminé"
            ]

        ];
        $filePath = 'public/data-fabrication.json';

        if (Storage::exists($filePath)) {
            $json = Storage::get($filePath);

            $products = json_decode($json, true);
            $product = collect($products)->firstWhere('id', $id);

            if ($product) {
                return response()->json($product);
            } else {
                return response()->json(['error' => 'Produit non trouvé'], 404);
            }
        }
    }
}
