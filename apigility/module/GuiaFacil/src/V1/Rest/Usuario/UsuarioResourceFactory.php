<?php
namespace GuiaFacil\V1\Rest\Usuario;

class UsuarioResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get('Guiafacil\V1\Usuario\UsuarioMapper');
        return new UsuarioResource($mapper);
    }
}
