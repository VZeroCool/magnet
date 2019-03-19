<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Magnet :: Purchase Order</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <?php include 'modules/headdata.php';?>

    <style type="text/css">
        th {
            background-color: #e9e8e8;
            color: black !important;
            border: 0px !important;
            font-weight: 100 !important;
        }
        table {
            counter-reset: serial-number;
        }
        .counterCell:before {
            content: counter(serial-number);
            counter-increment: serial-number;
        }
        table th:first-child {
            border-top-left-radius: 6px !important;
            width: 53px;
        }

        table th:last-child {
            border-top-right-radius: 6px !important;
        }

        table td:last-child {
            width:22px;
            padding: 12px 11px 12px 11px !important;
        }

        td {
            border: 1px solid #e7ecf1 !important;
            background: rgb(255,255,255);
        }
            td:focus {
               outline : none;
            }

            td img {
                width: 11px;
                height: 15px;
                text-align: center;
            }
    </style>

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
                            <span>Purchase Order</span>
                        </li>
                    </ul>
                    <div class="page-toolbar">
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-sm editcompany">
                                <a href="purchase_order_records.php">View Records</a>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- END PAGE BAR -->
                <div class="row" style="margin-top:20px">
                    <div class="col-md-12">
                        <div class="portlet light companydiv" style="border-bottom: 2px solid #418bca;">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active" id="tab_1_1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group margin-zero">
                                                <div class="col-md-10 margin-zero padding-zero">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PERSONAL INFO TAB -->
                            </div>
                            <div class="portlet-title" style="border-bottom: 0px;margin-bottom: 0px;">
                                <div class="caption caption-md">
                                    <i class="icon-globe theme-font hide"></i>
                                    <span class="caption-subject bold compheading">Vendor Information : </span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <!-- PERSONAL INFO TAB -->
                                    <div class="tab-pane active" id="tab_1_1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-3 pb-15">
                                                        <div class="form-group form-md-line-input margin-zero">
                                                            <input id="form_control_1" type="text" placeholder="MAPL/001" class="form-control padding-zero font-bold">
                                                            <label class="control-label margin-zero font-light">Purchase Order Number : </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 pb-15">
                                                        <div class="form-group form-md-line-input margin-zero">
                                                            <input type="text" placeholder="(dd/mm/yyyy)" data-date-format="dd-mm-yyyy" class="form-control form-control-inline date-picker padding-zero font-bold" size="16">
                                                            <label class="control-label margin-zero font-light">Order Date : </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pb-15">
                                                        <div class="form-group form-md-line-input margin-zero">
                                                            <input id="form_control_1" type="text" placeholder="Enter Vendor Name" class="form-control padding-zero font-bold">
                                                            <label class="control-label margin-zero font-light">Vendor Name : </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 pb-15">
                                                        <div class="form-group form-md-line-input margin-zero">
                                                            <input type="text" placeholder="Enter GST Number" class="form-control padding-zero font-bold">
                                                            <label class="control-label margin-zero font-light">GST Number : </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 pb-15">
                                                        <div class="form-group form-md-line-input margin-zero">
                                                            <select class="form-control font-bold" id="form_control_1">
                                                                <option value="1" selected="">Select Place of Supply</option>
                                                                <option value="2">Option 2</option>
                                                                <option value="3">Option 3</option>
                                                                <option value="4">Option 4</option>
                                                            </select>
                                                            <label class="control-label margin-zero font-light">Place of Supply : </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pb-15">
                                                        <div class="form-group form-md-line-input margin-zero">
                                                            <input type="text" placeholder="Enter Billing Address" class="form-control padding-zero font-bold">
                                                            <label class="control-label margin-zero font-light">Address : </label>
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
                        </div>
                        <div class="portlet light padding-zero">
                            <div class="md-radio-inline topselection">
                                <a href="javascript:;" class="md-radio">
                                    <input type="radio" id="radio10" name="radio12" data-target="#tab_1_1" class="md-radiobtn"data-toggle="tab">
                                    <label for="radio10" class="active">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box font-bold"></span> Exclusive of Tax
                                    </label>
                                </a>
                                <a href="javascript:;" class="md-radio">
                                    <input type="radio" id="radio11" name="radio12" data-target="#tab_1_1" class="md-radiobtn"data-toggle="tab">
                                    <label for="radio11">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box font-bold"></span> Inclusive of Tax
                                    </label>
                                </a>
                                <a href="javascript:;" class="md-radio">
                                    <input type="radio" id="radio12" name="radio12" data-target="#tab_1_1" class="md-radiobtn"data-toggle="tab">
                                    <label for="radio12">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box font-bold"></span> Out of scope of Tax
                                    </label>
                                </a>
                            </div>
                            <div class="portlet-body padding-zero">
                                <div class="table-scrollable">
                                    <table id="invoice" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Product/Service Description</th>
                                                <th>HSN / SAC Code</th>
                                                <th>Qty</th>
                                                <th>Unit</th>
                                                <th>Rate</th>
                                                <th>Discount</th>
                                                <th>Taxable Value</th>
                                                <th>Tax</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="tablebody">
                                            <tr>
                                                <td contenteditable="true" class="counterCell"></td>
                                                <td contenteditable="true"></td>
                                                <td contenteditable="true"></td>
                                                <td contenteditable="true"></td>
                                                <td contenteditable="true"></td>
                                                <td contenteditable="true"></td>
                                                <td contenteditable="true"></td>
                                                <td contenteditable="true"></td>
                                                <td contenteditable="true"></td>
                                                <td>
                                                    <a href="javascript:;">
                                                        <img src="image/delete.png" />
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td contenteditable="true" class="counterCell"></td>
                                                <td contenteditable="true"></td>
                                                <td contenteditable="true"></td>
                                                <td contenteditable="true"></td>
                                                <td contenteditable="true"></td>
                                                <td contenteditable="true"></td>
                                                <td contenteditable="true"></td>
                                                <td contenteditable="true"></td>
                                                <td contenteditable="true"></td>
                                                <td>
                                                    <a href="javascript:;">
                                                        <img src="image/delete.png" />
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td contenteditable="true" class="counterCell"></td>
                                                <td contenteditable="true"></td>
                                                <td contenteditable="true"></td>
                                                <td contenteditable="true"></td>
                                                <td contenteditable="true"></td>
                                                <td contenteditable="true"></td>
                                                <td contenteditable="true"></td>
                                                <td contenteditable="true"></td>
                                                <td contenteditable="true"></td>
                                                <td>
                                                    <a href="javascript:;">
                                                        <img src="image/delete.png" />
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row pl-15 pr-15">
                                    <div class="col-md-1">
                                        <div class="form-group form-md-line-input padding-zero margin-zero">
                                            <input id="linenumber" type="text" class="form-control padding-zero font-bold">
                                        </div>
                                    </div>
                                    <div class="col-md-10 pb-15">
                                        <div class="form-group margin-zero">
                                            <button id="addlines" type="button" class="btn btn-primary btn-addlines">ADD LINES</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pl-15 pr-15">
                                    <div class="col-md-5"></div>
                                    <div class="col-md-7">
                                        <div class="portlet-body form">
                                            <div class="form-horizontal pr-15">
                                                <div class="form-body padding-zero">
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                            <label class="control-label  pull-right">Taxable Value  : </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class=" control-label pull-right">$1,00,00,000</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                            <label class="control-label  pull-right">Other Expences : </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="text" class="col-md-3 form-control pull-right" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                            <label class="control-label  pull-right">Total CGST : </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class=" control-label pull-right">$1,00,00,000</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                            <label class="control-label  pull-right">Total SGST : </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class=" control-label pull-right">$1,00,00,000</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                            <label class="control-label  pull-right">Total IGST : </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class=" control-label pull-right">$1,00,00,000</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                            <label class="control-label  pull-right">Total Tax : </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class=" control-label pull-right">$1,00,00,000</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                            <label class="control-label  pull-right">Total Amount : </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class=" control-label pull-right">$1,00,00,000</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                            <label class="control-label  pull-right">Total Amount in Words : </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class=" control-label pull-right">One Two Three Four</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 modal-footer modalfooter">
                                        <div class="pull-left">
                                            <button type="button" class="btn btn-outline dark modalbtn">CLEAR</button>
                                        </div>
                                        <div class="pull-right">
                                            <button type="button" class="btn btn-outline dark modalbtn">SAVE</button>
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
                $('input[name="radio12"]').click(function () {
                    $(this).tab('show');
                    $('input[name="radio12"]').next().removeClass('active');
                    $(this).next().addClass('active');

                });
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

                $('#addlines').click(function () {
                    var linenumber = $('#linenumber').val();
                    var tablerow = '<tr><td contenteditable="true" class="counterCell"></td><td contenteditable="true"></td><td contenteditable="true"></td><td contenteditable="true"></td><td contenteditable="true"></td><td contenteditable="true"></td><td contenteditable="true"></td><td contenteditable="true"></td><td contenteditable="true"></td><td><a href="javascript:;"><img src="image/delete.png" /></a></td></tr>';
                    for (i = 0; i < linenumber; i++) {
                        $('#invoice tbody').append(tablerow);
                    }
                    $('#linenumber').val('');
                });

            });
        </script>
</body>
</html>
