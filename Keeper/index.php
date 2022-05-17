<?php 
    require 'Layouts/header.php'; 
    require 'classes/dbh.class.php';
    require 'classes/note.class.php';
    /*
    *
    *@delete_notes_query
    *
    */
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        require 'classes/deleteNote.class.php';
        $delete = new DeleteNote($id);
    }
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,400&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Mina&display=swap');
    h4{font-family: 'Mina', sans-serif;}
    p{font-family: 'Roboto Flex', sans-serif;}
    main{padding: 2% 3%;}
    .col-lg-4{margin: 7px 0;transition: 1s ease; }
    .col-lg-4:hover{opacity: 0.8;}
    .delete-btn{float: right;}
    span{font-size: 13px;}
</style>
<main>
    <div class="row">
        <?php
            /*
            *
            *@view_notes_query
            *
            */
            require 'classes/viewNote.class.php';
            $notes = new ViewNote();
            $row = $notes->viewAllNotes();
            for($i = 0; $i<count($row); $i++){ 
        ?>
                <div class="col-lg-4">
                    <div class="card" style="background-color:<?php echo $row[$i]['themeColor'];?>">
                        <div class="card-body">
                        <?php echo '<h4>'.$row[$i]['title'].'</h4>'; ?>
                        <?php echo '<p>'.$row[$i]['content'].'</p>'; ?>
                        <?php echo '<span>'.$row[$i]['dateCreated'].'</span>'; ?>
                        <a class="btn delete-btn" href="index.php?delete=<?php echo $row[$i]['id']; ?>"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                </div>
        <?php    
            }
        ?>
    </div>
</main>
<?php require 'Layouts/footer.php'; ?>