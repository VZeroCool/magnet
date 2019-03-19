<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Magnet :: Sales Records</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <?php include 'modules/headdata.php';?>
    <style type="text/css">
        tr {
            background-color: #f5f5f5 !important;
            border-bottom: 6px solid white !important;
            border-radius: 6px !important;
        }

        th {
            background: #1b9cd8 !important;
            color: #ffffff !important;
            border-right: 1px #eef2f2 !important;
            font-weight: 100 !important;
        }

        td {
            color: #000000;
        }

        table th:first-child {
            border-top-left-radius: 6px !important;
            border-bottom-left-radius: 10px !important;
            width: 50px;
        }

        table th:last-child {
            border-top-right-radius: 6px !important;
            border-bottom-right-radius: 10px !important;
        }

        table td:first-child {
            border-top-left-radius: 10px !important;
            border-bottom-left-radius: 10px !important;
        }

        table td:last-child {
            border-top-right-radius: 10px !important;
            border-bottom-right-radius: 10px !important;
            padding-top:11px !important;
        }

        td img {
            float: right;
            width: 11px;
            height: 15px;
            text-align:center;
        }
        .portlet-body {
            border-bottom-left-radius: 6px !important;
            border-bottom-right-radius: 6px !important;
        }
    </style>
</head>
<!-- END HEAD -->
<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white">

    <?php include 'modules/header.php';?>
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar navbar-collapse collapse">
                <?php include 'modules/sidebar.php';?>
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
                            <span style="color: white;">Invoice</span>
                        </li>
                    </ul>
                </div>
                <!-- END PAGE BAR -->
                <div class="row" style="margin-top:20px">
                    <div class="col-md-12">
                        <div class="portlet box">
                            <div class="portlet-title blackcolor filter_heading-radius p-r-0">
                                <div class="caption filter_div">
                                    <a><i class="material-icons">filter_list</i><span>Filter</span></a>
                                    <div class="input-icon right" style="display: inline-block; margin-left: 15px;">
                                        <i class="icon-magnifier"></i>
                                        <input id="txtSearch" type="text" class="form-control input-circle" placeholder="  Search ... ">
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body" style="padding: 5px 18px 1px 20px;">
                                <div class="table-responsive">
                                    <div class="table-scrollable table-scrollable-borderless">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th> Sr No. </th>
                                                    <th> Account Name</th>
                                                    <th> A/C Head </th>
                                                    <th style="width:150px"> GSTIN </th>
                                                    <th> PAN </th>
                                                    <th>A/C Balance</th>
                                                    <th> </th>
                                                    <th> </th>
                                                </tr>
                                            </thead>
                                            <tbody id="tablebody">
                                                <tr>
                                                    <td> 1 </td>
                                                    <td> Vikas Jentilal Vegda </td>
                                                    <td> Devange Vadalia </td>
                                                    <td> 789456320178945 </td>
                                                    <td>23GHJJSF23</td>
                                                    <td>
                                                        50000<span class="label label-sm crdr"> Cr </span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;">
                                                            <img src="image/edit.png" />
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;">
                                                            <img src="image/delete.png" />
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 2 </td>
                                                    <td> Jacob </td>
                                                    <td> Nilson </td>
                                                    <td> 11120022 </td>
                                                    <td>23GHJJSF236</td>
                                                    <td>
                                                        5000<span class="label label-sm crdr"> Dr </span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;">
                                                            <img src="image/edit.png" />
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;">
                                                            <img src="image/delete.png" />
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 3 </td>
                                                    <td> Larry </td>
                                                    <td> Cooper </td>
                                                    <td> 11120022 </td>
                                                    <td>23GHJJSF236</td>
                                                    <td>
                                                        5000<span class="label label-sm crdr"> Cr </span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;">
                                                            <img src="image/edit.png" />
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;">
                                                            <img src="image/delete.png" />
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 4 </td>
                                                    <td> Sandy </td>
                                                    <td> Lim </td>
                                                    <td> 11120022 </td>
                                                    <td>23GHJJSF236</td>
                                                    <td>
                                                        5000<span class="label label-sm crdr"> Dr </span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;">
                                                            <img src="image/edit.png" />
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;">
                                                            <img src="image/delete.png" />
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PAGE HEADER-->
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
        <!-- BEGIN QUICK SIDEBAR -->
        <a href="javascript:;" class="page-quick-sidebar-toggler">
            <i class="icon-login"></i>
        </a>
        <!-- END QUICK SIDEBAR -->
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
    <!-- full width -->

    <!-- BEGIN CORE PLUGINS -->

    <?php include 'modules/footer.php';?>

    <!-- END THEME LAYOUT SCRIPTS -->
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

            $("#txtSearch").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#tablebody tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });

            $("#chkshippingaddr").change(function () {
                if (this.checked) {
                    $("#shippingaddress").hide();
                }
                else {
                    $("#shippingaddress").show();
                }
            });
        });
    </script>
</body>
</html>
