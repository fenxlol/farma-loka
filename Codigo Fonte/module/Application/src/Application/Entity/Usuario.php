<?php
/**
 * Created by PhpStorm.
 * User: matheuslucio
 * Date: 25/10/15
 * Time: 08:54
 */

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="tb_usuario")
 * @ORM\Entity(repositoryClass="Application\Entity\UsuarioRepository")
 */
class Usuario
{
    /**
     * ID do usuario
     *
     * @var integer
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsuario;

    /**
     * Nome do usuario
     *
     * @var string
     *
     * @ORM\Column(name="nome_usuario", type="string", length=200, nullable=true)
     */
    private $nomeUsuario;

    /**
     * Email do usuario
     *
     * @var string
     *
     * @ORM\Column(name="email_usuario", type="string", length=200, nullable=false)
     */
    private $emailUsuario;

    /**
     * Senha do usuario
     *
     * @var string
     *
     * @ORM\Column(name="senha_usuario", type="string", length=200, nullable=false)
     */
    private $senhaUsuario;

    /**
     * Status do usuario (ativo ou nao)
     *
     * @var string
     *
     * @ORM\Column(name="status_usuario", type="string", length=200, nullable=true)
     */
    private $statusUsuario;



    /**
     * Get idUsuario
     *
     * @return integer 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set nomeUsuario
     *
     * @param string $nomeUsuario
     * @return Usuario
     */
    public function setNomeUsuario($nomeUsuario)
    {
        $this->nomeUsuario = $nomeUsuario;

        return $this;
    }

    /**
     * Get nomeUsuario
     *
     * @return string 
     */
    public function getNomeUsuario()
    {
        return $this->nomeUsuario;
    }

    /**
     * Set emailUsuario
     *
     * @param string $emailUsuario
     * @return Usuario
     */
    public function setEmailUsuario($emailUsuario)
    {
        $this->emailUsuario = $emailUsuario;

        return $this;
    }

    /**
     * Get emailUsuario
     *
     * @return string 
     */
    public function getEmailUsuario()
    {
        return $this->emailUsuario;
    }

    /**
     * Set senhaUsuario
     *
     * @param string $senhaUsuario
     * @return Usuario
     */
    public function setSenhaUsuario($senhaUsuario)
    {
        $this->senhaUsuario = $senhaUsuario;

        return $this;
    }

    /**
     * Get senhaUsuario
     *
     * @return string 
     */
    public function getSenhaUsuario()
    {
        return $this->senhaUsuario;
    }

    /**
     * Set statusUsuario
     *
     * @param string $statusUsuario
     * @return Usuario
     */
    public function setStatusUsuario($statusUsuario)
    {
        $this->statusUsuario = $statusUsuario;

        return $this;
    }

    /**
     * Get statusUsuario
     *
     * @return string 
     */
    public function getStatusUsuario()
    {
        return $this->statusUsuario;
    }
}
