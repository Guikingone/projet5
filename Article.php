<?php

class Article
{
    public function getArticles()
    {
        $db = new Database();
        $connection = $db->getConnection();
        $sql = $connection->query('SELECT id, title, content, author, date_added FROM article ORDER BY id DESC');
        return $sql;
    }
}
