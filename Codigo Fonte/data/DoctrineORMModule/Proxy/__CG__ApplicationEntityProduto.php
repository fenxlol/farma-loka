<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Produto extends \Application\Entity\Produto implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Application\\Entity\\Produto' . "\0" . 'idProduto', '' . "\0" . 'Application\\Entity\\Produto' . "\0" . 'nomeProduto', '' . "\0" . 'Application\\Entity\\Produto' . "\0" . 'descricaoProduto', '' . "\0" . 'Application\\Entity\\Produto' . "\0" . 'fornecedorProduto', '' . "\0" . 'Application\\Entity\\Produto' . "\0" . 'valorProduto', '' . "\0" . 'Application\\Entity\\Produto' . "\0" . 'fotoProduto');
        }

        return array('__isInitialized__', '' . "\0" . 'Application\\Entity\\Produto' . "\0" . 'idProduto', '' . "\0" . 'Application\\Entity\\Produto' . "\0" . 'nomeProduto', '' . "\0" . 'Application\\Entity\\Produto' . "\0" . 'descricaoProduto', '' . "\0" . 'Application\\Entity\\Produto' . "\0" . 'fornecedorProduto', '' . "\0" . 'Application\\Entity\\Produto' . "\0" . 'valorProduto', '' . "\0" . 'Application\\Entity\\Produto' . "\0" . 'fotoProduto');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Produto $proxy) {
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
    public function getIdProduto()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdProduto();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdProduto', array());

        return parent::getIdProduto();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomeProduto($nomeProduto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomeProduto', array($nomeProduto));

        return parent::setNomeProduto($nomeProduto);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomeProduto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomeProduto', array());

        return parent::getNomeProduto();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescricaoProduto($descricaoProduto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescricaoProduto', array($descricaoProduto));

        return parent::setDescricaoProduto($descricaoProduto);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescricaoProduto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescricaoProduto', array());

        return parent::getDescricaoProduto();
    }

    /**
     * {@inheritDoc}
     */
    public function setFornecedorProduto($fornecedorProduto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFornecedorProduto', array($fornecedorProduto));

        return parent::setFornecedorProduto($fornecedorProduto);
    }

    /**
     * {@inheritDoc}
     */
    public function getFornecedorProduto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFornecedorProduto', array());

        return parent::getFornecedorProduto();
    }

    /**
     * {@inheritDoc}
     */
    public function setValorProduto($valorProduto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValorProduto', array($valorProduto));

        return parent::setValorProduto($valorProduto);
    }

    /**
     * {@inheritDoc}
     */
    public function getValorProduto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValorProduto', array());

        return parent::getValorProduto();
    }

    /**
     * {@inheritDoc}
     */
    public function setFotoProduto($fotoProduto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFotoProduto', array($fotoProduto));

        return parent::setFotoProduto($fotoProduto);
    }

    /**
     * {@inheritDoc}
     */
    public function getFotoProduto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFotoProduto', array());

        return parent::getFotoProduto();
    }

}
