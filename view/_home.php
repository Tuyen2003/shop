<?php require_once './core/boot.php';?>
<!DOCTYPE html>  
 <html lang="en">  
 <head>  
   <meta charset="UTF-8">  
   <meta http-equiv="X-UA-Compatible" content="IE=edge">  
   <meta name="viewport" content="width=device-width, initial-scale=1.0">  
   <title>Document</title>
   <link rel="stylesheet" href="./view/public/css/a.css">   
   <link rel="stylesheet" href="./view/public/css/bootstrap.min.css">
   <link rel="stylesheet" href="./ecommerce.css">  
   <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet"> 
   
   <script src="./view/public/js/main.js"></script>
 </head>  
 <body>  
  
  <?php include 'inc/header.php'; ?>
  <?php include 'inc/banner.php'; ?>
       
       <div class="section2">  
         <div class="container">  
         <?php $product_list = get_all_products() ?>
                <?php foreach ($product_list as $product) { ?>
                  <div class="items">  
             <div class="img img1">
              <a href="./product-detail.php?id=<?php echo $product['id']; ?>"><img src="<?php echo $product['img']?>" alt=""></a>
                </div>  
             <div class="name"><?php echo $product ['name']?></div>  
             <div class="price">$<?php echo $product ['price']?></div>  
             <div class="info">Lorem ipsum dolor sit amet consectetur.</div>  
           </div> 
                  <?php } ?>
            
             <div class="img img1"><img  
                 src="https://images.pexels.com/photos/5816934/pexels-photo-5816934.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"  
                 alt=""></div>  
             <div class="name">WASHING MACHINE</div>  
             <div class="price">$56</div>  
             <div class="info">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</div>  
           </div>  
         </div>  
       </div>  
     </div>  
   </section>  
   <footer>  
     <div class="footer0">  
       <h1>ShoPperZ</h1>  
     </div>  
     <div class="footer1 ">  
       Connect with us at<div class="social-media">  
         <a href="#">  
           <ion-icon name="logo-facebook"></ion-icon>  
         </a>  
         <a href="#">  
           <ion-icon name="logo-linkedin"></ion-icon>  
         </a>  
         <a href="#">  
           <ion-icon name="logo-youtube"></ion-icon>  
         </a>  
         <a href="#">  
           <ion-icon name="logo-instagram"></ion-icon>  
         </a>  
         <a href="#">  
           <ion-icon name="logo-twitter"></ion-icon>  
         </a>  
       </div>  
     </div>  
     <div class="footer2">  
       <div class="product">  
         <div class="heading">Products</div>  
         <div class="div">Sell your Products</div>  
         <div class="div">Advertise</div>  
         <div class="div">Pricing</div>  
         <div class="div">Product Buisness</div>  
       </div>  
       <div class="services">  
         <div class="heading">Services</div>  
         <div class="div">Return</div>  
         <div class="div">Cash Back</div>  
         <div class="div">Affiliate Marketing</div>  
         <div class="div">Others</div>  
       </div>  
       <div class="Company">  
         <div class="heading">Company</div>  
         <div class="div">Complaint</div>  
         <div class="div">Careers</div>  
         <div class="div">Affiliate Marketing</div>  
         <div class="div">Support</div>  
       </div>  
       <div class="Get Help">  
         <div class="heading">Get Help</div>  
         <div class="div">Help Center</div>  
         <div class="div">Privacy Policy</div>  
         <div class="div">Terms</div>  
         <div class="div">Login</div>  
       </div>  
     </div>  
     <div class="footer3">Copyright © <h4>ShoPperZ</h4> 2021-2028</div>  
   </footer>  
   <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>  
   <script src="./ecommerce.js"></script>  
 </body>  
 </html>  