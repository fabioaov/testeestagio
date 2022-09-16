<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pedido extends Model
{
    use HasFactory;

    /**
     * Retorna pedidos com comandas em aberto
     * 
     * @return array([object, ...])
     */
    public static function getPedidosComandaAberta()
    {
        return DB::table('pedidos')
            ->join('comandas', 'pedidos.id_comanda', '=', 'comandas.id')
            ->join('produtos', 'pedidos.id_produto', '=', 'produtos.id')
            ->where('comandas.condicao', 1)
            ->select('pedidos.quantidade', DB::raw('comandas.id_mesa as id_mesa, produtos.produto as produto, produtos.valor as valor'))
            ->get();
    }
}
