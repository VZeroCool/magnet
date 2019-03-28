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
                            <span>Company Master</span>
                        </li>
                    </ul>
                    <div class="page-toolbar padding-zero">
                        <div class="btn-group pull-right padding-zero">
                            <button type="button" class="btn btn-sm editcompany">
                                Edit Company
                            </button>
                        </div>
                    </div>
                </div>
                <!-- END PAGE BAR -->
                <div class="row" style="margin-top:20px">
                    <div class="col-md-12">
                        <div class="portlet light companydiv" style="border-bottom: 2px solid #418bca;">
                            <div class="portlet-title" style="border-bottom: 0px;margin-bottom: 0px;">
                                <div class="caption caption-md">
                                    <i class="icon-globe theme-font hide"></i>
                                    <span class="caption-subject bold compheading">Company Detail : </span>
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
                                                            <input id="form_control_1" type="text" placeholder="Enter Company Name" class="form-control padding-zero font-bold">
                                                            <label class="control-label margin-zero font-light"><span class="mandatory-sign">*</span>Company Name : </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 pb-15">
                                                        <div class="form-group form-md-line-input margin-zero">
                                                            <input type="text" placeholder="AAAAA9999A" id="pan-number" maxlength="10" class="form-control padding-zero font-bold">
                                                            <label class="control-label margin-zero font-light">PAN Number : </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 pb-15">
                                                        <div class="form-group form-md-line-input margin-zero">
                                                            <input type="text" id="tan-number" maxlength="10" placeholder="AAAA99999A" class="form-control padding-zero font-bold">
                                                            <label class="control-label margin-zero font-light">TAN Number : </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1 pb-15">
                                                        <div class="timeline-badge">
                                                            <img class="img-circle timeline-badge-userpic" src="image/avatar1.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 pb-15">
                                                        <div class="form-group form-md-line-input margin-zero">
                                                            <input type="text" placeholder="(dd/mm/yyyy)" data-date-format="dd-mm-yyyy" class="form-control form-control-inline date-picker padding-zero font-bold" value="01-04-2019" size="16">
                                                            <label class="control-label margin-zero font-light"><span class="mandatory-sign">*</span>Financial Year Start Date : </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 pb-15">
                                                        <div class="form-group form-md-line-input margin-zero">
                                                            <input type="text" placeholder="(dd/mm/yyyy)" data-date-format="dd-mm-yyyy" value="31-03-2020" class="form-control form-control-inline date-picker padding-zero font-bold">
                                                            <label class="control-label margin-zero font-light"><span class="mandatory-sign">*</span>Financial Year End Date : </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 pb-15">
                                                        <div class="form-group form-md-line-input margin-zero">
                                                            <input type="text" placeholder="(dd/mm/yyyy)" data-date-format="dd-mm-yyyy" class="form-control form-control-inline date-picker padding-zero font-bold">
                                                            <label class="control-label margin-zero font-light">Incorporation Date : </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 pb-15">
                                                        <div class="form-group form-md-line-input margin-zero">
                                                            <input type="text" id="book-start-date" placeholder="(dd/mm/yyyy)" data-date-format="dd-mm-yyyy" class="form-control form-control-inline date-picker padding-zero font-bold">
                                                            <label class="control-label margin-zero font-light"><span class="mandatory-sign">*</span>Book Start Date : </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 pb-15">
                                                        <div class="form-group form-md-line-input margin-zero">
                                                            <input type="text" id="mapl" placeholder="MAPL" class="form-control padding-zero font-bold">
                                                            <label class="control-label margin-zero font-light"><span class="mandatory-sign">*</span>Customise Invoice</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1 pb-15">
                                                        <div class="form-group form-md-line-input margin-zero">
                                                            <select id="seprator" class="form-control padding-zero font-bold">
                                                               <!--  <option>Please Select</option> -->
                                                                <option value=""></option>
                                                                <option value="-">-</option>
                                                                <option value="/">/</option>
                                                            </select>
                                                            <label class="control-label margin-zero font-light">&nbsp;</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1 pb-15">
                                                        <div class="form-group form-md-line-input margin-zero">
                                                            <input type="number" id="digits" placeholder="001" class="form-control padding-zero font-bold">
                                                            <label class="control-label margin-zero font-light">&nbsp;</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 pb-15">
                                                        <div class="form-group form-md-line-input margin-zero">
                                                            <input type="text" id="invoice-format" placeholder="MAPL001" class="form-control padding-zero font-bold" disabled="disabled">
                                                            <label class="control-label margin-zero font-light">Invoice Format : </label>
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
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light companydiv" style="border-bottom: 2px solid #d8534e;">
                            <div class="portlet-title" style="border-bottom: 0px;margin-bottom: 0px;">
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
                                                        <input type="text" placeholder="Enter Company's Address" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light"><span class="mandatory-sign">*</span>Address : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="Enter City Name" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light"><span class="mandatory-sign">*</span>City : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="number" id="postcode" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
    maxlength = "6" placeholder="Enter Pincode" class="form-control padding-zero font-bold">
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
                                                        <label class="control-label margin-zero font-light"><span class="mandatory-sign">*</span>Country : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="number" id="std-code" placeholder="Enter STD Code" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">STD Code : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="number" id="office-no" placeholder="Enter Office Number" class="form-control padding-zero font-bold">
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
                                                        <input type="number" id="mob-no" placeholder="9987654321" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light"><span class="mandatory-sign">*</span>Mobile Number :</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="Enter Email" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">Email Id : </label>
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light companydiv" style="border-bottom: 2px solid #edca5b;">
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <!-- PERSONAL INFO TAB -->
                                    <div class="tab-pane active" id="tab_1_1">
                                        <form role="form" action="#">
                                            <div class="row">
                                                <div class="col-md-6 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="Enter Responsible Person Name" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">Responsible Person : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="Enter Designation of Responsible Person" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">Designation of Responsible Person : </label>
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light companydiv" style="border-bottom: 2px solid #14ae99;">
                            <div class="portlet-title" style="border-bottom: 0px;margin-bottom: 0px;">
                                <div class="caption caption-md">
                                    <i class="icon-globe theme-font hide"></i>
                                    <span class="caption-subject bold compheading">GST Info : </span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <!-- PERSONAL INFO TAB -->
                                    <div class="tab-pane active" id="tab_1_1">
                                        <form role="form" action="#">
                                            <div class="row">
                                                <div class="col-md-6 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <select class="form-control font-bold gst-registration-type" id="form_control_1">
                                                            <option value="1"  selected="">Select Registration Type</option>
                                                            <option value="2">Registered under Regular Scheme</option>
                                                            <option value="3">Registered under Composition Scheme</option>
                                                            <option value="unregistered">Unregistered</option>
                                                            <option value="5">Consumer</option>
                                                            <option value="6">Overseas</option>
                                                            <option value="7">SEZ</option>
                                                            <option value="8">Deemed Export</option>
                                                        </select>
                                                        <label class="control-label margin-zero font-light">GST Registration Type : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" id="gst-number" maxlength="15" placeholder="Enter GST Number" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">GST Number : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input id="gst-registration-date" type="text" placeholder="(dd/mm/yyyy)" data-date-format="dd-mm-yyyy" class="form-control form-control-inline date-picker padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">Registration Date : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <select id="nature-of-business" class="form-control padding-zero font-bold">
                                                            <option>Select Your Business</option>
                                                            <option>Goods</option>
                                                            <option>Services</option>
                                                            <option>Goods & Services</option>
                                                        </select>
                                                        <label class="control-label margin-zero font-light">Nature of Business : </label>
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light companydiv" style="border-bottom: 2px solid #8e44ad;">
                            <div class="portlet-title" style="border-bottom: 0px;margin-bottom: 0px;">
                                <div class="caption caption-md">
                                    <i class="icon-globe theme-font hide"></i>
                                    <span class="caption-subject bold compheading">Bank Detail : </span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <!-- PERSONAL INFO TAB -->
                                    <div class="tab-pane active" id="tab_1_1">
                                        <form role="form" action="#">
                                            <div class="row">
                                                <div class="col-md-6 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="Enter IFSC Code" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">IFSC Code : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="Enter Bank Name" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">Bank Name : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="Enter Account Number" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">Account Number : </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pb-15">
                                                    <div class="form-group form-md-line-input margin-zero">
                                                        <input type="text" placeholder="Enter Account Holder Name" class="form-control padding-zero font-bold">
                                                        <label class="control-label margin-zero font-light">Account Holder Name : </label>
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="companydiv">
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <!-- PERSONAL INFO TAB -->
                                    <div class="tab-pane active" id="tab_1_1">
                                        <form role="form" action="#">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-5 pb-15">
                                                    <div class="form-group margin-zero">
                                                        <button type="submit" class="btn blue bold addaccountcolor" style="min-width:130px;font-size:17px">SAVE</button>
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


<script type="text/javascript">
	$(document).ready(function(){

		$("#pan-number").change(function(){
			
			var panRegex = /[a-zA-z]{5}\d{4}[a-zA-Z]{1}/;
			var panNumber = $(this).val();
			console.log(panNumber.length);


			if(panNumber.match(panRegex)){
				$(this).parent().removeClass('has-error');
                $(this).parent().find('#error').remove();
			}else{
				
                $(this).parent().addClass('has-error');
				$(this).parent().find('.error-message').remove();
				$(this).parent().find('label').after('<span class="error-message" id="error">Pleas enter valid details</span>');
			}

		});

		$("#pan-number").keyup(function(){
			if($(this).val().length == 0){
				$(this).parent().removeClass('has-error');
                $(this).parent().find('#error').remove();
			}
		});

		$("#pan-number").focusout(function(){
            if($(this).val() === '' || $(this).val() === null || $(this).val() === '0' || $(this).val() === 'undefined'){
                $(this).parent().find('#error').remove();
                $(this).parent().removeClass('has-error');
            }
        });

		/*$("#pan-number").keyup(function(){
			console.log($(this).val().length);
			if($(this).val().length == '0'){
				$(this).parent().removeClass('has-error');
                $(this).parent().find('#error').remove();
			}
			
			var matchString = ['P','C','H','A','B','G','J','L','F','T'];
			var fourthLetter = $(this).val().charAt(3); //AAAAA9999A
            var sixthLetter = $(this).val().charAt(5);
            var seventhLetter = $(this).val().charAt(6);
            var eightLetter = $(this).val().charAt(7);
            var ninethLetter = $(this).val().charAt(8);

            if(matchString.indexOf(fourthLetter) === -1){
				$(this).parent().addClass('has-error');
				$(this).parent().find('.error-message').remove();
				$(this).parent().find('label').after('<span class="error-message" id="error">Pleas enter valid details</span>');
				
			}else if(isNaN(sixthLetter)){
				$(this).parent().addClass('has-error');
                $(this).parent().find('.error-message').remove();
                $(this).parent().find('label').after('<span class="error-message" id="error">Sixth letter has to numeric</span>');
			}else if(isNaN(seventhLetter)){
                $(this).parent().addClass('has-error');
                $(this).parent().find('.error-message').remove();
                $(this).parent().find('label').after('<span class="error-message" id="error">Seventh letter has to numeric</span>');
            }else if(isNaN(eightLetter)){
                $(this).parent().addClass('has-error');
                $(this).parent().find('.error-message').remove();
                $(this).parent().find('label').after('<span class="error-message" id="error">Eighth letter has to numeric</span>');
            }else if(isNaN(ninethLetter)){
                $(this).parent().addClass('has-error');
                $(this).parent().find('.error-message').remove();
                $(this).parent().find('label').after('<span class="error-message" id="error">Nineth letter has to numeric</span>');
            }else{
                $(this).parent().removeClass('has-error');
                $(this).parent().find('#error').remove();
            }
		});



		$("#pan-number").change(function(){
			 var panRegex = /[a-zA-z]{5}\d{4}[a-zA-Z]{1}/; 
 			 var txtpan = $(this).val(); 

 			    if(txtpan.match(panRegex)){
 			 		$(this).parent().removeClass('has-error');
					$(this).parent().find('#error').remove();
 			 	}else{
 			 		$(this).parent().addClass('has-error');
 			 		$(this).parent().find('.error-message').remove();
				    $(this).parent().find('label').after('<span class="error-message" id="error">Invalid PAN Number.Try Again !!</span>');
 			 	}
 		});

        $("#pan-number").focusout(function(){
            if($(this).val() === '' || $(this).val() === null || $(this).val() === '0' || $(this).val() === 'undefined'){
                $(this).parent().find('#error').remove();
                $(this).parent().removeClass('has-error');
            }
        });*/

        // TAN Number start
        $("#tan-number").change(function(){

        	var tanNumber = $(this).val();
        	var tanRegex = /[a-zA-z]{4}\d{5}[a-zA-Z]{1}/;

        	if(tanNumber.match(tanRegex)){
				$(this).parent().removeClass('has-error');
                $(this).parent().find('#error').remove();
			}else{
				
                $(this).parent().addClass('has-error');
				$(this).parent().find('.error-message').remove();
				$(this).parent().find('label').after('<span class="error-message" id="error">Pleas enter valid details</span>');
			}

        });

        $("#tan-number").keyup(function(){
			if($(this).val().length == 0){
				$(this).parent().removeClass('has-error');
                $(this).parent().find('#error').remove();
			}
		});

		$("#tan-number").focusout(function(){
            if($(this).val() === '' || $(this).val() === null || $(this).val() === '0' || $(this).val() === 'undefined'){
                $(this).parent().find('#error').remove();
                $(this).parent().removeClass('has-error');
            }
        });
        
        /*$("#tan-number").keyup(function(){
            //AAAAA9999A
            var tanNumber = $(this).val();
            var tanRegex = /[a-zA-z]{4}\d{5}[a-zA-Z]{1}/;

            var firstLetter = $(this).val().charAt(0);
            var secondLetter = $(this).val().charAt(1);
            var thirdLetter = $(this).val().charAt(2);
            var fourthLetter = $(this).val().charAt(3);
            var fifthLetter = $(this).val().charAt(4);

            //console.log(firstLetter.length);

            if(firstLetter.length === 1 && isNaN(firstLetter)){
                $(this).parent().removeClass('has-error');
                $(this).parent().find('#error').remove();
            }else{
                $(this).parent().addClass('has-error');
                $(this).parent().find('.error-message').remove();
                $(this).parent().find('label').after('<span class="error-message" id="error">First letter has to alphabatic</span>');
            }

            if(secondLetter.length === 1 && isNaN(secondLetter)){
                $(this).parent().removeClass('has-error');
                $(this).parent().find('#error').remove();
            }else{
                $(this).parent().addClass('has-error');
                $(this).parent().find('.error-message').remove();
                $(this).parent().find('label').after('<span class="error-message" id="error">Second letter has to alphabatic</span>');
            }*/


            
            /*if($(this).val().match(tanRegex)){
                 $(this).parent().removeClass('has-error');
                 $(this).parent().find('#error').remove();
            }else if(!isNaN(firstLetter)){
                $(this).parent().addClass('has-error');
                $(this).parent().find('.error-message').remove();
                $(this).parent().find('label').after('<span class="error-message" id="error">First letter has to alphabatic</span>');
            }else if(!isNaN(secondLetter)){
                $(this).parent().addClass('has-error');
                $(this).parent().find('.error-message').remove();
                $(this).parent().find('label').after('<span class="error-message" id="error">Second letter has to alphabatic</span>');
            }else if(!isNaN(thirdLetter)){
                $(this).parent().addClass('has-error');
                $(this).parent().find('.error-message').remove();
                $(this).parent().find('label').after('<span class="error-message" id="error">Third letter has to alphabatic</span>');
            }else if(!isNaN(fourthLetter)){
                $(this).parent().addClass('has-error');
                $(this).parent().find('.error-message').remove();
                $(this).parent().find('label').after('<span class="error-message" id="error">Fourth letter has to alphabatic</span>');
            }else{
                $(this).parent().removeClass('has-error');
                $(this).parent().find('#error').remove();
            }*/
        //});


        /*$("#tan-number").change(function(){
			var tanRegex = /[a-zA-z]{4}\d{5}[a-zA-Z]{1}/;   //AAAA99999A
			var tanVall = $(this).val();

			//if(tanVall.length == 10){
				if(tanVall.match(tanRegex)){
					$(this).parent().removeClass('has-error');
					$(this).parent().find('#error').remove();
				}else{
					$(this).parent().addClass('has-error');
					$(this).parent().find('.error-message').remove();
				    $(this).parent().find('label').after('<span class="error-message" id="error">Invalid PAN Number.Try Again !!</span>');
				}*/
			/*}else{
				$(this).parent().addClass('has-error');
				$(this).parent().find('.error-message').remove();
				$(this).parent().find('label').after('<span class="error-message" id="error">PAN must be 10 digits.</span>');
			}*/  
		//});

        /*$("#tan-number").focusout(function(){
            if($(this).val() === '' || $(this).val() === null || $(this).val() === '0' || $(this).val() === 'undefined'){
                $(this).parent().find('#error').remove();
                $(this).parent().removeClass('has-error');
            }
        });*/

        // TAN number end

		$("#book-start-date").change(function(){

			var dateFrom = "01-04-2019";
			var dateTo = "31-03-2020";
			var dateCheck = $(this).val();
			//console.log(dateCheck);

			var d1 = dateFrom.split("-");
			var d2 = dateTo.split("-");
			var c = dateCheck.split("-");

			var from = new Date(d1[2], parseInt(d1[1])-1, d1[0]);  // -1 because months are from 0 to 11
			var to   = new Date(d2[2], parseInt(d2[1])-1, d2[0]);
			var check = new Date(c[2], parseInt(c[1])-1, c[0]);


			if(check > from && check < to == true){
				$(this).parent().removeClass('has-error');
				$(this).parent().find('#error').remove();
			}else{
				$(this).parent().addClass('has-error');
				$(this).parent().find('.error-message').remove();
				$(this).parent().find('label').after('<span class="error-message" id="error">Date must be between Financial Year</span>');
			}
		});


		$('.add_attribute').on('click', function () {
		    var selected = $('#attribute_taxonomy');
		    alert(selected.val());
		});

		// invoice format start
			$("#mapl").keyup(function(){
				var mapl = $("#mapl").val();
				$("#invoice-format").val(mapl);


				$("#seprator").change(function(){
					var seprator = $("#seprator").val();
					
					$("#invoice-format").val(null);
		    		
		    		$("#invoice-format").val(mapl+seprator);
				

					$("#digits").keyup(function(){
						var digits = $("#digits").val();

						$("#invoice-format").val(null);
						$("#invoice-format").val(mapl+seprator+digits);
						
					});

				});

			});


            document.getElementById('digits').addEventListener('keydown', function(e) {
                if (e.which === 38 || e.which === 40) {
                    e.preventDefault();
                }
            });

		// invoice format End


		// Pincode start


		$("#postcode").change(function(){
			var postCode = $(this).val();
			//var postcodeRegex = ^[1-9][0-9]{5}$;
			//console.log(postCode);
			if(postCode.length > 6 || postCode.length < 6){
				
				$(this).parent().addClass('has-error');
				$(this).parent().find('.error-message').remove();
			    $(this).parent().find('label').after('<span class="error-message" id="error">Postcode must be 6 digits only.</span>');
			}else{
				$(this).parent().removeClass('has-error');
				$(this).parent().find('#error').remove();
			}
		});

		document.getElementById('postcode').addEventListener('keydown', function(e) {
                if (e.which === 38 || e.which === 40) {
                    e.preventDefault();
                }
            });

		// Postcode end


		//mobile number start
			$("#mob-no").change(function(){
				var mobNo = $(this).val();
				if(mobNo.length > 10 || mobNo.length < 10){
					$(this).parent().addClass('has-error');
					$(this).parent().find('.error-message').remove();
				    $(this).parent().find('label').after('<span class="error-message" id="error">Mobile number must be 10 digits only.</span>');	
				}else{
					$(this).parent().removeClass('has-error');
					$(this).parent().find('#error').remove();
				}
			});	

		// Mobile number end

		//GST Number start

		$("#gst-number").blur(function(){

			var gstNumber = $(this).val();
			var gstRegex = /^([0]{1}[1-9]{1}|[1-2]{1}[0-9]{1}|[3]{1}[0-7]{1})([a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}[1-9a-zA-Z]{1}[zZ]{1}[0-9a-zA-Z]{1})+$/;
			var panNumber = $("#pan-number").val();
			var threeToTwelveDigits = gstNumber.substring(2,12);
			//console.log(panNumber.length);

			if(panNumber.length > 0){

				if(panNumber == threeToTwelveDigits){
					if(gstNumber.match(gstRegex)){
						$(this).parent().removeClass('has-error');
	                	$(this).parent().find('#error').remove();
					}else{
						$(this).parent().addClass('has-error');
						$(this).parent().find('.error-message').remove();
						$(this).parent().find('label').after('<span class="error-message" id="error">Pleas enter GST Number</span>');
					}
				}else{
					$(this).parent().addClass('has-error');
					$(this).parent().find('.error-message').remove();
					$(this).parent().find('label').after('<span class="error-message" id="error">Entered pan number doesnt mactch with GST</span>');
				}
			}else{
				alert('right place');
				if(gstNumber.match(gstRegex)){
					$(this).parent().removeClass('has-error');
	                $(this).parent().find('#error').remove();
				}else{
					$(this).parent().addClass('has-error');
					$(this).parent().find('.error-message').remove();
					$(this).parent().find('label').after('<span class="error-message" id="error">Entered pan number doesnt mactch with GST</span>');
				}	
			}
			
		});

		$("#gst-number").keyup(function(){
			if($(this).val().length == 0){
				$(this).parent().removeClass('has-error');
                $(this).parent().find('#error').remove();
			}
		});

		$("#gst-number").focusout(function(){
            if($(this).val() === '' || $(this).val() === null || $(this).val() === '0' || $(this).val() === 'undefined'){
                $(this).parent().find('#error').remove();
                $(this).parent().removeClass('has-error');
            }
        });

		
		// GST Number End

		// GST Registration Start

		$(".gst-registration-type").change(function(){
			var gstRegistrationVall = $(this).val();

			if(gstRegistrationVall == 'unregistered'){
				$("#gst-number").attr('disabled','disabled');
				$("#gst-registration-date").attr('disabled','disabled');
				//$("#nature-of-business").attr('disabled','disabled');
			}else{
                    $("#gst-number").removeAttr('disabled','disabled');
                    $("#gst-registration-date").removeAttr('disabled','disabled');
                    
            }
			
			
		});

		// GST Registration End

	});

</script>

<style type="text/css">
	input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
</style>
