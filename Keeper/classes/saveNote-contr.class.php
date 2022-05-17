<?php
/*
*
*
*
*/
class SaveNoteContr extends Note{
    /*
    *
    */
    private $title;
    private $content;
    private $dateCreated;
    private $themeColor;
    /*
    *
    */
    public function __construct($title, $content, $dateCreated, $themeColor){
        $this->title = $title;
        $this->content = $content;
        $this->dateCreated = $dateCreated;
        $this->themeColor = $themeColor;
    }
    /*
    */
    public function keep(){
        $this->saveNote($this->title, $this->content, $this->dateCreated, $this->themeColor);
    }
}