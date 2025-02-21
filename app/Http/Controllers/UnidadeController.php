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
            ],
            [
                'nome' => 'Unidade Jundiaí - Franqueadora',
                'endereco' => 'R. Hilda Del Nero Bisquolo, 102 - Jardim Florida, Jundiaí - SP, 13208-703',
                'imagem' => '1.png',
                'link_maps' => 'https://www.google.com/maps/uv?pb=!1s0x94cf259a902e9833%3A0x73a33f14fe4bad4b!3m1!7e115!4s%2Fmaps%2Fplace%2Fthe%2Bone%2Bjundia%25C3%25AD%2F%40-23.1920223%2C-46.9033057%2C3a%2C75y%2C258.6h%2C90t%2Fdata%3D*213m4*211e1*213m2*211suWzvcYG45bpmHfEuGpO4aw*212e0*214m2*213m1*211s0x94cf259a902e9833%3A0x73a33f14fe4bad4b%3Fsa%3DX%26ved%3D2ahUKEwiwsZv4o8iLAxW7rZUCHdJCFqMQpx96BAgUEAA!5sthe%20one%20jundia%C3%AD%20-%20Pesquisa%20Google!15sCgIgAQ&imagekey=!1e2!2suWzvcYG45bpmHfEuGpO4aw&cr=le_a7&hl=pt-BR&ved=1t%3A206134&ictx=111'
            ]
        ];

        return view('pages.unidades.unidades', compact('unidades'));
    }

    public function unidade(){
        return view('pages.unidades.unidades-3d');
    }
}
