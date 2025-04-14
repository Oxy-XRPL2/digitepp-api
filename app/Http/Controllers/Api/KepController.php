<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kep;
use Illuminate\Http\JsonResponse;

class KepController extends Controller
{
    public function index(): JsonResponse
    {
        $keps = Kep::with(['lembaga', 'anggota.role'])->get();

        return response()->json([
            'status' => 'success',
            'data' => $keps
        ]);
    }
}
