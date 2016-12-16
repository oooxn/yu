<!DOCTYPE html>
<html>
<head>
	<title>首页</title>
</head>
<style>
.index-main {
	text-align: center;
    height: auto;
    min-height: auto;
}
.index-main-body {
    padding: 0;
    min-height: 590px;
    display: inline-block;
    vertical-align: middle;
    text-align: left;
    white-space: normal;
}
.index-header {
	text-align: center;
}
.index-header .logo {
    margin: 0 auto;
    width: 162px;
    height: 162px;
    background: url('./resource/image/home.jpg') no-repeat;
    background-size: contain;
}
.hide-text {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0;
}
.index-tab-navs {
    margin-bottom: 10px;
    font-size: 18px;
    text-align: center;
}
.sign-flow .view {
    float: none;
    margin: auto;
    width: 300px;
    text-align: left;
}
.sign-flow .sign-button {
    background: #0f88eb;
    box-shadow: none;
    border: 0;
    border-radius: 3px;
    line-height: 41px;
    color: #fff;
}
form {
    display: block;
    margin-top: 0em;
}
.sign-flow .view .group-inputs {
    padding: 1px 0;
    border: 1px solid #d5d5d5;
    border-radius: 3px;
}
.sign-flow .view .input-wrapper {
    position: relative;
    margin: 0;
    overflow: hidden;
}
.sign-flow .view .input-wrapper input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0 30px #fff inset;
    -webkit-text-fill-color: #555;
}
.sign-flow .view .input-wrapper input:focus {
    border: 0;
    border-radius: 0;
    box-shadow: none;
    background: #fff;
}
.sign-flow .view .input-wrapper input {
    padding: 1em .8em;
    width: 100%;
    box-sizing: border-box;
}
.sign-button {
	width: 100%;
}
</style>
<body class="zhi ">

<div class="index-main">
	<div class="index-main-body">
		<div class="index-header">
			<h1 class="logo hide-text">OOOXN</h1>

			<h2 class="subtitle">一个能发现宇宙的地方</h2>
		</div>

		<div class="desk-front sign-flow clearfix sign-flow-simple">

			<div class="view view-signin">
				<form method="POST" action="">
					<input type="hidden" name="_xsrf" value=""/>
						<div class="group-inputs">

							<div class="account input-wrapper" style="width:300px">

								<input type="text" name="account" aria-label="账号" placeholder="账号" required>
							</div>
							<div class="verification input-wrapper">
								<input type="password" name="password" aria-label="密码" placeholder="密码" required />
							</div>
						</div>
						<div class="button-wrapper command">
							<button class="sign-button submit" type="submit">登录</button>
						</div>
				</form>
			</div>
		</div>

	</div>
</div>
</body>
</html>