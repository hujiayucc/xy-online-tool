<?php
$title = "ICP备案查询";
include 'head.php';
?>
 <div class="row">
		<div class="col-12">
			<div class="page-title-box">
				<h4 class="page-title">ICP备案查询</h4>
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
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">ICP备案查询</h4>
                                      
                                </div>
                                <br>
                                  <label for="domian">域名</label>
                                        <input class="form-control" type="text" id="input" placeholder="请输入要查询的域名">
                                    <br>
                                    <div class="form-group mb-0 text-center">
                                        <input class="btn btn-primary" type="button" id="btn1" value="查询" onclick="icp()"/>
                                    </div>
                                    <br>
                                    <div class="form-group mb-3" style="font-weight: bold;display: none;" id="jiexi_data">
                                    <hr> 
                                        <label for="emailaddress">备案主体名称</label>
                                        <input class="form-control" type="text" id="name" placeholder="获取中…">
                                    <br>
                                        <label for="emailaddress">备案主体性质</label>
                                        <input class="form-control" type="text" id="nature" placeholder="获取中…">
                                    <br>
                                        <label for="emailaddress">ICP备案号</label>
                                        <input class="form-control" type="text" id="icp" placeholder="获取中…">
                                    <br>
                                        <label for="emailaddress">网站名称</label>
                                        <input class="form-control" type="text" id="title" placeholder="获取中…">
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
<script>
function icp() {
swal({
html: true,
title: "确定查询吗？",
text: "请确认输入域名无误！",
type: "warning",
showCancelButton: true,
cancelButtonText: "取消",
confirmButtonColor: "#DD6B55",
confirmButtonText: "确认查询",
closeOnConfirm: true
}, function() {

layer.close(layer.index);
var domian = $('#input').val();
$url = '<?php echo $conf['icpurl'] ?>'+domian;


var alert_1 = layer.load(0, { shade: [0.5,'#eee'] });
$.getJSON($url, function (json) {
layer.close(alert_1);
console.log(json);
if (json['message'] == '此域名未备案') {
swal("此域名未备案", json['msg'], "info")
$('#jiexi_data').css("display", "none");
} else {
swal("查询成功！", "请勿将本站数据用于违法用途！", "success")
$('#name').val(json['info']['name']);
$('#nature').val(json['info']['nature']);
$('#icp').val(json['info']['icp']);
$('#title').val(json['info']['title']);
$('#time').val(json['info']['time']);
$('#jiexi_data').css("display", "block");
}
}
);


})
};
</script>

<?php include("foot.php"); ?>