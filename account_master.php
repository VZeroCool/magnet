<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Magnet :: Account Detail</title>
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
                            <span style="color: white;">Account Master</span>
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
                                <div class="actions" style="padding:0px">
                                    <div class="btn-group">
                                        <button id="sample_editable_1_new" class="btn green addaccountcolor" href="#addaccount" data-toggle="modal">
                                            <a>ADD ACCOUNTS</a>
                                            <i class="material-icons">add</i>
                                        </button>
                                        <button id="sample_editable_1_new" class="btn green importaccountcolor" href="#addproduct" data-toggle="modal">
                                            <a>IMPORT ACCOUNTS</a>
                                            <i class="material-icons">add</i>
                                        </button>
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
        <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
            <div class="page-quick-sidebar">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab">
                            Users
                            <span class="badge badge-danger">2</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab">
                            Alerts
                            <span class="badge badge-success">7</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            More
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-bell"></i> Alerts
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-info"></i> Notifications
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-speech"></i> Activities
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-settings"></i> Settings
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                        <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                            <h3 class="list-heading">Staff</h3>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">8</span>
                                    </div>
                                    <img class="media-object" src="image/avatar3.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Bob Nilson</h4>
                                        <div class="media-heading-sub"> Project Manager </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="image/avatar1.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Nick Larson</h4>
                                        <div class="media-heading-sub"> Art Director </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">3</span>
                                    </div>
                                    <img class="media-object" src="image/avatar4.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Deon Hubert</h4>
                                        <div class="media-heading-sub"> CTO </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="image/avatar2.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Ella Wong</h4>
                                        <div class="media-heading-sub"> CEO </div>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="list-heading">Customers</h3>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-warning">2</span>
                                    </div>
                                    <img class="media-object" src="image/avatar6.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Lara Kunis</h4>
                                        <div class="media-heading-sub"> CEO, Loop Inc </div>
                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="label label-sm label-success">new</span>
                                    </div>
                                    <img class="media-object" src="image/avatar7.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Ernie Kyllonen</h4>
                                        <div class="media-heading-sub">
                                            Project Manager,
                                            <br> SmartBizz PTL
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="image/avatar8.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Lisa Stone</h4>
                                        <div class="media-heading-sub"> CTO, Keort Inc </div>
                                        <div class="media-heading-small"> Last seen 13:10 PM </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">7</span>
                                    </div>
                                    <img class="media-object" src="image/avatar9.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Deon Portalatin</h4>
                                        <div class="media-heading-sub"> CFO, H&D LTD </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="image/avatar10.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Irina Savikova</h4>
                                        <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">4</span>
                                    </div>
                                    <img class="media-object" src="image/avatar11.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Maria Gomez</h4>
                                        <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="page-quick-sidebar-item">
                            <div class="page-quick-sidebar-chat-user">
                                <div class="page-quick-sidebar-nav">
                                    <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                        <i class="icon-arrow-left"></i>Back
                                    </a>
                                </div>
                                <div class="page-quick-sidebar-chat-user-messages">
                                    <div class="post out">
                                        <img class="avatar" alt="" src="image/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body"> When could you send me the report ? </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="image/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body"> Its almost done. I will be sending it shortly </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="image/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body"> Alright. Thanks! :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="image/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:16</span>
                                            <span class="body"> You are most welcome. Sorry for the delay. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="image/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body"> No probs. Just take your time :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="image/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:40</span>
                                            <span class="body"> Alright. I just emailed it to you. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="image/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body"> Great! Thanks. Will check it right away. </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="image/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:40</span>
                                            <span class="body"> Please let me know if you have any comment. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="image/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-quick-sidebar-chat-user-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type a message here...">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn green">
                                                <i class="icon-paper-clip"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                        <div class="page-quick-sidebar-alerts-list">
                            <h3 class="list-heading">General</h3>
                            <ul class="feeds list-items">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    You have 4 pending tasks.
                                                    <span class="label label-sm label-warning ">
                                                        Take action
                                                        <i class="fa fa-share"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> Just now </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-danger">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    New order received with
                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 30 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    Web server hardware needs to be upgraded.
                                                    <span class="label label-sm label-warning"> Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 2 hours </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-default">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <h3 class="list-heading">System</h3>
                            <ul class="feeds list-items">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    You have 4 pending tasks.
                                                    <span class="label label-sm label-warning ">
                                                        Take action
                                                        <i class="fa fa-share"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> Just now </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-danger">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    New order received with
                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 30 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-warning">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    Web server hardware needs to be upgraded.
                                                    <span class="label label-sm label-default "> Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 2 hours </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                        <div class="page-quick-sidebar-settings-list">
                            <h3 class="list-heading">General Settings</h3>
                            <ul class="list-items borderless">
                                <li>
                                    Enable Notifications
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                                <li>
                                    Allow Tracking
                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                                <li>
                                    Log Errors
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                                <li>
                                    Auto Sumbit Issues
                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                                <li>
                                    Enable SMS Alerts
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                            </ul>
                            <h3 class="list-heading">System Settings</h3>
                            <ul class="list-items borderless">
                                <li>
                                    Security Level
                                    <select class="form-control input-inline input-sm input-small">
                                        <option value="1">Normal</option>
                                        <option value="2" selected>Medium</option>
                                        <option value="e">High</option>
                                    </select>
                                </li>
                                <li>
                                    Failed Email Attempts
                                    <input class="form-control input-inline input-sm input-small" value="5" />
                                </li>
                                <li>
                                    Secondary SMTP Port
                                    <input class="form-control input-inline input-sm input-small" value="3560" />
                                </li>
                                <li>
                                    Notify On System Error
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                                <li>
                                    Notify On SMTP Error
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                            </ul>
                            <div class="inner-content">
                                <button class="btn btn-success">
                                    <i class="icon-settings"></i> Save Changes
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END QUICK SIDEBAR -->
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
    <!-- full width -->
    <div id="addaccount" class="modal container fade" tabindex="-1">
        <div class="modal-header modalheader">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">Account Master/Ledger Info</h4>
        </div>
        <div class="modal-body">
            <div class="row" style="">
                <div class="col-md-12">
                    <div class="portlet light companydiv bordernone margin-zero">
                        <div class="portlet-body" style="padding-bottom: 5px !important;">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active" id="tab_1_1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label padding-zero bold compheading" for="form_control_1">Account Type : </label>
                                                <div class="col-md-10 margin-zero padding-zero">
                                                    <div class="md-radio-inline">
                                                        <div class="md-radio">
                                                            <input type="radio" id="radio17" name="radio15" class="md-radiobtn" checked="">
                                                            <label for="radio17">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box font-bold"></span> Customer
                                                            </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="radio18" name="radio15" class="md-radiobtn">
                                                            <label for="radio18">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box font-bold"></span> Vender
                                                            </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="radio19" name="radio15" class="md-radiobtn">
                                                            <label for="radio19">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box font-bold"></span> Others
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PERSONAL INFO TAB -->
                            </div>
                        </div>
                        <div class="portlet-title pt-15" style="border-bottom: 0px;margin-bottom: 0px;">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span class="caption-subject bold compheading">Basic Info : </span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active" id="tab_1_1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input id="form_control_1" type="text" placeholder="Enter Name" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light"><span class="mandatory-sign">*</span>Account Name : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input id="form_control_1" type="text" placeholder="Enter Company Name" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light"><span class="mandatory-sign">*</span>Company Name : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 pb-15">
                                                    <div class="timeline-badge">
                                                        <img class="img-circle timeline-badge-userpic" src="image/avatar1.jpg">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <select class="form-control font-bold" id="form_control_1">
                                                            <option value="1" selected="">Select Display Name as</option>
                                                            <option value="2">Option 2</option>
                                                            <option value="3">Option 3</option>
                                                            <option value="4">Option 4</option>
                                                        </select>
                                                        <label class="control-label margin-zero font-light">Display Name as : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <select class="form-control font-bold" id="form_control_1">
                                                            <option value="1" selected="">Select Account Head</option>
                                                            <option value="2">Option 2</option>
                                                            <option value="3">Option 3</option>
                                                            <option value="4">Option 4</option>
                                                        </select>
                                                        <label class="control-label margin-zero font-light">Account Head : </label>
                                                    </div>
                                                </div>
                                        
                                                <div class="col-md-3 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="Enter Group Name" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">Group Name : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="Enter Sub Group Name" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">Sub Group Name : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="0.00" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">Opening Balance : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 pb-15">
                                                <div class="form-group form-md-line-input margin-zero">
                                                    <select class="form-control font-bold" id="form_control_1">
                                                        <option value="1" selected="">Select Type</option>
                                                        <option value="2">Debit</option>
                                                        <option value="3">Credit</option>
                                                    </select>
                                                    <label class="control-label margin-zero font-light">Debit / Credit : </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pb-15">
                                                <div class="form-group form-md-line-input margin-zero">
                                                    <input type="text" placeholder="(dd/mm/yyyy)" data-date-format="dd-mm-yyyy" class="form-control form-control-inline date-picker padding-zero font-bold" size="16">
                                                    <label class="control-label margin-zero font-light">As of Date : </label>
                                                </div>
                                            </div>
                                                <div class="col-md-4 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <select class="form-control font-bold" id="form_control_1">
                                                            <option value="1" selected="">Select Registration Type</option>
                                                            <option value="2">Registered under Regular Scheme</option>
                                                            <option value="3">Registered under Composition Scheme</option>
                                                            <option value="4">Unregistered</option>
                                                            <option value="5">Consumer</option>
                                                            <option value="6">Overseas</option>
                                                            <option value="7">SEZ</option>
                                                            <option value="8">Deemed Export</option>
                                                        </select>
                                                        <label class="control-label margin-zero font-light"><span class="mandatory-sign">*</span>GST Registration Type : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="Enter GSTIN Number" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">GSTIN : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="AAAAA9999A" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">PAN Number : </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--</form>-->
                                </div>
                                <!-- END PERSONAL INFO TAB -->
                            </div>
                        </div>
                        <div class="portlet-title pt-15" style="border-bottom: 0px;margin-bottom: 0px;">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span class="caption-subject bold compheading">Registered Address : </span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active" id="tab_1_1">
                                    <form role="form" action="#">
                                        <div class="row">
                                            <div class="col-md-12 pb-15">
                                                <div class="form-group form-md-line-input margin-zero">
                                                    <input type="text" placeholder="Enter Company Address" class="form-control padding-zero font-bold">
                                                    <label class="control-label margin-zero font-light"><span class="mandatory-sign">*</span>Address : </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 pb-15">
                                                <div class="form-group form-md-line-input margin-zero">
                                                    <input type="text" placeholder="Enter City" class="form-control padding-zero font-bold">
                                                    <label class="control-label margin-zero font-light"><span class="mandatory-sign">*</span>City : </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 pb-15">
                                                <div class="form-group form-md-line-input margin-zero">
                                                    <input type="text" placeholder="Enter Pincode" class="form-control padding-zero font-bold">
                                                    <label class="control-label margin-zero font-light"><span class="mandatory-sign">*</span>Pincode : </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 pb-15">
                                                <div class="form-group form-md-line-input margin-zero">
                                                    <input type="text" placeholder="Enter State" class="form-control padding-zero font-bold">
                                                    <label class="control-label margin-zero font-light"><span class="mandatory-sign">*</span>State : </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 pb-15">
                                                <div class="form-group form-md-line-input margin-zero">
                                                    <input type="text" placeholder="Enter Country" class="form-control padding-zero font-bold">
                                                    <label class="control-label margin-zero font-light">Country : </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 pb-15">
                                                <div class="form-group form-md-line-input margin-zero">
                                                    <input type="text" placeholder="Enter STD Code" class="form-control padding-zero font-bold">
                                                    <label class="control-label margin-zero font-light">STD Code : </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 pb-15">
                                                <div class="form-group form-md-line-input margin-zero">
                                                    <input type="text" placeholder="Enter Office Number" class="form-control padding-zero font-bold">
                                                    <label class="control-label margin-zero font-light">Office Number : </label>
                                                </div>
                                            </div>
                                            <div class="col-md-1 pb-15">
                                                <div class="form-group form-md-line-input margin-zero">
                                                    <input type="text" placeholder="" class="form-control padding-zero font-bold" value="91" disabled="disabled">
                                                    <label class="control-label margin-zero font-light"><span class="mandatory-sign">*</span>Code</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 pb-15">
                                                <div class="form-group form-md-line-input margin-zero">
                                                    <input type="text" placeholder="9987654321" class="form-control padding-zero font-bold">
                                                    <label class="control-label margin-zero font-light"><span class="mandatory-sign">*</span>Mobile Number :</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 pb-15">
                                                <div class="form-group form-md-line-input margin-zero">
                                                    <input type="text" placeholder="Enter Email" class="form-control padding-zero font-bold">
                                                    <label class="control-label margin-zero font-light"><span class="mandatory-sign">*</span>Email Id : </label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END PERSONAL INFO TAB -->
                            </div>
                        </div>
                        <div class="portlet-title pt-15" style="border-bottom: 0px;margin-bottom: 0px;">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span class="caption-subject bold compheading">Shipping Address : </span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active" id="tab_1_1">
                                    <form role="form" action="#">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group margin-zero">
                                                    <div class="mt-checkbox-list">
                                                        <label class="mt-checkbox font-bold">
                                                            Same as Registered Address
                                                            <input id="chkshippingaddr" type="checkbox" value="1" name="test">
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="shippingaddress">
                                                <div class="col-md-12 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="Enter Company Address" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">Address : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="Enter City Name" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">City : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="Enter Pincode" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">Pincode : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="Enter State" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">State : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="Enter Country" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">Country : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="Enter STD Code" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">STD Code : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="Enter Office Number" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">Office Number : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="" class="form-control padding-zero font-bold" value="91" disabled="disabled">
                                                        <label class="control-label margin-zero font-light">Code</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="9987654321" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">Mobile Number :</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="Enter Email" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">Email Id : </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END PERSONAL INFO TAB -->
                            </div>
                        </div>
                        <div class="portlet-title pt-15" style="border-bottom: 0px;margin-bottom: 0px;">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span class="caption-subject bold compheading">Payment Method : </span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active" id="tab_1_1">
                                    <form role="form" action="#">
                                        <div class="row">
                                            <div class="col-md-3 pb-15">
                                                <div class="form-group form-md-line-input margin-zero">
                                                    <select class="form-control font-bold" id="form_control_1">
                                                        <option value="1" selected="">Select Payment Method</option>
                                                        <option value="2">Cash</option>
                                                        <option value="3">Cheque</option>
                                                        <option value="4">NEFT/RTGS</option>
                                                        <option value="5">E-Payment</option>
                                                        <option value="5">Other</option>
                                                    </select>
                                                    <label class="control-label margin-zero font-light">Payment Method : </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 pb-15">
                                                <div class="form-group form-md-line-input margin-zero">
                                                    <select class="form-control font-bold" id="form_control_1">
                                                        <option value="1" selected="">Select Terms</option>
                                                        <option value="2">15 Days</option>
                                                        <option value="3">30 Days</option>
                                                        <option value="4">45 Days</option>
                                                        <option value="4">60 Days</option>
                                                        <option value="4">90 Days</option>
                                                        <option value="4">180 Days</option>
                                                    </select>
                                                    <label class="control-label margin-zero font-light">Select Terms : </label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END PERSONAL INFO TAB -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer modalfooter">
            <div class="pull-left">
                <button type="button" class="btn btn-outline dark modalbtn">CLEAR</button>
            </div>
            <div class="pull-right">
                <button type="button" class="btn btn-outline dark modalbtn">SAVE</button>
            </div>
        </div>
    </div>

    <div id="addproduct" class="modal container fade" tabindex="-1">
        <div class="modal-header modalheader">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">Product Master</h4>
        </div>
        <div class="modal-body">
            <div class="row" style="">
                <div class="col-md-12">
                    <div class="portlet light companydiv bordernone margin-zero">
                        <div class="portlet-body pb-15">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active" id="tab_1_1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group margin-zero">
                                                <div class="col-md-10 margin-zero padding-zero">
                                                    <div class="md-radio-inline">
                                                        <div class="md-radio">
                                                            <input type="radio" id="radio53" name="radio2" class="md-radiobtn" checked="">
                                                            <label for="radio53">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box font-bold"></span> Product
                                                            </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="radio54" name="radio2" class="md-radiobtn">
                                                            <label for="radio54">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box font-bold"></span> Service
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PERSONAL INFO TAB -->
                            </div>
                        </div>
                        <div class="portlet-title" style="border-bottom: 0px;margin-bottom: 0px;">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span class="caption-subject bold compheading">Basic Info : </span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active" id="tab_1_1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input id="form_control_1" type="text" placeholder="Enter Your Name" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">Your Name : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input id="form_control_1" type="text" placeholder="Enter Your HSN Code" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">HSN Code : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3" style="padding-bottom:30px">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <label class="control-label margin-zero font-light">for HSN info please <a href="">click here</a></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 pb-15">
                                                    <div class="timeline-badge">
                                                        <img class="img-circle timeline-badge-userpic" src="image/avatar1.jpg">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <select class="form-control font-bold" id="form_control_1">
                                                            <option value="1" selected="">Select Unit</option>
                                                            <option value="2">Option 2</option>
                                                            <option value="3">Option 3</option>
                                                            <option value="4">Option 4</option>
                                                        </select>
                                                        <label class="control-label margin-zero font-light">Unit : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <select class="form-control font-bold" id="form_control_1">
                                                            <option value="1" selected="">Select Category</option>
                                                            <option value="2">Option 2</option>
                                                            <option value="3">Option 3</option>
                                                            <option value="4">Option 4</option>
                                                        </select>
                                                        <label class="control-label margin-zero font-light">Category : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <select class="form-control font-bold" id="form_control_1">
                                                            <option value="1" selected="">Select Service</option>
                                                            <option value="2">Option 2</option>
                                                            <option value="3">Option 3</option>
                                                            <option value="4">Option 4</option>
                                                        </select>
                                                        <label class="control-label margin-zero font-light">Service Type : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="Enter Initial Quantity" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">Initial Quantity on Hand : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="Select Your Business" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">As of Date : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="Enter Low Stock Alert" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">Low Stock Alert : </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--</form>-->
                                </div>
                                <!-- END PERSONAL INFO TAB -->
                            </div>
                        </div>
                        <div class="portlet-title pt-15" style="border-bottom: 0px;margin-bottom: 0px;">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span class="caption-subject bold compheading">Sales Info : </span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active" id="tab_1_1">
                                    <form role="form" action="#">
                                        <div class="row">
                                            <div class="col-md-4 pb-15">
                                                <div class="form-group form-md-line-input margin-zero">
                                                    <input type="text" placeholder="Enter Your Sales Price" class="form-control padding-zero font-bold">
                                                    <label class="control-label margin-zero font-light">Sales Price : </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pb-15">
                                                <div class="form-group form-md-line-input margin-zero">
                                                    <select class="form-control font-bold" id="form_control_1">
                                                        <option value="1" selected="">Select Income Amount</option>
                                                        <option value="2">Option 2</option>
                                                        <option value="3">Option 3</option>
                                                        <option value="4">Option 4</option>
                                                    </select>
                                                    <label class="control-label margin-zero font-light">Income Amount : </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pb-15">
                                                <div class="form-group form-md-line-input margin-zero">
                                                    <select class="form-control font-bold" id="form_control_1">
                                                        <option value="1" selected="">Select Tax</option>
                                                        <option value="2">Option 2</option>
                                                        <option value="3">Option 3</option>
                                                        <option value="4">Option 4</option>
                                                    </select>
                                                    <label class="control-label margin-zero font-light">Tax : </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pb-15">
                                            </div>
                                            <div class="col-md-4" style="padding-bottom:0px">
                                                <div class="form-group margin-zero">
                                                    <div class="mt-checkbox-list">
                                                        <label class="mt-checkbox font-bold">
                                                            Inclusive of TAX
                                                            <input id="chkshippingaddr" type="checkbox" value="1" name="test">
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END PERSONAL INFO TAB -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer modalfooter">
            <div class="pull-left">
                <button type="button" data-dismiss="modal" class="btn btn-outline dark modalbtn" style="border-right: 1px solid #458fec;">CANCEL</button>
                <button type="button" class="btn btn-outline dark modalbtn">CLEAR</button>
            </div>
            <div class="pull-right">
                <button type="button" data-dismiss="modal" class="btn btn-outline dark modalbtn" style="border-right: 1px solid #458fec;">SAVE</button>
                <button type="button" class="btn btn-outline dark modalbtn">SAVE AND SEND</button>
            </div>
        </div>
    </div>

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
