<?php

require_once 'Connection.php';

class CartaDao
{
    public function buscar($params)
    {
        $strWhere = "";
        if ($params != ""){
            if (is_int($params)) {
                $strWhere .= " and id = " . $params;
            }else {
                $strWhere .= " or nomeCarta like '" . $params . "'";
                $strWhere .= " or nomeCartaIngles like '" . $params . "'";
                $strWhere .= " or numeroCarta like '" . $params . "'";
                $strWhere .= " or colecao like '" . $params . "'";
                $strWhere .= " or flagTreinador like '" . $params . "'";
                $strWhere .= " or flagItem like '" . $params . "'";
                $strWhere .= " or flagApoiador like '" . $params . "'";
                $strWhere .= " or tipo like '" . $params . "'";
                $strWhere .= " or fraqueza like '" . $params . "'";
                $strWhere .= " or resistencia like '" . $params . "'";
                $strWhere .= " or raridade like '" . $params . "'";
            }
        }
        $con = Connection::abreConexao();
        $sql = "SELECT * FROM vw_carta where 1=1 ".$strWhere." ORDER BY nomeCarta ASC";
        $sql = $con->prepare($sql);
        $sql->execute();
        $resultados = array();
        while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            $resultados[] = $row;
        }
        if (!$resultados) {
            throw new Exception("Nenhuma carta encontrada!");
        }

        return $resultados;
    }
}