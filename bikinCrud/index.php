<?php

include_once("config.php");

$result = mysqli_query($mysqli, "plp_0");
?>

<html>
<head>    
    <title>INI CRUD/title>
</head>

<body>
<a href="add.php">Tambahkan Nama Santri</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>No</th> <th>Nama</th> <th>Kelas/th> <th>Umur/th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['No']."</td>";
        echo "<td>".$user_data['Nama']."</td>";
        echo "<td>".$user_data['Umur']."</td>";    
        echo "<td>".$user_data['Kelas']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>