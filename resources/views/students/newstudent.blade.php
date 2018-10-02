@extends('templates.master')
    @section('pageheader')
        <span style="font-size: 18px;color: maroon;margin-left: 5%;font-weight: bolder;"><i class="fa fa-user-circle-o"></i> New Student Registration</span>
            <span class="dropdown pull-right">
                <a href="{{route('students')}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-users" style="font-size: 14px;"></i><br>List Students</button></a>
                <button class="btn btn-default btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-gear"></i><br>
                    More Action
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="{{route('newstudent')}}">New Student</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="{{route('students')}}">List Students</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="#">Action 3</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="#">Action 4</a></li>
                </ul>
            </span>

    @endsection

    @section('bodycontent')
        @if(Session::has('successmsg'))
            <div class="alert alert-success" style="padding: 15px;font-size: 14px;">The Student: <span style="color:red;font-weight: bolder;">{{Session::get('successmsg')}}</span>&nbsp; Created Successfully</div>
        @endif
        @if($errors->Any())
            <div class="alert alert-danger" style="padding: 15px;font-size: 14px;">There are some Errors!</div>
        @endif

        <div class="col-sm-11" style="margin-left:4%;background:white;padding-right: 25px;padding-left: 25px;box-shadow: 3px 2px 8px 0px black;">
                <h4 style="border-bottom: 1px solid menu;"><i class="fa fa-user-md"></i> Student Details</h4>
                <form class="form-inline" action="{{route('savestudent')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-1 " style="text-align: center" for="adm">Admission Number: </label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control input-sm" name="adm" value="{{old('adm')}}" placeholder="Admission Number" autocomplete="off">
                                @if($errors->has('adm'))
                                    <span class="text-danger">{{$errors->first('adm')}}</span>
                                @endif
                            </div>
                            <label class="col-sm-1" style="text-align: center" for="name">Student Name: </label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control input-sm" name="name" value="{{old('name')}}" placeholder="Student Name" autocomplete="off">
                                @if($errors->has('name'))
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                @endif
                            </div>

                            <label class="col-sm-1" style="text-align: center" for="class">Class: </label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" name="class" value="{{old('class')}}" autocomplete="off">
                                    <option value="">-- Select Class --</option>
                                    @foreach($classes as $class)
                                        <option value="{{$class->class}}">{{$class->class}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('class'))
                                    <span class="text-danger">{{$errors->first('class')}}</span>
                                @endif
                            </div>
                            <label class="col-sm-1" style="text-align: center" for="stream">Stream: </label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" name="stream" value="{{old('stream')}}" autocomplete="off">
                                    <option value="">-- Select Stream --</option>
                                    @foreach($streams as $stream)
                                        <option value="{{$stream->stream}}">{{$stream->stream}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('stream'))
                                    <span class="text-danger">{{$errors->first('stream')}}</span>
                                @endif
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <label class="col-sm-1" style="text-align: center" for="house">House: </label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" name="house" value="{{old('house')}}" autocomplete="off">
                                    <option value="">-- Select House --</option>
                                    @foreach($houses as $house)
                                        <option value="{{$house->house}}">{{$house->house}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('house'))
                                    <span class="text-danger">{{$errors->first('house')}}</span>
                                @endif
                            </div>
                            <label class="col-sm-1" style="text-align: center" for="dob">Date of Birth: </label>
                            <div class="col-sm-2">
                                <input type="date" class="form-control input-sm" name="dob" value="{{old('dob')}}" placeholder="Date of Birth" autocomplete="off">
                                @if($errors->has('dob'))
                                    <span class="text-danger">{{$errors->first('dob')}}</span>
                                @endif
                            </div>
                            <label class="col-sm-1" style="text-align: center" for="gender">Gender: </label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" name="gender" value="{{old('gender')}}" autocomplete="off">
                                    <option value="">-- Select Gender --</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                @if($errors->has('gender'))
                                    <span class="text-danger">{{$errors->first('gender')}}</span>
                                @endif
                            </div>
                            <label class="col-sm-1" style="text-align: center" for="old_school">Old School: </label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control input-sm" name="old_school" value="{{old('old_school')}}" placeholder="Old School" autocomplete="off">
                                @if($errors->has('old_school'))
                                    <span class="text-danger">{{$errors->first('old_school')}}</span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label class="col-sm-1" style="text-align: center" for="adm_date">Admission Date: </label>
                            <div class="col-sm-2">
                                <input type="date" class="form-control input-sm" name="adm_date" value="{{old('adm_date')}}" placeholder="Admission Date" autocomplete="off">
                                @if($errors->has('adm_date'))
                                    <span class="text-danger">{{$errors->first('adm_date')}}</span>
                                @endif
                            </div>
                            <label class="col-sm-1" style="text-align: center" for="adm_type">Admission Type: </label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" name="adm_type" value="{{old('adm_type')}}" autocomplete="off">
                                    <option value="">-- Select adm.type --</option>
                                    <option value="Boarder">Boarder</option>
                                    <option value="Day Scholar">Day Scholar</option>
                                </select>
                                @if($errors->has('adm_type'))
                                    <span class="text-danger">{{$errors->first('adm_type')}}</span>
                                @endif
                            </div>
                            <label class="col-sm-1" style="text-align: center" for="entry_grade">Entry Grade: </label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control input-sm" name="entry_grade" value="{{old('entry_grade')}}" placeholder="Entry Grade" autocomplete="off">
                                @if($errors->has('entry_grade'))
                                    <span class="text-danger">{{$errors->first('entry_grade')}}</span>
                                @endif
                            </div>
                            <label class="col-sm-1" style="text-align: center" for="special_needs">Special Needs (If Any): </label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control input-sm" name="special_needs" value="{{old('special_needs')}}" placeholder="Special Needs" autocomplete="off">
                                @if($errors->has('special_needs'))
                                    <span class="text-danger">{{$errors->first('special_needs')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-1" style="text-align: center" for="photo">Upload Photo: </label>
                            <div class="col-sm-5">
                                <input type="file" class="form-control input-sm" name="photo" value="{{old('photo')}}" placeholder="photo" autocomplete="off">
                                @if($errors->has('photo'))
                                    <span class="text-danger">{{$errors->first('photo')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            &nbsp;&nbsp;<h4 style="border-left:3px; border-bottom: 1px solid menu;"><i class="fa fa-user-friends"></i> Parent / Guardian Details</h4>
                            <label class="col-sm-1" style="text-align: center" for="parent_name">Name: </label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control input-sm" name="parent_name" value="{{old('parent_name')}}" placeholder="Parent Name" autocomplete="off">
                                @if($errors->has('parent_name'))
                                    <span class="text-danger">{{$errors->first('parent_name')}}</span>
                                @endif
                            </div>
                            <label class="col-sm-1" style="text-align: center" for="parent_phone">Phone: </label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control input-sm" name="parent_phone" value="{{old('parent_phone')}}" placeholder="Phone" autocomplete="off">
                                @if($errors->has('parent_phone'))
                                    <span class="text-danger">{{$errors->first('parent_phone')}}</span>
                                @endif
                            </div>
                            <label class="col-sm-1" style="text-align: center" for="parent_address">Address: </label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control input-sm" name="parent_address" value="{{old('parent_address')}}" placeholder="Address" autocomplete="off">
                                @if($errors->has('parent_address'))
                                    <span class="text-danger">{{$errors->first('parent_address')}}</span>
                                @endif
                            </div>
                            <label class="col-sm-1" style="text-align: center" for="parent_email">Email: </label>
                            <div class="col-sm-2">
                                <input type="email" class="form-control input-sm" name="parent_email" value="{{old('parent_email')}}" placeholder="Email" autocomplete="off">
                                @if($errors->has('parent_email'))
                                    <span class="text-danger">{{$errors->first('parent_email')}}</span>
                                @endif
                            </div>
                        </div>
                        <hr>
                       <button class="btn btn-primary btn-sm" type="submit">Save Student</button>
                       <button class="btn btn-warning btn-sm" type="reset">Reset</button>
                        <br><br><br>
                    </div>
                </form>
            </div>


    @endsection

