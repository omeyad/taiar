@extends('layouts.temp')

@section('pageTitle')
قائمة أسماء الطيارين
@endsection
@section('content')



    <div>

        <!-- Table-to-load-the-data Part -->
        <table class="table">
            <thead>
            <tr>
                <th>الاسم</th>
                <th>الوسيلة</th>
                <th></th>   

            </tr>

            </thead>

            <tbody id="allDeliveries-list" name="allDeliveries-list">

            @foreach ($allDeliveries as $Delivery)
                <tr id="Delivery{{$Delivery->id}}">
                    <td><a href='/delivaries/{{$Delivery->id}}'>{{$Delivery->name}}</a></td>
                    <td>{{$Delivery->dname}}</td>
                   
                    <td>



                        <form  method="POST" action="{{route('delivaries.destroy',['allDeliveries'=>$Delivery->id])}}">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit" >حذف</button>
                        </form>


                    </td>

                </tr>
            @endforeach
            </tbody>

        </table>


    </div>

@endsection