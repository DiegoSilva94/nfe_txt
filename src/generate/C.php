<?php
return [
    [
        'numero' => '32',
        'campo' => 'xNome',
        'descricao' => 'Razão Docial ou Nome do emitente',
        'observacao' => '',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '2-60',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '33',
        'campo' => 'xFant',
        'descricao' => 'Nome Fantasia',
        'observacao' => '',
        'tipo' => 'Caractere',
        'ocorrencia' => '0-1',
        'tamanho' => '1-60',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '46',
        'campo' => 'IE',
        'descricao' => 'IE',
        'observacao' => 'Informar somente os algarismos, sem os caracteres de formatação (ponto, barra, hífen, etc.). Nota: Na emissão de NF-e Avulsa pode ser informado o literal "ISENTO" para os contribuintes do ICMS isentos de inscrição no Cadastro de Contribuintes de ICMS.',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '2-14',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '47',
        'campo' => 'IEST',
        'descricao' => 'IE do Substituto do Tributário',
        'observacao' => 'IE do Substituto Tributário da UF de destino da mercadoria, quando houver a retenção do ICMS ST para a UF de destino.',
        'tipo' => 'Caractere',
        'ocorrencia' => '0-1',
        'tamanho' => '2-14',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '48',
        'campo' => 'IM',
        'descricao' => 'Código de Inscrição Municipal',
        'observacao' => 'Informado na emissão de NF-e conjugada, com itens de produtos sujeitos ao ICMS e itens de serviços sujeitos ao ISSQN.',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '1-15',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '49',
        'campo' => 'CNAE',
        'descricao' => 'CNAE fiscal',
        'observacao' => 'Campo Opcional. Pode ser informado quando a Inscrição Municipal (id:C19) for informada.',
        'tipo' => 'Caractere',
        'ocorrencia' => '0-1',
        'tamanho' => '7',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '49a',
        'campo' => 'CRT',
        'descricao' => 'Código de regime tributario',
        'observacao' => '1- Simples Nacional 2- Simples nacional - excesso de sublimite de receita bruta 3- Regime normal ',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '1',
        'decimal' => '',
        'anotação' => '',
    ]
];