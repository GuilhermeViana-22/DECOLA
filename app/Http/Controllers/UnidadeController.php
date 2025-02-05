<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnidadeController extends Controller
{
    /**
     * Exibe a lista de unidades.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $unidades = [
            [
                'nome' => 'Unidade Jaraguá',
                'endereco' => 'Praça Dom José Gaspar, 134 – Centro Histórico de São Paulo – São Paulo/SP',
                'imagem' => '1.png',
                'link_maps' => 'https://goo.gl/maps/jaragua'
            ],
            [
                'nome' => 'Unidade Pinheiros',
                'endereco' => 'Rua dos Pinheiros, 890 – Pinheiros – São Paulo/SP',
                'imagem' => '1.png',
                'link_maps' => 'https://goo.gl/maps/pinheiros'
            ],
            [
                'nome' => 'Unidade Vila Mariana',
                'endereco' => 'Avenida Lins de Vasconcelos, 1500 – Vila Mariana – São Paulo/SP',
                'imagem' => '1.png',
                'link_maps' => 'https://goo.gl/maps/vilamariana'
            ],
            [
                'nome' => 'Unidade Mooca',
                'endereco' => 'Rua da Mooca, 1200 – Mooca – São Paulo/SP',
                'imagem' => '1.png',
                'link_maps' => 'https://goo.gl/maps/mooca'
            ],
            [
                'nome' => 'Unidade Tatuapé',
                'endereco' => 'Rua Tuiuti, 1800 – Tatuapé – São Paulo/SP',
                'imagem' => '1.png',
                'link_maps' => 'https://goo.gl/maps/tatuape'
            ]
        ];

        return view('pages.unidades.unidades', compact('unidades'));
    }
}
