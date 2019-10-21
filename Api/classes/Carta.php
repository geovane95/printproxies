<?php


class Carta
{
    private $id;
    private $nomeCarta;
    private $nomeCartaIngles;
    private $numeroCarta;
    private $colecao;
    private $flagTreinador;
    private $flagItem;
    private $flagApoiador;
    private $tipo;
    private $fraqueza;
    private $resistencia;
    private $raridade;
    private $statusPadrao;
    private $statusExpandido;

    /**
     * @return mixed
     */
    public function getStatusPadrao()
    {
        return $this->statusPadrao;
    }

    /**
     * @param mixed $statusPadrao
     */
    public function setStatusPadrao($statusPadrao)
    {
        $this->statusPadrao = $statusPadrao;
    }

    /**
     * @return mixed
     */
    public function getStatusExpandido()
    {
        return $this->statusExpandido;
    }

    /**
     * @param mixed $statusExpandido
     */
    public function setStatusExpandido($statusExpandido)
    {
        $this->statusExpandido = $statusExpandido;
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
    public function getNomeCarta()
    {
        return $this->nomeCarta;
    }

    /**
     * @param mixed $nomeCarta
     */
    public function setNomeCarta($nomeCarta)
    {
        $this->nomeCarta = $nomeCarta;
    }

    /**
     * @return mixed
     */
    public function getNomeCartaIngles()
    {
        return $this->nomeCartaIngles;
    }

    /**
     * @param mixed $nomeCartaIngles
     */
    public function setNomeCartaIngles($nomeCartaIngles)
    {
        $this->nomeCartaIngles = $nomeCartaIngles;
    }

    /**
     * @return mixed
     */
    public function getNumeroCarta()
    {
        return $this->numeroCarta;
    }

    /**
     * @param mixed $numeroCarta
     */
    public function setNumeroCarta($numeroCarta)
    {
        $this->numeroCarta = $numeroCarta;
    }

    /**
     * @return mixed
     */
    public function getColecao()
    {
        return $this->colecao;
    }

    /**
     * @param mixed $colecao
     */
    public function setColecao($colecao)
    {
        $this->colecao = $colecao;
    }

    /**
     * @return mixed
     */
    public function getFlagTreinador()
    {
        return $this->flagTreinador;
    }

    /**
     * @param mixed $flagTreinador
     */
    public function setFlagTreinador($flagTreinador)
    {
        $this->flagTreinador = $flagTreinador;
    }

    /**
     * @return mixed
     */
    public function getFlagItem()
    {
        return $this->flagItem;
    }

    /**
     * @param mixed $flagItem
     */
    public function setFlagItem($flagItem)
    {
        $this->flagItem = $flagItem;
    }

    /**
     * @return mixed
     */
    public function getFlagApoiador()
    {
        return $this->flagApoiador;
    }

    /**
     * @param mixed $flagApoiador
     */
    public function setFlagApoiador($flagApoiador)
    {
        $this->flagApoiador = $flagApoiador;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getFraqueza()
    {
        return $this->fraqueza;
    }

    /**
     * @param mixed $fraqueza
     */
    public function setFraqueza($fraqueza)
    {
        $this->fraqueza = $fraqueza;
    }

    /**
     * @return mixed
     */
    public function getResistencia()
    {
        return $this->resistencia;
    }

    /**
     * @param mixed $resistencia
     */
    public function setResistencia($resistencia)
    {
        $this->resistencia = $resistencia;
    }

    /**
     * @return mixed
     */
    public function getRaridade()
    {
        return $this->raridade;
    }

    /**
     * @param mixed $raridade
     */
    public function setRaridade($raridade)
    {
        $this->raridade = $raridade;
    }
}