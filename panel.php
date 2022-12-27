<?php

include('contact.php');

if(isset($_GET['dele'])){
    $id_del=$_GET['dele'];
    $qu_dele="DELETE FROM users WHERE id='$id_del'";
    $res_dele=mysqli_query($con,$qu_dele);
    echo '<div class="error"><h3>DELETE</h3></div>';
    header('refresh:1;url=panel.php');

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>control panel</title>
    <link rel="stylesheet" href="styel.css">
</head>

<body>
    <div class="main-control">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php

                    $qu="SELECT *FROM `users` ";
                    $res=mysqli_query($con,$qu);
                    $n=0;
                    while($row=mysqli_fetch_assoc($res)){

                        $n++;




                    ?>
                <tr>
                    <td><?php echo $n; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><div class="us-edit"><a href="edit.php?us=<?php echo $row['id']; ?>"><button>Edit</button></a></div></td>
                    <td><div class="us-delet"><a href="panel.php?dele=<?php echo $row['id'];?>"><button>Delete</button></a></div></td>
                </tr>
                <?php
}
        ?>
            </tbody>
        </table>
    </div>
</body>
</html>