<?php

namespace Modules\Singer\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Singer\Http\Request\StoreSingerRequest;
use Modules\Singer\Services\SingerService;


class SingerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('singer::index');
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
    public function show($id)
    {
        return view('singer::show');
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
    public function update(Request $request, $id) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {}
}
