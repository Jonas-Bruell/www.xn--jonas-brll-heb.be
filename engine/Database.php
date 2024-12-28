<?php

namespace engine;

class Database
{

    protected $server, $user, $password, $database;
    protected $connection, $statement;

    public function __construct($config)
    {
        $this->server = $config['server'];
        $this->user = $config['user'];
        $this->password = $config['password'];
        $this->database = $config['database'];
    }

    protected function connect()
    {
        try {
            $this->connection = mysqli_connect($this->server, $this->user, $this->password, $this->database);
            return $this->connection;
        } catch (\Exception $exeption) {
            echo "Database :: could not connect to database";
        }
    }

    protected function close()
    {
        mysqli_close($this->connection);
        $this->connection = false;
    }

    public function query($query)
    {
        try {
            $this->statement = mysqli_fetch_assoc(mysqli_query($this->connect(), $query));
        } catch (\Exception $exeption) {
            echo "Database :: query failed to execute: {$query}";
        } finally {
            $this->close();
        }
    }

    public function fetch()
    {
        if (!$this->statement) {
            abort(Response::NOT_FOUND);
        }
        return $this->statement;
    }

}

?>