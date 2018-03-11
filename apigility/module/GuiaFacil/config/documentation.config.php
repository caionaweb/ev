<?php
return [
    'GuiaFacil\\V1\\Rest\\Telefoneempresa\\Controller' => [
        'description' => '',
        'entity' => [
            'PUT' => [
                'description' => 'Pode ser usado tanto para alterar algum fone ou para deletar um registro.',
                'request' => 'Para alterar (ex.: http://localhost/apigility/public/telefoneempresa/10): 
{
    "fone": "(62) 99999-8888",
    "foneN": "(62) 99999-8889" //insira o novo fone aqui
}

Para deletar (ex.: http://localhost/apigility/public/telefoneempresa/10):
{   
   "fone": "(62) 99999-8889",
   "delete": 1 
}',
            ],
            'POST' => [
                'description' => 'Insere os dados de forma cega, sem verificar a existência de dados iguais',
                'request' => '{
    "empresaid": 1,
    "fone": "(62) 99999-8888"
 }',
            ],
            'GET' => [
                'description' => '',
            ],
        ],
    ],
];
