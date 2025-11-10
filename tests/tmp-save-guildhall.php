<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../config/bootstrap.php';
use Cake\ORM\TableRegistry;

$guildhalls = TableRegistry::getTableLocator()->get('Guildhalls');
$entity = $guildhalls->newEmptyEntity();
$data = [
    'user_id' => 1,
    'name' => 'New Guildhall',
    'description' => 'A new hall',
];
$entity = $guildhalls->patchEntity($entity, $data);
if ($guildhalls->save($entity)) {
    echo "Saved\n";
} else {
    echo "Not saved\n";
    echo "Errors: " . json_encode($entity->getErrors(), JSON_PRETTY_PRINT) . "\n";
}
