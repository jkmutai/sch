@extends('templates.master')
    @section('pageheader')
        Teacher Section
            <span class="dropdown pull-right">
                <a href="#"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-plus-circle" style="font-size: 14px;"></i><br>New</button></a>
                <button class="btn btn-default btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-gears" style="font-size: 14px;"></i><br>
                        More Action
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">New Teacher</a></li>
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

    @endsection

