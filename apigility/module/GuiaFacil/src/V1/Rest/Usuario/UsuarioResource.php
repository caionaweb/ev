<?php
namespace GuiaFacil\V1\Rest\Usuario;

use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;

class UsuarioResource extends AbstractResourceListener
{
    protected $mapper;

    function __construct($mapper)
    {
        $this->mapper = $mapper;
    }


    /**
     * Create a resource
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function create($data)
    {
        $usuarioEntity = new UsuarioEntity();

        $usuarioEntity->senha = $data->senha;
        $usuarioEntity->cpfcnpj = $data->cpfcnpj;
        $usuarioEntity->nivel = $data->nivel;
        $usuarioEntity->status = $data->status;
        $usuarioEntity->email = $data->email;
        $usuarioEntity->nomerazao = $data->nomerazao;
        $usuarioEntity->nomefantasia = $data->nomefantasia;
        $usuarioEntity->tipopessoa = $data->tipopessoa;
        $usuarioEntity->fone = $data->fone;
        $usuarioEntity->cep = $data->cep;
        $usuarioEntity->logradouro = $data->logradouro;
        $usuarioEntity->numero = $data->numero;
        $usuarioEntity->complemento = $data->complemento;
        $usuarioEntity->bairro = $data->bairro;
        $usuarioEntity->cidade = $data->cidade;
        $usuarioEntity->uf = $data->uf;
        $usuarioEntity->data_cad = $data->data_cad;

        return $this->mapper->save($usuarioEntity);
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function delete($id_usuario)
    {
        return $this->mapper->delete($id_usuario);
    }

    /**
     * Delete a collection, or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function deleteList($data)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for collections');
    }

    /**
     * Fetch a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function fetch($email)
    {
        return $this->mapper->fetchOne($email);
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array $params
     * @return ApiProblem|mixed
     */
    public function fetchAll($params = [])
    {
        return $this->mapper->fetchAll();
    }

    /**
     * Patch (partial in-place update) a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patch($id, $data)
    {
        return new ApiProblem(405, 'The PATCH method has not been defined for individual resources');
    }

    /**
     * Patch (partial in-place update) a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patchList($data)
    {
        return new ApiProblem(405, 'The PATCH method has not been defined for collections');
    }

    /**
     * Replace a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function replaceList($data)
    {
        return new ApiProblem(405, 'The PUT method has not been defined for collections');
    }

    /**
     * Update a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function update($id_usuario, $data)
    {
        $usuarioEntity = new UsuarioEntity();

        $usuarioEntity->id_usuario = $id_usuario;
        $usuarioEntity->senha = $data->senha;
        $usuarioEntity->cpfcnpj = $data->cpfcnpj;
        $usuarioEntity->nivel = $data->nivel;
        $usuarioEntity->status = $data->status;
        $usuarioEntity->email = $data->email;
        $usuarioEntity->nomerazao = $data->nomerazao;
        $usuarioEntity->nomefantasia = $data->nomefantasia;
        $usuarioEntity->tipopessoa = $data->tipopessoa;
        $usuarioEntity->fone = $data->fone;
        $usuarioEntity->cep = $data->cep;
        $usuarioEntity->logradouro = $data->logradouro;
        $usuarioEntity->numero = $data->numero;
        $usuarioEntity->complemento = $data->complemento;
        $usuarioEntity->bairro = $data->bairro;
        $usuarioEntity->cidade = $data->cidade;
        $usuarioEntity->uf = $data->uf;
        $usuarioEntity->data_cad = $data->data_cad;

        return $this->mapper->save($usuarioEntity);

    }
}
