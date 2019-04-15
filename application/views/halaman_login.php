<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>

    <style>
    .kiri{
        background-image: linear-gradient(to bottom right, rgba(0, 47, 75, .5), rgba(36, 33, 33, 0.5)),url("<?php echo base_url('assets/gambar/gambar-login.jpg'); ?>");
        background-attachment:fixed;
        background-repeat: no-repeat;
        color:white;
        font-family:'Indie Flower', cursive ;
        background-size: 100% 100%;
    }
    .glyphicon-hand-right{
        font-size: 75px;
    }
    @media (max-width: 767px){
        .kiri{
           display:none;
        }
        .kanan{
        background-image: linear-gradient(to bottom right, rgba(0, 47, 75, .5), rgba(36, 33, 33, 0.5)),url("<?php echo base_url('assets/gambar/gambar-login.jpg'); ?>");
        background-attachment:fixed;
        background-repeat: no-repeat;
        color:white;
        }
        .form-login{
            padding:5px;
            background-color:rgba(0, 0, 0, 0.5);
            opacity:70%;
        }
        .form-control{
            border-radius:0px;
        }
    }
   
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12  kiri" >
                <div class="text-center" style="padding:35.5% 0;">
                    <h1>Welcome to CMS CodeIqniter</h1>
                    <h2>For Login, You Can See Right</h2>
                    <span class="glyphicon glyphicon-hand-right"></span>

                </div>
 
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 kanan">
                <div class="text-center" style="padding:35.5% 0;" >
                    <div class="form-login" >
                    <h2>Account Login</h2>
                    <form method="post" action="<?php echo base_url("login/cek_login");?>">
                        <div class="row pic">
                            <div class="col-md-12 col-sm-12 form-group">
                                <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" name="username" placeholder="username">
                                </div>
                                <div class="col-md-6 col-sm-6 ">
                                <input type="Password" class="form-control" name="password" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 form-group">
                        <button class="btn btn-success form-control">Sign In <span class="glyphicon glyphicon-ok"></span></button>
                        </div>
                    </form>
                    </div>
                </div>
 
            </div>
        </div>        
    </div>
</body>
</html>