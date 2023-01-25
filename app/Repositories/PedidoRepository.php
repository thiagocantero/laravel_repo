<?php

namespace App\Repositories;

use App\Interfaces\PedidoRepositoryInterface;
use App\Models\Pedido;

class PedidoRepository implements PedidoRepositoryInterface 
{
    public function getAllPedidos() 
    {
        return Pedido::all();
    }

    public function getPedidoById($pedidoId) 
    {
        return Pedido::findOrFail($pedidoId);
    }

    public function deletePedido($pedidoId) 
    {
        Pedido::destroy($pedidoId);
    }

    public function createPedido(array $pedidoDetalhes) 
    {
        return Pedido::create($pedidoDetalhes);
    }

    public function updatePedido($pedidoId, array $novoDetalhes) 
    {
        return Pedido::whereId($pedidoId)->update($novoDetalhes);
    }

    public function getFoiConcluidoPedidos()
    
    {
        return Pedido::where('foi_concluido', true);
    }
}
