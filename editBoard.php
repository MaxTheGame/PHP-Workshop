<?php include 'template/header.php';?>
<?php if(!$_SESSION['username']){
    header('Location: home.php');
    exit();
}
?>
<?php
$action = $_GET['action'];
$boardId = $_GET['boardId'];

    if ($action) {
        if ($action === 'edit') {
           $topic = $_POST['topic'];
            $content = $_POST['content'];

$sql = "UPDATE table_board SET board_topic='$topic' , board_content='$content' WHERE board_id='$boardId'";



$result = $conn->exec($sql);

if($result){
    echo "<script>alert('เเก้ไขสำเร็จ')</script>";
    echo "<script>window.location='myBoard.php'</script>";
} else {
        echo "<script>alert('ผิดพลาด')</script>";
        echo "<script>window.history.back()</script>";
    
}
            exit();
        }
    }

?> 
<?php
$boardId = $_GET['boardId'];
$sql = "SELECT * FROM table_board WHERE board_id = '$boardId' ";
$query = $conn->query($sql);
$result = $query->fetch(PDO::FETCH_ASSOC);

print_r($result);
?>

<div class="container">
<h2>Edit board.</h2>
<form action="editBoard.php?action=edit&boardId=<?php echo $boardId?>" method ="post">

<div class = "form-group">
<label for = "topic">Topic</label>
<input type = "text" name="topic" id= "topic" value="<?php echo $result['board_topic'];?>" class="form-control"/>
</div>

<div class="form-group">
<label for="content">content</label>
<textarea class="form-control" id= "content" name="content" cols="30" row="10">
<?php echo $result['board_content'];?>
</textarea>


<input type="submit" value="Edit" class="btn btn-primary">
</form>
</div>
</div>

<?php include 'template/footer.php'; ?>
