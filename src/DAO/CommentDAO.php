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

    public function saveComment($comment)
    {
        extract($comment);
        $sql = 'INSERT INTO comment (pseudo, content, article_id, date_added) VALUES (?, ?, ?, NOW())';
        $this->sql($sql, [$pseudo, $content, $articleId]);

        $_SESSION['message'] = sprintf('Votre message a été enregistré, et est en attente de publication');
    }

    public function publishComment($comment)
    {
        extract($comment);
        $sql = 'UPDATE comment SET content = ?, published = "1" WHERE id = ?';
        $this->sql($sql, [$content, $articleId]);
    }

    public function modifyComment($comment)
    {
        extract($comment);
        $sql = 'UPDATE comment SET content = ? WHERE id = ?';
        $this->sql($sql, [$content, $articleId]);
    }

    public function deleteComment($comment)
    {
        extract($comment);
        $sql = 'DELETE FROM comment WHERE id = ?';
        $this->sql($sql, [$commentId]);
    }

    public function getComments()
    {
        $sql = 'SELECT id, pseudo, content, published, date_added FROM comment WHERE published = 1 ORDER BY id DESC';
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

    public function getUnpublishedComment($id)
    {
        $sql = 'SELECT id, pseudo, content, published, date_added FROM comment WHERE id = ? && published = 0';
        $result = $this->sql($sql, [$id]);
        $row = $result->fetch();
        if($row) {
            return $this->buildObject($row);
        } else {
            echo 'Aucun commentaire existant avec cet identifiant';
        }
    }

    public function getComment($id)
    {
        $sql = 'SELECT id, pseudo, content, published, date_added FROM comment WHERE id = ? && published = 1';
        $result = $this->sql($sql, [$id]);
        $row = $result->fetch();
        if($row) {
            return $this->buildObject($row);
        } else {
            echo 'Aucun commentaire existant avec cet identifiant';
        }
    }

}
