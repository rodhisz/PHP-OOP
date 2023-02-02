<?php
// abstract class Connection
// {
//     abstract public function connect($database, 
//     $username, $password, $host = 'localhost');
// }

// class MySQLConnection extends Connection
// {
//     public function connect($database, $username, $password,
//     $host = 'localhost')
//     {
//     /**
//     * Ceritanya ini logic koneksi ke database MySQL
//     *
//     * Anda tidak bisa menggunakan _keyword_ `parent` 
//     * untuk memanggil _method_ `connect()` milik _parent class_
//     * karena akan mengakibatkan error.
//     **/
//     }
// }

// class PostgreSQLConnection extends Connection
// {
//     public function connect($database, $username, $password,
//     $host = 'localhost')
//     {
//     /**
//     * Ceritanya ini logic koneksi ke database PostgreSQL
//     *
//     * Anda tidak bisa menggunakan _keyword_ `parent` 
//     * untuk memanggil _method_ `connect()` milik _parent class_
//     * karena akan mengakibatkan error.
//     **/
//     }
// }

//==============================================

// abstract class Connection
// {
//     abstract public function connect($database, $username,
//     $password, $host = 'localhost');
// }

// class MySQLConnection extends Connection
// {
//     public function connect($database, $username, $password,
//     $host = 'localhost')
//     {
//     /**
//     * Ceritanya ini logic koneksi ke database MySQL
//     *
//     * Anda tidak bisa menggunakan _keyword_ `parent` 
//     * untuk memanggil _method_ `connect()` milik _parent class_
//     * karena akan mengakibatkan error.
//     **/
//     }
// }

// class PostgreSQLConnection extends Connection
// {
//     public function connect($database, $username, $password,
//     $host = 'localhost')
//     {
//         /**
//         * Ceritanya ini logic koneksi ke database PostgreSQL
//         *
//         * Anda tidak bisa menggunakan _keyword_ `parent` 
//         * untuk memanggil _method_ `connect()` milik _parent class_
//         * karena akan mengakibatkan error.
//         **/
//     }
// }
// class OracleConnection extends Connection
// {
//     //
// }

//==============================================

abstract class AbstractTaxCalculator
{
    private $previous;
    abstract public function maxPtkp();
    abstract public function minPtkp();
    abstract public function taxPercentage();

    public function getPrevious()
    {
        return $this->previous;
    }

    public function setPrevious($taxCalculator)
    {
        $this->previous = $taxCalculator;
    }

    public function calculate($ptkp)
    {
        $previousValue = 0;

        if ($previous = $this->getPrevious()) {
        $previousValue = $this->getPrevious()->calculate($previous->maxPtkp());
        $ptkp -= $previous->maxPtkp();
        }
        return ($this->taxPercentage() * $ptkp) + $previousValue;
    }

    public function isSupportPtkp($ptkp)
    {
        if ($ptkp < $this->maxPtkp() && $ptkp >= $this->minPtkp()) {
            return true;
        }
        return false;
    }
}


