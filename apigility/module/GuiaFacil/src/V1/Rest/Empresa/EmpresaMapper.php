<?php
/**
 * Created by PhpStorm.
 * User: cao
 * Date: 17/02/2018
 * Time: 13:20
 */

namespace GuiaFacil\V1\Rest\Empresa;


use Zend\Db\TableGateway\TableGateway;

class EmpresaMapper
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
        $row = $rowset->current();
        if(!$row)
        {
            throw new \Exception("Empresa com ID {$id_empresa} não encontrada");
        }
        return $row;
    }

    public function save(EmpresaEntity $empresa)
    {
        $data = [

            'cep'           => $empresa->cep,
            'logradouro'    => $empresa->logradouro,
            'numero'        => (int) $empresa->numero,
            'bairro'        => $empresa->bairro,
            'cidade'        => $empresa->cidade,
            'uf'            => $empresa->uf,
            'categoria'     => $empresa->categoria,
            'nomerazao'     => $empresa->nomerazao,
            'nomefantasia'  => $empresa->nomefantasia,
            'token'         => $empresa->token,
            'imagempeq'     => $empresa->imagempeq,
            'imagemgrande'  => $empresa->imagemgrande,
            'telefone1'     => $empresa->telefone1,
            'telefone2'     => $empresa->telefone2,
            'id_usuario'    => (int) $empresa->id_usuario
        ];

        $id_empresa = (int) $empresa->id_empresa;

        if($id_empresa == 0){
            $res = $this->tableGateway->insert($data);
            $empresa->id_empresa = $this->tableGateway->lastInsertValue;
            return $empresa;
        }else{
            if($this->fetchUm($id_empresa))
            {
                $this->tableGateway->update($data,array('id_empresa' => $id_empresa));
                return $empresa;
            }
        }
    }

    public function delete($id_empresa)
    {
        $this->tableGateway->delete(array('id_empresa'=>(int)$id_empresa));
        return true;
    }
}