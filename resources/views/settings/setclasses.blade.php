@extends('templates.master')
    @section('pageheader')
        System Settings
            <span class="dropdown pull-right">

                     <a href="{{route('loadsubjects')}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-home" style="font-size: 14px;"></i><br>Subjects</button></a>
                     <a href="{{route('loadhouses')}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-address-book-o" style="font-size: 14px;"></i><br>Houses</button></a>
                     <a href="{{route('loadexams')}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-book" style="font-size: 14px;"></i><br>Exams</button></a>

                <button class="btn btn-default btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-gears">
                    </i><br> More Settings
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="{{route('allsettings')}}">General Settings</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="{{route('loadsessions')}}">School Sessions</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="#">#</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="#">#</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="#">#</a></li>
                    <li class="divider"></li>

                </ul>
            </span>

    @endsection

    @section('bodycontent')
        @if(Session::has('classmsg'))
            <div class="bg-success" style="padding: 15px;font-size: 14px;">School Class & Stream Created Successfully</div>
        @endif
        @if(Session::has('updateclassmsg'))
            <div class="bg-success" style="padding: 15px;font-size: 14px;">School Class & Stream Updated Successfully</div>
        @endif
        @if(Session::has('delclass'))
            <div class="bg-danger" style="padding: 15px;font-size: 14px;">School Class & Stream Deleted Successfully</div>
        @endif
        @if($errors->Any())
            <div class="bg-danger" style="padding: 15px;font-size: 14px;">There are some Errors!</div>
        @endif

        <div class="col-sm-12" style="background:white;padding-right: 25px;padding-left: 25px;box-shadow: 3px 2px 8px 0px black;">
            <h4><i class="fa fa-plus-circle"></i> Register Classes & Streams</h4><hr>
            <form class="form" action="{{route('saveclasses')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="row" style="background: #F3F8F3;">
                    <br><label class="col-sm-1 " for="class">Class: </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="class" value="{{old('class')}}" placeholder="Class" autocomplete="off">
                        @if($errors->has('class'))
                            <span class="text-danger">{{$errors->first('class')}}</span>
                        @endif
                        <br>
                    </div>
                    <label class="col-sm-1" for="stream">Stream: </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="stream" value="{{old('stream')}}" placeholder="Stream" autocomplete="off">
                        @if($errors->has('stream'))
                            <span class="text-danger">{{$errors->first('stream')}}</span>
                        @endif
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <button class="btn btn-warning" type="reset">Reset</button>
                        <br><br><br>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-12" style="background:white;padding-right: 25px;padding-left: 25px;box-shadow: 3px 2px 3px 0px black;">
            <h5 style="font-weight: bolder;color: maroon;"><i class="fa fa-home"></i> Classes & Streams</h5>
            <div class="row justify-content-center">
                   <table class="table table-hover">
                       <tr>
                           <th>CLASS</th>
                           <th>STREAM</th>
                           <th>ACTION</th>
                       </tr>

                    @foreach($classes as $class)
                           <tr>
                               <td>{{$class->class}}</td>
                               <td>{{$class->stream}}</td>
                               <td>
                                   <a href="editclass/{{$class->id}}" class="btn btn-warning btn-xs" ><i class="fa fa-edit"></i> Edit</a>
                                    <a href="deleteclass/{{$class->id}}"  onclick="return confirm('Are you sure you want to delete Class: {{ $class->class }}- {{ $class->stream }}')"
                                      class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
                               </td>
                           </tr>
                    @endforeach
                   </table>
            </div>
        </div>
    @endsection

