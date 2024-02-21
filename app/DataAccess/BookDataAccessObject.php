<?php
declare(strict_types=1);

namespace App\DataAccess;

use Illuminate\Database\DatabaseManager;

class BookDataAccessObject
{
    /** @var Databasemanager */
    protected $db;

    /** @var string */
    protected $table = 'books';

    public function __construct(DatabaseManager $db)
    {
        $this->db = $db;
    }

    public function find($id)
    {
        $query = $this->db->connection()
            ->table($this->table);
    }

}