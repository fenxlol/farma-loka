<?php
/**
 * Created by PhpStorm.
 * User: matheuslucio
 * Date: 24/10/15
 * Time: 19:36
 */

namespace Application\Service;

/**
 * Class Produto
 * @package Application\Service
 */
class Produto extends AbstractService
{
    /**
     * Insere um produto no sistema
     *
     * @param $arrParam
     * @param $files
     *
     * @return bool
     */
    public function insereProduto($arrParam, $files)
    {
        $arrInsert = array();
        if (count($files['foto_produto']) > 1 && strlen($files['foto_produto']['type']) > 1 && $this->isImage($files['foto_produto']['tmp_name'])) {
            $diretorioUpload = getcwd() . '/public/data/';
            $nomeFile = md5(time()) . '.' .  explode('/', $files['foto_produto']['type'])[1];
            $arquivo = $diretorioUpload . $nomeFile;
            if (move_uploaded_file($files['foto_produto']['tmp_name'], $arquivo)) {
                $arrParam['foto_produto'] = '/data/' . $nomeFile;
            } else {
                $arrParam['foto_produto'] = null;
            }
        } else {
            $arrParam['foto_produto'] = null;
        }

        foreach ($arrParam as $key => $param) {
            $arrInsert[$this->camelize($key)] = $param;
        }

        $entidade = $this->getEntity();

        try {
            $entidade->setNomeProduto($arrInsert['nomeProduto']);
            $entidade->setDescricaoProduto($arrInsert['descricaoProduto']);
            $entidade->setValorProduto($arrInsert['valorProduto']);
            $entidade->setFornecedorProduto($arrInsert['fornecedorProduto']);
            if ($arrInsert['fotoProduto'] != null) {
                $entidade->setFotoProduto($arrInsert['fotoProduto']);
            }
            $this->getEntityManager()->persist($entidade);
            $this->getEntityManager()->flush();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Atualiza um produto do sistema
     *
     * @param $arrParam
     * @param $files
     * @param $idProduto
     *
     * @return bool
     */
    public function editaProduto($arrParam, $files, $idProduto)
    {
        $arrUpdate = array();

        if (count($files['foto_produto']) > 1 && strlen($files['foto_produto']['type']) > 1 && $this->isImage($files['foto_produto']['tmp_name'])) {
            $diretorioUpload = getcwd() . '/public/data/';
            $nomeFile = md5(time()) . '.' .  explode('/', $files['foto_produto']['type'])[1];
            $arquivo = $diretorioUpload . $nomeFile;
            if (move_uploaded_file($files['foto_produto']['tmp_name'], $arquivo)) {
                $arrParam['foto_produto'] = '/data/' . $nomeFile;
            } else {
                $arrParam['foto_produto'] = null;
            }
        } else {
            $arrParam['foto_produto'] = null;
        }

        foreach ($arrParam as $key => $param) {
            $arrUpdate[$this->camelize($key)] = $param;
        }

        $entidade = $this->find($idProduto);

        if ($arrParam['foto_produto'] != null) {
            unlink('public' . $entidade->getFotoProduto());
        }

        try {
            $entidade->setNomeProduto($arrUpdate['nomeProduto']);
            $entidade->setDescricaoProduto($arrUpdate['descricaoProduto']);
            $entidade->setValorProduto($arrUpdate['valorProduto']);
            $entidade->setFornecedorProduto($arrUpdate['fornecedorProduto']);
            if ($arrUpdate['fotoProduto'] != null) {
                $entidade->setFotoProduto($arrUpdate['fotoProduto']);
            }
            $this->getEntityManager()->persist($entidade);
            $this->getEntityManager()->flush();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Deleta um produto do sistema
     *
     * @param $idProduto
     *
     * @return bool
     */
    public function deletaProduto($idProduto)
    {
        $entidade = $this->getEntityManager()->getReference(get_class($this->getEntity()), $idProduto);
        $produto = $this->find($idProduto);

        try {
            unlink('public' . $produto->getFotoProduto());
            $this->getEntityManager()->remove($entidade);
            $this->getEntityManager()->flush();

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Retorna a quantidade de produtos por fornecedores que temos
     *
     * @return mixed
     */
    public function produtosFornecedores()
    {
        return $this->getRepository()->produtosFornecedores();
    }
}