<?php
namespace GuiaFacil\V1\Rest\Telefoneempresa;

use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;

class TelefoneempresaResource extends AbstractResourceListener
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
        $telefoneempresaEntity = new TelefoneempresaEntity();

        $telefoneempresaEntity->fone = $data->fone;
        $telefoneempresaEntity->id_empresa = $data->id_empresa;

        return $this->mapper->insere($telefoneempresaEntity);
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function delete($data)
    {
        return new ApiProblem(405, 'Favor usar Update(PUT) com opção Delete setada em 1. Veja mais no manual da API');
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
        $telefoneempresaEntity = new TelefoneempresaEntity();

        $telefoneempresaEntity->id_empresa = $id_empresa;
        $telefoneempresaEntity->id_fone = $data->id_fone;
        $telefoneempresaEntity->fone = $data->fone;
        $telefoneempresaEntity->delete = $data->delete;

        return $this->mapper->update($telefoneempresaEntity);
    }
}
