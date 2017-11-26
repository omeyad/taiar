@extends('layouts.temp')
@section('content')
    <h1 style="color: green;font-size: 30px;">Delivary Type Name </h1>
    <br/>
  <div style="width: 696px;  display: inline-block;margin-left: 20px; background-color: white;">


      <form  method="POST" action="{{route('admin.store')}}" style="margin: 20px;">
{{--          {{method_field('PUT')}}--}}
          {{csrf_field()}}

          <div  class="col-md-2">

            <label>ادخل وسيلة المواصلات</label>
          </div>

          <div  class="col-md-4">

            <input type="text" name="dname" >
          </div>


        <div class="col-md-6">
          <button class="btn btn-danger" type="submit" style="width: 50%;
  height: 45px;" >ADD</button>
        </div>

      </form>




  </div>

    <br>
    <div style="width: 700px;  display: inline-block;margin-left: 20px;">



        <!-- Table-to-load-the-data Part -->
        <table class="table">
            <thead>
            <tr>
                <th>وسيلة المواصلات </th>

                <th>حذف </th>
            </tr>

            </thead>

            <tbody id="tasks-list" name="tasks-list">

            @foreach ($allDeliveries as $item)
                <tr id="task{{$item->id}}">

                    <td>{{$item->dname}}</td>

                    <td>

                        <form  method="POST" action="{{route('admin.destroy',['allDeliveries'=>$item->id])}}">
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
@endsection