<?php include 'template/header.php';?>
<?php
    $sql = "SELECT * FROM table_board";
    $query = $conn->query($sql);
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    //print_r($results)


?>


<div class = "container">
<h1>Home page.</h1>
<h2>Hello <?php echo $_SESSION['username'];?>
</h2>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Topic</th>
      <th scope="col">Date</th>

    </tr>
  </thead>
  <tbody>
    <?php foreach($results as $key => $value): //รับ array?>

    <tr>
        <th scope ="row"><?php echo $key+1 ?></th>
        <td>
        <a href="board.php?boardId=<?php echo $value['board_id'];?>">
        <?php echo $value['board_topic']; ?>
        </a>
        </td>

        <td>
        <?php
        $date = new DateTime($value['board_date']);
        echo $date->format('D, d-m-Y');
        ?>
        </td>

    </tr>

    <?php endforeach; ?>

  </tbody>
</table>

</div>



<?php include 'template/footer.php'; ?>