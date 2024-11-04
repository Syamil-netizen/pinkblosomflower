<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Stock Details</title>
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
            <h4>New Stock Details</h4>
            <table>
                <tr>
                    <th>Flower Name</th>
                    <th>Flower Type</th>
                    <th>Arrival Date</th>
                    <th>Quantity</th>
                    <th>Price (RM)</th>
                </tr>

                <?php if (isset($_SESSION['flowerData'])): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($_SESSION['flowerData']['name']); ?></td>
                        <td><?php echo htmlspecialchars($_SESSION['flowerData']['type']); ?></td>
                        <td><?php echo htmlspecialchars($_SESSION['flowerData']['date']); ?></td>
                        <td><?php echo htmlspecialchars($_SESSION['flowerData']['quantity']); ?></td>
                        <td><?php echo htmlspecialchars($_SESSION['flowerData']['price']); ?></td>
                    </tr>
                <?php else: ?>
                    <tr>
                        <td colspan="5">No new stock details available.</td>
                    </tr>
                <?php endif; ?>

            </table>
            <div class="btnStock">
                <a href="registerFlower.html">Register new Flower</a>
                <a href="Records.php">View Flower Records</a>
            </div>
            
        </div>
    </div>
</body>
</html>
