<?php
/**
 * Created by PhpStorm.
 * User: cao
 * Date: 16/02/2018
 * Time: 23:11
 */

namespace GuiaFacil\V1\Rest\Atvcomercial;


use Zend\Db\TableGateway\TableGateway;

class AtvcomercialMapper
{
    protected $tableGateway;

   function __construct(TableGateway $tableGateway)
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

    public function update(AtvcomercialEntity $atvcomercial)
    {
        $delete = (int) $atvcomercial->delete;

        if($delete==1){
            $this->tableGateway->delete(array('id_atv'=>$atvcomercial->id_atv));
            return true;
        }

        $data = [

            'nome' => $atvcomercial->nome,
            'id_empresa' => $atvcomercial->id_empresa

        ];

        $this->tableGateway->update($data,array('id_atv' => $atvcomercial->id_atv));
        return $atvcomercial;

    }

    public function insere(AtvcomercialEntity $atvcomercial)
    {
        $data = [

            'nome' => $atvcomercial->nome,
            'id_empresa' => $atvcomercial->id_empresa

        ];

        $res = $this->tableGateway->insert($data);

        return $atvcomercial;

    }



}