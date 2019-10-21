<?php

require_once 'Connection.php';
require_once 'Colecao.php';
require_once 'Bloco.php';

class ColecaoDao
{
    public function inserir($params)
    {

    }

    public function buscar($params)
    {
        $strWhere = "";
        if ($params != "") {

            $strWhere .= " or id like '%" . $params . "%'";
            $strWhere .= " or nomeColecao like '%" . $params . "%'";
            $strWhere .= " or nomeColecaoIngles like '%" . $params . "%'";
            $strWhere .= " or sigla like '%" . $params . "%'";
            $strWhere .= " or qtdCards like '%" . $params . "%'";
            $strWhere .= " or qtdCardsReal like '%" . $params . "%'";
            $strWhere .= " or nomeBloco like '%" . $params . "%'";
            $strWhere .= " or nomeBlocoIngles like '%" . $params . "%'";
            $strWhere .= " or numeroBloco like '%" . $params . "%'";
        }else{
            $strWhere .= " or 2=2 ";
        }
        $con = Connection::abreConexao();
        $sql = "SELECT * FROM vw_colecao where 1=1 and 1=2 " . $strWhere . " ORDER BY nomeColecao ASC";
        $sql = $con->prepare($sql);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        $resultados = array();
        foreach ($result as $row) {
            $colecao = new Colecao();
            $colecao->setId($row["id"]);
            $colecao->setNomeColecao($row["nomeColecao"]);
            $colecao->setNomeColecaoIngles($row["nomeColecaoIngles"]);
            $colecao->setSigla($row["sigla"]);
            $colecao->setQtdCards($row["qtdCards"]);
            $colecao->setQtdCardsReal($row["qtdCardsReal"]);
            $colecao->setNumeroBloco($row["numeroBloco"]);
            $bloco = new Bloco();
            $bloco->setId($row["idBloco"]);
            $bloco->setNomeBloco($row["nomeBloco"]);
            $bloco->setNomeBlocoIngles($row["nomeBlocoIngles"]);
            $colecao->setBloco($bloco);
            if ($colecao->getNumeroBloco() == $params){
                $resultados = Array();
                array_unshift($resultados, $colecao);
                return $resultados;
            }
            array_unshift($resultados, $colecao);
        }
        if (!$resultados) {
            throw new Exception("Nenhuma colecao encontrada!");
        }

        echo json_encode($resultados);
        return $resultados;
    }
}