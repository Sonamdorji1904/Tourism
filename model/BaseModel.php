<?php
require_once "../includes/Database.php";

class BaseModel
{
    protected $pdo;
    protected $table;

    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db->pdo;
    }

    protected function processDates(array $values): array
    {
        foreach ($values as $key => $value) {
            if ($value instanceof DateTime) {
                $values[$key] = $value->format("Y-m-d");
            }
        }
        return $values;
    }

    // ⭐ UNIVERSAL INSERT FUNCTION
    public function insert(array $values): bool
    {
        // Build column list
        $columns = '`' . implode('`, `', array_keys($values)) . '`';

        // Build placeholder list
        $placeholders = ':' . implode(', :', array_keys($values));

        // Create final query
        $query = "INSERT INTO `{$this->table}` ($columns) VALUES ($placeholders)";

        // Format any dates (optional)
        $values = $this->processDates($values);

        // Execute
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute($values);
    }
}
