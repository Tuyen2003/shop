<?php require_once './core/boot.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./view/public/css/a.css">
    <link rel="stylesheet" href="./view/public/css/style.css">
</head>

<body>
    <?php include 'inc/header.php';?>
    <div class="section2" id="new">
        <div class="container">
            <?php $product_list = get_products_by_name($_GET['search']) ?>
            <?php foreach ($product_list as $product) { ?>
            <div class="col-md-4 mt-3 product-item col-sm-12 col-lg-3">
                <div class="items">
                    <div class="img img1">
                        <a href="./product-detail.php?id=<?php echo $product['id']; ?>"><img
                                src="<?php echo $product['img'] ?>" alt=""></a>
                    </div>
                    <div class="name">
                        <?php echo $product['name'] ?>
                    </div>
                    <div class="price">$
                        <?php echo $product['price'] ?>
                    </div>
                    <div class="info">Lorem ipsum dolor sit amet consectetur.</div>
                </div>
            </div>
            <?php } ?>
        </div>
        </div>
</body>

</html>