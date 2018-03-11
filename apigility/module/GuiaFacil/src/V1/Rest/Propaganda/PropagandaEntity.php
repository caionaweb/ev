<?php
namespace GuiaFacil\V1\Rest\Propaganda;

class PropagandaEntity
{
    public $id_propaganda;
    public $imagem;
    public $id_empresa;

    public function getArrayCopy()
    {
        return array(
            'id_propaganda' => $this->id_propaganda,
            'imagem' => $this->imagem,
            'id_empresa' => $this->id_empresa

        );
    }
    public function exchangeArray(array $array)
    {
        $this->id_propaganda = $array['id_propaganda'];
        $this->imagem = $array['imagem'];
        $this->id_empresa = $array['id_empresa'];
    }
}
