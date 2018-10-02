@extends('templates.master')

@section('pageheader')
    Student Details
    @if(Session::has('successmsg'))
        <span class="alert alert-success" style="padding: 15px;font-size: 14px;">The Student: <span style="color:red;font-weight: bolder;">{{Session::get('successmsg')}}</span>&nbsp; Created Successfully</span>
    @endif
    @if(Session::has('updatesuccessmsg'))
        <span class="alert alert-success" style="padding: 15px;font-size: 14px;">The Student: <span style="color:red;font-weight: bolder;">{{Session::get('updatesuccessmsg')}}</span>&nbsp; Updated Successfully</span>
    @endif
    @if($errors->Any())
        <span class="alert alert-danger" style="padding: 15px;font-size: 14px;">There are some Errors!</span>
    @endif
    <span class="dropdown pull-right">
        <a href="{{route('newstudent')}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-plus-circle" style="font-size: 14px;"></i><br>New Student</button></a>
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
    <div class="row">
        <div class="col-md-10" style="margin-left:6%;color:black;font-size:12px;background:white;padding-right: 25px;padding-left: 25px;box-shadow: 3px 2px 8px 0px black;">
            <table class="table"><br>
                <tr>
                        <span class="pull-right">
                            &nbsp;&nbsp;&nbsp;&nbsp;<img src="/photos/{{$learners->photo}}" width="150" height="150" alt="">
                        </span>
                        <span class="pull-right" style="font-weight: bolder;font-size: 15px;">
                            <span style="font-weight: normal;font-size: 11px;font-style: italic;">Admission Number </span>
                            {{$learners->adm}}<hr>
                            <span style="font-weight: normal;font-size: 11px;font-style: italic;">Name </span>
                            {{$learners->name}}<hr>
                            <span style="font-weight: normal;font-size: 11px;font-style: italic;">Class </span>
                            {{$learners->class}} - {{$learners->stream}}<br><br>

                        </span>
                </tr>
                <br><br><br>
                <tr>
                    <td width="33%" style="font-size: 14px;font-style: oblique;">Gender: <span style="font-style: normal;font-weight: bold;color: brown;">{{$learners->gender}}</span></td>
                    <td width="33%" style="font-size: 14px;font-style: oblique;">Date of Birth: <span style="font-style: normal;font-weight: bold;color: brown;">{{$learners->dob}}</span></td>
                    <td width="33%" style="font-size: 14px;font-style: oblique;">House: <span style="font-style: normal;font-weight: bold;color: brown;">{{$learners->house}}</span></td>
                </tr>
                <tr>
                    <td width="33%" style="font-size: 14px;font-style: oblique;">Admission Date: <span style="font-style: normal;font-weight: bold;color: brown;">{{$learners->adm_date}}</span></td>
                    <td width="33%" style="font-size: 14px;font-style: oblique;">Admission Type: <span style="font-style: normal;font-weight: bold;color: brown;">{{$learners->adm_type}}</span></td>
                    <td width="33%" style="font-size: 14px;font-style: oblique;">Special Needs: <span style="font-style: normal;font-weight: bold;color: brown;">{{$learners->special_needs}}</span></td>
                </tr>
                <tr>
                    <td width="33%" style="font-size: 14px;font-style: oblique;">Former School: <span style="font-style: normal;font-weight: bold;color: brown;">{{$learners->old_school}}</span></td>
                    <td width="33%" style="font-size: 14px;font-style: oblique;">Entry Grade: <span style="font-style: normal;font-weight: bold;color: brown;">{{$learners->entry_grade}}</span></td>
                </tr>
                <tr>
                    <td><span style="font-weight: bolder;font-size: 16px; color: #00A8B3;">PARENT / GUARDIAN DETAILS</span></td>
                </tr>
                <tr>
                    <td width="33%" style="font-size: 14px;font-style: oblique;">Name: <span style="font-style: normal;font-weight: bold;color: brown;">{{$learners->parent_name}}</span></td>
                    <td width="33%" style="font-size: 14px;font-style: oblique;">Address: <span style="font-style: normal;font-weight: bold;color: brown;">{{$learners->parent_address}}</span></td>
                    <td width="33%" style="font-size: 14px;font-style: oblique;">Phone: <span style="font-style: normal;font-weight: bold;color: brown;">{{$learners->parent_phone}}</span></td>
                </tr>
                <tr>
                    <td width="33%" style="font-size: 14px;font-style: oblique;">Email: <span style="font-style: normal;font-weight: bold;color: brown;">{{$learners->parent_email}}</span></td>
                    <td><a class="btn btn-info btn-sm" href="{{route('students')}}"><i class="fa fa-angle-double-left"></i> Back to List</a></td>
                    <td><a href="{{route('editstudent',$learners->id)}}"><button class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</button></a></td>
                </tr>


            </table>
        </div>

    </div>

@endsection

