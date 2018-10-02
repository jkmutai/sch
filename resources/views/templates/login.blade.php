<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui-1.9.2.custom.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.touch-punch.min.js')}}"></script>
    <script src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('js/common-scripts.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>

    <title>MATSchool MIS</title>
    <style></style>
</head>
<body class="cm-login">

<div class="text-center" style="padding:90px 0 30px 0;background:#fff;border-bottom:1px solid #ddd">
    <img src="{{asset('logo/logo.png')}}" width="150" height="150">
</div>

<div class="col-sm-6 col-md-4 col-lg-3" style="margin:40px auto; float:none;">
    {{--<form method="post" action="{{route('students')}}">--}}
        <div class="col-xs-12">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-fw fa-user"></i></div>
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-fw fa-lock"></i></div>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="checkbox"><label><input type="checkbox"> Remember me</label></div>
        </div><div class="col-xs-6">
            <a href="{{route('allsettings')}}" class="btn btn-block btn-primary">Sign in</a>
            {{--<button type="submit" class="btn btn-block btn-primary">Sign in</button>--}}
        </div>
    {{--</form>--}}
</div>
</body>
</html>
