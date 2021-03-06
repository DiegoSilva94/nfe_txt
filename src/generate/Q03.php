<?php
return [
    [
        'numero' => '274',
        'campo' => 'CST',
        'descricao' => 'Código de Situação Tributária do PIS',
        'observacao' => '(03=Operação Tributável, base de cálculo = quantidade vendida x alíquota por unidade de produto);',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '2',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '275',
        'campo' => 'qBCProd',
        'descricao' => 'Quantidade Vendida',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '12',
        'decimal' => '0-4',
        'anotação' => '',
    ],
    [
        'numero' => '276',
        'campo' => 'vAliqProd',
        'descricao' => 'Alíquota do PIS (em reais)',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '11',
        'decimal' => '0-4',
        'anotação' => '',
    ],
    [
        'numero' => '277',
        'campo' => 'vPIS',
        'descricao' => 'Valor do PIS',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '13',
        'decimal' => '2',
        'anotação' => '',
    ]
];