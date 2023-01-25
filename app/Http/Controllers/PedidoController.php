<?php

namespace App\Http\Controllers;

use App\Interfaces\PedidoRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PedidoController extends Controller 
{
    private PedidoRepositoryInterface $pedidoRepository;

    public function __construct(PedidoRepositoryInterface $pedidoRepository) 
    {
        $this->pedidoRepository = $pedidoRepository;
    }

    public function index(): JsonResponse 
    {
        return response()->json([
            'data' => $this->pedidoRepository->getAllPedidos()
        ]);
    }

    public function store(Request $request): JsonResponse 
    {
        $pedidoDetalhes = $request->only([
            'cliente',
            'detalhes'
        ]);

        return response()->json(
            [
                'data' => $this->pedidoRepository->createPedido($pedidoDetalhes)
            ],
            Response::HTTP_CREATED
        );
    }

    public function show(Request $request): JsonResponse 
    {
        $pedidoId = $request->route('id');

        return response()->json([
            'data' => $this->pedidoRepository->getPedidoById($pedidoId)
        ]);
    }

    public function update(Request $request): JsonResponse 
    {
        $pedidoId = $request->route('id');
        $pedidoDetalhes = $request->only([
            'cliente',
            'detalhes'
        ]);

        return response()->json([
            'data' => $this->pedidoRepository->updatePedido($pedidoId, $pedidoDetalhes)
        ]);
    }

    public function destroy(Request $request): JsonResponse 
    {
        $pedidoId = $request->route('id');
        $this->pedidoRepository->deletePedido($pedidoId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
