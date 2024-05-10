<?php

namespace EsgiIw\TpDesignPattern\Model\Database;

class DbConnection
{
    private static $instance;
    private $pdo;

    private function __construct()
    {
        // Initialisation de la connexion à la base de données
        $dsn = 'mysql:host=localhost;dbname=db_dp;charset=utf8';
        $username = 'root';
        $password = '';
        
        try {
            $this->pdo = new \PDO($dsn, $username, $password);
            // Définir le mode d'erreur PDO sur Exception
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            throw new \PDOException("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }

    public static function getInstance(): self
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function query(string $sql, array $params = []): \PDOStatement
    {
        // Exécution d'une requête préparée
        $statement = $this->pdo->prepare($sql);
        $statement->execute($params);
        return $statement;
    }

    // Méthodes supplémentaires de connexion à la base de données
}
