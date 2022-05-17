<?php
/*
 * the test_input() function does all the checking for the inputs entered by users
 * it Strip unnecessary characters (extra space, tab, newline) from the user input data (with the PHP trim() function)
 * it remove backslashes (\) from the user input data (with the PHP stripslashes() function)
*/
function test_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
if(isset($_POST['save-btn'])){
    /*
    * grabbing the data
    */
    $title = test_input($_POST['title']);
    $content = test_input($_POST['content']);
    $dateCreated = date("F j, Y, g:i a");
    $themeColor = $_POST['themeColor'];
    /*
    * Instantiate SaveNoteContr class
    */
    require '../classes/dbh.class.php';
    require '../classes/note.class.php';
    require '../classes/saveNote-contr.class.php';

    $saveNote = new SaveNoteContr($title, $content, $dateCreated, $themeColor);
    $saveNote->keep();
    /*
    * Going back to the front page
    */
    header('location: ../index.php?saveNote=success');
}