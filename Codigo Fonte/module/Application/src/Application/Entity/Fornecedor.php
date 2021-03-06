<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fornecedor
 *
 * @ORM\Table(name="tb_fornecedor")
 * @ORM\Entity(repositoryClass="Application\Entity\FornecedorRepository")
 */
class Fornecedor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_fornecedor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFornecedor;

    /**
     * @var integer
     *
     * @ORM\Column(name="dt_cadastro_fornecedor", type="integer", nullable=false)
     */
    private $dtCadastroFornecedor;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_fornecedor", type="string", length=200, nullable=false)
     */
    private $nomeFornecedor;

    /**
     * @var string
     *
     * @ORM\Column(name="razao_social_fornecedor", type="string", length=200, nullable=false)
     */
    private $razaoSocialFornecedor;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_fornecedor", type="string", length=20, nullable=false)
     */
    private $cnpjFornecedor;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone_fornecedor", type="string", length=20, nullable=false)
     */
    private $telefoneFornecedor;

    /**
     * @var string
     *
     * @ORM\Column(name="celular_fornecedor", type="string", length=20, nullable=false)
     */
    private $celularFornecedor;

    /**
     * @var string
     *
     * @ORM\Column(name="cep_fornecedor", type="string", length=20, nullable=false)
     */
    private $cepFornecedor;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco_fornecedor", type="string", length=200, nullable=false)
     */
    private $enderecoFornecedor;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_fornecedor", type="string", length=20, nullable=false)
     */
    private $numeroFornecedor;

    /**
     * @var string
     *
     * @ORM\Column(name="complemento_fornecedor", type="string", length=200, nullable=false)
     */
    private $complementoFornecedor;

    /**
     * @var integer
     *
     * @ORM\Column(name="cidade_fornecedor", type="integer", nullable=false)
     */
    private $cidadeFornecedor;

    /**
     * @var integer
     *
     * @ORM\Column(name="uf_fornecedor", type="integer", nullable=false)
     */
    private $ufFornecedor;



    /**
     * Get idFornecedor
     *
     * @return integer 
     */
    public function getIdFornecedor()
    {
        return $this->idFornecedor;
    }

    /**
     * Set dtCadastroFornecedor
     *
     * @param integer $dtCadastroFornecedor
     * @return TbFornecedor
     */
    public function setDtCadastroFornecedor($dtCadastroFornecedor)
    {
        $this->dtCadastroFornecedor = $dtCadastroFornecedor;
    
        return $this;
    }

    /**
     * Get dtCadastroFornecedor
     *
     * @return integer
     */
    public function getDtCadastroFornecedor()
    {
        return $this->dtCadastroFornecedor;
    }

    /**
     * Set nomeFornecedor
     *
     * @param string $nomeFornecedor
     * @return TbFornecedor
     */
    public function setNomeFornecedor($nomeFornecedor)
    {
        $this->nomeFornecedor = $nomeFornecedor;
    
        return $this;
    }

    /**
     * Get nomeFornecedor
     *
     * @return string 
     */
    public function getNomeFornecedor()
    {
        return $this->nomeFornecedor;
    }

    /**
     * Set razaoSocialFornecedor
     *
     * @param string $razaoSocialFornecedor
     * @return TbFornecedor
     */
    public function setRazaoSocialFornecedor($razaoSocialFornecedor)
    {
        $this->razaoSocialFornecedor = $razaoSocialFornecedor;
    
        return $this;
    }

    /**
     * Get razaoSocialFornecedor
     *
     * @return string 
     */
    public function getRazaoSocialFornecedor()
    {
        return $this->razaoSocialFornecedor;
    }

    /**
     * Set cnpjFornecedor
     *
     * @param string $cnpjFornecedor
     * @return TbFornecedor
     */
    public function setCnpjFornecedor($cnpjFornecedor)
    {
        $this->cnpjFornecedor = $cnpjFornecedor;
    
        return $this;
    }

    /**
     * Get cnpjFornecedor
     *
     * @return string 
     */
    public function getCnpjFornecedor()
    {
        return $this->cnpjFornecedor;
    }

    /**
     * Set telefoneFornecedor
     *
     * @param string $telefoneFornecedor
     * @return TbFornecedor
     */
    public function setTelefoneFornecedor($telefoneFornecedor)
    {
        $this->telefoneFornecedor = $telefoneFornecedor;
    
        return $this;
    }

    /**
     * Get telefoneFornecedor
     *
     * @return string 
     */
    public function getTelefoneFornecedor()
    {
        return $this->telefoneFornecedor;
    }

    /**
     * Set celularFornecedor
     *
     * @param string $celularFornecedor
     * @return TbFornecedor
     */
    public function setCelularFornecedor($celularFornecedor)
    {
        $this->celularFornecedor = $celularFornecedor;
    
        return $this;
    }

    /**
     * Get celularFornecedor
     *
     * @return string 
     */
    public function getCelularFornecedor()
    {
        return $this->celularFornecedor;
    }

    /**
     * Set cepFornecedor
     *
     * @param string $cepFornecedor
     * @return TbFornecedor
     */
    public function setCepFornecedor($cepFornecedor)
    {
        $this->cepFornecedor = $cepFornecedor;
    
        return $this;
    }

    /**
     * Get cepFornecedor
     *
     * @return string 
     */
    public function getCepFornecedor()
    {
        return $this->cepFornecedor;
    }

    /**
     * Set enderecoFornecedor
     *
     * @param string $enderecoFornecedor
     * @return TbFornecedor
     */
    public function setEnderecoFornecedor($enderecoFornecedor)
    {
        $this->enderecoFornecedor = $enderecoFornecedor;
    
        return $this;
    }

    /**
     * Get enderecoFornecedor
     *
     * @return string 
     */
    public function getEnderecoFornecedor()
    {
        return $this->enderecoFornecedor;
    }

    /**
     * Set numeroFornecedor
     *
     * @param string $numeroFornecedor
     * @return TbFornecedor
     */
    public function setNumeroFornecedor($numeroFornecedor)
    {
        $this->numeroFornecedor = $numeroFornecedor;
    
        return $this;
    }

    /**
     * Get numeroFornecedor
     *
     * @return string 
     */
    public function getNumeroFornecedor()
    {
        return $this->numeroFornecedor;
    }

    /**
     * Set complementoFornecedor
     *
     * @param string $complementoFornecedor
     * @return TbFornecedor
     */
    public function setComplementoFornecedor($complementoFornecedor)
    {
        $this->complementoFornecedor = $complementoFornecedor;
    
        return $this;
    }

    /**
     * Get complementoFornecedor
     *
     * @return string 
     */
    public function getComplementoFornecedor()
    {
        return $this->complementoFornecedor;
    }

    /**
     * Set cidadeFornecedor
     *
     * @param integer $cidadeFornecedor
     * @return TbFornecedor
     */
    public function setCidadeFornecedor($cidadeFornecedor)
    {
        $this->cidadeFornecedor = $cidadeFornecedor;
    
        return $this;
    }

    /**
     * Get cidadeFornecedor
     *
     * @return integer 
     */
    public function getCidadeFornecedor()
    {
        return $this->cidadeFornecedor;
    }

    /**
     * Set ufFornecedor
     *
     * @param integer $ufFornecedor
     * @return TbFornecedor
     */
    public function setUfFornecedor($ufFornecedor)
    {
        $this->ufFornecedor = $ufFornecedor;
    
        return $this;
    }

    /**
     * Get ufFornecedor
     *
     * @return integer 
     */
    public function getUfFornecedor()
    {
        return $this->ufFornecedor;
    }
}
