<?php


class Connection
{
    public static function abreConexao()
    {
        return new PDO('mysql: host=locahost; dbname=pokemontcgcards;','root','Junior95@');
    }
}