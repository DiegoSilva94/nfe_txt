<?php
return [
    [
        'numero' => '29x.21',
        'campo' => 'mod',
        'descricao' => 'Modelo do Documento Fiscal',
        'observacao' => '2B - Cupom FiscalPreencher com "2B", quando se tratar de Cupom Fiscal emitido por máquina registradora (não ECF), com "2C", quando se tratar de Cupom Fiscal PDV, ou "2D", quando se tratar de Cupom Fiscal (emitido por ECF).',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '2',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '29x.22',
        'campo' => 'nECF',
        'descricao' => 'Número de ordem sequencial do ECF',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '3',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '29x.23',
        'campo' => 'nCOO',
        'descricao' => 'Numero do contador de ordem de operação – COO',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '6',
        'decimal' => '',
        'anotação' => '',
    ]
];