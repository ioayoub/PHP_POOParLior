<?php

namespace Models;



class Comment extends Model
{
    protected $table = "comments";



    public function insert(string $author, string $content, int $article_id)
    {
        $query = $this->pdo->prepare('INSERT INTO comments SET author = :author, content = :content, article_id = :article_id, created_at = NOW()');
        $query->execute(compact('author', 'content', 'article_id'));
    }
}
