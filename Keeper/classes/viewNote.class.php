<?php
/*
*
*
*
*/
class ViewNote extends Note{
    /*
    */
    public function viewAllNotes(){
        $result = $this->getAllNotes();
        return $result;
    }
}