<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    // GET /api/reports -> Retorna los reportes de las últimas 48 horas para el Mapa
    public function index(): JsonResponse
    {
        $reports = Report::with('category')
            ->where('created_at', '>=', now()->subHours(48))
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json([
            'reports' => $reports,
        ]);
    }

    // GET /api/reports/me -> Retorna el historial del usuario actual para el Perfil
    public function myReports(Request $request): JsonResponse
    {
        $reports = Report::where('user_id', $request->user()->id)
            ->with('category')
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json([
            'reports' => $reports,
        ]);
    }

    // POST /api/reports -> Crear reporte
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'category_id' => ['required', 'exists:categories,id'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'latitude' => ['required', 'numeric', 'between:-90,90'],
            'longitude' => ['required', 'numeric', 'between:-180,180'],
            'address' => ['nullable', 'string', 'max:255'],
            'photo' => ['required', 'image', 'max:5120'],
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
