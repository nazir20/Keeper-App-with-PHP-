<?php
/*
*
* @delete_class
*
*/
class DeleteNote extends Note{
    public function __construct($id){
        $this->deleteNote($id);
    }
}