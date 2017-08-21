<?php

include 'model/model.php';

class ArticlesModel extends Model {
    public function getAll() {
        $query = "SELECT a.id, a.title, a.date_add, a.author, c.name
                FROM articles AS a 
                LEFT JOIN categories AS c ON a.id_categories=c.id";
        
        $select = $this->pdo->query($query);
        foreach ($select as $row) {
            $data[] = $row;
        }
        $select->closeCursor();
        
        return $data;
    }
    
    public function getOne($id) {
        $query = "SELECT a.id, a.title, a.date_add, a.author, c.name, a.content
                FROM articles AS a 
                LEFT JOIN categories AS c ON a.id_categories=c.id where id=".$id;
        
        $select = $this->pdo->query($query);
        foreach ($select as $row) {
            $data[] = $row;
        }
        $select->closeCursor();
        
        return $data;
    }
    
    public function insert($data) {
        $ins = $this->pdo->prepare('INSERT INTO articles (title, content, date_add, author, id_categories
                    VALUES :title, :content, :date_add, :author, :id_categories');
        
        $ins->bindValue(':title', $data['title'], PDO::PARAM_STR);
        $ins->bindValue(':content', $data['content'], PDO::PARAM_STR);
        $ins->bindValue(':date_add', $data['date_add'], PDO::PARAM_STR);
        $ins->bindValue(':author', $data['author'], PDO::PARAM_STR);
        $ins->bindValue(':id_categories', $data['id_categories'], PDO::PARAM_INT);
        
        $ins->execute();
    }
    
    public function delete($id) {
        $del = $this->pdo->prepare('DELETE FROM articles WHERE id=:id');
        
        $del->bindValue(':id', $id, PDO::PARAM_INT);
        $del->execute();
    }
}