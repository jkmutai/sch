@extends('templates.master')
    @section('pageheader')
        System Settings
            <span class="dropdown pull-right">

                     <a href="{{route('loadclasses')}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-home" style="font-size: 14px;"></i><br>Classes & Streams</button></a>
                     <a href="{{route('loadsubjects')}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-address-book-o" style="font-size: 14px;"></i><br>Subjects</button></a>
                     <a href="{{route('loadexams')}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-book" style="font-size: 14px;"></i><br>Exams</button></a>

                <button class="btn btn-default btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-gears">
                    </i><br> More Settings
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="{{route('allsettings')}}">General Settings</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="#">2</a></li>
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
        @if(Session::has('savesessionmsg'))
            <div class="bg-success" style="padding: 15px;font-size: 14px;">School Session Created Successfully</div>
        @endif
        @if(Session::has('updatesessionseccess'))
            <div class="bg-success" style="padding: 15px;font-size: 14px;">School Session Updated Successfully</div>
        @endif
        @if(Session::has('deletesession'))
            <div class="bg-danger" style="padding: 15px;font-size: 14px;">School Session Deleted Successfully</div>
        @endif
        @if($errors->Any())
            <div class="bg-danger" style="padding: 15px;font-size: 14px;">There are some Errors!</div>
        @endif

        <div class="col-sm-12" style="background:white;padding-right: 25px;padding-left: 25px;box-shadow: 3px 2px 8px 0px black;">
            <h4><i class="fa fa-home"></i> School Sessions</h4><hr>
            <form class="form" action="{{route('savesession')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="row" style="padding-top: 15px;padding-bottom: -10px; background: #F3F8F3;">
                    <label class="col-sm-2 " for="school_session">Register New Session: </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="school_session" value="{{old('school_session')}}" placeholder="School Session" autocomplete="off">
                        @if($errors->has('school_session'))
                            <span class="text-danger">{{$errors->first('school_session')}}</span>
                        @endif
                        <br>
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
            <br><h5><i class="fa fa-list"></i>  School Sessions</h5>
            <div class="row justify-content-center">
                   <table class="table table-hover">
                       <tr>
                           <th>SCHOOL SESSION</th>
                           <th>ACTION</th>
                       </tr>

                    @foreach($loadsessions as $loadsession)
                           <tr>
                               <td>{{$loadsession->school_session}}</td>
                               <td>
                                   <a href="editsession/{{$loadsession->id}}" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i> Edit</a>
                                   <a href="deletesession/{{$loadsession->id}}"  onclick="return confirm('Are you sure you want to delete Session: {{$loadsession->school_session}}.')"
                                      class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
                               </td>
                           </tr>
                    @endforeach
                   </table>
            </div>
        </div>
    @endsection

