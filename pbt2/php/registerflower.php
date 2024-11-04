<?php
session_start();
$file_location = "../db/florisrecord.txt";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $flowerName = $_POST['fName'];
    $flowerType = $_POST['fType'];
    $arrivalDate = $_POST['fDate'];
    $flowerQuantity = $_POST['fQuantity'];
    $flowerPrice = $_POST['fPrice'];

    $_SESSION['flowerData'] = [
        'name' => $flowerName,
        'type' => $flowerType,
        'date' => $arrivalDate,
        'quantity' => $flowerQuantity,
        'price' => $flowerPrice
    ];
    $record = "$flowerName,$flowerType,$arrivalDate,$flowerQuantity,$flowerPrice" . PHP_EOL;
    file_put_contents($file_location, $record, FILE_APPEND);
    header("Location: ../page/newStockDetails.php");
    exit();
} else {
    echo "Invalid request method.";
}
?>
