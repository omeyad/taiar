@extends('layouts.temp')

@section('pageTitle')
 الصفحة الشخصية
@endsection


@section('content')
<!-- Page info -->


    <div class="wrap">
        <div class="row">

            <aside class="one-fourth sidebar left">
                <!-- Widget -->
                <div class="widget">
                    <div class="textwidget">
                        <img src="{{asset('images/uploads/Unknown.png')}}">
                    </div>
                </div>
                    <h3 style="text-align: -webkit-center;">عدد الاروردرات : {{$ordersNo}}</h3>
                <!-- //Widget -->

                <!-- Widget -->

                <!-- //Widget -->
            </aside>
            @foreach($Delivery as $DeliveryItem)
            <div class="three-fourth">
                <form class="box readonly" >
                    <h3>معلومات شخصية</h3>
                    <div class="f-row">
                        <h3>الاسم</h3>
                        <div class="one-fourth">{{$DeliveryItem->name}}</div>

                    </div>
                    
                    <div class="f-row">
                        <h3>رقم الموبيل :</h3>
                        <div class="one-fourth"> {{$DeliveryItem->phone}}</div>

                    </div>
                    <div class="f-row">
                        <h3>العنوان:</h3>
                        <div class="one-fourth">ا{{$DeliveryItem->email}}</div>

                    </div>
                    <div class="f-row">
                                                <h3>العنوان:</h3>

                        <div class="one-fourth">{{$DeliveryItem->address}}</div>

                    </div>
                     <div class="f-row">
                                                <h3>الوسيلة المتوفرة:</h3>

                        <div class="one-fourth">{{$DeliveryItem->dname}}</div>

                    </div>
                    
                    <div class="f-row">
                                                <h3> الرقم القومي:</h3>

                        <div class="one-fourth">{{$DeliveryItem->nid}}</div>

                    </div>  
                    <div class="f-row">
                                                <h3>تاريخ الميلاد:</h3>

                        <div class="one-fourth">{{$DeliveryItem->birthDate}}</div>

                    </div>
                   

                </form>
        
            @endforeach</div>

        </div>
    </div>
@endsection