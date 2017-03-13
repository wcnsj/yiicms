<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$Think.config.WEB_TITLE}</title>
    <link href="css/bootstrap.min.css?sign=" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    
    <if condition="$tableBoolean">
    <!-- Data Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
    </if>
    
    <if condition="$dateBoolean">
    <!-- Date -->
    <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    </if>
    
    <if condition="$switchBoolean">
    <!--switchery-->
    <link href="css/plugins/switchery/switchery.css" rel="stylesheet">
    </if>

    <if condition="$sweetAlertBoolean">
    <!-- Sweet Alert -->
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    </if>
    
    <if condition="$iCheckBoolean">
    <!-- checbox -->
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    </if>

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <if condition="$gritter">
    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    </if>
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <if condition="$dropzone">
    <!-- DROPZONE -->
    <link href="css/plugins/dropzone/basic.css" rel="stylesheet">
    <link href="css/plugins/dropzone/dropzone.css" rel="stylesheet">
    </if>
    
    <if condition="$lightbox">
    <!-- Lightbox Gallery -->
    <link href="css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">
    </if>
</head>

<body>
        
    <?php $chart = true;?>

    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!--left-->
            <?php echo $this->render('left.php'); ?>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <?php echo $this->render("main_header.php") ?>

            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">ALL</span>
                                <h5>今日新增用户</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{$all_account}</h1>
                                <div class="stat-percent font-bold text-success"> <i class="fa fa-bolt"></i></div>
                                <small>Total Account</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">ALL</span>
                                <h5>今日营业额</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{$day_price}</h1>
                                <div class="stat-percent font-bold text-success"> <i class="fa fa-bolt"></i></div>
                                <small>Total Day Price</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">ALL</span>
                                <h5>未发货订单数</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{$all_orders}</h1>
                                <div class="stat-percent font-bold text-info"> <i class="fa fa-bolt"></i></div>
                                <small>Total Orders</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">ALL</span>
                                <h5>总营业额</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{$price}</h1>
                                <div class="stat-percent font-bold text-navy"> <i class="fa fa-bolt"></i></div>
                                <small>Total Price</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-danger pull-right">ALL</span>
                                <h5>总返佣金</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{$commission_detail}</h1>
                                <div class="stat-percent font-bold text-danger"> <i class="fa fa-bolt"></i></div>
                                <small>Total</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-danger pull-right">ALL</span>
                                <h5>今天访问数</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{$day_num}</h1>
                                <div class="stat-percent font-bold text-danger"> <i class="fa fa-bolt"></i></div>
                                <small>Total</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">ALL</span>
                                <h5>总用户数</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{$all_all_account}</h1>
                                <div class="stat-percent font-bold text-success"> <i class="fa fa-bolt"></i></div>
                                <small>Total Account</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">ALL</span>
                                <h5>今日消费人数</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{$consumer_number}</h1>
                                <div class="stat-percent font-bold text-success"> <i class="fa fa-bolt"></i></div>
                                <small>Total Account</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Week Account and Orders</h5>
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-xs btn-white active">Today</button>
                                        <button type="button" class="btn btn-xs btn-white">Monthly</button>
                                        <button type="button" class="btn btn-xs btn-white">Annual</button>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="ibox float-e-margins">
                                            <div class="ibox-content">
                                                <div>
                                                    <canvas id="lineChart" height="140"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <ul class="stat-list">
                                            <li>
                                                <h2 class="no-margins">灰色</h2>
                                                <small>营业额</small>
                                                <div class="stat-percent"><i class="fa fa-level-up text-navy"></i></div>
                                                <div class="progress progress-mini">
                                                    <div style="width: 48%;" class="progress-bar"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <h2 class="no-margins ">蓝色</h2>
                                                <small>访问数</small>
                                                <div class="stat-percent"> <i class="fa fa-level-down text-navy"></i></div>
                                                <div class="progress progress-mini">
                                                    <div style="width: 60%;" class="progress-bar"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <h2 class="no-margins ">红色</h2>
                                                <small>新增用户数</small>
                                                <div class="stat-percent"> <i class="fa fa-level-down text-navy"></i></div>
                                                <div class="progress progress-mini">
                                                    <div style="width: 60%;" class="progress-bar"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Messages</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="feed-activity-list">

                                    <volist name="feedback" id="vo">
                                    <div class="feed-element">
                                        <div>
                                            <small class="pull-right text-navy">回复</small>
                                            <strong>{$vo.Nickname}</strong>
                                            <div>{$vo.Content}</div>
                                            <small class="text-muted">{$vo.Date}</small>
                                        </div>
                                    </div>
                                    </volist>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Transactions worldwide</h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <table class="table table-hover margin bottom">
                                                    <thead>
                                                    <tr>
                                                        <th style="width: 1%" class="text-center">No.</th>
                                                        <th>Transaction</th>
                                                        <th class="text-center">Date</th>
                                                        <th class="text-center">Amount</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td> Security doors
                                                        </td>
                                                        <td class="text-center small">16 Jun 2014</td>
                                                        <td class="text-center"><span class="label label-primary">$483.00</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td> Wardrobes
                                                        </td>
                                                        <td class="text-center small">10 Jun 2014</td>
                                                        <td class="text-center"><span class="label label-primary">$327.00</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3</td>
                                                        <td> Set of tools
                                                        </td>
                                                        <td class="text-center small">12 Jun 2014</td>
                                                        <td class="text-center"><span class="label label-warning">$125.00</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">4</td>
                                                        <td> Panoramic pictures</td>
                                                        <td class="text-center small">22 Jun 2013</td>
                                                        <td class="text-center"><span class="label label-primary">$344.00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">5</td>
                                                        <td>Phones</td>
                                                        <td class="text-center small">24 Jun 2013</td>
                                                        <td class="text-center"><span class="label label-primary">$235.00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">6</td>
                                                        <td>Monitors</td>
                                                        <td class="text-center small">26 Jun 2013</td>
                                                        <td class="text-center"><span class="label label-primary">$100.00</span></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-6">
                                                <div id="world-map" style="height: 300px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>

        <div class="footer">
            <div class="pull-right">
                
            </div>
            <div>
                <strong>Copyright</strong> {$Think.config.WEB_TITLE} &copy; <?= date('Y') ?>
            </div>
        </div>
    </div>
</div>



<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>


<if condition="$peity">
<!-- Peity -->
<script src="js/plugins/peity/jquery.peity.min.js"></script>
<script src="js/demo/peity-demo.js"></script>
</if>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<!--<script src="/Public/admin/js/plugins/pace/pace.min.js"></script>-->

<!-- jQuery UI -->
<script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- GITTER -->
<!--<script src="/Public/admin/js/plugins/gritter/jquery.gritter.min.js"></script>-->

<!-- Sparkline -->
<!--<script src="/Public/admin/js/plugins/sparkline/jquery.sparkline.min.js"></script>-->

<!-- Sparkline demo data  -->
<!--<script src="/Public/admin/js/demo/sparkline-demo.js"></script>-->

<!-- ChartJS-->
<script src="js/plugins/chartJs/Chart.min.js"></script>

<!-- Toastr -->
<script src="js/plugins/toastr/toastr.min.js"></script>

<if condition="$tableBoolean">
<!-- Data Tables -->
<script src="js/plugins/jeditable/jquery.jeditable.js"></script>
<script src="js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="js/plugins/dataTables/dataTables.responsive.js"></script>
<script src="js/plugins/dataTables/dataTables.tableTools.min.js"></script>
</if>

<if condition="$iCheckBoolean">
<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>
</if>

<!-- Date range use moment.js same as full calendar plugin -->
<!--<script src="/Public/admin/js/plugins/fullcalendar/moment.min.js"></script>-->

<if condition="$dateBoolean">
<!-- Date range picker -->
<script src="js/plugins/daterangepicker/daterangepicker.js"></script>
<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>
</if>

<if condition="$switchBoolean">
<!-- Switchery -->
<script src="js/plugins/switchery/switchery.js"></script>
</if>

<if condition="$sweetAlertBoolean">
<!-- Sweet alert -->
<script src="js/plugins/sweetalert/sweetalert.min.js"></script>
</if>

<if condition="$dropzone">
<!-- DROPZONE -->
<script src="js/plugins/dropzone/dropzone.js"></script>
</if>

<if condition="$lightbox">
<!-- blueimp gallery -->
<script src="js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
</if>

<if condition="$chart">
<!-- ChartJS-->
<script src="js/plugins/chartJs/Chart.min.js"></script>
</if>


</body>
</html>
