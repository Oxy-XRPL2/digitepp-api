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

    public function show($id): JsonResponse
    {
        $kep = Kep::with(['lembaga', 'anggota.role'])->find($id);

        if (!$kep) {
            return response()->json([
                'status' => 'error',
                'message' => 'KEP not found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $kep
        ]);
    }
}
