<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Magnet :: Company Detail</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <?php include 'modules/headdata.php';?>
</head>
<!-- END HEAD -->
<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white">
    <!-- BEGIN HEADER -->
    <?php include 'modules/header.php';?>
    <!-- END HEADER -->
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <?php include 'modules/sidebar.php';?>
                <!-- END SIDEBAR MENU -->
            </div>
            <!-- END SIDEBAR -->
        </div>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
                <!-- BEGIN PAGE BAR -->
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <span>Dashboard</span>
                        </li>
                    </ul>
                    <div class="page-toolbar dashboard-year">
                        <div class="pull-right">
                            <select>
                                <option>2018 - 2019</option>
                                <option>2017 - 2018</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- END PAGE BAR -->
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
        <!-- BEGIN QUICK SIDEBAR -->
        <a href="javascript:;" class="page-quick-sidebar-toggler">
            <i class="icon-login"></i>
        </a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
    
    <?php include 'modules/footer.php';?>
    
    <script type="text/javascript">
        $(document).ready(function () {
            $("#limasterarrowdown").hide();
            $("#lidataentryarrowdown").hide();
            $("#ligmailmenuarrowdown").hide();

            if ($("#limaster").hasClass("open")) {
                $("#limasterarrowup").hide();
                $("#limasterarrowdown").show();
            }
            else {
                $("#limasterarrowup").show();
                $("#limasterarrowdown").hide();
            }

            var sidebarwidth = "50";

            $(".sidebar-toggler").click(function () {
                setTimeout(
                  function () {
                      if ($(".page-sidebar").width() < sidebarwidth) {
                          $("#ligmailmenuarrowup").hide();
                          $("#ligmailmenuarrowdown").hide();
                          $("#limasterarrowup").hide();
                          $("#limasterarrowdown").hide();
                          $("#lidataentryarrowup").hide();
                          $("#lidataentryarrowdown").hide();
                      }
                      else {
                          if ($("#ligmailmenu").hasClass("open")) {
                              $("#ligmailmenuarrowup").hide();
                              $("#ligmailmenuarrowdown").show();
                          }
                          else {
                              $("#ligmailmenuarrowup").show();
                              $("#ligmailmenuarrowdown").hide();
                          }
                          if ($("#limaster").hasClass("open")) {
                              $("#limasterarrowup").hide();
                              $("#limasterarrowdown").show();
                          }
                          else {
                              $("#limasterarrowup").show();
                              $("#limasterarrowdown").hide();
                          }
                          if ($("#lidataentry").hasClass("open")) {
                              $("#lidataentryarrowup").hide();
                              $("#lidataentryarrowdown").show();
                          }
                          else {
                              $("#lidataentryarrowup").show();
                              $("#lidataentryarrowdown").hide();
                          }
                      }
                  }, 50);
            });

            $("#ligmailmenu").click(function () {
                setTimeout(
                  function () {
                      if ($("#ligmailmenu").hasClass("open")) {
                          $('#ligmailmenu').removeClass('hide');
                          $('#lidashboard').addClass('hide');
                          $('#limaster').addClass('hide');
                          $('#lisales').addClass('hide');
                          $('#lipurchase').addClass('hide');
                          $('#lidataentry').addClass('hide');
                          $("#ligmailmenuarrowup").hide();
                          $("#ligmailmenuarrowdown").show();
                          $("#limasterarrowup").show();
                          $("#limasterarrowdown").hide();
                          $("#lidataentryarrowup").show();
                          $("#lidataentryarrowdown").hide();
                      }
                      else {
                          $('#lidashboard').removeClass('hide');
                          $('#limaster').removeClass('hide');
                          $('#lisales').removeClass('hide');
                          $('#lipurchase').removeClass('hide');
                          $('#lidataentry').removeClass('hide');
                          $("#ligmailmenuarrowup").show();
                          $("#ligmailmenuarrowdown").hide();
                      }
                  }, 50);
            });

            $("#limaster").click(function () {
                setTimeout(
                  function () {
                      if ($("#limaster").hasClass("open")) {
                          $("#limasterarrowup").hide();
                          $("#limasterarrowdown").show();
                          $("#ligmailmenuarrowup").show();
                          $("#ligmailmenuarrowdown").hide();
                          $("#lidataentryarrowup").show();
                          $("#lidataentryarrowdown").hide();
                      }
                      else {
                          $("#limasterarrowup").show();
                          $("#limasterarrowdown").hide();
                      }
                  }, 50);
            });

            $("#lidataentry").click(function () {
                setTimeout(
                  function () {
                      if ($("#lidataentry").hasClass("open")) {
                          $("#ligmailmenuarrowup").show();
                          $("#ligmailmenuarrowdown").hide();
                          $("#limasterarrowup").show();
                          $("#limasterarrowdown").hide();
                          $("#lidataentryarrowup").hide();
                          $("#lidataentryarrowdown").show();
                      }
                      else {
                          $("#lidataentryarrowup").show();
                          $("#lidataentryarrowdown").hide();
                      }
                  }, 50);
            });
        });
    </script>
</body>
</html>
