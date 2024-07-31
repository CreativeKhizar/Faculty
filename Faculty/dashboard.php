<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sample Table</title>
<style>
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
  }
  th {
    background-color: #f2f2f2;
  }
</style>
</head>
<body>
<h1 align="center">Publication Details</h1>
<table>
  <thead>
    <tr>
      <th>Faculty ID</th>
      <th>Title</th>
      <th>Journel</th>
      <th>Scopus</th>
      <th>Author Names</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $con=mysqli_connect("localhost","root","","faculty");
        $query="select * from publications";
        $res=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($res))
        {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['title']."</td>";
            echo "<td>".$row['journelname']."</td>";
            echo "<td>".$row['scopus']."</td>";
            echo "<td>".$row['authors']."</td>";
            echo "</tr>";
        }
    ?>
  </tbody>
</table>

</body>
</html>
