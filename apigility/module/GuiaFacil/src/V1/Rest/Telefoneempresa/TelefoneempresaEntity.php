<?php
namespace GuiaFacil\V1\Rest\Telefoneempresa;

class TelefoneempresaEntity
{
    public $id_fone;
    public $id_empresa;
    public $fone;

    public function getArrayCopy()
    {
        return array(
            'id_fone' => $this->id_fone,
            'fone' => $this->fone,
            'id_empresa' => $this->id_empresa
        );
    }
    public function exchangeArray(array $array)
    {
        $this->id_fone = $array['id_fone'];
        $this->fone = $array['fone'];
        $this->id_empresa = $array['id_empresa'];
    }
}
