<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>表单验证</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
<div class="form-container">
    <div class="left"></div>
    <div class="right">
        <form >
            <div class="header-div">
                <h1>注册</h1>
            </div>
            <div class="username-div">
                <input id="username" type="text" placeholder="用户名">
            </div>
            <div class="passw-div">
                <input id="passw" type="password" placeholder="密码">
                <p id="passw-err"></p>
                <div class="safety-factor-div">
                    <span id="safe-head">安全系数</span>
                    <div id="safe-d1" style="background-color:red;"></div>
                    <div id="safe-d2" style="background-color:#F0F028;"></div>
                    <div id="safe-d3" style="background-color:green;"></div>
                </div>

            </div>
            <div class="repas   sw-div">
                <input id="repassw" type="password" placeholder="确认密码">
                <p id="repassw-err"></p>
            </div>
            <div class="verifi-div">
                <input id="input-code" type="text" placeholder="请输入验证码">
                <canvas id="verifi-code"></canvas>
            </div>
            <div class="register-div">
                <span id="register">注册</span>
            </div>
        </form>
    </div>
</div>
</body>
<script src="./js/index.js"></script>
</html>