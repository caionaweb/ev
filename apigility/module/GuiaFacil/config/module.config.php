<?php
return [
    'router' => [
        'routes' => [
            'guia-facil.rest.telefoneempresa' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/telefoneempresa[/:telefoneempresa_id]',
                    'defaults' => [
                        'controller' => 'GuiaFacil\\V1\\Rest\\Telefoneempresa\\Controller',
                    ],
                ],
            ],
            'guia-facil.rest.atvcomercial' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/atvcomercial[/:atvcomercial_id]',
                    'defaults' => [
                        'controller' => 'GuiaFacil\\V1\\Rest\\Atvcomercial\\Controller',
                    ],
                ],
            ],
            'guia-facil.rest.usuario' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/usuario[/:usuario_id]',
                    'defaults' => [
                        'controller' => 'GuiaFacil\\V1\\Rest\\Usuario\\Controller',
                    ],
                ],
            ],
            'guia-facil.rest.empresa' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/empresa[/:empresa_id]',
                    'defaults' => [
                        'controller' => 'GuiaFacil\\V1\\Rest\\Empresa\\Controller',
                    ],
                ],
            ],
            'guia-facil.rest.propaganda' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/propaganda[/:propaganda_id]',
                    'defaults' => [
                        'controller' => 'GuiaFacil\\V1\\Rest\\Propaganda\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'guia-facil.rest.telefoneempresa',
            3 => 'guia-facil.rest.atvcomercial',
            4 => 'guia-facil.rest.usuario',
            5 => 'guia-facil.rest.empresa',
            6 => 'guia-facil.rest.propaganda',
        ],
    ],
    'zf-rest' => [
        'GuiaFacil\\V1\\Rest\\Telefoneempresa\\Controller' => [
            'listener' => \GuiaFacil\V1\Rest\Telefoneempresa\TelefoneempresaResource::class,
            'route_name' => 'guia-facil.rest.telefoneempresa',
            'route_identifier_name' => 'telefoneempresa_id',
            'collection_name' => 'telefoneempresa',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \GuiaFacil\V1\Rest\Telefoneempresa\TelefoneempresaEntity::class,
            'collection_class' => \GuiaFacil\V1\Rest\Telefoneempresa\TelefoneempresaCollection::class,
            'service_name' => 'telefoneempresa',
        ],
        'GuiaFacil\\V1\\Rest\\Atvcomercial\\Controller' => [
            'listener' => \GuiaFacil\V1\Rest\Atvcomercial\AtvcomercialResource::class,
            'route_name' => 'guia-facil.rest.atvcomercial',
            'route_identifier_name' => 'atvcomercial_id',
            'collection_name' => 'atvcomercial',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \GuiaFacil\V1\Rest\Atvcomercial\AtvcomercialEntity::class,
            'collection_class' => \GuiaFacil\V1\Rest\Atvcomercial\AtvcomercialCollection::class,
            'service_name' => 'atvcomercial',
        ],
        'GuiaFacil\\V1\\Rest\\Usuario\\Controller' => [
            'listener' => \GuiaFacil\V1\Rest\Usuario\UsuarioResource::class,
            'route_name' => 'guia-facil.rest.usuario',
            'route_identifier_name' => 'usuario_id',
            'collection_name' => 'usuario',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \GuiaFacil\V1\Rest\Usuario\UsuarioEntity::class,
            'collection_class' => \GuiaFacil\V1\Rest\Usuario\UsuarioCollection::class,
            'service_name' => 'usuario',
        ],
        'GuiaFacil\\V1\\Rest\\Empresa\\Controller' => [
            'listener' => \GuiaFacil\V1\Rest\Empresa\EmpresaResource::class,
            'route_name' => 'guia-facil.rest.empresa',
            'route_identifier_name' => 'empresa_id',
            'collection_name' => 'empresa',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \GuiaFacil\V1\Rest\Empresa\EmpresaEntity::class,
            'collection_class' => \GuiaFacil\V1\Rest\Empresa\EmpresaCollection::class,
            'service_name' => 'empresa',
        ],
        'GuiaFacil\\V1\\Rest\\Propaganda\\Controller' => [
            'listener' => \GuiaFacil\V1\Rest\Propaganda\PropagandaResource::class,
            'route_name' => 'guia-facil.rest.propaganda',
            'route_identifier_name' => 'propaganda_id',
            'collection_name' => 'propaganda',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \GuiaFacil\V1\Rest\Propaganda\PropagandaEntity::class,
            'collection_class' => \GuiaFacil\V1\Rest\Propaganda\PropagandaCollection::class,
            'service_name' => 'propaganda',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'GuiaFacil\\V1\\Rest\\Telefoneempresa\\Controller' => 'HalJson',
            'GuiaFacil\\V1\\Rest\\Atvcomercial\\Controller' => 'HalJson',
            'GuiaFacil\\V1\\Rest\\Usuario\\Controller' => 'HalJson',
            'GuiaFacil\\V1\\Rest\\Empresa\\Controller' => 'HalJson',
            'GuiaFacil\\V1\\Rest\\Propaganda\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'GuiaFacil\\V1\\Rest\\Telefoneempresa\\Controller' => [
                0 => 'application/vnd.guia-facil.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'GuiaFacil\\V1\\Rest\\Atvcomercial\\Controller' => [
                0 => 'application/vnd.guia-facil.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'GuiaFacil\\V1\\Rest\\Usuario\\Controller' => [
                0 => 'application/vnd.guia-facil.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'GuiaFacil\\V1\\Rest\\Empresa\\Controller' => [
                0 => 'application/vnd.guia-facil.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'GuiaFacil\\V1\\Rest\\Propaganda\\Controller' => [
                0 => 'application/vnd.guia-facil.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'GuiaFacil\\V1\\Rest\\Telefoneempresa\\Controller' => [
                0 => 'application/vnd.guia-facil.v1+json',
                1 => 'application/json',
            ],
            'GuiaFacil\\V1\\Rest\\Atvcomercial\\Controller' => [
                0 => 'application/vnd.guia-facil.v1+json',
                1 => 'application/json',
            ],
            'GuiaFacil\\V1\\Rest\\Usuario\\Controller' => [
                0 => 'application/vnd.guia-facil.v1+json',
                1 => 'application/json',
            ],
            'GuiaFacil\\V1\\Rest\\Empresa\\Controller' => [
                0 => 'application/vnd.guia-facil.v1+json',
                1 => 'application/json',
            ],
            'GuiaFacil\\V1\\Rest\\Propaganda\\Controller' => [
                0 => 'application/vnd.guia-facil.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \GuiaFacil\V1\Rest\Telefoneempresa\TelefoneempresaEntity::class => [
                'entity_identifier_name' => 'id_empresa',
                'route_name' => 'guia-facil.rest.telefoneempresa',
                'route_identifier_name' => 'telefoneempresa_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \GuiaFacil\V1\Rest\Telefoneempresa\TelefoneempresaCollection::class => [
                'entity_identifier_name' => 'id_empresa',
                'route_name' => 'guia-facil.rest.telefoneempresa',
                'route_identifier_name' => 'telefoneempresa_id',
                'is_collection' => true,
            ],
            \GuiaFacil\V1\Rest\Atvcomercial\AtvcomercialEntity::class => [
                'entity_identifier_name' => 'id_empresa',
                'route_name' => 'guia-facil.rest.atvcomercial',
                'route_identifier_name' => 'atvcomercial_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \GuiaFacil\V1\Rest\Atvcomercial\AtvcomercialCollection::class => [
                'entity_identifier_name' => 'id_empresa',
                'route_name' => 'guia-facil.rest.atvcomercial',
                'route_identifier_name' => 'atvcomercial_id',
                'is_collection' => true,
            ],
            \GuiaFacil\V1\Rest\Usuario\UsuarioEntity::class => [
                'entity_identifier_name' => 'id_usuario',
                'route_name' => 'guia-facil.rest.usuario',
                'route_identifier_name' => 'usuario_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \GuiaFacil\V1\Rest\Usuario\UsuarioCollection::class => [
                'entity_identifier_name' => 'id_usuario',
                'route_name' => 'guia-facil.rest.usuario',
                'route_identifier_name' => 'usuario_id',
                'is_collection' => true,
            ],
            \GuiaFacil\V1\Rest\Empresa\EmpresaEntity::class => [
                'entity_identifier_name' => 'id_empresa',
                'route_name' => 'guia-facil.rest.empresa',
                'route_identifier_name' => 'empresa_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \GuiaFacil\V1\Rest\Empresa\EmpresaCollection::class => [
                'entity_identifier_name' => 'id_empresa',
                'route_name' => 'guia-facil.rest.empresa',
                'route_identifier_name' => 'empresa_id',
                'is_collection' => true,
            ],
            \GuiaFacil\V1\Rest\Propaganda\PropagandaEntity::class => [
                'entity_identifier_name' => 'id_empresa',
                'route_name' => 'guia-facil.rest.propaganda',
                'route_identifier_name' => 'propaganda_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \GuiaFacil\V1\Rest\Propaganda\PropagandaCollection::class => [
                'entity_identifier_name' => 'id_empresa',
                'route_name' => 'guia-facil.rest.propaganda',
                'route_identifier_name' => 'propaganda_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [],
    ],
    'zf-content-validation' => [],
    'input_filter_specs' => [
        'GuiaFacil\\V1\\Rest\\Telefoneempresa\\Validator' => [
            0 => [
                'name' => 'empresaid',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            1 => [
                'name' => 'fone',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
        ],
    ],
    'service_manager' => [
        'factories' => [
            \GuiaFacil\V1\Rest\Telefoneempresa\TelefoneempresaResource::class => \GuiaFacil\V1\Rest\Telefoneempresa\TelefoneempresaResourceFactory::class,
            \GuiaFacil\V1\Rest\Atvcomercial\AtvcomercialResource::class => \GuiaFacil\V1\Rest\Atvcomercial\AtvcomercialResourceFactory::class,
            \GuiaFacil\V1\Rest\Usuario\UsuarioResource::class => \GuiaFacil\V1\Rest\Usuario\UsuarioResourceFactory::class,
            \GuiaFacil\V1\Rest\Empresa\EmpresaResource::class => \GuiaFacil\V1\Rest\Empresa\EmpresaResourceFactory::class,
            \GuiaFacil\V1\Rest\Propaganda\PropagandaResource::class => \GuiaFacil\V1\Rest\Propaganda\PropagandaResourceFactory::class,
        ],
    ],
];
