<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    // Listar los reportes del usuario autenticado
    public function index(Request $request): JsonResponse
    {
        $reports = Report::where('user_id', $request->user()->id)
            ->with('category')
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json([
            'reports' => $reports,
        ]);
    }

    // Crear un nuevo reporte ciudadano
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'category_id' => ['required', 'exists:categories,id'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'latitude' => ['required', 'numeric', 'between:-90,90'],
            'longitude' => ['required', 'numeric', 'between:-180,180'],
            'address' => ['nullable', 'string', 'max:255'],
            'photo' => ['required', 'image', 'max:5120'], // Máximo 5MB
        ]);

        $photoPath = $request->file('photo')->store('reports', 'public');

        $report = new Report([
            'category_id' => $validated['category_id'],
            'title' => $validated['title'],
            'description' => $validated['description'],
            'latitude' => $validated['latitude'],
            'longitude' => $validated['longitude'],
            'address' => $validated['address'] ?? 'Ubicación GPS',
            'photo_path' => $photoPath,
        ]);

        $report->user_id = $request->user()->id;
        $report->status = 'pending';
        $report->save();

        return response()->json([
            'message' => 'Reporte creado exitosamente.',
            'report' => $report->load('category'),
        ], 201);
    }
}
