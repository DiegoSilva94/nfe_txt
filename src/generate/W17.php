<?php
return [
    [
        'numero' => '343',
        'campo' => 'vServ',
        'descricao' => 'Valot Total dos Serviços sob não-incidência ou não tributados pelo ICMS',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '0-1',
        'tamanho' => '15',
        'decimal' => '2',
        'anotação' => '',
    ],
    [
        'numero' => '344',
        'campo' => 'vBC',
        'descricao' => 'Base de Cálculo do ISS',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '0-1',
        'tamanho' => '15',
        'decimal' => '2',
        'anotação' => '',
    ],
    [
        'numero' => '345',
        'campo' => 'vISS',
        'descricao' => 'Valot Total do ISS',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '0-1',
        'tamanho' => '15',
        'decimal' => '2',
        'anotação' => '',
    ],
    [
        'numero' => '346',
        'campo' => 'vPIS',
        'descricao' => 'Valor do PIS sobre Serviços',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '0-1',
        'tamanho' => '15',
        'decimal' => '2',
        'anotação' => '',
    ],
    [
        'numero' => '347',
        'campo' => 'vCOFINS',
        'descricao' => 'Valor do COFINS sobre serviços',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '0-1',
        'tamanho' => '15',
        'decimal' => '2',
        'anotação' => '',
    ],
    [
        'numero' => '347a',
        'campo' => 'dCompet',
        'descricao' => 'Data da prestação do serviço',
        'observacao' => 'Formato: AAAA-MM-DD',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '8',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '347b',
        'campo' => 'vDeducao',
        'descricao' => 'Valor total dedução para redução da Base de Cálculo',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '0-1',
        'tamanho' => '15',
        'decimal' => '2',
        'anotação' => '',
    ],
    [
        'numero' => '347c',
        'campo' => 'vOutro',
        'descricao' => 'Valor total outras retenções',
        'observacao' => 'Valor declaratório',
        'tipo' => 'Numérico',
        'ocorrencia' => '0-1',
        'tamanho' => '15',
        'decimal' => '2',
        'anotação' => '',
    ],
    [
        'numero' => '347d',
        'campo' => 'vDescIncond',
        'descricao' => 'Valor total desconto incondicionado',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '0-1',
        'tamanho' => '15',
        'decimal' => '2',
        'anotação' => '',
    ],
    [
        'numero' => '347e',
        'campo' => 'vDescCond',
        'descricao' => 'Valor total desconto condicionado',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '0-1',
        'tamanho' => '15',
        'decimal' => '2',
        'anotação' => '',
    ],
    [
        'numero' => '347f',
        'campo' => 'vISSRet',
        'descricao' => 'Valor total retenção ISS',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '0-1',
        'tamanho' => '15',
        'decimal' => '2',
        'anotação' => '',
    ],
    [
        'numero' => '347g',
        'campo' => 'cRegTrib',
        'descricao' => 'Código do Regime Especial de Tributação',
        'observacao' => '1- Microempresa Municipal; 2- Estimativa; 3- Sociedade de Profissionais; 4- Cooperativa; 5- Microempresário Individual (MEI); 6- Microempresário e Empresa de Pequeno Porte (ME/EPP);',
        'tipo' => 'Numérico',
        'ocorrencia' => '0-1',
        'tamanho' => '2',
        'decimal' => '',
        'anotação' => '',
    ]
];