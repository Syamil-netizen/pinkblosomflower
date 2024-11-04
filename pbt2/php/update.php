<?php
session_start();
$file_location = "../db/florisrecord.txt";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $flowerName = $_POST['fName'];
    $flowerType = $_POST['fType'];
    $arrivalDate = $_POST['fDate'];
    $flowerQuantity = $_POST['fQuantity'];
    $flowerPrice = $_POST['fPrice'];

    $updatedRecord = "$flowerName,$flowerType,$arrivalDate,$flowerQuantity,$flowerPrice" . PHP_EOL;
    $records = file($file_location, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $recordUpdated = false;
    foreach ($records as $key => $record) {
        $recordData = explode(',', $record);
        if (trim($recordData[0]) == $flowerName) {
            $records[$key] = $updatedRecord;
            $recordUpdated = true;
            break;
        }
    }

    if ($recordUpdated) {
        file_put_contents($file_location, implode(PHP_EOL, $records));
        $_SESSION['updateStatus'] = "Flower data updated successfully.";
    } else {
        $_SESSION['updateStatus'] = "Flower not found.";
    }
    header("Location: updateStatus.php");
    exit();
} else {
    echo "Invalid request method.";
}
?>
