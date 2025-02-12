<?php
$dados = [
    'nome' => 'Gabriel',
    'datanasc' => '01/01/2000',
    'documentos' => array (
        'ID' => '123456',
        'cpf' => '123.456.789-00'     
    ),
    'endereco' => array (
        'tipo' => 'Rua',
        'logradouro' => 'São Paulo',
        'numero' => '123',
        'complemento' => 'Apto 123',
        'bairro' => 'Centro',
        'cidade' => 'São Paulo',
        'uf' => 'SP',
        'cep' => '12345-678'
    ),
    'filiacao' => array (
        'pai' => 'José',
        'mae' => 'Ana'
    ),
    'contatos' => array (
        'numfixo' => '2452-1234',
        'celular' => '11 98765-4321',
        'email' => 'teste@gmail.com'    
    ),
];

foreach ($dados as $key => $value) {
    if (is_array($value)) {
        echo ucfirst($key) . ':<br>';
        foreach ($value as $subKey => $subValue) {
            echo ' - ' . ucfirst($subKey) . ': ' . $subValue . '<br>';
        }
    } else {
        echo ucfirst($key) . ': ' . $value . '<br>';
    }
}