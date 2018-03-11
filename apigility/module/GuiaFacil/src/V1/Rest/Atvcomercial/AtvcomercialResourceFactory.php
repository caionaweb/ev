<?php
namespace GuiaFacil\V1\Rest\Atvcomercial;

class AtvcomercialResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get('Guiafacil\V1\Atvcomercial\AtvcomercialMapper');
        return new AtvcomercialResource($mapper);
    }
}
