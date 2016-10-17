<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
      <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
      <meta name="description" content="">
      <meta name="author" content="ThemeBucket">
      <link rel="shortcut icon" href="#" type="image/png">

      <title>未来商城后台登录</title>

      <!--common-->
      <link href="{{ asset('admins/css/style.css') }}" rel="stylesheet">
      <link href="{{ asset('admins/css/style-responsive.css') }}" rel="stylesheet">

      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
    </head>
    <body class="login-body">
        <div class="container">
            <form class="form-signin" action="index.html" action="{{ URL('admin/dologin') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-signin-heading text-center">
                <h1 class="sign-title">future后台登录</h1>
                <img src="{{ asset('admins/images/logo_icon.png') }}" alt="">
            </div>
            <div class="login-wrap">
                <div class="row">
                    <div class="col-xs-3">    
                        <h4>姓名: </h4>
                    </div>
                    <div class="col-xs-9">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="User ID">
                        </div>    
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xs-3">    
                        <h4>口令: </h4>
                    </div>
                    <div class="col-xs-9">
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>    
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xs-6">
                      <!-- 验证码图片 -->
                      <img src="{{ URL('admin/captcha/time()') }}" onclick="this.src='{{ URL('admin/captcha') }}/'+Math.random()">
                    </div>
                    <div class="col-xs-6">
                      <!-- 验证码框 -->
                        <div class="form-group has-feedback">            
                            <input type="text" class="form-control" placeholder="Code" name="code">
                        </div>
                    </div>
                </div>

                <button class="btn btn-lg btn-login btn-block" type="submit">
                    <i class="fa fa-check">登录</i>
                </button>
                
                <!--新用户注册导航-->
                <!--<div class="registration">
                    Not a member yet?
                    <a class="" href="registration.html">
                        Signup
                    </a>
                </div>-->
                
                <label class="checkbox">
                    <input type="checkbox" value="remember-me"> 记住账号
                    <span class="pull-right">
                        <a data-toggle="modal" href="#myModal"> 找回密码</a>
                    </span>
                </label>
            </div>

            <!-- Modal -->
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Forgot Password ?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Enter your e-mail address below to reset your password.</p>
                            <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                            <button class="btn btn-primary" type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->
        </form>
    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- Placed js at the end of the document so the pages load faster -->
    <script src="{{ asset('admins/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/modernizr.min.js') }}"></script>
    
    </body>
</html>>