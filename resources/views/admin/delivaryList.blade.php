@extends('layouts.temp')

@section('content')

    {{--<h2>Laravel Ajax ToDo App</h2>--}}


    <div style="width: 700px;  display: inline-block;margin-left: 20px;">
        <h1 style="color: green;font-size: 30px;">active users </h1>

        <!-- Table-to-load-the-data Part -->
        <table class="table">
            <thead>
            <tr>
                <th>الرقم </th>
                <th>الاسم </th>
                <th>الوظيفه </th>
                <th>الحاله </th>
                <th>حذف </th>
            </tr>

            </thead>

            <tbody id="tasks-list" name="tasks-list">

            @foreach ($allDeliveries as $task)
                <tr id="task{{$task->id}}">
                     <td>{{$task->id}}</td>
                    <td>{{$task->name}}</td>
                   <td>{{$task->dname}}</td>
                    <td>{{$task->status}}</td>

                    <td>

                        <form  method="POST" action="{{route('delivaries.destroy',['allDeliveries'=>$task->id])}}">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit" >DELETE</button>
                        </form>

                    </td>

                </tr>
            @endforeach
            </tbody>

        </table>


    </div>



    <div style="width: 700px; display: inline-block" >
        <h1 style="color: red;font-size: 30px;">non active users </h1>

        <!-- Table-to-load-the-data Part -->
        <table class="table">
            <thead>
            <tr>
                <th>الرقم </th>
                <th>الاسم </th>
                <th>الوظيفه </th>
                <th>الحاله </th>
                <th>Actions</th>
            </tr>

            </thead>

            <tbody id="tasks-list" name="tasks-list">

            @foreach ($allDeliveries1 as $task1)
                <tr id="task{{$task1->id}}">
                    <td>{{$task1->id}}</td>
                    <td>{{$task1->name}}</td>
                   <td>{{$task1->dname}}</td>
                    <td>{{$task1->status}}</td>

                    <td>

                        <form  method="POST" action="{{route('delivaries.update',['allDeliveries1'=>$task1->id])}}">
                            {{method_field('PUT')}}
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit" > active me </button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>

        </table>


    </div>

@endsection