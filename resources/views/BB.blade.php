<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<meta name="robots" content="noindex,nofollow">
<title>ログインテスト</title>
<script src="sha1.php" type="text/javascript"></script>
<noscript>
<h1>JavaScript not Active</h1>
<meta http-equiv="Refresh" content="3; URL=../index.html">
</noscript> 
<style type="text/css">
<!--
*{
  margin: 0;
  padding: 0;
}
html{
  margin: 0px;
  padding: 0px;
  overflow:hidden;
}
body{
  MIN-WIDTH: 930px;
  TEXT-ALIGN: center;
  BACKGROUND-COLOR: #8D1D28
}
H1 {
  color: #fff;
}
#horizon{
  POSITION: absolute;
  BACKGROUND-COLOR: transparent;
  TOP: 10px;
  LEFT: 20px
}
#horizon{
  MIN-WIDTH: 930px;
  TEXT-ALIGN: center;
  MARGIN-TOP: -240px;
  WIDTH: 100%;
  TOP: 50%;
  LEFT: 0px
}
#container{
  POSITION: relative;
  TEXT-ALIGN: left;
  LINE-HEIGHT: 140%;
  MARGIN: 0px auto;
  WIDTH: 930px;
  FONT-FAMILY:osaka,"ＭＳ Ｐゴシック",sans-serif;
  BACKGROUND: url(./images/login.jpg) no-repeat;
  HEIGHT: 480px;
  COLOR: #fff;
  FONT-SIZE: 14px
}
#login-panel{
  POSITION: absolute;
  WIDTH: 640px;
  TOP: 70px;
  LEFT: 60px
}
#please-login{
  color: #ffff00;
  font-weight:bold
}
BODY#login-password-sent #login-panel{
  TEXT-ALIGN: center;
  WIDTH: 360px;
  TOP: 190px;
  LEFT: 290px
}
#login-panel P{
  MARGIN-LEFT: 40px;
  MARGIN-BOTTOM: 2em
}
#login-panel A{
  PADDING-TOP: 0px;
  PADDING-RIGHT: 0px;
  PADDING-BOTTOM: 2px;
  PADDING-LEFT: 0px;
  BACKGROUND: url(./images/bg_yellow-dotted.gif) repeat-x left bottom;
  COLOR: #ffff99;
  TEXT-DECORATION: none 
}
#login-panel A:hover{
  BACKGROUND: url(./images/bg_yellow-solid.gif) repeat-x left bottom
}
#login-panel H1{
  TEXT-INDENT: -9999px;
  MARGIN-LEFT: 50px;
  WIDTH: 262px;
  BACKGROUND: url(./images/hdr_login-to-your-account.gif) no-repeat;
  HEIGHT: 29px
}
BODY#login-password-sent H1{
  WIDTH: 360px;
  BACKGROUND: url(./images/hdr_your-password-has-been-sent.gif) no-repeat;
  HEIGHT: 29px
}
#login-panel DIV.form FIELDSET{
  BORDER-TOP: medium none;
  BORDER-RIGHT: medium none;
  BORDER-BOTTOM: medium none;
  BORDER-LEFT: medium none
}
#login-panel DIV.form FIELDSET LABEL{
  MARGIN: 0px 0px 3px;
  DISPLAY: block;
  HEIGHT: 34px
}
#login-panel DIV.form FIELDSET LABEL#login_email{
}
#login-panel DIV.form FIELDSET LABEL#login_email STRONG{
  TEXT-ALIGN: right;
  PADDING-TOP:6px;
  PADDING-RIGHT: 5px;
  PADDING-BOTTOM: 0px;
  PADDING-LEFT: 0px;
  WIDTH: 68px;
  HEIGHT: 24px;
  FONT-WEIGHT: bold;
  FLOAT: left
}
#login-panel DIV.form FIELDSET LABEL#login_email INPUT{
  BORDER-TOP: medium none;
  BORDER-RIGHT: medium none;
  BORDER-BOTTOM: medium none;
  BORDER-LEFT: medium none;
  PADDING-TOP: 10px;
  PADDING-RIGHT: 15px;
  PADDING-BOTTOM: 0px;
  PADDING-LEFT: 15px;
  WIDTH: 188px;
  HEIGHT: 24px;
  BACKGROUND: url(./images/bg_login-page-email.gif) no-repeat 0px 0px;
  FLOAT: left
}

#login-panel DIV.form FIELDSET LABEL#login_email A{
  POSITION: relative;
  FONT-FAMILY: osaka,"ＭＳ Ｐゴシック",sans-serif;
  FONT-WEIGHT: bold;
  TOP: 10px;
  LEFT: 10px
}
#login-panel DIV.form FIELDSET LABEL#login_password{
  CLEAR: left
}
#login-panel DIV.form FIELDSET LABEL#login_password STRONG{
  TEXT-ALIGN: right;
  PADDING-TOP: 8px;
  PADDING-RIGHT: 5px;
  PADDING-BOTTOM: 0px;
  PADDING-LEFT: 0px;
  WIDTH: 68px;
  HEIGHT: 24px;
  FONT-WEIGHT: bold;
  FLOAT: left
}
#login-panel DIV.form FIELDSET LABEL#login_password INPUT{
  BORDER-TOP: medium none;
  BORDER-RIGHT: medium none;
  BORDER-BOTTOM: medium none;
  BORDER-LEFT: medium none;
  PADDING-TOP: 8px;
  PADDING-RIGHT: 15px;
  PADDING-BOTTOM: 0px;
  PADDING-LEFT: 15px;
  WIDTH: 190px;
  HEIGHT: 24px;
  BACKGROUND: url(./images/bg_login-page-email.gif) no-repeat 0px 0px;
  FLOAT: left
}

#login-panel DIV.form FIELDSET LABEL#login_password INPUT#login_submit{
  PADDING-TOP: 0px;
  PADDING-RIGHT: 0px;
  PADDING-BOTTOM: 0px;
  PADDING-LEFT: 0px;
  WIDTH: 71px;
  HEIGHT: 34px;
  FLOAT: left
}
#login-panel DIV.form FIELDSET LABEL#login_remember{
  FONT-SIZE: 14px;
  color: #b00000;
  PADDING-TOP: 2px;
  PADDING-BOTTOM: 0px;
  PADDING-LEFT: 70px;
  WIDTH: 360px;
  font-weight:normal
}

-->
</style>
</head>
<body>
  <div id="horizon">
    <div id="container">
      <div id="login-panel">
        <div class="form">
          <fieldset>
            <div id="please-login">
              <p>We're happy to see you return Please log in.</p>
            </div>
            <label id="login_email">
              <strong>Email</strong>
              <input name="txtLoginEmail" type="text" id="txtLoginEmail" value="example@example.com">
            </label>
            <label id="login_password">
              <strong>Password</strong>
              <input name="txtPassword" type="password" id="txtPassword">
              <input src="./images/btn_log-in-alt.gif" onclick="setPassword();return false" type="image" id="login_submit" tabindex="3" alt="Log-in">
            </label>
            <label id="login_remember">
              <input name="chbRememberMe" type="checkbox" id="chbRememberMe">
             Remember me on this computer
            </label>
          </fieldset>
        </div>
      </div>
    </div>
  </div>
</form>
<script type="text/javascript">
CheckPW_init();
</script>
</body>
</html>
