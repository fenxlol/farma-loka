<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Funcionario extends \Application\Entity\Funcionario implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'idFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'dtCadastroFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'nomeFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'cpfFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'rgFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'telefoneFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'celularFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'dtNascimentoFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'emailFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'sexoFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'cepFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'enderecoFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'numeroFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'complementoFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'cidadeFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'ufFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'funcaoFuncionario');
        }

        return array('__isInitialized__', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'idFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'dtCadastroFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'nomeFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'cpfFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'rgFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'telefoneFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'celularFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'dtNascimentoFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'emailFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'sexoFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'cepFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'enderecoFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'numeroFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'complementoFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'cidadeFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'ufFuncionario', '' . "\0" . 'Application\\Entity\\Funcionario' . "\0" . 'funcaoFuncionario');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Funcionario $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdFuncionario()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdFuncionario();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdFuncionario', array());

        return parent::getIdFuncionario();
    }

    /**
     * {@inheritDoc}
     */
    public function setDtCadastroFuncionario($dtCadastroFuncionario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDtCadastroFuncionario', array($dtCadastroFuncionario));

        return parent::setDtCadastroFuncionario($dtCadastroFuncionario);
    }

    /**
     * {@inheritDoc}
     */
    public function getDtCadastroFuncionario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDtCadastroFuncionario', array());

        return parent::getDtCadastroFuncionario();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomeFuncionario($nomeFuncionario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomeFuncionario', array($nomeFuncionario));

        return parent::setNomeFuncionario($nomeFuncionario);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomeFuncionario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomeFuncionario', array());

        return parent::getNomeFuncionario();
    }

    /**
     * {@inheritDoc}
     */
    public function setCpfFuncionario($cpfFuncionario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCpfFuncionario', array($cpfFuncionario));

        return parent::setCpfFuncionario($cpfFuncionario);
    }

    /**
     * {@inheritDoc}
     */
    public function getCpfFuncionario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCpfFuncionario', array());

        return parent::getCpfFuncionario();
    }

    /**
     * {@inheritDoc}
     */
    public function setRgFuncionario($rgFuncionario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRgFuncionario', array($rgFuncionario));

        return parent::setRgFuncionario($rgFuncionario);
    }

    /**
     * {@inheritDoc}
     */
    public function getRgFuncionario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRgFuncionario', array());

        return parent::getRgFuncionario();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefoneFuncionario($telefoneFuncionario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefoneFuncionario', array($telefoneFuncionario));

        return parent::setTelefoneFuncionario($telefoneFuncionario);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefoneFuncionario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefoneFuncionario', array());

        return parent::getTelefoneFuncionario();
    }

    /**
     * {@inheritDoc}
     */
    public function setCelularFuncionario($celularFuncionario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCelularFuncionario', array($celularFuncionario));

        return parent::setCelularFuncionario($celularFuncionario);
    }

    /**
     * {@inheritDoc}
     */
    public function getCelularFuncionario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCelularFuncionario', array());

        return parent::getCelularFuncionario();
    }

    /**
     * {@inheritDoc}
     */
    public function setDtNascimentoFuncionario($dtNascimentoFuncionario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDtNascimentoFuncionario', array($dtNascimentoFuncionario));

        return parent::setDtNascimentoFuncionario($dtNascimentoFuncionario);
    }

    /**
     * {@inheritDoc}
     */
    public function getDtNascimentoFuncionario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDtNascimentoFuncionario', array());

        return parent::getDtNascimentoFuncionario();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailFuncionario($emailFuncionario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailFuncionario', array($emailFuncionario));

        return parent::setEmailFuncionario($emailFuncionario);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailFuncionario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailFuncionario', array());

        return parent::getEmailFuncionario();
    }

    /**
     * {@inheritDoc}
     */
    public function setSexoFuncionario($sexoFuncionario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSexoFuncionario', array($sexoFuncionario));

        return parent::setSexoFuncionario($sexoFuncionario);
    }

    /**
     * {@inheritDoc}
     */
    public function getSexoFuncionario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSexoFuncionario', array());

        return parent::getSexoFuncionario();
    }

    /**
     * {@inheritDoc}
     */
    public function setCepFuncionario($cepFuncionario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCepFuncionario', array($cepFuncionario));

        return parent::setCepFuncionario($cepFuncionario);
    }

    /**
     * {@inheritDoc}
     */
    public function getCepFuncionario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCepFuncionario', array());

        return parent::getCepFuncionario();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnderecoFuncionario($enderecoFuncionario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnderecoFuncionario', array($enderecoFuncionario));

        return parent::setEnderecoFuncionario($enderecoFuncionario);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnderecoFuncionario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnderecoFuncionario', array());

        return parent::getEnderecoFuncionario();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumeroFuncionario($numeroFuncionario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumeroFuncionario', array($numeroFuncionario));

        return parent::setNumeroFuncionario($numeroFuncionario);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumeroFuncionario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeroFuncionario', array());

        return parent::getNumeroFuncionario();
    }

    /**
     * {@inheritDoc}
     */
    public function setComplementoFuncionario($complementoFuncionario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComplementoFuncionario', array($complementoFuncionario));

        return parent::setComplementoFuncionario($complementoFuncionario);
    }

    /**
     * {@inheritDoc}
     */
    public function getComplementoFuncionario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComplementoFuncionario', array());

        return parent::getComplementoFuncionario();
    }

    /**
     * {@inheritDoc}
     */
    public function setCidadeFuncionario($cidadeFuncionario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCidadeFuncionario', array($cidadeFuncionario));

        return parent::setCidadeFuncionario($cidadeFuncionario);
    }

    /**
     * {@inheritDoc}
     */
    public function getCidadeFuncionario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCidadeFuncionario', array());

        return parent::getCidadeFuncionario();
    }

    /**
     * {@inheritDoc}
     */
    public function setUfFuncionario($ufFuncionario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUfFuncionario', array($ufFuncionario));

        return parent::setUfFuncionario($ufFuncionario);
    }

    /**
     * {@inheritDoc}
     */
    public function getUfFuncionario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUfFuncionario', array());

        return parent::getUfFuncionario();
    }

    /**
     * {@inheritDoc}
     */
    public function setFuncaoFuncionario($funcaoFuncionario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFuncaoFuncionario', array($funcaoFuncionario));

        return parent::setFuncaoFuncionario($funcaoFuncionario);
    }

    /**
     * {@inheritDoc}
     */
    public function getFuncaoFuncionario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFuncaoFuncionario', array());

        return parent::getFuncaoFuncionario();
    }

}
