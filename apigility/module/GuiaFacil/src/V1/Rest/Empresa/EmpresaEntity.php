<?php
namespace GuiaFacil\V1\Rest\Empresa;

class EmpresaEntity
{
    public $id_empresa;
    public $cep;
    public $logradouro;
    public $numero;
    public $bairro;
    public $cidade;
    public $uf;
    public $categoria;
    public $codusuario;
    public $nomerazao;
    public $nomefantasia;
    public $token;
    public $imagempeq;
    public $imagemgrande;
    public $telefone1;
    public $telefone2;
    public $id_usuario;
    public function getArrayCopy()
    {
        return array(
            'id_empresa'        => $this->id_empresa,
            'cep'           => $this->cep,
            'logradouro'    => $this->logradouro,
            'numero'        => $this->numero,
            'bairro'        => $this->bairro,
            'cidade'        => $this->cidade,
            'uf'            => $this->uf,
            'categoria'     => $this->categoria,
            'codusuario'    => $this->codusuario,
            'nomerazao'     => $this->nomerazao,
            'nomefantasia'  => $this->nomefantasia,
            'token'         => $this->token,
            'imagempeq'     => $this->imagempeq,
            'imagemgrande'  => $this->imagemgrande,
            'telefone1'     => $this->telefone1,
            'telefone2'     => $this->telefone2,
            'id_usuario'    => $this->id_usuario
        );
    }
    public function exchangeArray(array $array)
    {
        $this->id_empresa = $array['id_empresa'];
        $this->cep = $array['cep'];
        $this->logradouro = $array['logradouro'];
        $this->numero = $array['numero'];
        $this->bairro = $array['bairro'];
        $this->cidade = $array['cidade'];
        $this->uf = $array['uf'];
        $this->categoria = $array['categoria'];
        $this->nomerazao = $array['nomerazao'];
        $this->nomefantasia = $array['nomefantasia'];
        $this->token = $array['token'];
        $this->imagempeq = $array['imagempeq'];
        $this->imagemgrande = $array['imagemgrande'];
        $this->telefone1 = $array['telefone1'];
        $this->telefone2 = $array['telefone2'];
        $this->id_usuario = $array['id_usuario'];
    }
}
