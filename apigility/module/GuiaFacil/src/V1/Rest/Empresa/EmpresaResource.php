<?php
namespace GuiaFacil\V1\Rest\Empresa;

use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;

class EmpresaResource extends AbstractResourceListener
{
    protected $mapper;

    public function __construct($mapper)
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
        $empresaEntity = new EmpresaEntity();

        $empresaEntity->cep = $data->cep;
        $empresaEntity->logradouro = $data->logradouro;
        $empresaEntity->numero = $data->numero;
        $empresaEntity->bairro = $data->bairro;
        $empresaEntity->cidade = $data->cidade;
        $empresaEntity->uf = $data->uf;
        $empresaEntity->categoria = $data->categoria;
        $empresaEntity->nomerazao = $data->nomerazao;
        $empresaEntity->nomefantasia = $data->nomefantazia;
        $empresaEntity->token = $data->token;
        $empresaEntity->imagempeq = $data->imagempeq;
        $empresaEntity->imagemgrande = $data->imagemgrande;
        $empresaEntity->telefone1 = $data->telefone1;
        $empresaEntity->telefone2  = $data->telefone2;
        $empresaEntity->id_usuario  = $data->id_usuario;

        return $this->mapper->save($empresaEntity);

    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function delete($id_empresa)
    {
        return $this->mapper->delete($id_empresa);
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
    public function fetch($id_empresa)
    {
        return $this->mapper->fetchUm($id_empresa);
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
    public function update($id_empresa, $data)
    {
        $empresaEntity = new EmpresaEntity();

        $empresaEntity->id_empresa = $id_empresa;
        $empresaEntity->cep = $data->cep;
        $empresaEntity->logradouro = $data->logradouro;
        $empresaEntity->numero = $data->numero;
        $empresaEntity->bairro = $data->bairro;
        $empresaEntity->cidade = $data->cidade;
        $empresaEntity->uf = $data->uf;
        $empresaEntity->categoria = $data->categoria;
        $empresaEntity->nomerazao = $data->nomerazao;
        $empresaEntity->nomefantasia = $data->nomefantazia;
        $empresaEntity->token = $data->token;
        $empresaEntity->imagempeq = $data->imagempeq;
        $empresaEntity->imagemgrande = $data->imagemgrande;
        $empresaEntity->telefone1 = $data->telefone1;
        $empresaEntity->telefone2  = $data->telefone2;
        $empresaEntity->id_usuario  = $data->id_usuario;

        return $this->mapper->save($empresaEntity);
    }
}
