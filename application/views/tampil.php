<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/sidebar.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

    <style>
    


    </style>

</head>
<body>
<div id="wrapper" class="active">

<div id="sidebar-wrapper">
      <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
      </ul>
        <ul class="sidebar-nav" id="sidebar">     
          <li><a>Dashboard<span class="sub_icon glyphicon glyphicon-dashboard"></span></a></li>
          <li><a>Artikel<span class="sub_icon glyphicon glyphicon-book"></span></a></li>
          <li><a>Profil<span class="sub_icon glyphicon glyphicon glyphicon-user"></span></a></li>
        </ul>
      </div>
          
      <!-- Page content -->

        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
          <div class="row">
              <div class="col-md-12">
              <p class="well lead">An Experiment using the sidebar template from startbootstrap.com which I integrated in my website (<a href="http://animeshmanglik.name">animeshmanglik.name</a>)</p>
              <p class="well lead">Click on the Menu to Toggle Sidebar . Hope you enjoy it!</p> 
            </div>
          </div>
        </div>
      </div>
</div>


<?php echo $this->session->userdata("username"); ?>
<?php echo $this->session->userdata("role"); ?>
</div>
<script>
$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
});
</script>
</body>
</html>