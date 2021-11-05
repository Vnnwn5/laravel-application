<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;
use App\Http\Resources\OfficeResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class OfficeController extends Controller
{
    public function index():AnonymousResourceCollection
    {
        $offices = Office::query()
            ->latest('id')
            ->get();

        return OfficeResource::collection(
            $offices
        );
    }
}
