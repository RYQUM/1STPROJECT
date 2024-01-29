<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="image/weblogo.ico" type="image/x-icon">
    <link rel="stylesheet" href="css_style\your-external-styles.css?v=<? echo time() ?>">
    <link rel="stylesheet" href="..\fonts.css">
    <title>Module</title>
</head>
<body>
    <?php


    if(empty($_POST["search"])){
        echo "<h1>Please type the Title or Name of the Module</h1>";
    }else{

        $conn = new mysqli("localhost", "root", "", "library");

        if ($conn->connect_error) {
            die ("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $searchTerm = $_POST["search"];

            $sql = "SELECT * FROM module WHERE title LIKE '%$searchTerm%'";
            $result = $conn->query($sql);
            

            if ($result->num_rows > 0) {
                echo "<p>MODULES </p>";
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='module-container'>";
                    echo "<h1> READ </h1>";
                    echo "<a href='" . $row["book_file"] . "' target='_blank' onclick='openPDF(\"" . $row["book_file"] . "\");'>";
                    echo "<img src='" . $row["book_preview"] . "' alt='Preview Image' class='module-image'>";
                    echo "</a>";
                    echo "</div>";
                }
            } else {
                echo "<h1> NO BOOK FOUND </h1>";
            }
        }

        $conn->close();


    }
        
    ?>
</body>
</html>

