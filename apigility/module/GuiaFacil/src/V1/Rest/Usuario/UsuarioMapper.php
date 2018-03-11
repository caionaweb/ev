<?php
/**
 * Created by PhpStorm.
 * User: cao
 * Date: 17/02/2018
 * Time: 00:28
 */

namespace GuiaFacil\V1\Rest\Usuario;


use Zend\Db\TableGateway\TableGateway;

class UsuarioMapper
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

    public function fetchOne($email)
    {
       // $id_usuario = (int) $id_usuario;
        $rowset = $this->tableGateway->select(array('email' => $email));
        $row = $rowset->current();
        if(!$row)
        {
            throw new \Exception("Usuario com ID {$email} não encontrado");
        }
        return $row;
    }

    public function save(UsuarioEntity $usuario)
    {
        $data = [

            'senha' => $usuario->senha,
            'cpfcnpj' => $usuario->cpfcnpj,
            'nivel' => (int) $usuario->nivel,
            'status' => (int) $usuario->status,
            'email' => $usuario->email,
            'nomerazao' => $usuario->nomerazao,
            'nomefantasia' => $usuario->nomefantasia,
            'tipopessoa' => $usuario->tipopessoa,
            'fone' => $usuario->fone,
            'cep' => $usuario->cep,
            'logradouro' => $usuario->logradouro,
            'numero' => (int) $usuario->numero,
            'complemento' => $usuario->complemento,
            'bairro' => $usuario->bairro,
            'cidade' => $usuario->cidade,
            'uf' => $usuario->uf,
            'data_cad' => $usuario->data_cad
        ];

        $id_usuario = (int) $usuario->id_usuario;

        if($id_usuario == 0){
            $res = $this->tableGateway->insert($data);
            $usuario->id_usuario = $this->tableGateway->lastInsertValue;
            return $usuario;
        }else{
            if($this->fetchOne($id_usuario))
            {
                $this->tableGateway->update($data,array('id_usuario' => $usuario->id_usuario));
                return $usuario;
            }
        }
    }

    public function delete($id_usuario)
    {
        $this->tableGateway->delete(array('id_usuario'=>(int)$id_usuario));
        return true;
    }

}