<?php
/**
 * Created by PhpStorm.
 * User: matheuslucio
 * Date: 24/10/15
 * Time: 19:36
 */

namespace Application\Service;

/**
 * Class Fornecedor
 * @package Application\Service
 */
class Fornecedor extends AbstractService
{
    /**
     * Insere um fornecedor no sistema
     *
     * @param $arrParam
     *
     * @return bool
     */
    public function insereFornecedor($arrParam)
    {
        $arrInsert = array();

        foreach ($arrParam as $key => $param) {
            $arrInsert[$this->camelize($key)] = $param;
        }

        $entidade = $this->getEntity();

        try {
            $entidade->setNomeFornecedor($arrInsert['nomeFornecedor']);
            $entidade->setRazaoSocialFornecedor($arrInsert['razaoSocialFornecedor']);
            $entidade->setCnpjFornecedor($arrInsert['cnpjFornecedor']);
            $entidade->setTelefoneFornecedor($arrInsert['telefoneFornecedor']);
            $entidade->setCelularFornecedor($arrInsert['celularFornecedor']);
            $entidade->setCepFornecedor($arrInsert['cepFornecedor']);
            $entidade->setEnderecoFornecedor($arrInsert['enderecoFornecedor']);
            $entidade->setNumeroFornecedor($arrInsert['numeroFornecedor']);
            $entidade->setComplementoFornecedor($arrInsert['complementoFornecedor']);
            $entidade->setCidadeFornecedor($arrInsert['cidadeFornecedor']);
            $entidade->setUfFornecedor($arrInsert['ufFornecedor']);
            $entidade->setDtCadastroFornecedor(date('Y-m-d H:i:s', time()));
            $this->getEntityManager()->persist($entidade);
            $this->getEntityManager()->flush();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Atualiza um fornecedor do sistema
     *
     * @param $arrParam
     * @param $idFornecedor
     *
     * @return bool
     */
    public function editaFornecedor($arrParam, $idFornecedor)
    {
        $arrUpdate = array();

        foreach ($arrParam as $key => $param) {
            $arrUpdate[$this->camelize($key)] = $param;
        }

        $entidade = $this->find($idFornecedor);

        try {
            $entidade->setNomeFornecedor($arrUpdate['nomeFornecedor']);
            $entidade->setRazaoSocialFornecedor($arrUpdate['razaoSocialFornecedor']);
            $entidade->setCnpjFornecedor($arrUpdate['cnpjFornecedor']);
            $entidade->setTelefoneFornecedor($arrUpdate['telefoneFornecedor']);
            $entidade->setCelularFornecedor($arrUpdate['celularFornecedor']);
            $entidade->setCepFornecedor($arrUpdate['cepFornecedor']);
            $entidade->setEnderecoFornecedor($arrUpdate['enderecoFornecedor']);
            $entidade->setNumeroFornecedor($arrUpdate['numeroFornecedor']);
            $entidade->setComplementoFornecedor($arrUpdate['complementoFornecedor']);
            $entidade->setCidadeFornecedor($arrUpdate['cidadeFornecedor']);
            $entidade->setUfFornecedor($arrUpdate['ufFornecedor']);
            $this->getEntityManager()->persist($entidade);
            $this->getEntityManager()->flush();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Deleta um fornecedor do sistema
     *
     * @param $idFornecedor
     *
     * @return bool
     */
    public function deletaFornecedor($idFornecedor)
    {
        $entidade = $this->getEntityManager()->getReference(get_class($this->getEntity()), $idFornecedor);

        try {
            $this->getEntityManager()->remove($entidade);
            $this->getEntityManager()->flush();

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}