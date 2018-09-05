<?php

class Article
{
    public function getArticles()
    {
        $db = new Database();
        return $db->getConnection()->query('SELECT id, title, content, author, date_added FROM article ORDER BY id DESC');
    }

    public function getArticle($idArt)
    {
        $db = new Database();
        $sql = $db->getConnection()->prepare('SELECT id, title, content, author, date_added FROM article WHERE id = ?');
        $sql->execute([
            $idArt
        ]);
        return $sql;
    }
}
