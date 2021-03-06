<?php
return [
    [
        'numero' => '245.53',
        'campo' => 'orig',
        'descricao' => 'origem da mercadoria',
        'observacao' => '(NT 2013.006)',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '1',
        'decimal' => '',
        'anotação' => 'Origem da mercadoria:0 - Nacional, exceto as indicadas nos códigos 3, 4, 5 e 8;1 - Estrangeira - Importação direta, exceto a indicada no código 6;2 - Estrangeira - Adquirida no mercado interno, exceto a indicada no código 7;3 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 40% e inferior ou igual a 70%;4 - Nacional, cuja produção tenha sido feita em conformidade com os processos produtivos básicos de que tratam as legislações citadas nos Ajustes;5 - Nacional, mercadoria ou bem com Conteúdo de Importação inferior ou igual a 40%;6 - Estrangeira - Importação direta, sem similar nacional, constante em lista da CAMEX e gás natural;7 - Estrangeira - Adquirida no mercado interno, sem similar nacional, constante em lista da CAMEX e gás natural.8 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 70%;',
    ],
    [
        'numero' => '245.54',
        'campo' => 'CSOSN',
        'descricao' => 'codigo de situação da operação – simples nacional',
        'observacao' => 'Tributação pelo ICMS 90 - Outros',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '2',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '245.55',
        'campo' => 'modBC',
        'descricao' => 'modalidade de determinação da BC do ICMS ST',
        'observacao' => '0 - Margem Valor Agregado (%); 1 - Pauta (Valor); 2 - Preço Tabelado Máx. (valor); 3 - valor da operação.',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '1',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '245.56',
        'campo' => 'vBC',
        'descricao' => 'valor do bc do ICMS',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '15',
        'decimal' => '2',
        'anotação' => '',
    ],
    [
        'numero' => '245.57',
        'campo' => 'pRedBC',
        'descricao' => 'Percentual da Redução de BC',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '0-1',
        'tamanho' => '7',
        'decimal' => '2-4',
        'anotação' => '',
    ],
    [
        'numero' => '245.58',
        'campo' => 'pICMS',
        'descricao' => 'aliquota do imposto',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '7',
        'decimal' => '2-4',
        'anotação' => '',
    ],
    [
        'numero' => '245.59',
        'campo' => 'vICMS',
        'descricao' => 'valor do iCMS',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '15',
        'decimal' => '2',
        'anotação' => '',
    ],
    [
        'numero' => '245.60',
        'campo' => 'modBCST',
        'descricao' => 'modalidade de determinação da BC do ICMS ST',
        'observacao' => '0-Preço tabelado ou máximo sugerido;1-Lista Negativa,valor;2-Lista Positiva,valor;3-Lista Neutra,valor;4-Margem Valor Agregado,%;5-Pauta,valor',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '1',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '245.61',
        'campo' => 'pMVAST',
        'descricao' => 'percentual da margem de valor Adicionado do ICMS ST',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '0-1',
        'tamanho' => '7',
        'decimal' => '2-4',
        'anotação' => '',
    ],
    [
        'numero' => '245.62',
        'campo' => 'pRedBCST',
        'descricao' => 'percentual da redução de bc do ICMS ST',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '0-1',
        'tamanho' => '7',
        'decimal' => '2-4',
        'anotação' => '',
    ],
    [
        'numero' => '245.63',
        'campo' => 'vBCST',
        'descricao' => 'valor da bc do ICMS',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '15',
        'decimal' => '2',
        'anotação' => '',
    ],
    [
        'numero' => '245.64',
        'campo' => 'pICMSST',
        'descricao' => 'aliquota do imposto do ICMS ST',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '7',
        'decimal' => '2-4',
        'anotação' => '',
    ],
    [
        'numero' => '245.65',
        'campo' => 'vICMSST',
        'descricao' => 'valor do ICMS ST',
        'observacao' => 'Valor do ICMS ST retido',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '15',
        'decimal' => '2',
        'anotação' => '',
    ],
    [
        'numero' => '245.52',
        'campo' => 'pCredSN',
        'descricao' => 'Aliquota aplicavel de calculo do credito (simples nacional)',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '7',
        'decimal' => '2-4',
        'anotação' => '',
    ],
    [
        'numero' => '245.53',
        'campo' => 'vCredICMSSN',
        'descricao' => 'valor credito do ICMS que pode ser aproveitado nos termos do art. 23 da LC 123(simples nacional)',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '15',
        'decimal' => '2',
        'anotação' => '',
    ]
];