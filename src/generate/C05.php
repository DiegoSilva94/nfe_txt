<?php
return [
    [
        'numero' => '35',
        'campo' => 'xLgr',
        'descricao' => 'Logradouro',
        'observacao' => '',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '2-60',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '36',
        'campo' => 'nro',
        'descricao' => 'Número ',
        'observacao' => '',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '1-60',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '37',
        'campo' => 'xCpl',
        'descricao' => 'Complemento',
        'observacao' => '',
        'tipo' => 'Caractere',
        'ocorrencia' => '0-1',
        'tamanho' => '1-60',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '38',
        'campo' => 'xBairro',
        'descricao' => 'Bairro',
        'observacao' => '',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '2-60',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '39',
        'campo' => 'cMun',
        'descricao' => 'Código do Município',
        'observacao' => 'Utilizar tabela do IBGE (Anexo IX - Tabela de UF, Município e País).',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '7',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '40',
        'campo' => 'xMun',
        'descricao' => 'Nome do município',
        'observacao' => '',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '2-60',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '41',
        'campo' => 'UF',
        'descricao' => 'Sigla da UF',
        'observacao' => '',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '2',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '42',
        'campo' => 'CEP',
        'descricao' => 'CEP',
        'observacao' => 'Informar os zeros não significativos. (NT 2011/004)',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '8',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '43',
        'campo' => 'cPais',
        'descricao' => 'Código do País',
        'observacao' => 'Utilizar tabela BACEN 1058 - Brasil',
        'tipo' => 'Numérico',
        'ocorrencia' => '0-1',
        'tamanho' => '4',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '44',
        'campo' => 'xPais',
        'descricao' => 'Nome do País',
        'observacao' => 'Brasil ou BRASIL',
        'tipo' => 'Caractere',
        'ocorrencia' => '0-1',
        'tamanho' => '1-60',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '45',
        'campo' => 'fone',
        'descricao' => 'Telefone',
        'observacao' => 'Preencher com o Código DDD + número do telefone. Nas operações com o exterior é permitido informar o código do país + código da localidade + número do telefone',
        'tipo' => 'Numérico',
        'ocorrencia' => '0-1',
        'tamanho' => '6-14',
        'decimal' => '',
        'anotação' => '',
    ]
];