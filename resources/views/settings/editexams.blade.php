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
                    <li><a class="dropdown-item" href="#">1</a></li>
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
        @if($errors->Any())
            <div class="bg-danger" style="padding: 15px;font-size: 14px;">There are some Errors!</div>
        @endif

        <div class="col-sm-12" style="background:white;padding-right: 25px;padding-left: 25px;box-shadow: 3px 2px 8px 0px black;">
            <h4><i class="fa fa-edit"></i> Update types of Exams</h4><hr>
            <form class="form" action="{{route('examsupdate',$editexams->id)}}" method="post" enctype="multipart/form-data">
                {{--{{route('updateclasses',$editexams->id)}}--}}
            @csrf
                <label class="col-sm-1 " for="class">Code: </label>
                <div class="col-sm-2">
                    <input type="text" class="form-control input-sm" name="code" value="{{$editexams->code}}" placeholder="Code" autocomplete="off">
                    @if($errors->has('code'))
                        <span class="text-danger">{{$errors->first('code')}}</span>
                    @endif
                    <br>
                </div>
                <label class="col-sm-1" for="exam_name">Exam: </label>
                <div class="col-sm-2">
                    <input type="text" class="form-control input-sm" name="exam_name" value="{{$editexams->exam_name}}" placeholder="Name of Exam" autocomplete="off">
                    @if($errors->has('exam_name'))
                        <span class="text-danger">{{$errors->first('exam_name')}}</span>
                    @endif
                </div>
                <label class="col-sm-1" for="out_of">Out of: </label>
                <div class="col-sm-2">
                    <input type="text" class="form-control input-sm" name="out_of" value="{{$editexams->out_of}}" placeholder="Marked out of" autocomplete="off">
                    @if($errors->has('out_of'))
                        <span class="text-danger">{{$errors->first('out_of')}}</span>
                    @endif
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-primary btn-sm" type="submit">Update</button>
                    <br><br><br>
                </div>

            </form>
        </div>

    @endsection

