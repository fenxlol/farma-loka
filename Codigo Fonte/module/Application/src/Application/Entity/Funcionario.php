<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Funcionario
 *
 * @ORM\Table(name="tb_funcionario")
 * @ORM\Entity(repositoryClass="Application\Entity\FuncionarioRepository")
 */
class Funcionario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_funcionario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFuncionario;

    /**
     * @var integer
     *
     * @ORM\Column(name="dt_cadastro_funcionario", type="integer", nullable=false)
     */
    private $dtCadastroFuncionario;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_funcionario", type="string", length=200, nullable=false)
     */
    private $nomeFuncionario;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf_funcionario", type="string", length=20, nullable=false)
     */
    private $cpfFuncionario;

    /**
     * @var string
     *
     * @ORM\Column(name="rg_funcionario", type="string", length=20, nullable=false)
     */
    private $rgFuncionario;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone_funcionario", type="string", length=20, nullable=false)
     */
    private $telefoneFuncionario;

    /**
     * @var string
     *
     * @ORM\Column(name="celular_funcionario", type="string", length=20, nullable=false)
     */
    private $celularFuncionario;

    /**
     * @var integer
     *
     * @ORM\Column(name="dt_nascimento_funcionario", type="integer", nullable=false)
     */
    private $dtNascimentoFuncionario;

    /**
     * @var string
     *
     * @ORM\Column(name="email_funcionario", type="string", length=200, nullable=false)
     */
    private $emailFuncionario;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo_funcionario", type="string", length=50, nullable=false)
     */
    private $sexoFuncionario;

    /**
     * @var string
     *
     * @ORM\Column(name="cep_funcionario", type="string", length=20, nullable=false)
     */
    private $cepFuncionario;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco_funcionario", type="string", length=200, nullable=false)
     */
    private $enderecoFuncionario;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_funcionario", type="string", length=20, nullable=false)
     */
    private $numeroFuncionario;

    /**
     * @var string
     *
     * @ORM\Column(name="complemento_funcionario", type="string", length=200, nullable=false)
     */
    private $complementoFuncionario;

    /**
     * @var integer
     *
     * @ORM\Column(name="cidade_funcionario", type="integer", nullable=false)
     */
    private $cidadeFuncionario;

    /**
     * @var integer
     *
     * @ORM\Column(name="uf_funcionario", type="integer", nullable=false)
     */
    private $ufFuncionario;

    /**
     * @var string
     *
     * @ORM\Column(name="funcao_funcionario", type="string", length=200, nullable=false)
     */
    private $funcaoFuncionario;



    /**
     * Get idFuncionario
     *
     * @return integer 
     */
    public function getIdFuncionario()
    {
        return $this->idFuncionario;
    }

    /**
     * Set dtCadastroFuncionario
     *
     * @param integer $dtCadastroFuncionario
     * @return Funcionario
     */
    public function setDtCadastroFuncionario($dtCadastroFuncionario)
    {
        $this->dtCadastroFuncionario = $dtCadastroFuncionario;
    
        return $this;
    }

    /**
     * Get dtCadastroFuncionario
     *
     * @return integer 
     */
    public function getDtCadastroFuncionario()
    {
        return $this->dtCadastroFuncionario;
    }

    /**
     * Set nomeFuncionario
     *
     * @param string $nomeFuncionario
     * @return Funcionario
     */
    public function setNomeFuncionario($nomeFuncionario)
    {
        $this->nomeFuncionario = $nomeFuncionario;
    
        return $this;
    }

    /**
     * Get nomeFuncionario
     *
     * @return string 
     */
    public function getNomeFuncionario()
    {
        return $this->nomeFuncionario;
    }

    /**
     * Set cpfFuncionario
     *
     * @param string $cpfFuncionario
     * @return Funcionario
     */
    public function setCpfFuncionario($cpfFuncionario)
    {
        $this->cpfFuncionario = $cpfFuncionario;
    
        return $this;
    }

    /**
     * Get cpfFuncionario
     *
     * @return string 
     */
    public function getCpfFuncionario()
    {
        return $this->cpfFuncionario;
    }

    /**
     * Set rgFuncionario
     *
     * @param string $rgFuncionario
     * @return Funcionario
     */
    public function setRgFuncionario($rgFuncionario)
    {
        $this->rgFuncionario = $rgFuncionario;
    
        return $this;
    }

    /**
     * Get rgFuncionario
     *
     * @return string 
     */
    public function getRgFuncionario()
    {
        return $this->rgFuncionario;
    }

    /**
     * Set telefoneFuncionario
     *
     * @param string $telefoneFuncionario
     * @return Funcionario
     */
    public function setTelefoneFuncionario($telefoneFuncionario)
    {
        $this->telefoneFuncionario = $telefoneFuncionario;
    
        return $this;
    }

    /**
     * Get telefoneFuncionario
     *
     * @return string 
     */
    public function getTelefoneFuncionario()
    {
        return $this->telefoneFuncionario;
    }

    /**
     * Set celularFuncionario
     *
     * @param string $celularFuncionario
     * @return Funcionario
     */
    public function setCelularFuncionario($celularFuncionario)
    {
        $this->celularFuncionario = $celularFuncionario;
    
        return $this;
    }

    /**
     * Get celularFuncionario
     *
     * @return string 
     */
    public function getCelularFuncionario()
    {
        return $this->celularFuncionario;
    }

    /**
     * Set dtNascimentoFuncionario
     *
     * @param integer $dtNascimentoFuncionario
     * @return Funcionario
     */
    public function setDtNascimentoFuncionario($dtNascimentoFuncionario)
    {
        $this->dtNascimentoFuncionario = $dtNascimentoFuncionario;
    
        return $this;
    }

    /**
     * Get dtNascimentoFuncionario
     *
     * @return integer 
     */
    public function getDtNascimentoFuncionario()
    {
        return $this->dtNascimentoFuncionario;
    }

    /**
     * Set emailFuncionario
     *
     * @param string $emailFuncionario
     * @return Funcionario
     */
    public function setEmailFuncionario($emailFuncionario)
    {
        $this->emailFuncionario = $emailFuncionario;
    
        return $this;
    }

    /**
     * Get emailFuncionario
     *
     * @return string 
     */
    public function getEmailFuncionario()
    {
        return $this->emailFuncionario;
    }

    /**
     * Set sexoFuncionario
     *
     * @param string $sexoFuncionario
     * @return Funcionario
     */
    public function setSexoFuncionario($sexoFuncionario)
    {
        $this->sexoFuncionario = $sexoFuncionario;
    
        return $this;
    }

    /**
     * Get sexoFuncionario
     *
     * @return string 
     */
    public function getSexoFuncionario()
    {
        return $this->sexoFuncionario;
    }

    /**
     * Set cepFuncionario
     *
     * @param string $cepFuncionario
     * @return Funcionario
     */
    public function setCepFuncionario($cepFuncionario)
    {
        $this->cepFuncionario = $cepFuncionario;
    
        return $this;
    }

    /**
     * Get cepFuncionario
     *
     * @return string 
     */
    public function getCepFuncionario()
    {
        return $this->cepFuncionario;
    }

    /**
     * Set enderecoFuncionario
     *
     * @param string $enderecoFuncionario
     * @return Funcionario
     */
    public function setEnderecoFuncionario($enderecoFuncionario)
    {
        $this->enderecoFuncionario = $enderecoFuncionario;
    
        return $this;
    }

    /**
     * Get enderecoFuncionario
     *
     * @return string 
     */
    public function getEnderecoFuncionario()
    {
        return $this->enderecoFuncionario;
    }

    /**
     * Set numeroFuncionario
     *
     * @param string $numeroFuncionario
     * @return Funcionario
     */
    public function setNumeroFuncionario($numeroFuncionario)
    {
        $this->numeroFuncionario = $numeroFuncionario;
    
        return $this;
    }

    /**
     * Get numeroFuncionario
     *
     * @return string 
     */
    public function getNumeroFuncionario()
    {
        return $this->numeroFuncionario;
    }

    /**
     * Set complementoFuncionario
     *
     * @param string $complementoFuncionario
     * @return Funcionario
     */
    public function setComplementoFuncionario($complementoFuncionario)
    {
        $this->complementoFuncionario = $complementoFuncionario;
    
        return $this;
    }

    /**
     * Get complementoFuncionario
     *
     * @return string 
     */
    public function getComplementoFuncionario()
    {
        return $this->complementoFuncionario;
    }

    /**
     * Set cidadeFuncionario
     *
     * @param integer $cidadeFuncionario
     * @return Funcionario
     */
    public function setCidadeFuncionario($cidadeFuncionario)
    {
        $this->cidadeFuncionario = $cidadeFuncionario;
    
        return $this;
    }

    /**
     * Get cidadeFuncionario
     *
     * @return integer 
     */
    public function getCidadeFuncionario()
    {
        return $this->cidadeFuncionario;
    }

    /**
     * Set ufFuncionario
     *
     * @param integer $ufFuncionario
     * @return Funcionario
     */
    public function setUfFuncionario($ufFuncionario)
    {
        $this->ufFuncionario = $ufFuncionario;
    
        return $this;
    }

    /**
     * Get ufFuncionario
     *
     * @return integer 
     */
    public function getUfFuncionario()
    {
        return $this->ufFuncionario;
    }

    /**
     * Set funcaoFuncionario
     *
     * @param string $funcaoFuncionario
     * @return Funcionario
     */
    public function setFuncaoFuncionario($funcaoFuncionario)
    {
        $this->funcaoFuncionario = $funcaoFuncionario;
    
        return $this;
    }

    /**
     * Get funcaoFuncionario
     *
     * @return string 
     */
    public function getFuncaoFuncionario()
    {
        return $this->funcaoFuncionario;
    }
}
