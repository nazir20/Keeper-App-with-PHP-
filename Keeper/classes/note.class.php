<?php
/*
*
*@Note_class
*
*/
class Note extends Dbh{
    /*
    */
    protected function saveNote($title, $content, $dateCreated, $themeColor){
        $sql = 'INSERT INTO notes(title, content, dateCreated, themeColor) VALUES(?,?,?,?)';
        $stmt = $this->connect()->prepare($sql);
        if(!$stmt->execute([$title, $content, $dateCreated, $themeColor])){
            $stmt = null;
            header('location: ../index.php?error=stmtFailed');
            exit();
        }
        $stmt = null;
    }
    /*
    *
    *
    *
    */
    protected function getAllNotes(){
        $sql = 'SELECT * from notes';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    /*
    *
    */
    protected function deleteNote($id){
        $sql = 'DELETE FROM notes WHERE id = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
}