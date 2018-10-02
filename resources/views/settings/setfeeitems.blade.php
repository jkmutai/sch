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
        @if(Session::has('feesuccessmsg'))
            <div class="bg-success" style="padding: 15px;font-size: 14px;">Fee Item Created Successfully</div>
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
            <h4><i class="fa fa-plus-circle"></i> Set Fee Items</h4><hr>
            <form class="form" action="{{route('savefeeitems')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="row" style="background: #F3F8F3;">
                    <br><label class="col-sm-1 " for="code">Code: </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="code" value="{{old('code')}}" placeholder="Fee Item Code" autocomplete="off">
                        @if($errors->has('code'))
                            <span class="text-danger">{{$errors->first('code')}}</span>
                        @endif
                        <br>
                    </div>
                    <label class="col-sm-1" for="fee_item"> Fee Item: </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="fee_item" value="{{old('fee_item')}}" placeholder="Fee Item" autocomplete="off">
                        @if($errors->has('fee_item'))
                            <span class="text-danger">{{$errors->first('fee_item')}}</span>
                        @endif
                    </div>
                    <label class="col-sm-1" for="amount"> Amount: </label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" name="amount" value="{{old('amount')}}" placeholder="Set Amount" autocomplete="off">
                        @if($errors->has('amount'))
                            <span class="text-danger">{{$errors->first('amount')}}</span>
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
            <h5 style="font-weight: bolder;color: maroon;"><i class="fa fa-dollar"></i> Fee Items</h5>
            <div class="row justify-content-center">
                   <table class="table table-hover">
                       <tr>
                           <th>CODE</th>
                           <th>FEE ITEM</th>
                           <th>AMOUNT</th>
                           <th>ACTION</th>
                       </tr>

                    @foreach($loadfeeitems as $loadfeeitem)
                           <tr>
                               <td>{{$loadfeeitem->code}}</td>
                               <td>{{$loadfeeitem->fee_item}}</td>
                               <td>{{$loadfeeitem->amount}}</td>
                               <td>
                                   <a href="#" class="btn btn-warning btn-xs" ><i class="fa fa-edit"></i> Edit</a>
                                    <a href="#"  onclick="return confirm('Are you sure you want to delete Fee Item: ')"
                                      class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
                               </td>
                           </tr>
                           {{--editfeeitem/{{$loadfeeitem->id}} deletefeeitem/{{$loadfeeitem->id}}--}}
                    @endforeach
                   </table>
            </div>
        </div>
    @endsection

