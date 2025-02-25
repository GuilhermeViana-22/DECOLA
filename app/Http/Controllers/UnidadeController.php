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
                'link_maps' => 'https://www.google.nl/maps/place/P%C3%A7+Dom+Jos%C3%A9+Gaspar,+134+-+Rep%C3%BAblica,+S%C3%A3o+Paulo+-+SP,+01047-912,+Brazili%C3%AB/@-23.5462829,-46.6436549,17z/data=!3m1!4b1!4m6!3m5!1s0x94ce58520564cec9:0xec5ebd5250ea9d53!8m2!3d-23.5462829!4d-46.64108!16s%2Fg%2F11lf4hl1mv?hl=nl&entry=ttu&g_ep=EgoyMDI1MDIxOS4xIKXMDSoASAFQAw%3D%3D'
            ],
            [
                'nome' => 'Unidade Pinheiros',
                'endereco' => 'Rua dos Pinheiros, 890 – Pinheiros – São Paulo/SP',
                'imagem' => '1.png',
                'link_maps' => 'https://www.google.nl/maps/place/R.+dos+Pinheiros,+890+-+Pinheiros,+S%C3%A3o+Paulo+-+SP,+05422-001,+Brazili%C3%AB/@-23.5671282,-46.6889884,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce5775e95bc5ef:0x69e41b7384d39ec4!8m2!3d-23.5671282!4d-46.6864135?hl=nl&entry=ttu&g_ep=EgoyMDI1MDIxOS4xIKXMDSoASAFQAw%3D%3D'
            ],
            [
                'nome' => 'Unidade Vila Mariana',
                'endereco' => 'Avenida Lins de Vasconcelos, 1500 – Vila Mariana – São Paulo/SP',
                'imagem' => '1.png',
                'link_maps' => 'https://www.google.nl/maps/place/Av.+Lins+de+Vasconcelos,+1500+-+Cambuci,+S%C3%A3o+Paulo+-+SP,+01538-001,+Brazili%C3%AB/@-23.5765552,-46.6263183,17z/data=!3m1!4b1!4m6!3m5!1s0x94ce597b149cf7dd:0x90b320272debcb6a!8m2!3d-23.5765552!4d-46.6237434!16s%2Fg%2F11gh2qktj1?hl=nl&entry=ttu&g_ep=EgoyMDI1MDIxOS4xIKXMDSoASAFQAw%3D%3D'
            ],
            [
                'nome' => 'Unidade Mooca',
                'endereco' => 'Rua da Mooca, 1200 – Mooca – São Paulo/SP',
                'imagem' => '1.png',
                'link_maps' => 'https://www.google.nl/maps/place/R.+da+Mooca,+1200+-+Mooca,+S%C3%A3o+Paulo+-+SP,+03104-010,+Brazili%C3%AB/@-23.5543354,-46.6161434,17z/data=!3m1!4b1!4m6!3m5!1s0x94ce5916141035cd:0xf8a46da20b1cfe11!8m2!3d-23.5543354!4d-46.6135685!16s%2Fg%2F11c5ppfcrp?hl=nl&entry=ttu&g_ep=EgoyMDI1MDIxOS4xIKXMDSoASAFQAw%3D%3D'
            ],
            [
                'nome' => 'Unidade Tatuapé',
                'endereco' => 'Rua Tuiuti, 1800 – Tatuapé – São Paulo/SP',
                'imagem' => '1.png',
                'link_maps' => 'https://www.google.nl/maps/place/R.+Tuiuti,+1800+-+Tatuap%C3%A9,+S%C3%A3o+Paulo+-+SP,+03306-015,+Brazili%C3%AB/@-23.5406698,-46.5780191,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce5ec2408de325:0x9857e0ee227957db!8m2!3d-23.5406698!4d-46.5754442?hl=nl&entry=ttu&g_ep=EgoyMDI1MDIxOS4xIKXMDSoASAFQAw%3D%3D'
            ],
            [
                'nome' => 'Unidade Jundiaí - Franqueadora',
                'endereco' => 'R. Hilda Del Nero Bisquolo, 102 - Jardim Florida, Jundiaí - SP, 13208-703',
                'imagem' => '1.png',
                'link_maps' => 'https://www.google.nl/maps/place/R.+Hilda+Del+Nero+Bisquolo,+102+-+Jardim+Florida,+Jundia%C3%AD+-+SP,+13208-703,+Brazili%C3%AB/@-23.1920544,-46.9060946,17z/data=!3m1!4b1!4m6!3m5!1s0x94cf2427e4974c2b:0x1eac34685649882b!8m2!3d-23.1920544!4d-46.9035197!16s%2Fg%2F11c489dhqm?hl=nl&entry=ttu&g_ep=EgoyMDI1MDIxOS4xIKXMDSoASAFQAw%3D%3D'
            ]
        ];

        return view('pages.unidades.unidades', compact('unidades'));
    }

    public function unidade(){
        return view('pages.unidades.unidades-3d');
    }
}
