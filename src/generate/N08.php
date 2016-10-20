<?php
return [
    [
        'numero' => '214',
        'campo' => 'orig',
        'descricao' => 'Origem da mercadoria',
        'observacao' => '(NT 2013.006)',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '1',
        'decimal' => '',
        'anotação' => 'Origem da mercadoria:0 - Nacional, exceto as indicadas nos códigos 3, 4, 5 e 8;1 - Estrangeira - Importação direta, exceto a indicada no código 6;2 - Estrangeira - Adquirida no mercado interno, exceto a indicada no código 7;3 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 40% e inferior ou igual a 70%;4 - Nacional, cuja produção tenha sido feita em conformidade com os processos produtivos básicos de que tratam as legislações citadas nos Ajustes;5 - Nacional, mercadoria ou bem com Conteúdo de Importação inferior ou igual a 40%;6 - Estrangeira - Importação direta, sem similar nacional, constante em lista da CAMEX e gás natural;7 - Estrangeira - Adquirida no mercado interno, sem similar nacional, constante em lista da CAMEX e gás natural.8 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 70%;',
    ],
    [
        'numero' => '215',
        'campo' => 'CST',
        'descricao' => 'Tributação do ICMS',
        'observacao' => '60 – ICMS cobrado anteriormente por substituição tributária',
        'tipo' => 'Numérico',
        'ocorrencia' => '',
        'tamanho' => '2',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '216',
        'campo' => 'vBCSTRet',
        'descricao' => 'Valor da BC do ICMS ST retido',
        'observacao' => '(Valor da BC do ICMS ST cobrado anteriormente por ST',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '15',
        'decimal' => '2',
        'anotação' => 'Valor do BC do ICMS ST cobrado anteriormente por ST. O valor pode ser omitido quando a legislação não exigir a sua informação. (NT 2011/004).',
    ],
    [
        'numero' => '217',
        'campo' => 'vICMSSTRet',
        'descricao' => 'Valor do ICMS ST retido',
        'observacao' => 'Valor do ICMS ST cobrado anteriormente por ST',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '15',
        'decimal' => '2',
        'anotação' => '',
    ]
];