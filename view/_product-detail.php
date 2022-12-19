<?php require_once './core/boot.php';?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="./view/public/css/bootstrap.min.css">
   <link rel="stylesheet" href="./view/public/css/a.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
</head>

<body>
  
   <?php include 'inc/header.php';?>
    <div class="abc">
    <?php $product = get_product($_GET['id']);?>
    <div class="container product-detail">
        <div class="row py-5 g-5 mt-5">
            <div class="col-12 col-lg-6">
                <img src="<?php echo $product['img'];?>" alt="" class="m-1 w-100 silderMainImage" data-bs-toggle="modal"
                    data-bs-target="#imageModal">
                <div>
                    <img src="img/chitiet.jpg" class="m-1 silderThumb" width="60" alt="">
                    <img src="img/chitiet2.jpg" class="m-1 silderThumb" width="60" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <h2 id="productName">
                    <?php echo $product['name'];?>
                </h2>
                <small class="text-muted">
                    Article:  
                </small>
                <h4>
                    USD
                    <?php echo $product['price'];?>
                    $
                </h4>
                <label for="selectSize" class="text-muted">
                    Size:
                </label>
                <select name="selectSize" id="size" class="form-select">
                    <option selected>S</option>
                    <option value="1">M</option>
                    <option value="2">L</option>
                    <option value="3">Xl</option>
                </select>
                <form action="cart.php" method="post">
                <input type="hidden" name="action" value="create">
                <input type="hidden" name="productId" value="<?php echo $product['id']; ?>">
                <!-- quantity -->
                <div class="mt-4">
                    <h3 class="text-sm text-gray-800 uppercase mb-1">Quantity</h3>
                    <div class="flex border border-gray-300 text-gray-600 divide-x divide-gray-300 w-max">
                        <div class="h8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">-</div>
                        <input type="text" name="quantity" value="1" class="h8 w-8 text-base flex items-center justify-center" />
                        <div class="h8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">+</div>
                    </div>
                </div>
                <div class="d-grid my-4">
                    <button class="btn btn-lg btn-dark" type="submit" id="bagBtn">
                        Add To Cart
                    </button>
                </div>
                <div class="accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="hedingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <strong>Description</strong>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="hedingOne">
                            <div class="accordion-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe eius a animi,
                                dignissimos reiciendis doloremque quia voluptates optio expedita nisi sit consequuntur
                                excepturi corrupti blanditiis? Beatae rem magni expedita explicabo.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="hedingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <strong>Availability</strong>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="hedingTwo">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id praesentium tenetur aut quam
                                corrupti quasi iusto quidem tempora, a consectetur numquam excepturi quibusdam ea vitae
                                accusantium, modi repudiandae, illum expedita.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="hedingthree">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsethree" aria-expanded="true" aria-controls="collapsethree">
                                <strong>Delivery And Returns</strong>
                            </button>
                        </h2>
                        <div id="collapsethree" class="accordion-collapse collapse show" aria-labelledby="hedingthree">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id praesentium tenetur aut quam
                                corrupti quasi iusto quidem tempora, a consectetur numquam excepturi quibusdam ea vitae
                                accusantium, modi repudiandae, illum expedita.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="hedingFour">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                <strong>Size and Fit</strong>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="hedingFour">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur eum soluta
                                consectetur cumque ipsum? Temporibus necessitatibus consequatur commodi reiciendis modi
                                in quidem iure voluptate excepturi, eius ab aperiam accusamus aut.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <h2 class="diplay-6 py-5 text-center">
            You May Also Like
        </h2>
        <div class="d-flex justify-content-between align-items-center flex-column flex-lg-row my-5 m-auto" id="new">
            <div class="card m-2">
                <a href="product.html">
                    <img class="card-img-top" height="300px" src="img/product-1.jpg" alt="Product">
                </a>
                <div class="card-body">
                    <p class="card-text fw-bold">Floral Jackquard Pullover</p>
                    <small class="text-secondary">
                        USD 499$
                    </small>
                </div>
            </div>
            <div class="card m-2">
                <a href="product.html">
                    <img class="card-img-top" height="300px" src="img/product-2.jpg" alt="Product">
                </a>
                <div class="card-body">
                    <p class="card-text fw-bold">Floral Jackquard Pullover</p>
                    <small class="text-secondary">
                        USD 499$
                    </small>
                </div>
            </div>
            <div class="card m-2">
                <a href="product.html">
                    <img class="card-img-top" height="300px" src="img/product-3.jpg" alt="Product">
                </a>
                <div class="card-body">
                    <p class="card-text fw-bold">Floral Jackquard Pullover</p>
                    <small class="text-secondary">
                        USD 499$
                    </small>
                </div>
            </div>
            <div class="card m-2">
                <a href="product.html">
                    <img class="card-img-top" height="300px" src="img/product-4.jpg" alt="Product">
                </a>
                <div class="card-body">
                    <p class="card-text fw-bold">Floral Jackquard Pullover</p>
                    <small class="text-secondary">
                        USD 499$
                    </small>
                </div>
            </div>
        </div>
    </div>
    </div>
    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>
    </div>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Company name
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
        </script>
    <script src="js/main.js"></script>
</body>

</html>