<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="../style/navStyle.css">
    <link rel="stylesheet" href="../style/intro.css">
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
    <div class="divList">
        <div class="tableAvailable">
            <h4 class="tHeader">List of Available Flowers</h4>
            <table class="available">
                <tr>
                    <th>No</th>
                    <th>Flower Name</th>
                    <th>Flower Type</th>
                    <th>Arrival Date</th>
                    <th>Quantity</th>
                    <th>Flower Price (RM)</th>
                </tr>
                
                <?php
                $file_location = "../db/florisrecord.txt";
                if (file_exists($file_location)) {
                    $file = fopen($file_location, "r");
                    $index = 1;
                    while (($line = fgets($file)) !== false) {
                        $line = trim($line);
                        if (empty($line)) continue;
                        list($flowerName, $flowerType, $arrivalDate, $flowerQuantity, $flowerPrice) = explode(",", $line);
                        $flowerQuantity = (int)$flowerQuantity;
                        if ($flowerQuantity > 0) {
                            echo "<tr>";
                            echo "<td>" . $index++ . "</td>";
                            echo "<td>" . htmlspecialchars($flowerName) . "</td>";
                            echo "<td>" . htmlspecialchars($flowerType) . "</td>";
                            echo "<td>" . htmlspecialchars($arrivalDate) . "</td>";
                            echo "<td>" . htmlspecialchars($flowerQuantity) . "</td>";
                            echo "<td>" . htmlspecialchars($flowerPrice) . "</td>";
                            echo "</tr>";
                        }
                    }
                    fclose($file);
                } else {
                    echo "<tr><td colspan='6'>No flower records available.</td></tr>";
                }
                ?>


            </table>
        </div>
    </div>
</body>
</html>
