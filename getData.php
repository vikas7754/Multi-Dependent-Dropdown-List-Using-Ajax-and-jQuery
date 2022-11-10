<?php
include_once("DB/config.php");
if (!empty($_POST["year"])) {
    $year = $_POST['year'];
    $query = "SELECT DISTINCT make FROM car WHERE year = $year ORDER BY make ASC";
    $result = $connect_webapps->query($query);
    if ($result->num_rows > 0) {
        echo '<option value="">Select Make</option>';
        while ($rows = $result->fetch_assoc()) {
            echo '<option value="' . $rows['make'] . '">' . $rows['make'] . '</option>';
        }
    }
} elseif (!empty($_POST['make'])) {
    $make = $_POST['make'];
    $query = "SELECT DISTINCT model FROM car where make='$make' ORDER BY model ASC";
    $result = $connect_webapps->query($query);
    if ($result->num_rows > 0) {
        echo '<option value="">Select Model</option>';
        while ($rows = $result->fetch_assoc()) {
            echo '<option value="' . $rows['model'] . '">' . $rows['model'] . '</option>';
        }
    }
} elseif (!empty($_POST['model'])) {
    $model = $_POST['model'];
    $query = "SELECT DISTINCT style FROM car where model='$model' ORDER BY style ASC";
    $result = $connect_webapps->query($query);
    if ($result->num_rows > 0) {
        echo '<option value="">Select Style</option>';
        while ($rows = $result->fetch_assoc()) {
            echo '<option value="' . $rows['style'] . '">' . $rows['style'] . '</option>';
        }
    }
}
