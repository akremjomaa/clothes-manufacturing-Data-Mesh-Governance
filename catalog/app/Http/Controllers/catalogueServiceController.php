<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class catalogueServiceController extends Controller
{
    public function index()
    {
        $data = Storage::get('public/data/catalogue.json');
        $services = json_decode($data);
        return response()->json($services);
    }

    public function show($id)
    {
        $data = Storage::get('public/data/catalogue.json');
        $services = json_decode($data);

        $service = collect($services)->firstWhere('id', $id);

        if (!$service) {
            return response()->json(['message' => 'Service non trouvé'], 404);
        }

        return response()->json($service);
    }
}
