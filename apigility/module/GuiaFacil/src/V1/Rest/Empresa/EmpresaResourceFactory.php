<?php
namespace GuiaFacil\V1\Rest\Empresa;

class EmpresaResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get('Guiafacil\V1\Empresa\EmpresaMapper');
        return new EmpresaResource($mapper);
    }
}
