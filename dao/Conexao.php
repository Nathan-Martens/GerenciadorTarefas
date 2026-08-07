<?php

class Conexao{
    private static ?PDO $instancia = null;

    public static function getConexao(): PDO
    {
        if(self::$instancia === null){
            try{
                $conectar = "mysql:host=localhost;port=3307;dbname=gerenciamento_tarefas;charset=utf8mb4";
                $usuario = "root";
                $senha = "Senac@123";

                self::$instancia = new PDO ($conectar, $usuario, $senha);

                self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                echo "Erro na conexão com Banco de dados" . $e->getMessage();
            }

        }
        return self::$instancia;
    }
}