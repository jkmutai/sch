@extends('templates.master')
    @section('pageheader')
        Students List
            <span class="dropdown pull-right">
                <a href="{{route('newstudent')}}"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-plus-circle" style="font-size: 14px;"></i><br>New Student</button></a>
                <button class="btn btn-default btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-gear"></i><br>
                    More Action
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="{{route('newstudent')}}">New Student</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="#">Action 2</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="#">Action 3</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="#">Action 4</a></li>
                </ul>
            </span>

    @endsection

    @section('bodycontent')
        @if(Session::has('delmessage'))
            <div class="alert alert-info" style="padding: 15px;font-size: 14px;">Student Deleted Successfully</div>
        @endif
        @if(Session::has('updatesuccessmsg'))
            <div class="alert alert-success" style="padding: 15px;font-size: 14px;">The Student: <span style="color:red;font-weight: bolder;">{{Session::get('updatesuccessmsg')}}</span>&nbsp; Updated Successfully</div>
        @endif
        @if($errors->Any())
            <div class="alert alert-danger" style="padding: 15px;font-size: 14px;">There are some Errors!</div>
        @endif
        <div  id="studentdata" class="col-sm-12" style="color:black;font-size:12px;background:white;padding-right: 25px;padding-left: 25px;box-shadow: 3px 2px 8px 0px black;">
            <table class="table table-bordred table-hover" id="student_table">
                <tr>
                    <th><input type="checkbox" id="checkall" /></th>
                    <th>ADM</th>
                    <th>NAME</th>
                    <th>CLASS</th>
                    <th>STREAM</th>
                    <th>HOUSE</th>
                    <th>DOB</th>
                    <th>ACTION</th>
                </tr>
                @foreach($students as $student)
                    <tr>
                        <td><input type="checkbox" class="checkthis" /></td>
                        <td>{{$student->adm}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->class}}</td>
                        <td>{{$student->stream}}</td>
                        <td>{{$student->house}}</td>
                        <td>{{$student->dob}}</td>
                        <td>
                            <a href="{{route('showstudent', $student->id) }}"><i class="fa fa-eye"></i></a>
                            <a href="{{route('editstudent', $student->id)}}"><i class="fa fa-edit"></i></a>
                            <a href="deletestudent/{{ $student->id }}" onclick="return confirm('Are you sure you want to delete Student {{ $student->name }}')"><i class="fa fa-trash-o"></i></a>
                        </td>

                    </tr>
                @endforeach
            </table>
        </div>
        <script>
            $(function() {
                $('#student_table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ route('students.get') }}',
                    columns: [
                        { data: 'adm', name: 'adm' },
                        { data: 'name', name: 'name' },
                        { data: 'class', name: 'class' },
                        { data: 'stream', name: 'stream' },
                        { data: 'house', name: 'house' }
                    ]
                });
            });
        </script>
    @endsection



