<?php

class PostRepository
{
    public function getLatestPost()
    {
        $posts = [
        [
        'id' => 1,
        'title' => 'Judul Pertama',
        'content' => 'Contoh Content Pertama',
        ],
        [
        'id' => 2,
        'title' => 'Judul Kedua',
        'content' => 'Contoh Content Kedua',
        ],
        [
        'id' => 3,
        'title' => 'Judul Ketiga',
        'content' => 'Contoh Content Ketiga',
        ],
        ];
        return $posts;
    }
}

class SuffledPostRepository extends PostRepository
{
    public function getLatestPost()
    {
        $posts = parent::getLatestPost();
        shuffle($posts);
        return $posts;
    }
}

$postRepository = new PostRepository();
print_r($postRepository->getLatestPost());
$suffledPostRepository = new SuffledPostRepository();
print_r($suffledPostRepository->getLatestPost());

// ========================================================


class Connection
{
    public function connect($database, $username, $password,
    $host = 'localhost')
    {
        throw new RuntimeException('Anda harus mengimplementasikan 
        method connect() sesuai dengan database driver yang Anda gunakan.');
    }
}

class MySQLConnection extends Connection
{
    public function connect($database, $username, $password,
    $host = 'localhost')
    {
        /**
        * Ceritanya ini logic koneksi ke database MySQL
        *
        * Anda tidak bisa menggunakan _keyword_ `parent` 
        * untuk memanggil _method_ `connect()` milik _parent class_
        * karena akan mengakibatkan error.
        **/
    }
}

class PostgreSQLConnection extends Connection
{
    public function connect($database, $username, $password, $host = 'localhost')
    {
        /**
        * Ceritanya ini logic koneksi ke database PostgreSQL
        *
        * Anda tidak bisa menggunakan _keyword_ `parent` 
        * untuk memanggil _method_ `connect()` milik _parent class_
        * karena akan mengakibatkan error.
        **/
    }
}

