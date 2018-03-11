<?php

namespace GuiaFacil\V1\Rest\Telefoneempresa;

use Zend\Db\TableGateway\TableGateway;

class TEMapper
{
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
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

    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

    public function update(TelefoneempresaEntity $telefoneempresa)
    {

        $delete = (int) $telefoneempresa->delete;

        if($delete==1){
            $this->tableGateway->delete(array('id_fone'=>$telefoneempresa->id_fone));
            return true;
        }

        $data = [

            'fone' => $telefoneempresa->fone,
            'id_empresa' => $telefoneempresa->id_empresa
        ];

        $this->tableGateway->update($data,array('id_fone' => $telefoneempresa->id_fone));
        return $telefoneempresa;

    }


    public function insere(TelefoneempresaEntity $telefoneempresa)
    {
        $data = [

            'fone' => $telefoneempresa->fone,
            'id_empresa' => $telefoneempresa->id_empresa
        ];

        $res = $this->tableGateway->insert($data);

        return $telefoneempresa;

    }

}