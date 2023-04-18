<?php
include('sambungan.php'); 
?> 
<html>
<link rel="stylesheet" href="senarai.css">
<body>
    <table>
        <caption>SENARAI HOMESTAY</caption>
        <tr>
            <th>Nombor</th>
            <th>Nama homestay</th>
            <th>Harga sehari</th>
            <th>Operasi</th>
        </tr>
        <?php 
        $sql = "select * from homestay";
        $data = mysqli_query($sambungan, $sql);		    
        while ($homestay = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $homestay ['norumah']; ?></td>
            <td><?php echo $homestay ['namarumah']; ?></td>
            <td>RM <?php echo $homestay ['harga']; ?></td>
            <td>
                <a href="homestay_update.php?norumah=<?php echo $homestay['norumah'];?>">
                    <img src=update.png>
                </a>
                <a href="homestay_delete.php?norumah=<?php echo $homestay['norumah'];?>">
                    <img src=delete.png>
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>