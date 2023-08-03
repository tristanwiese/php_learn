<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Product Store</title>
    <link rel="stylesheet" href="css/home-page.css?123" type="text/css">
    <script src=""></script>
</head>
<body>
    <?php 
    $title = "General store"; 
    include 'html-snippets/app-bar/app-bar.php';
    ?>
    <div class='items-main'>
    <?php
    include "api/api.php";
    include "models/api-model.php";

    $products = apiCall();

    $items = $products['products'];

    foreach ($items as $item) {
        $product = new ApiModel($item);
        echo "
        
        
        <div class='items-container'>
            <div class='item-image-container'>
                <img class='item-image prevent-select' src={$product->images[0]} alt='Product Image'>
            </div>
            <div>
                Title: $product->title
            </div>
            <div>
                Brand: $product->brand
            </div>
            <div>
                Stock: $product->stock
            </div>
            <div>
                Price: $$product->price
            </div>
        </div>

        ";
    }
    ?>
    </div>
</body>
</html>