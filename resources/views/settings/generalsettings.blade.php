@extends('templates.master')

@section('pageheader')
    <span style="font-size: 15px;color:darkblue;"><i class="fa fa-gears"></i> General School Settings</span>
    <span class="dropdown pull-right">
        <a href="{{route('newsettings')}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-plus-circle" style="font-size: 14px;"></i><br>New</button></a>
        <a href="{{route('loadclasses')}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-home" style="font-size: 14px;"></i><br>Classes & Streams</button></a>
         <a href="{{route('loadhouses')}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-address-book-o" style="font-size: 14px;"></i><br>Houses</button></a>
         <a href="{{route('loadexams')}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-graduation-cap" style="font-size: 14px;"></i><br>Exams</button></a>
         <a href="{{route('loadsubjects')}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-book" style="font-size: 14px;"></i><br>Subjects</button></a>
        <button class="btn btn-default btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-gear"></i><br>
            More Action
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="{{route('newsettings')}}">New School Settings</a></li>
            <li class="divider"></li>
            <li><a class="dropdown-item" href="{{route('loadsessions')}}">School Sessions</a></li>
            <li class="divider"></li>
            <li><a class="dropdown-item" href="{{route('loadfeeitems')}}">Fee Items</a></li>
            <li class="divider"></li>
            <li><a class="dropdown-item" href="#">Action 4</a></li>
        </ul>
    </span>

@endsection
@section('bodycontent')
    @if(Session::has('delsettings'))
        <div class="bg-danger" style="padding: 15px;font-size: 14px;">School Deleted Successfully</div>
    @endif
    <div class="col-sm-12" style="color:black;font-size:12px;background:white;padding-right: 25px;padding-left: 25px;box-shadow: 3px 2px 8px 0px black;">
        <table class="table table-bordred table-hover">
            <tr>
                <th>LOGO</th>
                <th>SCHOOL</th>
                <th>MOTTO</th>
                <th>ACTION</th>
            </tr>
            @foreach($schools as $school)
                <tr>
                    <td><img src="/logo/{{$school->school_logo}}" width="90" height="90" alt=""></td>
                    <td>{{$school->school_name}}</td>
                    <td>{{$school->school_motto}}</td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{route('viewsettings',$school->id)}}"><i class="fa fa-eye"></i> View</a>
                        <a class="btn btn-warning btn-xs"href="{{route('editsettings',$school->id)}}"><i class="fa fa-edit"></i> Edit</a>
                        <a class="btn btn-danger btn-xs" href="{{'deleteschool',$school->id}}" onclick="return confirm('Are you sure you want to delete School Settings?')"><i class="fa fa-trash-o"></i> Delete</a>
                    </td>

                </tr>
            @endforeach
        </table>
    </div>
@endsection

