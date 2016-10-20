<?php
return [
    [
        'numero' => '255',
        'campo' => 'qUnid',
        'descricao' => 'Quantidade total na unidade padrão para tributação( somente para os produtos tributados por unidade)',
        'observacao' => 'Informar os campos O11 e O12 se o cálculo do IPI for valor por unidade.',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '16',
        'decimal' => '0-4',
        'anotação' => '',
    ],
    [
        'numero' => '256',
        'campo' => 'vUnid',
        'descricao' => 'Valor por unidade Tributável',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '15',
        'decimal' => '0-4',
        'anotação' => '',
    ]
];