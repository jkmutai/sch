@extends('templates.master')
    @section('pageheader')
        System Settings
            <span class="dropdown pull-right">

                     <a href="{{route('loadclasses')}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-home" style="font-size: 14px;"></i><br>Classes & Streams</button></a>
                     <a href="{{route('loadhouses')}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-address-book-o" style="font-size: 14px;"></i><br>Houses</button></a>
                     <a href="{{route('loadsubjects')}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-book" style="font-size: 14px;"></i><br>Subjects</button></a>

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
        @if(Session::has('saveexammsg'))
            <div class="bg-success" style="padding: 15px;font-size: 14px;">Exam Type Created Successfully</div>
        @endif
        @if(Session::has('updateexamsmsg'))
            <div class="bg-success" style="padding: 15px;font-size: 14px;">Exam Setting Updated Successfully</div>
        @endif
        @if(Session::has('delexam'))
            <div class="bg-danger" style="padding: 15px;font-size: 14px;">Exam type Deleted Successfully</div>
        @endif
        @if($errors->Any())
            <div class="bg-danger" style="padding: 15px;font-size: 14px;">There are some Errors!</div>
        @endif

        <div class="col-sm-12" style="background:white;padding-right: 25px;padding-left: 25px;box-shadow: 3px 2px 8px 0px black;">
            <h4><i class="fa fa-plus-circle"></i> Register Types of Exams Administered in School</h4><hr>
            <form class="form" action="{{route('saveexams')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="row" style="background: #F3F8F3;">
                    <br><label class="col-sm-1 " for="code">Code: </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="code" value="{{old('code')}}" placeholder="Exam Code" autocomplete="off">
                        @if($errors->has('class'))
                            <span class="text-danger">{{$errors->first('code')}}</span>
                        @endif
                        <br>
                    </div>
                    <label class="col-sm-1" for="exam_name"> Exam: </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="exam_name" value="{{old('exam_name')}}" placeholder="Name of Exam" autocomplete="off">
                        @if($errors->has('exam_name'))
                            <span class="text-danger">{{$errors->first('exam_name')}}</span>
                        @endif
                    </div>
                    <label class="col-sm-1" for="out_of"> Out of: </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="out_of" value="{{old('out_of')}}" placeholder="Marked out of" autocomplete="off">
                        @if($errors->has('out_of'))
                            <span class="text-danger">{{$errors->first('out_of')}}</span>
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
            <h5 style="font-weight: bolder;color: maroon;"><i class="fa fa-home"></i> Types of Exams</h5>
            <div class="row justify-content-center">
                   <table class="table table-hover">
                       <tr>
                           <th>CODE</th>
                           <th>EXAM NAME</th>
                           <th>MARKED OUT OF</th>
                           <th>ACTION</th>
                       </tr>

                    @foreach($loadexams as $loadexam)
                           <tr>
                               <td>{{$loadexam->code}}</td>
                               <td>{{$loadexam->exam_name}}</td>
                               <td>{{$loadexam->out_of}} %</td>
                               <td>
                                   <a href="editexam/{{$loadexam->id}}" class="btn btn-warning btn-xs" ><i class="fa fa-edit"></i> Edit</a>
                                    <a href="deleteexam/{{$loadexam->id}}"  onclick="return confirm('Are you sure you want to delete Exam: {{ $loadexam->code }}')"
                                      class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
                               </td>
                           </tr>
                    @endforeach
                   </table>
            </div>
        </div>
    @endsection

