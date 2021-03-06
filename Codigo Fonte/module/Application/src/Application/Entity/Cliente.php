<?php
/**
 * Created by PhpStorm.
 * User: matheuslucio
 * Date: 24/10/15
 * Time: 19:50
 */

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="tb_cliente")
 * @ORM\Entity(repositoryClass="Application\Entity\ClienteRepository")
 */
class Cliente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cliente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="dt_cadastro_cliente", type="integer", nullable=false)
     */
    private $dtCadastroCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_cliente", type="string", length=200, nullable=false)
     */
    private $nomeCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf_cliente", type="string", length=20, nullable=false)
     */
    private $cpfCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="rg_cliente", type="string", length=20, nullable=false)
     */
    private $rgCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone_cliente", type="string", length=20, nullable=false)
     */
    private $telefoneCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="celular_cliente", type="string", length=20, nullable=false)
     */
    private $celularCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="dt_nascimento_cliente", type="integer", nullable=false)
     */
    private $dtNascimentoCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="email_cliente", type="string", length=200, nullable=false)
     */
    private $emailCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo_cliente", type="string", length=50, nullable=false)
     */
    private $sexoCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="cep_cliente", type="string", length=20, nullable=false)
     */
    private $cepCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco_cliente", type="string", length=200, nullable=false)
     */
    private $enderecoCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_cliente", type="string", length=20, nullable=false)
     */
    private $numeroCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="complemento_cliente", type="string", nullable=false)
     */
    private $complementoCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="cidade_cliente", type="integer", nullable=false)
     */
    private $cidadeCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="uf_cliente", type="integer", nullable=false)
     */
    private $ufCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="foto_cliente", type="string", nullable=false)
     */
    private $fotoCliente;



    /**
     * Get idCliente
     *
     * @return integer 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set dtCadastroCliente
     *
     * @param integer $dtCadastroCliente
     * @return Cliente
     */
    public function setDtCadastroCliente($dtCadastroCliente)
    {
        $this->dtCadastroCliente = $dtCadastroCliente;
    
        return $this;
    }

    /**
     * Get dtCadastroCliente
     *
     * @return integer
     */
    public function getDtCadastroCliente()
    {
        return $this->dtCadastroCliente;
    }

    /**
     * Set nomeCliente
     *
     * @param string $nomeCliente
     * @return Cliente
     */
    public function setNomeCliente($nomeCliente)
    {
        $this->nomeCliente = $nomeCliente;
    
        return $this;
    }

    /**
     * Get nomeCliente
     *
     * @return string 
     */
    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }

    /**
     * Set cpfCliente
     *
     * @param string $cpfCliente
     * @return Cliente
     */
    public function setCpfCliente($cpfCliente)
    {
        $this->cpfCliente = $cpfCliente;
    
        return $this;
    }

    /**
     * Get cpfCliente
     *
     * @return string 
     */
    public function getCpfCliente()
    {
        return $this->cpfCliente;
    }

    /**
     * Set rgCliente
     *
     * @param string $rgCliente
     * @return Cliente
     */
    public function setRgCliente($rgCliente)
    {
        $this->rgCliente = $rgCliente;
    
        return $this;
    }

    /**
     * Get rgCliente
     *
     * @return string 
     */
    public function getRgCliente()
    {
        return $this->rgCliente;
    }

    /**
     * Set telefoneCliente
     *
     * @param string $telefoneCliente
     * @return Cliente
     */
    public function setTelefoneCliente($telefoneCliente)
    {
        $this->telefoneCliente = $telefoneCliente;
    
        return $this;
    }

    /**
     * Get telefoneCliente
     *
     * @return string 
     */
    public function getTelefoneCliente()
    {
        return $this->telefoneCliente;
    }

    /**
     * Set celularCliente
     *
     * @param string $celularCliente
     * @return Cliente
     */
    public function setCelularCliente($celularCliente)
    {
        $this->celularCliente = $celularCliente;
    
        return $this;
    }

    /**
     * Get celularCliente
     *
     * @return string 
     */
    public function getCelularCliente()
    {
        return $this->celularCliente;
    }

    /**
     * Set dtNascimentoCliente
     *
     * @param integer $dtNascimentoCliente
     * @return Cliente
     */
    public function setDtNascimentoCliente($dtNascimentoCliente)
    {
        $this->dtNascimentoCliente = $dtNascimentoCliente;
    
        return $this;
    }

    /**
     * Get dtNascimentoCliente
     *
     * @return integer
     */
    public function getDtNascimentoCliente()
    {
        return $this->dtNascimentoCliente;
    }

    /**
     * Set emailCliente
     *
     * @param string $emailCliente
     * @return Cliente
     */
    public function setEmailCliente($emailCliente)
    {
        $this->emailCliente = $emailCliente;
    
        return $this;
    }

    /**
     * Get emailCliente
     *
     * @return string 
     */
    public function getEmailCliente()
    {
        return $this->emailCliente;
    }

    /**
     * Set sexoCliente
     *
     * @param string $sexoCliente
     * @return Cliente
     */
    public function setSexoCliente($sexoCliente)
    {
        $this->sexoCliente = $sexoCliente;
    
        return $this;
    }

    /**
     * Get sexoCliente
     *
     * @return string 
     */
    public function getSexoCliente()
    {
        return $this->sexoCliente;
    }

    /**
     * Set cepCliente
     *
     * @param string $cepCliente
     * @return Cliente
     */
    public function setCepCliente($cepCliente)
    {
        $this->cepCliente = $cepCliente;
    
        return $this;
    }

    /**
     * Get cepCliente
     *
     * @return string 
     */
    public function getCepCliente()
    {
        return $this->cepCliente;
    }

    /**
     * Set enderecoCliente
     *
     * @param string $enderecoCliente
     * @return Cliente
     */
    public function setEnderecoCliente($enderecoCliente)
    {
        $this->enderecoCliente = $enderecoCliente;
    
        return $this;
    }

    /**
     * Get enderecoCliente
     *
     * @return string 
     */
    public function getEnderecoCliente()
    {
        return $this->enderecoCliente;
    }

    /**
     * Set numeroCliente
     *
     * @param string $numeroCliente
     * @return Cliente
     */
    public function setNumeroCliente($numeroCliente)
    {
        $this->numeroCliente = $numeroCliente;
    
        return $this;
    }

    /**
     * Get numeroCliente
     *
     * @return string 
     */
    public function getNumeroCliente()
    {
        return $this->numeroCliente;
    }

    /**
     * Set complementoCliente
     *
     * @param integer $complementoCliente
     * @return Cliente
     */
    public function setComplementoCliente($complementoCliente)
    {
        $this->complementoCliente = $complementoCliente;
    
        return $this;
    }

    /**
     * Get complementoCliente
     *
     * @return integer 
     */
    public function getComplementoCliente()
    {
        return $this->complementoCliente;
    }

    /**
     * Set cidadeCliente
     *
     * @param integer $cidadeCliente
     * @return Cliente
     */
    public function setCidadeCliente($cidadeCliente)
    {
        $this->cidadeCliente = $cidadeCliente;
    
        return $this;
    }

    /**
     * Get cidadeCliente
     *
     * @return integer 
     */
    public function getCidadeCliente()
    {
        return $this->cidadeCliente;
    }

    /**
     * Set ufCliente
     *
     * @param integer $ufCliente
     * @return Cliente
     */
    public function setUfCliente($ufCliente)
    {
        $this->ufCliente = $ufCliente;
    
        return $this;
    }

    /**
     * Get ufCliente
     *
     * @return integer 
     */
    public function getUfCliente()
    {
        return $this->ufCliente;
    }

    /**
     * Set fotoCliente
     *
     * @param integer $fotoCliente
     * @return Cliente
     */
    public function setFotoCliente($fotoCliente)
    {
        $this->fotoCliente = $fotoCliente;
    
        return $this;
    }

    /**
     * Get fotoCliente
     *
     * @return integer 
     */
    public function getFotoCliente()
    {
        return $this->fotoCliente;
    }
}
