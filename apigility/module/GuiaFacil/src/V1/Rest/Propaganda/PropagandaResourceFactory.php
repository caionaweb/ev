<?php
namespace GuiaFacil\V1\Rest\Propaganda;

class PropagandaResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get('Guiafacil\V1\Propaganda\PropagandaMapper');
        return new PropagandaResource($mapper);
    }
}
