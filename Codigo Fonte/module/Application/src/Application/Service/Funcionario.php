<?php
/**
 * Created by PhpStorm.
 * User: matheuslucio
 * Date: 24/10/15
 * Time: 19:36
 */

namespace Application\Service;

/**
 * Class Funcionario
 * @package Application\Service
 */
class Funcionario extends AbstractService
{
    /**
     * Insere um funcionario no sistema
     *
     * @param $arrParam
     *
     * @return bool
     */
    public function insereFuncionario($arrParam)
    {
        $arrInsert = array();

        foreach ($arrParam as $key => $param) {
            $arrInsert[$this->camelize($key)] = $param;
        }

        $entidade = $this->getEntity();

        try {
            $entidade->setNomeFuncionario($arrInsert['nomeFuncionario']);
            $entidade->setCpfFuncionario($arrInsert['cpfFuncionario']);
            $entidade->setRgFuncionario($arrInsert['rgFuncionario']);
            $entidade->setTelefoneFuncionario($arrInsert['telefoneFuncionario']);
            $entidade->setCelularFuncionario($arrInsert['celularFuncionario']);
            $entidade->setDtNascimentoFuncionario(strtotime($arrInsert['dtNascimentoFuncionario']));
            $entidade->setEmailFuncionario($arrInsert['emailFuncionario']);
            $entidade->setSexoFuncionario($arrInsert['sexoFuncionario']);
            $entidade->setCepFuncionario($arrInsert['cepFuncionario']);
            $entidade->setEnderecoFuncionario($arrInsert['enderecoFuncionario']);
            $entidade->setNumeroFuncionario($arrInsert['numeroFuncionario']);
            $entidade->setComplementoFuncionario($arrInsert['complementoFuncionario']);
            $entidade->setCidadeFuncionario($arrInsert['cidadeFuncionario']);
            $entidade->setUfFuncionario($arrInsert['ufFuncionario']);
            $entidade->setFuncaoFuncionario($arrInsert['funcaoFuncionario']);
            $entidade->setDtCadastroFuncionario(time());
            $this->getEntityManager()->persist($entidade);
            $this->getEntityManager()->flush();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Atualiza um funcionario do sistema
     *
     * @param $arrParam
     * @param $idFuncionario
     *
     * @return bool
     */
    public function editaFuncionario($arrParam, $idFuncionario)
    {
        $arrUpdate = array();

        foreach ($arrParam as $key => $param) {
            $arrUpdate[$this->camelize($key)] = $param;
        }

        $entidade = $this->find($idFuncionario);

        try {
            $entidade->setNomeFuncionario($arrUpdate['nomeFuncionario']);
            $entidade->setCpfFuncionario($arrUpdate['cpfFuncionario']);
            $entidade->setRgFuncionario($arrUpdate['rgFuncionario']);
            $entidade->setTelefoneFuncionario($arrUpdate['telefoneFuncionario']);
            $entidade->setCelularFuncionario($arrUpdate['celularFuncionario']);
            $entidade->setDtNascimentoFuncionario(strtotime($arrUpdate['dtNascimentoFuncionario']));
            $entidade->setEmailFuncionario($arrUpdate['emailFuncionario']);
            $entidade->setSexoFuncionario($arrUpdate['sexoFuncionario']);
            $entidade->setCepFuncionario($arrUpdate['cepFuncionario']);
            $entidade->setEnderecoFuncionario($arrUpdate['enderecoFuncionario']);
            $entidade->setNumeroFuncionario($arrUpdate['numeroFuncionario']);
            $entidade->setComplementoFuncionario($arrUpdate['complementoFuncionario']);
            $entidade->setCidadeFuncionario($arrUpdate['cidadeFuncionario']);
            $entidade->setUfFuncionario($arrUpdate['ufFuncionario']);
            $entidade->setFuncaoFuncionario($arrUpdate['funcaoFuncionario']);
            $this->getEntityManager()->persist($entidade);
            $this->getEntityManager()->flush();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Deleta um funcionario do sistema
     *
     * @param $idFuncionario
     *
     * @return bool
     */
    public function deletaFuncionario($idFuncionario)
    {
        $entidade = $this->getEntityManager()->getReference(get_class($this->getEntity()), $idFuncionario);

        try {
            $this->getEntityManager()->remove($entidade);
            $this->getEntityManager()->flush();

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}