<?php
$title = "首页";
include 'head.php';

$uv = file_get_contents("./uv.txt");
$cha = file_get_contents("./cha.txt");
$success = file_get_contents("./success.txt");
?>
<div class="row">
		<div class="col-12">
			<div class="page-title-box">
				<h4 class="page-title">首页</h4>
			</div>
		</div>
	</div>     
	 
<script>
swal({
html: true,
title: "本站公告",
text: '<?php echo $conf["tcgg"]; ?>',
type: "warning"
});
</script>


	<!-- 内容标题 --> 
		<div class="mt-1 mb-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12">

					<div class="text-center">
						
						
					 
						<!-- 便签卡 -->
						
						<div class="row">
							<div class="col-12">
								<div class="card-deck-wrapper">
									<div class="card-deck">
										<div class="card d-block">
											
			<img class="card-img-top" src="<?php echo $conf['home']; ?>" alt="">
			
											<h3 class="mt-4">站长留下的公告</h3>
										<div class="card-body"><p class="card-text"><?php echo $conf['webgg']; ?></p></div>
										</div> <!-- end card-->
									</div> <!-- end card-deck-->
								</div> <!-- end card-deck-wrapper-->
							</div> <!-- end col-->
						</div>
		</div>
		<!-- end row -->
		 <!-- end row-->
	</div>
	<!-- end col -->
<?php include("foot.php"); ?>