<?php
// sessao.php

class Sessao
{

    private static $instancia = null;

    /**
     * Instanciar a classe Sessao
     * @return Sessao
     */
    public static function instanciar()
    {
        if (self::$instancia === null) {
            self::$instancia = new Sessao();
        }
        return self::$instancia;
    }

    /**
     * Construtor privado para iniciar a sessão
     */
    private function __construct()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    /**
     * Definir um valor na sessão
     * @param string $chave
     * @param mixed $valor
     */
    public function set($chave, $valor)
    {
        $_SESSION[$chave] = $valor;
    }

    /**
     * Obter um valor da sessão
     * @param string $chave
     * @return mixed
     */
    public function get($chave)
    {
        return isset($_SESSION[$chave]) ? $_SESSION[$chave] : null;
    }

    /**
     * Verificar se uma chave existe na sessão
     * @param string $chave
     * @return bool
     */
    public function existe($chave)
    {
        return isset($_SESSION[$chave]) && (!empty($_SESSION[$chave]));
    }
}
