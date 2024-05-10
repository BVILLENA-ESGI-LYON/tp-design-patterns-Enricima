<?php

require_once 'src/Facade/Repository.php';

use EsgiIw\TpDesignPattern\Facade\Repository;

// Test du Facade Repository
$repository = new Repository();

// Test de la méthode getById
echo "Test de la méthode getById:\n";
$id = 1;
$table = 'events'; // Remplacez 'events' par le nom de votre table
$result = $repository->getById($table, $id);
print_r($result);

// Test de la méthode getAll
echo "\nTest de la méthode getAll:\n";
$table = 'events'; // Remplacez 'events' par le nom de votre table
$results = $repository->getAll($table);
print_r($results);

// Test de la méthode save
echo "\nTest de la méthode save:\n";
$table = 'events'; // Remplacez 'events' par le nom de votre table
$data = [
    'name' => 'New Event',
    'description' => 'Description of the new event',
    'location' => 'New Location',
    // Autres données à sauvegarder
];
$result = $repository->save($table, $data);
echo "L'entité a été sauvegardée avec succès: " . ($result ? 'Oui' : 'Non') . "\n";

// Test de la méthode update
echo "\nTest de la méthode update:\n";
$table = 'events'; // Remplacez 'events' par le nom de votre table
$data = [
    'name' => 'Updated Event',
    'description' => 'Updated description',
    // Autres données à mettre à jour
];
$whereClause = 'id = ?'; // Clauses WHERE pour filtrer la mise à jour, par exemple 'id = ?'
$whereParams = [1]; // Paramètres de la clause WHERE
$result = $repository->update($table, $data, $whereClause, $whereParams);
echo "L'entité a été mise à jour avec succès: " . ($result ? 'Oui' : 'Non') . "\n";

// Test de la méthode delete
echo "\nTest de la méthode delete:\n";
$table = 'events'; // Remplacez 'events' par le nom de votre table
$whereClause = 'id = ?'; // Clauses WHERE pour filtrer la suppression, par exemple 'id = ?'
$whereParams = [1]; // Paramètres de la clause WHERE
$result = $repository->delete($table, $whereClause, $whereParams);
echo "L'entité a été supprimée avec succès: " . ($result ? 'Oui' : 'Non') . "\n";