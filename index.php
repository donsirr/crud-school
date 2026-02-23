<?php
include "db_conn.php";
$sql = "SELECT ID, Name, Price, ImagePath FROM products";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potato Corner Menu</title>
    <style>
        body { 
            font-family: 'Arial', sans-serif; 
            background-color: #f4f4f4; 
            margin: 0;
            padding: 20px; 
            color: #333; 
        }
        .container { 
            max-width: 1000px; 
            margin: auto; 
            background: white;
            padding: 40px; 
            border-radius: 10px; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.1); 
        }
        .header { 
            text-align: center; 
            color: #008a00; 
            margin-bottom: 40px; 
        }
        .header h1 { 
            font-size: 2.5rem; 
            text-transform: uppercase;
            letter-spacing: 2px; 
        }
        .menu-grid { 
            display: grid; 
            grid-template-columns: repeat(2, 1fr); 
            gap: 30px; 
        }
        .product-card { 
            text-align: center; 
            padding: 15px; 
            transition: transform 0.2s; 
        }
        .product-card:hover { 
            transform: translateY(-5px); 
        }
        .product-card img { 
            max-width: 100%; 
            height: 300px; 
            object-fit: cover; 
            border-radius: 8px; 
        }
        .product-name { 
            font-weight: bold; 
            font-size: 1.1rem; 
            margin-top: 15px; 
            text-transform: uppercase; 
        }
        .product-price { 
            font-size: 1.2rem; 
            color: #000; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Potato Corner<br>Menu List</h1>
        </div>

        <div class="menu-grid">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="product-card">
                    <img src="<?php echo $row['ImagePath']; ?>" alt="<?php echo $row['Name']; ?>">
                    <div class="product-name"><?php echo $row['Name']; ?></div>
                    <div class="product-price">PRICE: ₱ <?php echo number_format($row['Price'], 0); ?></div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>