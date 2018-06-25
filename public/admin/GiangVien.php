<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Giảng Viên</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->

    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="#" class="logo">Nice <span class="lite">Admin</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img height="30px" width="30px" alt="" src="img/avatar2.jpg">
                            </span>
                            <span class="username">Jenifer Smith</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="login.html"><i class="icon_key_alt"></i> LogOut</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="">
            <a class="" href="MonHoc.php">
                          <i class="icon_book_alt"></i>
                          <span>Môn Học</span>
                      </a>
          </li>
           <li class="sub-menu ">
            <a href="LoaiGT.php" class="">
              <i class="icon_documents_alt"></i>
              <span>Loại Giáo Trình</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="Quyen.php" class="">
              <i class="icon_desktop"></i>
              <span>Phân Quyền</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="GiangVien.php" class="">
                          <i class="icon_contacts"></i>
                          <span>Giảng Viên</span>
                      </a>      
        </li>

         

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-bars"></i>Pages</li>
              <li><i class="fa fa-square-o"></i>Pages</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
              <section class="panel">
                <header class="panel-heading">
                  Danh sách Giảng Viên
                </header>

                <table class="table table-striped table-advance table-hover">
                  <tbody>
                    <tr>
                      <th><i class="icon_house"></i> Mã Giáo Viên</th>
                      <th><i class="icon_profile"></i> Tên Giáo Viên</th>
                      <th><i class="icon_mail"></i> Email</th>
                      <th><i class="icon_phone"></i> Số Điện Thoại 1</th>
                      <th><i class="icon_mobile"></i> Số Điện Thoại 2</th>
                      <th><i class="icon_key"></i> Mật Khẩu</th>
                      <th><i class=" icon_pushpin_alt"></i> Cơ Hữu</th>
                      <th><i class="icon_cogs"></i> Action</th>
                    </tr>
                    <tr>
                      <td>Angeline Mcclain</td>
                      <td>2004-07-06</td>
                      <td>dale@chief.info</td>
                      <td>dale@chief.info</td>
                      <td>dale@chief.info</td>
                      <td>dale@chief.info</td>
                      <td>dale@chief.info</td>
                      <td>
                        <div class="btn-group">
                          <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                          <a class="btn btn-success" href="#"><i class="icon_pencil-edit"></i></a>
                          <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                        </div>
                      </td>
                  </tbody>
                </table>
              </section>
            </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Thêm Giảng Viên
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                    <div class="form-group ">
                      <label for="cid" class="control-label col-lg-2">Mã Giảng Viên<span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cid" name="magv" type="text" required disabled="true" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Tên Giảng Viên<span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required placeholder="Nhập Tên GV" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">E-Mail <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="email" name="email" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cphone1" class="control-label col-lg-2">Số Điện Thoại 1</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cphone1" type="phone" name="phone1" minlength="10" maxlength="11" onkeypress="return isNumberKey(event);" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cphone2" class="control-label col-lg-2">Số Điện Thoại 2 <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cphone2" name="phone2" minlength="10" maxlength="11" type="phone" required onkeypress="return isNumberKey(event);" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cpass" class="control-label col-lg-2">Password</label>
                      <div class="col-lg-10">
                        <input class="form-control" type="password" name="password" id="cpass" minlength="5">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-2"></label>
                      <div class="col-lg-10">
                   
                        <label><input name="sample-radio" id="radio-01" value="1" type="radio" checked="" /> Cơ Hữu</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label><input name="sample-radio" id="radio-02" value="1" type="radio" /> Thỉnh Giảng  </label>
                     
                      </div>                    
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Thêm</button>
                        <button class="btn btn-default" type="button">Xóa</button>
                      </div>
                    </div>
                  </form>
                  <script type="text/javascript">
                    function isNumberKey(evt){
                      var charCode = (evt.which) ? evt.which : event.keyCode;
                      if(charCode == 59 || charCode == 46)
                      return true;
                      if (charCode > 31 && (charCode < 48 || charCode > 57))
                        return false;
                      return true;
                    }
                  </script>
                </div>

              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
