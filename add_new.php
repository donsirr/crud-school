<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $dateCreated = date('Y-m-d');
    $dateUpdated = '0000-00-00';
    $dateDeleted = '0000-00-00';

    // Omit ID to allow MySQL to auto-increment
    $sql = "INSERT INTO `menus`(`Name`, `DateCreated`, `DateUpdated`, `DateDeleted`) VALUES ('$name', '$dateCreated', '$dateUpdated', '$dateDeleted')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: manage_menu.php?msg=New record created successfully");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Menu Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h3 style="color: #008a00;">Add New Menu Item</h3>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width: 50vw; min-width: 300px;">
                <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="manage_menu.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>