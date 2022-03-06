<?php include('header.php');
include('config.php');
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">username</th>
            <th scope="col">password</th>
            <th scope="col">user type</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $sql = "SELECT * FROM dbl_login";
        $result = mysqli_query($conn, $sql);
        ?>
        <tr>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['sodt_coquan']; ?></td>
            <td><?php echo $row['sodt_didong']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['ma_donvi']; ?></td>
        </tr>
        <?php

        ?>
    </tbody>
</table>