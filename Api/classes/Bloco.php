<?php


class Bloco
{
    private $id;
    private $nomeBloco;
    private $nomeBlocoIngles;

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
    public function getNomeBloco()
    {
        return $this->nomeBloco;
    }

    /**
     * @param mixed $nomeBloco
     */
    public function setNomeBloco($nomeBloco)
    {
        $this->nomeBloco = $nomeBloco;
    }

    /**
     * @return mixed
     */
    public function getNomeBlocoIngles()
    {
        return $this->nomeBlocoIngles;
    }

    /**
     * @param mixed $nomeBlocoIngles
     */
    public function setNomeBlocoIngles($nomeBlocoIngles)
    {
        $this->nomeBlocoIngles = $nomeBlocoIngles;
    }
}