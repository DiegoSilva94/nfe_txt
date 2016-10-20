<?php
return [
    [
        'numero' => '403',
        'campo' => 'UFSaidaPais',
        'descricao' => 'Sigla da UF de Embarque ou transposição de fronteira',
        'observacao' => 'Não aceita o valor "EX".',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '2',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '404',
        'campo' => 'xLocExporta',
        'descricao' => 'Descrição do Local de Embarque ou de transposição de fronteira',
        'observacao' => '',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '1-60',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '404a',
        'campo' => 'xLocDespacho',
        'descricao' => 'Descrição do local de despacho',
        'observacao' => 'Informação do Recinto Alfandegado',
        'tipo' => 'Caractere',
        'ocorrencia' => '0-1',
        'tamanho' => '1-60',
        'decimal' => '',
        'anotação' => '',
    ]
];