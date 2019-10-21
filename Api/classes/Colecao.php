<?php


class Colecao
{
    private $id;
    private $nomeColecao;
    private $nomeColecaoIngles;
    private $sigla;
    private $qtdCards;
    private $qtdCardsReal;
    private $numeroBloco;
    private $bloco;

    /**
     * @return mixed
     */
    public function getNumeroBloco()
    {
        return $this->numeroBloco;
    }

    /**
     * @param mixed $numeroBloco
     */
    public function setNumeroBloco($numeroBloco)
    {
        $this->numeroBloco = $numeroBloco;
    }

    /**
     * @return mixed
     */
    public function getBloco()
    {
        return $this->bloco;
    }

    /**
     * @param mixed $bloco
     */
    public function setBloco($bloco)
    {
        $this->bloco = $bloco;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNomeColecao()
    {
        return $this->nomeColecao;
    }

    /**
     * @param mixed $nomeColecao
     */
    public function setNomeColecao($nomeColecao)
    {
        $this->nomeColecao = $nomeColecao;
    }

    /**
     * @return mixed
     */
    public function getNomeColecaoIngles()
    {
        return $this->nomeColecaoIngles;
    }

    /**
     * @param mixed $nomeColecaoIngles
     */
    public function setNomeColecaoIngles($nomeColecaoIngles)
    {
        $this->nomeColecaoIngles = $nomeColecaoIngles;
    }

    /**
     * @return mixed
     */
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * @param mixed $sigla
     */
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;
    }

    /**
     * @return mixed
     */
    public function getQtdCards()
    {
        return $this->qtdCards;
    }

    /**
     * @param mixed $qtdCards
     */
    public function setQtdCards($qtdCards)
    {
        $this->qtdCards = $qtdCards;
    }

    /**
     * @return mixed
     */
    public function getQtdCardsReal()
    {
        return $this->qtdCardsReal;
    }

    /**
     * @param mixed $qtdCardsReal
     */
    public function setQtdCardsReal($qtdCardsReal)
    {
        $this->qtdCardsReal = $qtdCardsReal;
    }
}