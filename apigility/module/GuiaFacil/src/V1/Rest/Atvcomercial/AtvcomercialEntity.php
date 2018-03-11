<?php
namespace GuiaFacil\V1\Rest\Atvcomercial;

class AtvcomercialEntity
{
    public $id_atv;
    public $id_empresa;
    public $nome;
    public function getArrayCopy()
    {
        return array(
            'id_atv' => $this->id_atv,
            'id_empresa' => $this->id_empresa,
            'nome' => $this->nome

        );
    }
    public function exchangeArray(array $array)
    {
        $this->id_atv = $array['id_atv'];
        $this->id_empresa = $array['id_empresa'];
        $this->nome = $array['nome'];
    }
}
