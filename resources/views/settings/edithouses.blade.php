@extends('templates.master')
    @section('pageheader')
        System Settings
            <span class="dropdown pull-right">

                     <a href="{{route('loadclasses')}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-home" style="font-size: 14px;"></i><br>Classes & Streams</button></a>
                     <a href="{{route('loadhouses')}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-address-book-o" style="font-size: 14px;"></i><br>Houses</button></a>
                     <a href="#"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-book" style="font-size: 14px;"></i><br>Exams</button></a>

                <button class="btn btn-default btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-gears">
                    </i><br> More Settings
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="{{route('allsettings')}}">Settings</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="{{route('loadsessions')}}">School Sessions</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="#">3</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="#">Exam Types</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="#">Houses</a></li>
                    <li class="divider"></li>

                </ul>
            </span>

    @endsection

    @section('bodycontent')
        @if(Session::has('hsemsg'))
            <div class="bg-success" style="padding: 15px;font-size: 14px;">School House {{$edithouses->house}} Updated Successfully</div>
        @endif
        @if(Session::has('delhse'))
            <div class="bg-danger" style="padding: 15px;font-size: 14px;">School House Deleted Successfully</div>
        @endif
        @if($errors->Any())
            <div class="bg-danger" style="padding: 15px;font-size: 14px;">There are some Errors!</div>
        @endif

        <div class="col-sm-12" style="background:white;padding-right: 25px;padding-left: 25px;box-shadow: 3px 2px 8px 0px black;">
            <h4><i class="fa fa-home"></i> Update School House: {{$edithouses->house}}</h4><hr>
            <form class="form" action="{{route('updatehouse',$edithouses->id)}}" method="post" enctype="multipart/form-data">
            @csrf
                <label class="col-sm-1 " for="house">School House: </label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="house" value="{{$edithouses->house}}" placeholder="House" autocomplete="off">
                    @if($errors->has('house'))
                        <span class="text-danger">{{$errors->first('house')}}</span>
                    @endif
                    <br>
                </div>

                <div class="col-sm-2">
                    <button class="btn btn-primary" type="submit">Update</button>
                    <br><br><br>
                </div>

            </form>
        </div>
    @endsection

