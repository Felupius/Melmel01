<?php

// Função que protege textos simples (use <?= e($texto)  para imprimir).
function e($texto) {
    return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
}

//  TOPO DA PÁGINA 
$titulo         = "Projeto Integrador 2026.";
$subtitulo      = "Síntese dos trabalhos apresentados ao longo do ano e seus respectivos temas.";
$tituloCartoes  = "Trabalhos apresentados nas feiras";

//  se quiser adicionar alguém, coloca mais uma linha) 
$integrantes = [
    "Melissa Cardoso Teixeira",
    "Natalia Messias Farago Schultz",
    "Emanuelle Bonfim Meira",
    "Rafaella da Costa Macalossi",
];


$feiras = [
    [
        "id"      => "cultural",
        "menu"    => "Feira Cultural",
        "titulo"  => "Feira Cultural",
        "imagem"  => "img/feira-cultural.jpg",
        "alt"     => "Alunas no estande da Suíça na Feira Cultural",
        "resumo"  => "Compartilhamento de conhecimentos entre alunos e pais sobre diversos aspectos culturais de países ao redor do mundo.",
        "textos"  => [
            "Na Feira Cultural, alunos e pais compartilham conhecimentos sobre aspectos culturais de países de todo o mundo.",
            "O nosso grupo representou a <strong>Suíça</strong>: apresentamos as tradições, as roupas típicas, a gastronomia e, claro, o chocolate suíço, que deu origem à ideia do nosso produto.",
        ],
        "inverso" => false,
        "galeria" => [],
    ],
    [
        "id"      => "conhecimento",
        "menu"    => "Feira Conhecimento",
        "titulo"  => "Feira do Conhecimento",
        "imagem"  => "img/feira-conhecimento.jpg",
        "alt"     => "Alunas caracterizadas no estande das lendas do litoral do Paraná",
        "resumo"  => "Feira com o intuito de fazer os alunos se aprofundarem e pesquisarem sobre diferentes culturas das cidades litorâneas do Paraná.",
        "textos"  => [
            "A Feira do Conhecimento tem o objetivo de fazer os alunos se aprofundarem e pesquisarem sobre as diferentes culturas das cidades litorâneas do Paraná.",
            "Nosso grupo pesquisou as <strong>lendas do litoral</strong>, como a Noiva e as Sereias de Guaratuba, e montou um estande ambientado com fantasias, maquiagem e painéis ilustrados.",
        ],
        "inverso" => true,
        "galeria" => [],
    ],
    [
        "id"      => "empreendedorismo",
        "menu"    => "Feira Empreendedorismo",
        "titulo"  => "Feira do Empreendedorismo",
        "imagem"  => "img/feira-empreendedorismo.png",
        "alt"     => "Estande da Choco Muu na Feira do Empreendedorismo",
        "resumo"  => "Evento que incentiva o aprendizado sobre como criar, divulgar e vender produtos, desenvolvendo habilidades importantes para o mundo dos negócios.",
        "textos"  => [
            "A Feira do Empreendedorismo é um evento que incentiva a criatividade, o trabalho em equipe e o espírito empreendedor, permitindo que os alunos desenvolvam ideias e aprendam sobre vendas e negócios.",
            "Em nossa feira, vendemos chocolate quente, uma bebida deliciosa e cremosa, perfeita para aquecer os dias frios. Nosso objetivo é oferecer um produto saboroso, conquistar clientes e colocar em prática nossos conhecimentos sobre empreendedorismo.",
        ],
        "inverso" => false,
        "galeria" => [
            ["img/choco-muu-caneca.png", "Chocolate quente Choco Muu em caneca"],
            ["img/choco-muu-xicara.png", "Chocolate quente Choco Muu em xícara"],
        ],
    ],
];

// ---------- O QUE É O P.I? ----------
$piTitulo = "O que é o P.I?";
$piTexto  = "O Projeto Integrador é uma atividade que reúne os conhecimentos desenvolvidos ao longo do ano, permitindo que os alunos apresentem seus trabalhos, pesquisas e aprendizados.";
?> 