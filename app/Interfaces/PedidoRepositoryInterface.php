<?php

namespace App\Interfaces;

interface PedidoRepositoryInterface 
{
    public function getAllPedidos();
    public function getPedidoById($pedidoId);
    public function deletePedido($pedidoId);
    public function createPedido(array $pedidoDetalhes);
    public function updatePedido($pedidoId, array $novoDetalhes);
    public function getFoiConcluidoPedidos();
}