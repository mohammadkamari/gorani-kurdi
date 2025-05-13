<?php

namespace Modules\Singer\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Singer\Http\Request\StoreSingerRequest;
use Modules\Singer\Http\Request\UpdateSingerRequest;
use Modules\Singer\Services\SingerService;


class SingerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $singers = $this->singerService->getall();
        return response()->json($singers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('singer::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    protected SingerService $singerService;

    public function __construct(SingerService $singerService)
    {
        $this->singerService = $singerService;
    }

    public function store(StoreSingerRequest $request): JsonResponse
    {
        $singer = $this->singerService->store($request->validated());
        return response()->json($singer, 201);
    }
    /**
     * Show the specified resource.
     */
    public function show($id): JsonResponse
    {
        $singer = $this->singerService->show($id);

        if (!$singer) {
            return response()->json(['message' => 'Singer not found'], 404);
        }

        return response()->json($singer);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('singer::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSingerRequest $request, int $id): JsonResponse
    {
        $singer = $this->singerService->update($id, $request->validated());

        if (!$singer) {
            return response()->json(['message' => 'Singer not found'], 404);
        }

        return response()->json($singer);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): JsonResponse
    {
        $deleted = $this->singerService->destroy($id);

        if (!$deleted) {
            return response()->json(['message' => 'Singer not found'], 404);
        }

        return response()->json(['Singer deleted successfully']);
    }
}
