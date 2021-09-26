<?php
$title = "系统管理";
include './head.php';
?>
<!-- 内容标题 -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box">
      <h4 class="page-title">系统管理</h4>
    </div>
  </div>
</div>     
<!-- 内容标题 --> 

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">

             	<form action="submit.php" method="post">
             	<input value="set" name="step" style="display: none;"/>
                  
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="title" class="col-form-label">网站标题</label>
                      <input value="<?php echo $conf['title']; ?>" name="title" type="text" class="form-control" id="title" placeholder="例：小宇">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="title2" class="col-form-label">小标题</label>
                      <input value="<?php echo $conf['title2']; ?>" name="title2" type="text" class="form-control" id="title2" placeholder="例：小宇">
                    </div>
                  </div>

                  <div class="form-group">
						<label for="weburl" class="col-form-label">网站域名</label>
						<input value="<?php echo $conf['weburl']; ?>" name="weburl"  type="text" class="form-control" id="weburl" placeholder="例：https://www.hujiayucc.cn">
					</div>
					
					<div class="form-group">
						<label for="ico" class="col-form-label">网站ico图标</label>
						<input value="<?php echo $conf['ico']; ?>" name="ico"  type="text" class="form-control" id="ico" placeholder="例：https://www.hujiayucc.cn/favicon.ico">
					</div>
					
					<div class="form-group">
						<label for="home" class="col-form-label">首页图片链接</label>
						<input value="<?php echo $conf['home']; ?>" name="home"  type="text" class="form-control" id="home" placeholder="例：https://api.vvhan.com/api/ip">
					</div>
                  
					<div class="form-group">
						<label for="webkey" class="col-form-label">关键词</label>
						<input value="<?php echo $conf['webkey']; ?>" name="webkey" type="text" class="form-control" id="webkey" placeholder="例：小宇">
					</div>

					<div class="form-group">
						<label for="webdes" class="col-form-label">网站描述</label>
						<input value="<?php echo $conf['webdes']; ?>" name="webdes" type="text" class="form-control" id="webdes" placeholder="例：小宇">
					</div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="zzqq" class="col-form-label">站长QQ</label>
                        <input value="<?php echo $conf['zzqq']; ?>" name="zzqq" type="text" class="form-control" id="zzqq" placeholder="例：2792607647">
                      </div>
                      </div>
                      <div class="form-group">
						<label for="qun" class="col-form-label">QQ群加群链接(不需要带http://)</label>
						<input value="<?php echo $conf['qqqun']; ?>" name="qqqun" type="text" class="form-control" id="qun" placeholder="例：jq.qq.com/?_wv=xxxxxxxxxx">
					</div>

                    <div class="form-group mb-3">
                        <label for="webgg">网站公告</label>
                        <textarea name="webgg" class="form-control" id="webgg" rows="5" placeholder="最长5行 长度255个字符"><?php echo $conf['webgg']; ?></textarea>
<br><p>将展示在首页，请输入HTML格式！</p>
                    </div>

                    <div class="form-group mb-3">
                        <label for="tcgg">弹窗公告</label>
                        <textarea name="tcgg" class="form-control" id="tcgg" rows="5" placeholder="最长255个字符"><?php echo $conf['tcgg']; ?></textarea>
<br><p>展示在首页，引号必须使用英文双引号且必须压缩成一行！<br>常用HTML代码：换行&lt;br&gt; &lt;p&gt;段落&lt;/p&gt; &lt;b&gt;<b>粗体</b>&lt;/b&gt;</p>
                    </div>
                    
                    
                    <div class="form-group">
						<label for="app" class="col-form-label">APP下载地址</label>
						<input value="<?php echo $conf['app']; ?>" name="app" type="text" class="form-control" id="app" placeholder="APP下载地址">
<br><p>例：https://www.hujiayucc.cn/xy.apk</p>
					</div>


					<div class="form-group">
						<label for="icpurl" class="col-form-label">ICP备案查询接口</label>
						<input value="<?php echo $conf['icpurl']; ?>" name="icpurl" type="text" class="form-control" id="icpurl" placeholder="将输出在前台用来查询的源码里">
<br><p>例：https://api.vvhan.com/api/icp?url=</p>
					</div>
					
					
					<div class="form-group">
						<label for="ewmurl" class="col-form-label">二维码生成接口</label>
						<input value="<?php echo $conf['ewmurl']; ?>" name="ewmurl" type="text" class="form-control" id="ewmurl" placeholder="将输出在前台用来生成的源码里">
<br><p>例：https://api.vvhan.com/api/qr?text=</p>
					</div>
					
					
					<div class="form-group">
						<label for="audiourl" class="col-form-label">语音转文字接口</label>
						<input value="<?php echo $conf['audiourl']; ?>" name="audiourl" type="text" class="form-control" id="audiourl" placeholder="将输出在前台用来生成的源码里">
<br><p>例：https://api.vvhan.com/api/song?txt=</p>
					</div>
                  	

                    <div class="form-group mb-3">
                        <label for="inputheader">头部代码</label>
                        <textarea name="header" class="form-control" id="inputheader" rows="5" placeholder="最长5行255个字符"><?php echo $conf['header']; ?></textarea>
<br><p>这些代码会输出在&lt;head&gt;头部代码里，适用于统计代码，mate声明类。如果你要添加许多代码请手动编辑主页的head.php<br>例：&lt;script type=&quot;text/javascript&quot; src=&quot;https://js.users.51.la/21020775.js&quot;&gt;&lt;/script&gt;</p>
					</div>

					<div class="form-group">
						<label for="footer" class="col-form-label">底部版权</label>
						<input value="<?php echo $conf['footer']; ?>" name="footer" type="text" class="form-control" id="footer" placeholder="例：小宇">
					</div>
                  
                  	<br>
                  
					
											<button type="submit" class="btn btn-primary">修 改</button>

				</form>

			</div> <!-- end card-body -->
		</div> <!-- end card-->
	</div> <!-- end col -->
</div>
<!-- 引入时间选择插件 -->