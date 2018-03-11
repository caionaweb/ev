<?php
namespace GuiaFacil;

use GuiaFacil\V1\Rest\Atvcomercial\AtvcomercialEntity;
use GuiaFacil\V1\Rest\Atvcomercial\AtvcomercialM;
use GuiaFacil\V1\Rest\Atvcomercial\AtvcomercialMapper;
use GuiaFacil\V1\Rest\Empresa\EmpresaEntity;
use GuiaFacil\V1\Rest\Empresa\EmpresaMapper;
use GuiaFacil\V1\Rest\Empresas\EmpresasEntity;
use GuiaFacil\V1\Rest\Empresas\EmpresasMapper;
use GuiaFacil\V1\Rest\Propaganda\PropagandaEntity;
use GuiaFacil\V1\Rest\Propaganda\PropagandaMapper;
use GuiaFacil\V1\Rest\Telefoneempresa\TelefoneempresaEntity;
use GuiaFacil\V1\Rest\Telefoneempresa\TEMapper;
use GuiaFacil\V1\Rest\Usuario\UsuarioEntity;
use GuiaFacil\V1\Rest\Usuario\UsuarioMapper;
use GuiaFacil\V1\Rest\Usuarios\UsuariosEntity;
use GuiaFacil\V1\Rest\Usuarios\UsuariosMapper;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use ZF\Apigility\Provider\ApigilityProviderInterface;

class Module implements ApigilityProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'TelefoneempresaTETableGateway' => function($sm){
                    $dbAdapter = $sm->get('guiafacilbd');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new TelefoneempresaEntity());
                    return new TableGateway('telefoneempresa',$dbAdapter, null, $resultSetPrototype);
                },
                'Guiafacil\V1\Telefoneempresa\TEMapper' => function($sm){
                    $tableGateway = $sm->get('TelefoneempresaTETableGateway');
                    return new TEMapper($tableGateway);
                },
                'EmpresaTableGateway' => function($sm){
                    $dbAdapter = $sm->get('guiafacilbd');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new EmpresaEntity());
                    return new TableGateway('empresa',$dbAdapter, null, $resultSetPrototype);
                },
                'Guiafacil\V1\Empresa\EmpresaMapper' => function($sm){
                    $tableGateway = $sm->get('EmpresaTableGateway');
                    return new EmpresaMapper($tableGateway);
                },
                'UsuarioTableGateway' => function($sm){
                    $dbAdapter = $sm->get('guiafacilbd');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new UsuarioEntity());
                    return new TableGateway('usuario',$dbAdapter, null, $resultSetPrototype);
                },
                'Guiafacil\V1\Usuario\UsuarioMapper' => function($sm){
                    $tableGateway = $sm->get('UsuarioTableGateway');
                    return new UsuarioMapper($tableGateway);
                },
                'AtvcomercialTableGateway' => function($sm){
                    $dbAdapter = $sm->get('guiafacilbd');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new AtvcomercialEntity());
                    return new TableGateway('atvcomercial', $dbAdapter, null, $resultSetPrototype);
                },
                'Guiafacil\V1\Atvcomercial\AtvcomercialMapper' => function($sm){
                    $tabeGateway = $sm->get('AtvcomercialTableGateway');
                    return new AtvcomercialMapper($tabeGateway);
                },
                'PropagandaTableGateway' => function($sm){
                    $dbAdapter = $sm->get('guiafacilbd');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new PropagandaEntity());
                    return new TableGateway('propaganda', $dbAdapter, null, $resultSetPrototype);
                },
                'Guiafacil\V1\Propaganda\PropagandaMapper' => function($sm) {
                    $tabeGateway = $sm->get('PropagandaTableGateway');
                    return new PropagandaMapper($tabeGateway);
                }
            )
        );
    }

    public function getAutoloaderConfig()
    {
        return [
            'ZF\Apigility\Autoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src',
                ],
            ],
        ];
    }
}
