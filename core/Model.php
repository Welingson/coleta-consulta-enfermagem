<?php

namespace core;

use \core\Database;
use \ClanCats\Hydrahon\Builder;
use \ClanCats\Hydrahon\Query\Sql\FetchableInterface;

class Model
{

    public static $_h;
    protected $_table;

    public function __construct()
    {
        $this->_checkH();
    }

    public function _checkH()
    {

        if (self::$_h == null) {
            $connection = Database::getInstance();
            self::$_h = new Builder('mysql', function ($query, $queryString, $queryParameters) use ($connection) {
                $statement = $connection->prepare($queryString);
                $statement->execute($queryParameters);

                if ($query instanceof FetchableInterface) {
                    return $statement->fetchAll(\PDO::FETCH_ASSOC);
                }
            });
        }

        self::$_h = self::$_h->table($this->getTableName());
    }


    /**
     * @return string
     */
    public function getTableName(): String
    {

        //NECESSÁRIO RETORNO DA PROPRIEDADE TABLE
        //PARA IDENTIFICAÇÃO DO NOME DA TABELA

        return $this->_table;
    }

    /**
     * @param array $fields
     * @return void
     */
    public function select($fields = [])
    {
        $this->_checkH();
        return self::$_h->select($fields);
    }

    public function insert($fields = [])
    {
        $this->_checkH();
        return self::$_h->insert($fields);
    }

    public function update($fields = [])
    {
        $this->_checkH();
        return self::$_h->update($fields);
    }

    public function delete()
    {
        $this->_checkH();
        return self::$_h->delete();
    }
}
