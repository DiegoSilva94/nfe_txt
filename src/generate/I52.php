<?php
return [
    [
        'numero' => '128i',
        'campo' => 'nRE',
        'descricao' => 'Número de Registro de Exportação',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '12',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '128j',
        'campo' => 'chNFe',
        'descricao' => 'Chave de Acesso da NF-e recebida para exportação',
        'observacao' => 'NF-e recebida com fim específico de exportação',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '44',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '128k',
        'campo' => 'qExport',
        'descricao' => 'Quantidade do item realmente exportadoObservação: No caso de operação com CFOP 3.503, informar a quantidade de mercadoria devolvida',
        'observacao' => 'A unidade de medida desta quantidade é a unidade de comercialização deste item',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '15',
        'decimal' => '4',
        'anotação' => '',
    ]
];