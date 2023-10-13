<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\TravleResource;
use App\Models\Travel;

class TravelController extends Controller
{
    public function index() {
        $travels = Travel::where('is_public', true)->paginate();
        return TravleResource::collection($travels);
    }
}
