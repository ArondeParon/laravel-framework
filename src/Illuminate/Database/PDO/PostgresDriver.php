<?php

namespace Illuminate\Database\PDO;

use Doctrine\DBAL\Driver\AbstractPostgreSQLDriver;
use PDO;

class PostgresDriver extends AbstractPostgreSQLDriver
{
    public function connect(array $params)
    {
        if (! isset($params['pdo']) || ! $params['pdo'] instanceof PDO) {
            throw new \InvalidArgumentException('Laravel requires the pdo property to be set and be a PDO instance.');
        }

        return new Connection($params['pdo']);
    }
}