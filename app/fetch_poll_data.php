<?php

//fetch_poll_data.php

include('database_connection.php');

$selected_poll = array("Miguel de Cerventes", "Charles Dickens", "JRR Tolkien", "Antoine de Saint Exuper");

$total_poll_row = get_total_rows($connect);
$output = '';
$total_row = array();
if($total_poll_row > 0)
{
  foreach($selected_poll as $row)
  {
    $query = "SELECT * FROM tbl_poll WHERE selected_poll = '".$row."'";
    $statement = $connect->prepare($query);
    $statement->execute();
    array_push($total_row,$statement->rowCount());
  }
}
 

function get_total_rows($connect)
{
  $query = "SELECT * FROM tbl_poll";
  $statement = $connect->prepare($query);
  $statement->execute();
  return $statement->rowCount();
}


?>

<html>
<head>
  <title></title>
  <script src='../scripts/script.js'> </script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.0/dist/chart.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
<div style="height:auto; width:450; margin-left:30%; display:grid">
 <h1 class= "chart-title" style="text-align:center; padding: 15;">Poll Result </h1>
    <canvas id="myChart" ></canvas>   
 </div>
</body>
</html>
<script>
 var obj = <?php echo json_encode($total_row); ?>;
 console.log (obj);
 displayChart(obj);
 </script>