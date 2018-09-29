<?php

namespace App\src\DAO;

use App\src\model\Comment;

class CommentDAO extends DAO
{
    public function getCommentsFromArticle($idArt)
    {
        $sql = 'SELECT id, pseudo, content, published, date_added FROM comment WHERE article_id = ? && published = 1';
        $result = $this->sql($sql, [$idArt]);
        $comments = [];
        foreach ($result as $row) {
            $commentId = $row['id'];
            $comments[$commentId] = $this->buildObject($row);
        }
        return $comments;
    }

    private function buildObject(array $row)
    {
        $comment = new Comment();
        $comment->setId($row['id']);
        $comment->setPseudo($row['pseudo']);
        $comment->setContent($row['content']);
        $comment->setDateAdded($row['date_added']);
        return $comment;
    }

    public function getComments()
    {
        $sql = 'SELECT id, pseudo, content, published, date_added FROM comment';
        $result = $this->sql($sql);
        $comments = [];
        foreach ($result as $row) {
            $commentId = $row['id'];
            $comments[$commentId] = $this->buildObject($row);
        }
        return $comments;
    }

    public function getUnpublishedComments()
    {
        $sql = 'SELECT id, pseudo, content, published, date_added FROM comment WHERE published = 0';
        $result = $this->sql($sql);
        $comments = [];
        foreach ($result as $row) {
            $commentId = $row['id'];
            $comments[$commentId] = $this->buildObject($row);
        }
        return $comments;
    }
}
