<?php
namespace GuiaFacil\V1\Rest\Usuario;

class UsuarioEntity
{
    public $id_usuario;
    public $senha;
    public $cpfcnpj;
    public $nivel;
    public $status;
    public $email;
    public $nomerazao;
    public $nomefantasia;
    public $tipopessoa;
    public $fone;
    public $cep;
    public $logradouro;
    public $numero;
    public $complemento;
    public $bairro;
    public $cidade;
    public $uf;
    public $data_cad;

    public function getArrayCopy()
    {
        return array(
            'id_usuario'   => $this->id_usuario,
            'senha'        => $this->senha,
            'cpfcnpj'      => $this->cpfcnpj,
            'nivel'        => $this->nivel,
            'status'       => $this->status,
            'email'        => $this->email,
            'nomerazao'    => $this->nomerazao,
            'nomefantasia' => $this->nomefantasia,
            'tipopessoa'   => $this->tipopessoa,
            'fone'         => $this->fone,
            'cep'          => $this->cep,
            'logradouro'   => $this->logradouro,
            'numero'       => $this->numero,
            'complemento'  => $this->complemento,
            'bairro'       => $this->bairro,
            'cidade'       => $this->cidade,
            'uf'           => $this->uf,
            'data_cad'     => $this->data_cad
        );
    }
    public function exchangeArray(array $array)
    {
        $this->id_usuario = $array['id_usuario'];
        $this->senha = $array['senha'];
        $this->cpfcnpj = $array['cpfcnpj'];
        $this->nivel = $array['nivel'];
        $this->status = $array['status'];
        $this->email = $array['email'];
        $this->nomerazao = $array['nomerazao'];
        $this->nomefantasia = $array['nomefantasia'];
        $this->tipopessoa = $array['tipopessoa'];
        $this->fone = $array['fone'];
        $this->cep = $array['nomefantasia'];
        $this->logradouro = $array['logradouro'];
        $this->numero = $array['numero'];
        $this->complemento = $array['complemento'];
        $this->bairro = $array['bairro'];
        $this->cidade = $array['cidade'];
        $this->uf = $array['uf'];
        $this->data_cad = $array['data_cad'];
    }
}
