@extends('templates.master')

@section('pageheader')
    <span style="font-size: 15px;color:darkblue; margin-left: 45%;"><i class="fa fa-gears"></i> School: <span style="color:red;">{{$schoolsettings->school_name}}</span></span>
    <span class="dropdown pull-right">
                <button class="btn btn-default btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-gear"></i><br>
                    More Settings
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="{{route('allsettings')}}">View School Settings</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="{{route('loadclasses')}}">Classes & Streams</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="{{route('loadhouses')}}">School Houses</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="#">Subject Settings</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="#">Exam Settings</a></li>
                </ul>
            </span>

@endsection
@section('bodycontent')
    <div class="row">
        <div class="col-md-8" style="margin-left:6%;color:black;font-size:12px;background:white;padding-right: 25px;padding-left: 25px;box-shadow: 3px 2px 8px 0px black;">
            <div><br>
                <div class="row">
                        <span style="margin-left: 35%;">
                            &nbsp;&nbsp;&nbsp;&nbsp;<img src="/logo/{{$schoolsettings->school_logo}}" width="150" height="150" alt="">
                        </span>
                </div>
                <br><br><br>
                <div style="margin-left: 20%">
                    <div class="row">
                        <span style="font-size: 18px;font-style: oblique;">Name: <span style="font-style: normal;font-weight: bold;color: brown;">{{$schoolsettings->school_name}}</span></span>
                    </div>
                    <div class="row">
                        <span style="font-size: 16px;font-style: oblique;">Motto: <span style="font-style: normal;font-weight: bold;color: brown;">{{$schoolsettings->school_motto}}</span></span>
                    </div>
                    <div class="row">
                        <span style="font-size: 16px;font-style: oblique;">Address: <span style="font-style: normal;font-weight: bold;color: brown;">{{$schoolsettings->school_address}}</span></span>
                    </div>
                    <div class="row">
                        <span style="font-size: 14px;font-style: oblique;">Email: <span style="font-style: normal;font-weight: bold;color: brown;">{{$schoolsettings->school_email}}</span></span>
                    </div>
                    <div class="row">
                        <span style="font-size: 14px;font-style: oblique;">Website: <span style="font-style: normal;font-weight: bold;color: brown;">{{$schoolsettings->school_website}}</span></span>
                    </div>
                </div>
            </div>
            <hr>
            <a class="btn btn-info btn-sm" href="{{route('allsettings')}}"><i class="fa fa-angle-double-left"></i> Back</a>
            <a class="btn btn-warning btn-sm" href="{{route('editsettings',$schoolsettings->id)}}"><i class="fa fa-edit"></i> Edit</a>
            {{--{{route('editsettings',$schoolsettings->id)}}--}}
            <br><br>
        </div>

    </div>

@endsection

