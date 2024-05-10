<?php

namespace EsgiIw\TpDesignPattern\Facade;

use EsgiIw\TpDesignPattern\Model\Database\DbConnection;

class Repository
{
    private $db;

    public function __construct()
    {
        $this->db = DbConnection::getInstance();
    }

    public function getById(string $table, int $id): array
    {
        // Logique pour récupérer une entité par ID depuis la base de données
        $sql = "SELECT * FROM $table WHERE id = ?";
        $stmt = $this->db->query($sql, [$id]);
        return $stmt->fetch();
    }

    public function getAll(string $table): array
    {
        // Logique pour récupérer toutes les entités d'une table depuis la base de données
        $sql = "SELECT * FROM $table";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll();
    }

    public function save(string $table, array $data): bool
    {
        // Logique pour sauvegarder une entité dans la base de données
        $sql = "INSERT INTO $table SET " . implode(', ', array_map(fn($col) => "$col = ?", array_keys($data)));
        return $this->db->query($sql, array_values($data)) !== false;
    }

    public function update(string $table, array $data, string $whereClause, array $whereParams = []): bool
    {
        // Logique pour mettre à jour une entité dans la base de données
        $setClause = implode(', ', array_map(fn($col) => "$col = ?", array_keys($data)));
        $sql = "UPDATE $table SET $setClause WHERE $whereClause";
        return $this->db->query($sql, array_merge(array_values($data), $whereParams)) !== false;
    }

    public function delete(string $table, string $whereClause, array $whereParams = []): bool
    {
        // Logique pour supprimer une entité de la base de données
        $sql = "DELETE FROM $table WHERE $whereClause";
        return $this->db->query($sql, $whereParams) !== false;
    }
}
