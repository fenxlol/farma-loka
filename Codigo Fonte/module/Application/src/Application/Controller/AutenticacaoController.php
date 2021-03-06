<?php
/**
 * Created by PhpStorm.
 * User: matheuslucio
 * Date: 23/10/15
 * Time: 21:59
 */

namespace Application\Controller;

use Zend\Mail\Message;
use Zend\View\Model\ViewModel;
use Zend\Mail\Transport\Smtp as SmtpTransport;
use Zend\Mail\Transport\SmtpOptions;
use Zend\Mime\Message as MimeMessage;
use Zend\Mime\Part as MimePart;

/**
 * Class AutenticacaoController
 * @package Application\Controller
 */
class AutenticacaoController extends AbstractController
{
    /**
     * Rota inicial da controller autenticacao
     *
     * @return array|\Zend\Stdlib\ResponseInterface
     */
    public function indexAction()
    {
        $response = $this->getResponse();
        $response->setStatusCode(200);
        $response->setContent(null);

        $sessionUser = $this->getUserSession();

        if ($sessionUser->logado == true) {
            $this->redirect()->toRoute('home');
        } else {
            $this->redirect()->toUrl('/autenticacao/login');
        }

        return $response;
    }

    /**
     * Rota para o usuario realizar login
     *
     * @return ViewModel
     */
    public function loginAction()
    {
        $result = new ViewModel(array('titulo' => 'Farma Loka # Login'));
        $result->setTerminal(true);

        if ($this->isPost()) {
            $arrPost = $this->getPost();
            $existeUsuario = $this->getService('Application\Service\Usuario')->existeUsuario(array('email_usuario' => $arrPost['email'], 'senha_usuario' => $arrPost['senha']));

            if ($existeUsuario) {
                $this->getUserSession()->logado = true;
                $this->getUserSession()->usuario = $this->getService('Application\Service\Usuario')->usuarioLogado(array('email_usuario' => $arrPost['email'], 'senha_usuario' => $arrPost['senha']));
            } else {
                $result->setVariable('mensagem', 'Usuário ou senha não localizados em nosso sistema.');
                $this->getUserSession()->logado = false;
            }
        }

        if ($this->getUserSession()->logado == true) {
            $this->redirect()->toRoute('home');
        }

        return $result;
    }

    /**
     * Rota para o usuario realizar logout
     */
    public function logoutAction()
    {
        $response = $this->getResponse();
        $response->setStatusCode(200);
        $response->setContent(null);

        $this->getUserSession()->logado = false;
        $this->getUserSession()->usuario = array();
        $this->redirect()->toRoute('autenticacao');
    }

    /**
     * Rota para o usuario recuperar sua senha
     *
     * @return ViewModel
     */
    public function esqueceuSenhaAction()
    {
        $result = new ViewModel(array('titulo' => 'Farma Loka # Esqueceu Sua Senha'));
        $result->setTerminal(true);

        if ($this->isPost()) {
            $arrPost = $this->getPost();

            $findByEmail = $this->getService('Application\Service\Usuario')->findBy(array('email_usuario' => $arrPost['email']));
            if (count($findByEmail) > 0) {
                try {
                    $message = new Message();
                    $message->addFrom('farmaloka@ma-the.us', 'Contato # Farma Loka')->addTo(reset($findByEmail)->getEmailUsuario())->setSubject('Recuperação de Senha # Farma Loka - ' . date('d/m/Y H:i:s', time()));

                    $corpoEmail = $this->getService('Application\Service\Usuario')->getCorpoEmailEsqueciSenha(reset($findByEmail));

                    $html = new MimePart($corpoEmail);
                    $html->type = "text/html";

                    $body = new MimeMessage();
                    $body->addPart($html);

                    $message->setBody($body);

                    $transport = new SmtpTransport();
                    $options   = new SmtpOptions($this->getStmpOptions());

                    $transport->setOptions($options);
                    $transport->send($message);

                    $result->setVariable('mensagem', 'Localizamos seu E-mail, cheque sua caixa de entrada pois enviamos seus dados.');
                } catch (\Exception $e) {

                }
            } else {
                $result->setVariable('mensagem', 'Usuário ou senha não localizados em nosso sistema.');
            }
        }

        if ($this->getUserSession()->logado == true) {
            $this->redirect()->toRoute('home');
        }

        return $result;
    }
}
