<?php
return [
    [
        'numero' => '130',
        'campo' => 'tpOp',
        'descricao' => 'Tipo da operação',
        'observacao' => '1 – Venda concessionária2 – Faturamento direto para consumidor final 3 – Venda direta para grandes consumidores (frotista, governo,...) 0 – Outros',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '1',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '131',
        'campo' => 'chassi',
        'descricao' => 'Chassi do veículo',
        'observacao' => 'VIN (código-identificação veículo)',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '17',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '132',
        'campo' => 'cCor ',
        'descricao' => 'Cor',
        'observacao' => 'Código de cada montadora',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '1-4',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '133',
        'campo' => 'xcor',
        'descricao' => 'Descrição da Cor',
        'observacao' => '',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '1-40',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '134',
        'campo' => 'pot',
        'descricao' => 'Potência do Motor',
        'observacao' => 'Potência máxima do motor do veículo em cavalo vapor (CV). (potência-veículo)',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '1-4',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '135',
        'campo' => 'cilin',
        'descricao' => 'Cilindradas',
        'observacao' => 'Capacidade voluntária do motor expressa em centímetros cúbicos (CC). (cilindradas)',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '1-4',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '136',
        'campo' => 'pesoL',
        'descricao' => 'Peso Líquido',
        'observacao' => 'Em toneladas - 4 casas decimais',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '1-9',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '137',
        'campo' => 'pesoB',
        'descricao' => 'Peso Bruto',
        'observacao' => 'Peso Bruto Total - em tonelada - 4 casas decimais',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '1-9',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '138',
        'campo' => 'nSerie',
        'descricao' => 'Serial(série)',
        'observacao' => '',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '1-9',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '139',
        'campo' => 'tpComb',
        'descricao' => 'Tipo de combustível',
        'observacao' => 'Utilizar Tabela RENAVAM 01-Álcool 02-Gasolina 03-Diesel (...) 16-Álcool/Gasolina 17-Gasolina/Álcool/GNV 18-Gasolina/Elétrico',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '1-2',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '140',
        'campo' => 'nMotor',
        'descricao' => 'Número do motor',
        'observacao' => '',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '1-21',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '141',
        'campo' => 'CMT',
        'descricao' => 'Capacidade maxima de tração',
        'observacao' => 'CMT-Capacidade Máxima de Tração - em Toneladas 4 casas decimais',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '1-9',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '142',
        'campo' => 'dist',
        'descricao' => 'Distância entre eixos',
        'observacao' => '',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '1-4',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '144',
        'campo' => 'anoMod',
        'descricao' => 'Ano Modelo de Fabricação',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '4',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '145',
        'campo' => 'anoFab',
        'descricao' => 'Ano de Fabricação',
        'observacao' => '',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '4',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '146',
        'campo' => 'tpPint',
        'descricao' => 'Tipo de Pintura',
        'observacao' => '',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '1',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '147',
        'campo' => 'tpVeic',
        'descricao' => 'Tipo de Veículo',
        'observacao' => 'Utilizar Tabela RENAVAM02-CICLOMOTO03-MOTONETA 04-MOTOCICLO05-TRICICLO06-AUTOMÓVEL07-MICROÔNIBUS08-ÔNIBUS10-REBOQUE 11-SEMIRREBOQUE13-CAMINHONETA 14-CAMINHÃO 17-C. TRATOR22-ESP / ÔNIBUS23-MISTO / CAM 24-CARGA / CAM  *Lista exemplificativa. ',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '1-2',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '148',
        'campo' => 'espveic',
        'descricao' => 'Espécie de Veículo',
        'observacao' => 'Utilizar Tabela RENAVAM 1-PASSAGEIRO 2-CARGA 3-MISTO 4-CORRIDA 5-TRAÇÃO 6-ESPECIAL',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '1',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '149',
        'campo' => 'VIN',
        'descricao' => 'Condição do VIN',
        'observacao' => 'Informa-se o veículo tem VIN (chassi) remarcado. R-Remarcado N-Normal',
        'tipo' => 'Caractere',
        'ocorrencia' => '1-1',
        'tamanho' => '1',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '150',
        'campo' => 'condVeic',
        'descricao' => 'Condição do Veículo',
        'observacao' => '1-Acabado;2-Inacabado; 3-Semi-acabado',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '1',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '151',
        'campo' => 'cMod',
        'descricao' => 'Código Marca Modelo',
        'observacao' => 'Utilizar tabela RENAVAM',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '1-6',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '151a',
        'campo' => 'cCorDENATRAN',
        'descricao' => 'Código da cor',
        'observacao' => 'Segundo as regras de précadastro do DENATRAN01-AMARELO 02-AZUL 03-BEGE 04-BRANCA 05-CINZA 06-DOURADA 07-GRENA 08-LARANJA 09-MARROM 10-PRATA 11-PRETA 12-ROSA 13-ROXA 14-VERDE 15-VERMELHA 16-FANTASIA',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '1-2',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '151b',
        'campo' => 'lota',
        'descricao' => 'capacidade máxima de lotação',
        'observacao' => 'Quantidade máxima permitida de passageiros sentados, inclusive motorista.',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '1-3',
        'decimal' => '',
        'anotação' => '',
    ],
    [
        'numero' => '151c',
        'campo' => 'tpRest',
        'descricao' => 'Restrição',
        'observacao' => '0 - Não há; 1 - Alienação Fiduciária; 2 - Arrendamento Mercantil; 3 - Reserva de Domínio; 4 - Penhor de Veículos; 9 - outras.',
        'tipo' => 'Numérico',
        'ocorrencia' => '1-1',
        'tamanho' => '1',
        'decimal' => '',
        'anotação' => '',
    ]
];