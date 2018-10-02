@extends('templates.master')
    @section('pageheader')
        System Settings
            <span class="dropdown pull-right">

                     <a href="{{route('loadclasses')}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-home" style="font-size: 14px;"></i><br>Classes & Streams</button></a>
                     <a href="{{route('loadhouses')}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-address-book-o" style="font-size: 14px;"></i><br>Houses</button></a>
                     <a href="#"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-graduation-cap" style="font-size: 14px;"></i><br>Exams</button></a>
                     <a href="#"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-book" style="font-size: 14px;"></i><br>Subjects</button></a>

                <button class="btn btn-default btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-gears">
                    </i><br> More Settings
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="{{route('allsettings')}}">View Settings</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="#">2</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="#">School Sessions</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="#">Exam Types</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="#">Houses</a></li>
                    <li class="divider"></li>

                </ul>
            </span>

    @endsection

    @section('bodycontent')
        @if(Session::has('settingsmsg'))
            <div class="bg-success" style="padding: 15px;font-size: 14px;">School Settings Posted Successfully</div>
        @endif
            <div class="col-sm-9" style="background:white;margin-left:10%;padding-right: 25px;padding-left: 25px;box-shadow: 3px 2px 8px 0px black;">
                <div class="row justify-content-center">
                    <h5 class="pull-right" style="color:mediumseagreen">&nbsp;&nbsp;&nbsp;&nbsp; General School Settings</h5>
                    <hr>
                    <br><br><br>
                    <form class="form" action="{{route('savesettings')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-10">
                                <div class="input-group add-on input-group-sm">
                                    <div class="input-group-btn input-group-sm">
                                        <p class="btn btn-block"><i class="fa fa-home"></i> School Name</p>
                                    </div>
                                    <input class="form-control input-sm" placeholder="School Name" name="school_name" type="text" required>
                                </div>
                            </div>
                        </div>
                        <br><br><br>
                        <div class="form-row">
                            <div class="col-md-10">
                                <div class="input-group add-on input-group-sm">
                                    <div class="input-group-btn input-group-sm">
                                        <p class="btn btn-block"><i class="fa fa-image"></i> School Logo</p>
                                    </div>
                                    <input class="form-control input-sm" placeholder="School Logo" name="school_logo" type="file" name="school_logo" required>
                                </div>
                            </div>
                        </div>
                        <br><br><br>
                        <div class="form-row">
                            <div class="col-md-10">
                                <div class="input-group add-on input-group-sm">
                                    <div class="input-group-btn input-group-sm">
                                        <p class="btn btn-block"><i class="fa fa-flag-checkered"></i> School Motto</p>
                                    </div>
                                    <input class="form-control input-sm" placeholder="School Motto" name="school_motto" type="text" required>
                                </div>
                            </div>
                        </div>
                        <br><br><br>
                        <div class="form-row">
                            <div class="col-md-10">
                                <div class="input-group add-on input-group-sm">
                                    <div class="input-group-btn input-group-sm">
                                        <p class="btn btn-block"><i class="fa fa-address-card"></i> School Address</p>
                                    </div>
                                    <input class="form-control input-sm" placeholder="School Address" name="school_address" type="text" required>
                                </div>
                            </div>
                        </div>
                        <br><br><br>
                        <div class="form-row">
                            <div class="col-md-10">
                                <div class="input-group add-on input-group-sm">
                                    <div class="input-group-btn input-group-sm">
                                        <p class="btn btn-block"><i class="fa fa-at"></i> School Email</p>
                                    </div>
                                    <input class="form-control input-sm" placeholder="School Email" name="school_email" type="email" required>
                                </div>
                            </div>
                        </div>
                        <br><br><br>
                        <div class="form-row">
                            <div class="col-md-10">
                                <div class="input-group add-on input-group-sm">
                                    <div class="input-group-btn input-group-sm">
                                        <p class="btn btn-block"><i class="fa fa-wechat"></i> School Website</p>
                                    </div>
                                    <input class="form-control input-sm" placeholder="School Website" name="school_website" type="text" required>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <a href="{{route('allsettings')}}" class="btn btn-info btn-sm"><i class="fa fa-angle-double-left"></i> Back</a>
                        <button class="btn btn-primary btn-sm" type="submit">Save Settings</button>
                        <button class="btn btn-warning btn-sm" type="reset">Reset</button>
                        <br><br>
                    </form>
                </div>
            </div>
    @endsection

