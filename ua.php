<?php
$title = "UA检测";
include 'head.php';
?>
 <div class="row">
		<div class="col-12">
			<div class="page-title-box">
				<h4 class="page-title">UA检测</h4>
			</div>
		</div>
	</div>  
	 <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">
<!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <span class="logo-lg">
                                        <img class="rounded-circle shadow" src="http://q1.qlogo.cn/g?b=qq&nk=<?php echo $conf['zzqq']; ?>&s=5" height="140" alt="">
                                        <!--logo-->
                                </span>
                            </div>
                            <div class="card-body p-4">
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">UA检测</h4>
                                      
                                </div>
                                <br>
                                <div class="text-dark-50">
                                  <label for="devices">UA设备：</label>
                                    <?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone'))
                                        echo ("iPhone");
                                    else {
                                          if(strpos($_SERVER['HTTP_USER_AGENT'], 'iPad'))
                                        echo("iPad");
                                    else {
                                          if(strpos($_SERVER['HTTP_USER_AGENT'], 'Windows')||strpos($_SERVER['HTTP_USER_AGENT'], 'Mac'))
                                        echo("电脑设备");
                                    else {
                                          if(strpos($_SERVER['HTTP_USER_AGENT'], 'Android'))
                                        echo("安卓设备");
                                    else {
                                          if(strpos($_SERVER['HTTP_USER_AGENT'], 'HarmyOS'))
                                        echo("鸿蒙设备");
                                    else {
                                          if(strpos($_SERVER['HTTP_USER_AGENT'], 'Linux'))
                                        echo("Linux设备");
                                    else {
                                          if(strpos($_SERVER['HTTP_USER_AGENT'], 'Symbian'))
                                        echo("塞班设备");
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                ?>
                                <br>
                                <label>你的UA：</label><br>
                                <?php echo ($_SERVER['HTTP_USER_AGENT']);?>
                                </div>
                              </div>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


<?php include("foot.php"); ?>