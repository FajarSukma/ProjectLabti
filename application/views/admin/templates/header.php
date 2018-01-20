<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Messi Website</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<? echo base_url();?>assets/admin/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<? echo base_url();?>assets/admin/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="<? echo base_url();?>assets/admin/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<? echo base_url();?>assets/admin/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<? echo base_url();?>assets/admin/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<? echo base_url();?>assets/admin/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace('isi');
    </script>
  </head>
  
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header"><a href="<? echo base_url('admin_c')?>" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Messi</strong><strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">M</strong><strong>A</strong></div></a>
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <ul class="right-menu list-inline no-margin-bottom">    
            
            <li class="list-inline-item logout"><a id="logout" href="<? echo base_url('logout_c');?>" class="nav-link">Logout <i class="icon-logout"></i></a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      

      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        
        <ul class="list-unstyled">
                <li><a href="<? echo base_url('admin_c')?>"> <i class="icon-home"></i>Home </a></li>
                <li><a href="<? echo base_url('update_c')?>"> <i class="icon-grid"></i>Data </a></li>
                <li><a href="<?echo base_url('form_c');?>"> <i class="icon-padnote"></i>Tambah Berita </a></li>
                <li><a href="<?echo base_url('formstat_c');?>"> <i class="icon-chart"></i>Update Stat </a></li>
                
      </nav>
      