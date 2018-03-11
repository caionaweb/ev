<?php
/**
 * Created by PhpStorm.
 * User: cao
 * Date: 17/02/2018
 * Time: 16:17
 */

namespace GuiaFacil\V1\Rest\Propaganda;


use Zend\Db\TableGateway\TableGateway;

class PropagandaMapper
{
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
    $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

    public function fetchUm($id_empresa)
    {
        $id_empresa = (int) $id_empresa;
        $rowset = $this->tableGateway->select(array('id_empresa' => $id_empresa));
        $row = $rowset->toArray();

        if(!$row){
            throw  new \Exception("Empresa com o id {$id_empresa} não encontrada");
        }
        return $row;
    }

    public function insere(PropagandaEntity $propaganda)
    {
        $data = [

            'imagem' => $propaganda->imagem,
            'id_empresa' => $propaganda->id_empresa

        ];

        $res = $this->tableGateway->insert($data);

        return $propaganda;
    }

    public function update(PropagandaEntity $propaganda)
    {
        $delete = (int) $propaganda->delete;

        if($delete==1){
            $this->tableGateway->delete(array('id_propaganda'=>$propaganda->id_propaganda));
            return true;
        }

        $data = [

            'id_propaganda' => $propaganda->id_propaganda,
            'imagem' => $propaganda->imagem,
            'id_empresa' => $propaganda->id_empresa
        ];

        $this->tableGateway->update($data,array('id_propaganda' => $propaganda->id_propaganda));
        return $propaganda;

    }


}