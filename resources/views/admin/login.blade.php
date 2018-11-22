<!DOCTYPE html>
<html>
<head>
	<title>后台登录</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<style type="text/css">
		body {
			height:600px;
		}

		.container-full {
			margin-top:200px;
		}
	</style>
</head>
<body>
	<div class="container-full">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="text-center">后台登录</h4>
				</div>

				<div class="panel-body">
					<form action="{{ route('admin.login') }}" method="POST">
						{{ csrf_field() }}

						<div class="form-group col-md-10">
							<label for='phone' class="col-md-4 control-label">手机</label>
							<div class="col-md-8">
								<input type="text" name="phone" class="form-control" id="phone" placeholder="输入手机">
							</div>
						</div>

						<div class="form-group col-md-10">
							<label for='password' class="col-md-4 control-label">密码</label>
							<div class="col-md-8">
								<input type="password" name="password" class="form-control" id="password" placeholder="输入密码">
							</div>
						</div>

						<div class="form-group col-md-10">
							<div class="col-md-offset-4 col-md-4">
								<button type="submit" class="btn btn-primary">登录</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="/js/app.js"></script>
</html>