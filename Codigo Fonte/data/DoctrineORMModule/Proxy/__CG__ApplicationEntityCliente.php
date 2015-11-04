<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cliente extends \Application\Entity\Cliente implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'idCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'dtCadastroCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'nomeCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'cpfCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'rgCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'telefoneCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'celularCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'dtNascimentoCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'emailCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'sexoCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'cepCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'enderecoCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'numeroCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'complementoCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'cidadeCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'ufCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'fotoCliente');
        }

        return array('__isInitialized__', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'idCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'dtCadastroCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'nomeCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'cpfCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'rgCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'telefoneCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'celularCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'dtNascimentoCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'emailCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'sexoCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'cepCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'enderecoCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'numeroCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'complementoCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'cidadeCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'ufCliente', '' . "\0" . 'Application\\Entity\\Cliente' . "\0" . 'fotoCliente');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Cliente $proxy) {
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
    public function getIdCliente()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdCliente();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCliente', array());

        return parent::getIdCliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setDtCadastroCliente($dtCadastroCliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDtCadastroCliente', array($dtCadastroCliente));

        return parent::setDtCadastroCliente($dtCadastroCliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getDtCadastroCliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDtCadastroCliente', array());

        return parent::getDtCadastroCliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomeCliente($nomeCliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomeCliente', array($nomeCliente));

        return parent::setNomeCliente($nomeCliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomeCliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomeCliente', array());

        return parent::getNomeCliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setCpfCliente($cpfCliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCpfCliente', array($cpfCliente));

        return parent::setCpfCliente($cpfCliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getCpfCliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCpfCliente', array());

        return parent::getCpfCliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setRgCliente($rgCliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRgCliente', array($rgCliente));

        return parent::setRgCliente($rgCliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getRgCliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRgCliente', array());

        return parent::getRgCliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefoneCliente($telefoneCliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefoneCliente', array($telefoneCliente));

        return parent::setTelefoneCliente($telefoneCliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefoneCliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefoneCliente', array());

        return parent::getTelefoneCliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setCelularCliente($celularCliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCelularCliente', array($celularCliente));

        return parent::setCelularCliente($celularCliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getCelularCliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCelularCliente', array());

        return parent::getCelularCliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setDtNascimentoCliente($dtNascimentoCliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDtNascimentoCliente', array($dtNascimentoCliente));

        return parent::setDtNascimentoCliente($dtNascimentoCliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getDtNascimentoCliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDtNascimentoCliente', array());

        return parent::getDtNascimentoCliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailCliente($emailCliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailCliente', array($emailCliente));

        return parent::setEmailCliente($emailCliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailCliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailCliente', array());

        return parent::getEmailCliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setSexoCliente($sexoCliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSexoCliente', array($sexoCliente));

        return parent::setSexoCliente($sexoCliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getSexoCliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSexoCliente', array());

        return parent::getSexoCliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setCepCliente($cepCliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCepCliente', array($cepCliente));

        return parent::setCepCliente($cepCliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getCepCliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCepCliente', array());

        return parent::getCepCliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnderecoCliente($enderecoCliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnderecoCliente', array($enderecoCliente));

        return parent::setEnderecoCliente($enderecoCliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnderecoCliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnderecoCliente', array());

        return parent::getEnderecoCliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumeroCliente($numeroCliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumeroCliente', array($numeroCliente));

        return parent::setNumeroCliente($numeroCliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumeroCliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeroCliente', array());

        return parent::getNumeroCliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setComplementoCliente($complementoCliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComplementoCliente', array($complementoCliente));

        return parent::setComplementoCliente($complementoCliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getComplementoCliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComplementoCliente', array());

        return parent::getComplementoCliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setCidadeCliente($cidadeCliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCidadeCliente', array($cidadeCliente));

        return parent::setCidadeCliente($cidadeCliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getCidadeCliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCidadeCliente', array());

        return parent::getCidadeCliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setUfCliente($ufCliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUfCliente', array($ufCliente));

        return parent::setUfCliente($ufCliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getUfCliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUfCliente', array());

        return parent::getUfCliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setFotoCliente($fotoCliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFotoCliente', array($fotoCliente));

        return parent::setFotoCliente($fotoCliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getFotoCliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFotoCliente', array());

        return parent::getFotoCliente();
    }

}
