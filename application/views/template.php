<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Work Remotely</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
  <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
  <!--script src="js/less-1.3.3.min.js"></script-->
  <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

  <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/bootstrap-markdown.min.css" rel="stylesheet">


  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.png">

  <script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/scripts.js"></script>
</head>

<body>
<div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
      <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
           <?php echo anchor('jobs', '<strong>Remote Worker</strong>', array('class'=>'navbar-brand'));?>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="myModalLabel"><strong>會員登入</strong></h3>
              </div>
              <div class="modal-body">
                <!-- Form -->
                <form role="form">
                  <div class="form-group">
                    <h4>使用Email登入：</h4>
                    <label for="exampleInputEmail1">Email </label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">密碼</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div>
                   <label><input type="checkbox"> 記住我</label>
                 </div>
                 <div style="padding-top: 10px">
                   <button type="submit" class="btn btn-success">確認</button>
                 </div>
               </form>
               <!-- Form End -->
             </div>
             <div class="modal-footer">
              <div class="form-group" style="padding-right: 70%">
                <p class="help-block" style="display: inline">還不是會員嗎？</p>
                <?php echo anchor('user/register','立即註冊');?>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li>
              <a href="#">關於本站</a>
            </li>
            <li>
              <a href="#">訂閱</a>
            </li>
            <li>
              <a href="#">粉絲團</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li style="padding-right: 20px">
            <!-- Sign In  -->
              <button type="button" class="btn btn-success navbar-btn" data-toggle="modal" data-target="#myModal">Sign In</button>


              <!-- Sign In End -->
            </li>
          </ul>
        </div>
      </nav>
      <?php

      foreach($view as $view)
      {
        $this->load->view($view,$data);
      }
      ?>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>js/markdown.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/to-markdown.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap-markdown.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.hotkeys.js"></script>
</body>
</html>