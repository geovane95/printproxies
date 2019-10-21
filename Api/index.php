<?php
header('Content-Type: application/json; charset=utf-8');
require_once 'classes/ColecaoDao.php';
require_once 'classes/CartaDao.php';
require_once 'classes/Colecao.php';
require_once 'classes/Carta.php';
class Rest
{
    public static function open($requisicao)
    {
        $url = explode('/', $requisicao['url']);

        $classe = ucfirst($url[0]);
        $classeDao = $classe . "Dao";
        array_shift($url);
        $metodo = $url[0];
        array_shift($url);
        $parametros = array();
        $parametros = $url;
        try {
            if (class_exists($classeDao)) {
                if (method_exists($classeDao, $metodo)) {
                    $retorno = call_user_func_array(array(new $classeDao, $metodo), $parametros);
                    print_r($retorno);
                    return json_encode(array('status' => 'sucesso', 'dados' => $retorno));
                } else {
                    return json_encode(array('status' => 'erro', 'dados' => 'Método inexistente!'));
                }
            } else {
                return json_encode(array('status' => 'erro', 'dados' => 'Classe inexistente!'));
            }
        } catch (Exception $e) {
            return json_encode(array('status' => 'erro', 'dados' => $e->getMessage()));
        }

    }
}
if (isset($_REQUEST)) {
    //echo json_encode($_REQUEST);
    echo Rest::open($_REQUEST);
}