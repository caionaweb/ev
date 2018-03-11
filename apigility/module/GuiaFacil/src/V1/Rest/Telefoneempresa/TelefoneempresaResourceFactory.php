<?php
namespace GuiaFacil\V1\Rest\Telefoneempresa;

class TelefoneempresaResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get('Guiafacil\V1\Telefoneempresa\TEMapper');
        return new TelefoneempresaResource($mapper);
    }
}
