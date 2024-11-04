<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Status</title>
    <link rel="stylesheet" href="../style/tableStock.css">
    <link rel="stylesheet" href="../style/navStyle.css">
    <link rel="stylesheet" href="../style/allStyle.css">
</head>
<body style="margin: 0px; padding: 0px;">
    <nav>
        <div class="logo">
            <a href="intro.php"><img src="../img/flower.png" alt="flower" width="30px">Pink Blossom Stock Management System</a>
        </div>
        <ul>
            <li><a href="registerFlower.html">Register New Flower</a></li>
            <li><a href="updateFlower.html">Update Flower Records</a></li>
            <li><a href="Records.php">Flower Records</a></li>
        </ul>
        <div class="btn">
            <a href="">Contact Us</a>
        </div>
    </nav>
    <div class="divTable">
        <div class="tableNewStock">
            <h4>Update Status</h4>
            <table>
                <tr>
                    <th>Status</th>
                </tr>

                <tr>
                    <td>
                        <?php
                        if (isset($_SESSION['updateStatus'])) {
                            echo htmlspecialchars($_SESSION['updateStatus']);
                            unset($_SESSION['updateStatus']);
                        } else {
                            echo "No update status available.";
                        }
                        ?>
                    </td>
                </tr>
            </table>
            <div class="btnStock">
                <a href="../page/updateFlower.html">Try Another Update</a>
                <a href="../page/Records.php">View Flower Records</a>
            </div>
        </div>
    </div>
</body>
</html>
