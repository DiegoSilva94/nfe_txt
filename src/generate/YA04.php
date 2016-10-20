<?php
return [
    [
        'numero' => '398f',
        'campo' => 'tBand',
        'descricao' => 'Bandeira da operadora de cartão de crédito e/ou débito',
        'observacao' => '01- Visa 02- Mastercard 03- American Express 04- Sorocred 99- Outros',
        'tipo' => 'Numérico',
        'ocorrencia' => '0-1',
        'tamanho' => '2',
        'decimal' => '',
        'anotação' => '(NT2015.002)',
    ],
    [
        'numero' => '398g',
        'campo' => 'cAut',
        'descricao' => 'Número de autorização da operação cartão de crédito e/ou débito',
        'observacao' => 'Identifca o número da autorização da transação da operação com cartão de crédito e/ou débito',
        'tipo' => 'Caractere',
        'ocorrencia' => '0-1',
        'tamanho' => '1-20',
        'decimal' => '',
        'anotação' => '(NT2015.002)',
    ]
];