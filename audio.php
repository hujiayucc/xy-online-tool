<?php
$title = "文字转语音";
include 'head.php';
?>
 <div class="row">
		<div class="col-12">
			<div class="page-title-box">
				<h4 class="page-title">文字转语音</h4>
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
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">文字转语音</h4>
                                      
                                </div>
                                <br>
                                  <label for="ewm">语音内容</label>
                                    <form action="" method="post">
                                    <input type="text" class="form-control" placeholder="请输入需要生成语音的内容" name="audiotext">
                                    <br>
                                    <div class="form-group mb-0 text-center">
                                    <input type="submit" class="btn btn-primary" value="生成" name="audiosub">
                                    </div>
                                    </form>
                                    <?php
                                       if(!empty($_POST['audiosub'])){
                                       $audiotext = $_POST["audiotext"];
                                       $audio = $conf['audiourl'].$audiotext;
                                       echo ("<br><center><video controls=\"\" autoplay=\"\" name=\"media\">");
                                       echo ("<source src=\"$audio\" type=\"audio/mpeg\"></center>");
                                       }
                                    ?>
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