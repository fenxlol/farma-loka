<?php
/**
 * Created by PhpStorm.
 * User: matheuslucio
 * Date: 24/10/15
 * Time: 19:56
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Session\Container;

/**
 * Class AbstractController
 * @package Application\Controller
 */
class AbstractController extends AbstractActionController
{
    /**
     * Primeiro metodo a ser executado antes de qualquer action/rota nesta controller
     *
     * @param \Zend\Mvc\MvcEvent $e
     *
     * @return mixed
     */
    public function onDispatch(\Zend\Mvc\MvcEvent $e)
    {
        if ($this->getUserSession()->logado == false && $this->getEvent()->getRouteMatch()->getMatchedRouteName() != 'autenticacao') {
            $this->redirect()->toUrl('/autenticacao/login');
        }
        return parent::onDispatch($e);
    }

    /**
     * Retorna um servico determinado via parametro
     *
     * @param null $service
     * @return null
     */
    public function getService($service = null)
    {
        $objectManager = $this
            ->getServiceLocator()
            ->get('Doctrine\ORM\EntityManager');

        if ($service == null) {
            $controllerName = get_class($this);
            $controllerName = str_replace('\Controller', '\Service', $controllerName);
            $controllerName = str_replace('Controller', '', $controllerName);
            return new $controllerName($objectManager);
        } else {
            return new $service($objectManager);
        }
    }

    /**
     * Recebe os parametros da requisicao do tipo POST e converte para um array
     *
     * @return mixed
     */
    public function getPost()
    {
        $request = $this->getRequest();
        return $request->getPost();
    }

    /**
     * Recebe os arquivos da requisicao e converte para um array
     *
     * @return mixed
     */
    public function getFiles()
    {
        $request = $this->getRequest();
        return (array) $request->getFiles();
    }

    /**
     * Verifica se a requisicao e do tipo POST
     *
     * @return mixed
     */
    public function isPost()
    {
        $request = $this->getRequest();
        return $request->isPost();
    }

    /**
     * Retorna a sessao do usuario logado
     *
     * @return Container
     */
    public function getUserSession()
    {
        $sessionUser = new Container('user_session');
        return $sessionUser;
    }

    /**
     * Retorna os parametros passados pela variavel
     *
     * @return mixed
     */
    public function getParams()
    {
        return $this->getEvent()->getRouteMatch()->getParams();
    }

    /**
     * Retorna os dados Stmp para envio de email
     *
     * @return array
     */
    public function getStmpOptions()
    {
        $stmpOptionsArr = array(
            'host'              => 'mx1.hostinger.com.br',
            'connection_class'  => 'login',
            'connection_config' => array(
                'ssl'       => 'tls',
                'username' => 'farmaloka@ma-the.us',
                'password' => 'farmaemailloka456'
            ),
            'port' => 587,
        );

        return $stmpOptionsArr;
    }
}