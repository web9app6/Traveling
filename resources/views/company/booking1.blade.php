@extends('layouts.app1')
@section('csscontent')
    <link rel="stylesheet" type="text/css" href="{{asset('addbyme/css/chosen.css')}}">
@endsection
@section('content')

    <div class="mar2">
        <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="title bookbottom">
            <h3>احجز الان</h3>
            </div>
            </div>
        </div>
        </div>
    </div>

</section>

<section class="Latest-Packages bgimages3">
    <div class="container topsection">
          <div class="row bgcolor4 rowmar boxsmall">
            <div class="col-md-12">
            <div class="time">
              <h3>العرض ينتهي في</h3>
                <p><i class="fa fa-clock-o"></i><span class="resttime">
                            <?php
                            /*  $to = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',date('Y-m-d H:i:s'));
                              $from = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',  date('Y-m-d H:i:s',strtotime($package->offer_until)));
                              $diffInSeconds = $to->diffInSeconds($from);
                              $diffInDays = $to->diffInDays($from);
                              $diffInSeconds -= 60*60*24*$diffInDays;
                              echo $diffInDays.'ايام '.gmdate('H:i:s', $diffInSeconds);*/
                              ?></span><input type="hidden" value="{{date('Y-m-d', strtotime('+1 day', strtotime($flight->o_until)))}}"></p>



              </div>
            </div>
	    	</div>



          <div class="row martop-20">
            <div class="col-md-4 pright">
                <div class="box">

                    <div class="row rowmar Destinationpdd">
                        <div class="col-md-12">
                            <div class="boxtitle">
                                <h4>الرحلة التي اخترتها</h4>
                            </div>
                        </div>
                    </div>

                    <div class="row rowmar Destinationpdd bgoutdoore">
                        <div class="col-md-12">
                            <div class="boxtitle Flightimg">
                                <h4><img src="{{asset('addbyme/images/air2white.png')}}"> الذهاب</h4>
                            </div>

                        </div>
                    </div>

                    <div class="row rowmar padd20 bgnila">
                        <div class="col-md-12  col-lg-6">
                            <div class="booking placeholderinput01">
                                <h4>توقيت الطيران</h4>
                                <img src="{{asset('addbyme/images/Vector10001white.png')}}">
                                <div class="searchbox">
                                    <span class="map"><i class="fa fa-calendar"></i></span>
                                    <input type="text" name="text" placeholder="Tue Jun 11" value="{{$flight->o_departure}}" readonly>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-12  col-lg-6">
                            <div class="booking placeholderinput01">
                                <h4>وقت وصول</h4>
                                <img src="{{asset('addbyme/images/Vector1whaite.png')}}">
                                <div class="searchbox">
                                    <span class="map"><i class="fa fa-calendar"></i></span>
                                    <input type="text" name="text" placeholder="Fri Jun 11" value="{{$flight->o_arrival}}" readonly>
                                </div>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>

                    <div class="row rowmar bgnila">
                        <div class="col-md-5 paddright01">
                            <div class="London">
                                <a href="#">{{$flight->o_departure_time}}</a>
                            </div>
                            <h3 class="Heathrow">{{$flight->o_country}}</h3>
                        </div>

                        <div class="col-md-2 borpaddlondan">
                            <div class="borLondon1">
                            </div>
                        </div>

                        <div class="col-md-5 paddright02">
                            <div class="London">
                                <a href="#">{{$flight->o_arrival_time}}</a>
                            </div>
                            <h3 class="Heathrow">{{$flight->o_city}}</h3>
                        </div>

                    </div>

                    <div class="row rowmar bgnila paddbg01">
                        <div class="col-md-12">
                            <div class="FlighDuration">
                                <h4>شركة الطيران  <span>مدة الرحلة</span></h4>
                                <h5>{{$flight->o_airline}}  <span><?php 
                                                    $start_time = $flight->o_departure_time;
                                                    $end_time = $flight->o_arrival_time;

                                                    $start_datetime = new DateTime(date('Y-m-d').' '.$start_time);
                                                    $end_datetime = new DateTime(date('Y-m-d').' '.$end_time);
                                                    if($start_datetime > $end_datetime)
                                                    {
                                                        $start_datetime = new DateTime(date('Y-m-d',strtotime("-1 days")).' '.$start_time);
                                                    }
                                                    $interval = $start_datetime->diff($end_datetime);
                                                    echo $interval->format('%hh').' '.$interval->format('%im');?></span></h5>

                            </div>
                        </div>
                    </div>

                    <div class="row rowmar get">
                        <div class="col-md-12">
                            <div class="titleget">
                                <h4>المزيد من المعلومات</h4>
                            </div>
                        </div>
                    </div>

                    <div class="row rowmar gettext">
                        <div class="col-md-12">
                            <div class="titleget">
                                <textarea class="textareahome" readonly>{{$flight->o_more}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div style="<?php if($flight->inbound != 'on'){echo 'display:none';}?>">
                    <div class="row rowmar Destinationpdd bgInbound">
                        <div class="col-md-12">
                            <div class="boxtitle Flightimg">
                                <h4><img src="{{asset('addbyme/images/air3white.png')}}"> الرجوع</h4>
                            </div>

                        </div>
                    </div>

                    <div class="row rowmar padd20 bgnila">
                        <div class="col-md-12  col-lg-6">
                            <div class="booking placeholderinput01">
                                <h4>توقيت الطيران</h4>
                                <img src="{{asset('addbyme/images/Vector10001white.png')}}">
                                <div class="searchbox">
                                    <span class="map"><i class="fa fa-calendar"></i></span>
                                    <input type="text" name="text" placeholder="Tue Jun 11"  value="{{$flight->i_departure}}">
                                </div>

                            </div>
                        </div>

                        <div class="col-md-12  col-lg-6">
                            <div class="booking placeholderinput01">
                                <h4>وقت وصول</h4>
                                <img src="{{asset('addbyme/images/Vector1whaite.png')}}">
                                <div class="searchbox">
                                    <span class="map"><i class="fa fa-calendar"></i></span>
                                    <input type="text" name="text" placeholder="Fri Jun 11"  value="{{$flight->i_arrival}}">
                                </div>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>

                    <div class="row rowmar bgnila">
                        <div class="col-md-5 paddright01">
                            <div class="London">
                                <a href="#">{{$flight->i_departure_time}}</a>
                            </div>
                            <h3 class="Heathrow">{{$flight->i_country}}</h3>
                        </div>

                        <div class="col-md-2 borpaddlondan">
                            <div class="borLondon1">
                            </div>
                        </div>

                        <div class="col-md-5 paddright02">
                            <div class="London">
                                <a href="#">{{$flight->i_arrival_time}}</a>
                            </div>
                            <h3 class="Heathrow">{{$flight->i_city}}</h3>
                        </div>

                    </div>

                    <div class="row rowmar bgnila paddbg01">
                        <div class="col-md-12">
                            <div class="FlighDuration">
                                <h4>شركة الطيران  <span>مدة الرحلة</span></h4>
                                <h5>{{$flight->o_airline}}  <span><?php 
                                                    $start_time = $flight->i_departure_time;
                                                    $end_time = $flight->i_arrival_time;

                                                    $start_datetime = new DateTime(date('Y-m-d').' '.$start_time);
                                                    $end_datetime = new DateTime(date('Y-m-d').' '.$end_time);
                                                    if($start_datetime > $end_datetime)
                                                    {
                                                        $start_datetime = new DateTime(date('Y-m-d',strtotime("-1 days")).' '.$start_time);
                                                    }
                                                    $interval = $start_datetime->diff($end_datetime);
                                                    echo $interval->format('%hh').' '.$interval->format('%im');?></span></h5>

                            </div>
                        </div>
                    </div>

                    <div class="row rowmar get">
                        <div class="col-md-12">
                            <div class="titleget">
                                <h4>المزيد من المعلومات</h4>
                            </div>
                        </div>
                    </div>

                    <div class="row rowmar gettext">
                        <div class="col-md-12">
                            <div class="titleget">
                                <textarea class="textareahome" readonly>{{$flight->i_more}}</textarea>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
           <!--end of col-md-4--->

            <!--col-md-8-->
            <div class="col-md-8 pleft" id="booking1">
                <div class="box bg-gradient">
                    <div class="row rowmar Destinationpdd bor-bottom bgrow">
                        <div class="col-md-12">
                            <div class="boxtitle">
                                <h4>البدأ بحجز العرض المقدم من شركة {{$flight->travel_agency_name}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="bookingname">
                        <div class="row rowmar">
                        <div class="col-md-12">
                            <div class="passport">
                            <h4>املئ الحقول التالية بالضبط مثل مموجودة في جواز السفر</h4>
                        </div>
                        </div>
                        </div>
                    </div>
                    <form id="sendallform"  action="{{url('/sendall')}}" method="Post" enctype="multipart/form-data">
                        <div id="adulttable">
                            <?php for($i =0;$i<$appointment->adult;$i++){?>
                            <div class="oneadult onetraveler">
                                <div class="bookingname">
                                    <div class="row rowmar">
                                        <div class="col-md-12">
                                            <div class="ablitbotton">
                                                <a href=javascript:void(0);>بالغ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bookingform">
                                    <div class="row rowmar bor-bottom paddro">
                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>الجنس </label>
                                                <select name="sex"  class="mainheit3 mainheit">
                                                    <option value="MR">MR</option>
                                                    <option value="MISS">MISS</option>
                                                    <option value="MRS">MRS</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                        </div>

                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>الأسم </label>
                                                <input type="text" name="first_name" placeholder="" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>اللقب</label>
                                                <input type="text" name="last_name" placeholder="" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>تاريخ الولادة</label>
                                                <span class="map1"><i class="fa fa-calendar"></i></span><input type="date" name="day_of_birth" placeholder=""  required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>رقم الجواز</label>
                                                <input type="text" name="pssport_no" placeholder="" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>تاريخ اصدار الجواز</label>
                                                <span class="map1"><i class="fa fa-calendar"></i></span><input type="date" name="passport_issue_date" placeholder="" required>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>تاريخ نفاذ الجواز</label>
                                                <span class="map1"><i class="fa fa-calendar"></i></span><input type="date" name="passport_expire_date" placeholder="" required>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="Passportuplo">
                                                <h5>الجواز</h5>
                                                <div id="drop--area">
                                                    <input type="file" data-input="false" class="passportphoto" name="photo" style="display:none" data-buttonText="Upload photo" data-size="sm" data-badge="false" accept="image/*"> 
                                                    <label class="button uploadpassport"> تحميل الصورة </label>                              
                                                    <div id="gallery"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="Passportuplo">
                                                <h5>صورة الجواز (صفحة معلومات الجواز)</h5>
                                                <div id="drop--area" >
                                                    <img src="{{asset('addbyme/images/Passport.png')}}"  class="passportphoto_preview" style="height:auto;width:50%;display: initial;">                              
                                                    <div id="gallery"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="ablitbotton textright2">
                                                <a class="deladult" style="color:white">حذف <i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                        <div id="childtable">
                            <?php for($i =0;$i<$appointment->child;$i++){?>
                            <div class="onechild onetraveler">
                                <div class="bookingname">
                                    <div class="row rowmar">
                                        <div class="col-md-12">
                                            <div class="ablitbotton">
                                                <a href=javascript:void(0);>طفل</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bookingform">
                                    <div class="row rowmar bor-bottom paddro">
                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>الجنس </label>
                                                <select name="sex"  class="mainheit3 mainheit">
                                                    <option value="MR">MR</option>
                                                    <option value="MISS">MISS</option>
                                                    <option value="MRS">MRS</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                        </div>

                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>الأسم </label>
                                                <input type="text" name="first_name" placeholder="" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>اللقب</label>
                                                <input type="text" name="last_name" placeholder="" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>تاريخ الولادة</label>
                                                <span class="map1"><i class="fa fa-calendar"></i></span><input type="date" name="day_of_birth" placeholder=""  required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>رقم الجواز</label>
                                                <input type="text" name="pssport_no" placeholder="" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>تاريخ اصدار الجواز</label>
                                                <span class="map1"><i class="fa fa-calendar"></i></span><input type="date" name="passport_issue_date" placeholder="" required>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>تاريخ نفاذ الجواز</label>
                                                <span class="map1"><i class="fa fa-calendar"></i></span><input type="date" name="passport_expire_date" placeholder="" required>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="Passportuplo">
                                                <h5>الجواز</h5>
                                                <div id="drop--area">
                                                    <input type="file" data-input="false" class="passportphoto" name="photo" style="display:none" data-buttonText="Upload photo" data-size="sm" data-badge="false" accept="image/*"> 
                                                    <label class="button uploadpassport"> تحميل الصورة </label>                              
                                                    <div id="gallery"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="Passportuplo">
                                                <h5>صورة الجواز (صفحة معلومات الجواز)</h5>
                                                <div id="drop--area" >
                                                    <img src="{{asset('addbyme/images/Passport.png')}}"  class="passportphoto_preview" style="height:auto;width:50%;display: initial;">                              
                                                    <div id="gallery"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="ablitbotton textright2">
                                                <a class="delchild" style="color:white">حذف <i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>   
                        </div>
                        <div id="infanttable">
                            <?php for($i =0;$i<$appointment->infant;$i++){?>
                            <div class="oneinfant onetraveler">
                                <div class="bookingname">
                                    <div class="row rowmar">
                                        <div class="col-md-12">
                                            <div class="ablitbotton">
                                                <a href=javascript:void(0);>رضيع</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bookingform">
                                    <div class="row rowmar bor-bottom paddro">
                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>الجنس </label>
                                                <select name="sex" class="mainheit3 mainheit">
                                                    <option value="MR">MR</option>
                                                    <option value="MISS">MISS</option>
                                                    <option value="MRS">MRS</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                        </div>

                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>الأسم </label>
                                                <input type="text" name="first_name" placeholder="" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>اللقب</label>
                                                <input type="text" name="last_name" placeholder="" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>تاريخ الولادة</label>
                                                <span class="map1"><i class="fa fa-calendar"></i></span><input type="date" name="day_of_birth" placeholder=""  required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>رقم الجواز</label>
                                                <input type="text" name="pssport_no" placeholder="" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>تاريخ اصدار الجواز</label>
                                                <span class="map1"><i class="fa fa-calendar"></i></span><input type="date" name="passport_issue_date" placeholder="" required>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>تاريخ نفاذ الجواز</label>
                                                <span class="map1"><i class="fa fa-calendar"></i></span><input type="date" name="passport_expire_date" placeholder="" required>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="Passportuplo">
                                                <h5>الجواز</h5>
                                                <div id="drop--area">
                                                    <input type="file" data-input="false" class="passportphoto" name="photo" style="display:none" data-buttonText="Upload photo" data-size="sm" data-badge="false" accept="image/*"> 
                                                    <label class="button uploadpassport"> تحميل الصورة </label>                              
                                                    <div id="gallery"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="Passportuplo">
                                                <h5>صورة الجواز (صفحة معلومات الجواز)</h5>
                                                <div id="drop--area" >
                                                    <img src="{{asset('addbyme/images/Passport.png')}}"  class="passportphoto_preview" style="height:auto;width:50%;display: initial;">                              
                                                    <div id="gallery"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="ablitbotton textright2">
                                                <a class="delinfant" style="color:white">حذف <i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>  
                        </div>
                        <div id="roomtable">
                            <?php for($i =0;$i<$appointment->room;$i++){?>
                            <div class="oneroom onetraveler">
                                <div class="bookingname">
                                    <div class="row rowmar">
                                        <div class="col-md-12">
                                            <div class="ablitbotton">
                                                <a href=javascript:void(0);>غرفة اضافية</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bookingform">
                                    <div class="row rowmar bor-bottom paddro">
                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>الجنس </label>
                                                <select name="sex" class="mainheit3 mainheit">
                                                    <option value="MR">MR</option>
                                                    <option value="MISS">MISS</option>
                                                    <option value="MRS">MRS</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                        </div>

                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>الأسم </label>
                                                <input type="text" name="first_name" placeholder="" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>اللقب</label>
                                                <input type="text" name="last_name" placeholder="" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>تاريخ الولادة</label>
                                                <span class="map1"><i class="fa fa-calendar"></i></span><input type="date" name="day_of_birth" placeholder=""  required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>رقم الجواز</label>
                                                <input type="text" name="pssport_no" placeholder="" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>تاريخ اصدار الجواز</label>
                                                <span class="map1"><i class="fa fa-calendar"></i></span><input type="date" name="passport_issue_date" placeholder="" required>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="bookform1">
                                                <label>تاريخ نفاذ الجواز</label>
                                                <span class="map1"><i class="fa fa-calendar"></i></span><input type="date" name="passport_expire_date" placeholder="" required>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="Passportuplo">
                                                <h5>الجواز</h5>
                                                <div id="drop--area">
                                                    <input type="file" data-input="false" class="passportphoto" name="photo" style="display:none" data-buttonText="Upload photo" data-size="sm" data-badge="false" accept="image/*"> 
                                                    <label class="button uploadpassport"> تحميل الصورة </label>                              
                                                    <div id="gallery"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="Passportuplo">
                                                <h5>صورة الجواز (صفحة معلومات الجواز)</h5>
                                                <div id="drop--area" >
                                                    <img src="{{asset('addbyme/images/Passport.png')}}"  class="passportphoto_preview" style="height:auto;width:50%;display: initial;">                              
                                                    <div id="gallery"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="ablitbotton textright2">
                                                <a class="delroom" style="color:white">حذف <i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>  
                        </div>
                        <button type="submit" id="sendallformsubmit" style="display:none;"></button>
                    </form>
                    <div class="row rowmar">
                        <div class="col-md-12">
                            <div class="ablitbotton">
                                <a data-toggle="modal" data-target="#myModal11" style="color:white">اضافة مسافر آخر<i class="fa fa-user-plus"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="boxcolorhow">
                        
                        <form  action="{{ url('/addappointmentall') }}" method="POST" id="addappointmentall">
                        <div class="row rowmar martop boxfontchail">

                            @csrf
                            <div class="col-md-6">
                                <div class="row rowmar bor-bottom">
                                    <div class="col-md-4">
                                        <div class="numbername">
                                            <h3>بالغ</h3>
                                            <span>12+</span>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pright pleft ">
                                        <div class="borbox2">
                                            <span class="input-number-decrement rightnumber2 ">–</span><input class="input-number1 bornone input-number " type="text" name="adultnumber" value="{{$appointment->adult}}" min="0" max="15" id="adultnumber"><span class="input-number-increment rightnumber1">+</span>
                                        </div>
                                    </div>
                        
                                    <div class="col-md-4">
                                        <div class="number">
                                            <h3><span>$</span><span id="adultmoney" style="color:#393939"><?php if($appointment->o_adult_b_status == 'on'){echo $flight->o_adult_b;}else{echo $flight->o_adult;}?></span></h3>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="single" value="{{$appointment->o_adult_b_status}}" id="singlestatus">
                                <input type="hidden" name="childbedstatus" value="{{$appointment->o_child_b_status}}" id="childstatus">
                                <div class="row rowmar martop bor-bottom paddrowbottom">
                                    <div class="col-md-4">
                                        <div class="numbername">
                                            <h3>طفل</h3>
                                            <span>2-11</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pright pleft ">
                                        <div class="borbox2">
                                            <span class="input-number-decrement rightnumber2 ">–</span><input class="input-number2 bornone input-number " type="text" value="{{$appointment->child}}" min="0" max="15" id="childnumber" name="childnumber"><span class="input-number-increment rightnumber1">+</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="number">
                                            <h3><span>$</span><span id="childmoney" style="color:#393939"><?php if($appointment->o_child_b_status == 'on'){echo $flight->o_child_b;}else{echo $flight->o_child;}?></span></h3>
                                        </div>
                                    </div>

                                </div>

                                <div class="row rowmar martop">
                                    <div class="col-md-4">
                                        <div class="numbername">
                                            <h3>رضيع</h3>
                                            <span>العمر اقل من سنتين</span>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pright pleft ">
                                        <div class="borbox2">
                                            <span class="input-number-decrement rightnumber2 ">–</span><input class="input-number3 bornone input-number " type="text" value="{{$appointment->infant}}" min="0" max="15" id="infantnumber" name="infantnumber"><span class="input-number-increment rightnumber1">+</span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="number">
                                            <h3><span>$</span><span id="infantmoney" style="color:#393939"><?php if($appointment->o_infant_b_status == 'on'){echo $flight->o_infnat_b;}else{echo $flight->o_infant;}?></span></h3>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="roomstatus" value="{{$flight->o_infant_b_status}}">
                                <?php if($flight->o_infant_b_status == 'on'){?>
                                    <div class="row rowmar martop bor-bottom paddrowbottom">
                                        <div class="col-md-4">
                                            <div class="numbername">
                                                <h3>غرفة اضافية</h3>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pright pleft ">
                                            <div class="borbox2">
                                                <span class="input-number-decrement rightnumber2 ">–</span><input class="input-number2 bornone input-number " type="text" value="{{$appointment->room}}" min="0" max="15" id="roomnumber" name="roomnumber"><span class="input-number-increment rightnumber1">+</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="number">
                                                <h3><span>$</span><span id="roommoney" style="color:#393939">{{$flight->o_infant_b}}</span></h3>
                                            </div>
                                        </div>

                                    </div>
                                <?php }else{?>
                                    <input  type="hidden" value="0"  id="roomnumber" name="childbednumber">
                                <?php }?>
                                <input type="text" name="flight_id" placeholder="ID"  style="display:none" value="{{$appointment->flight_id}}" required>
                                <input type="text" name="company_id" placeholder="ID"  style="display:none" value="{{$flight->company_id}}" required>
                           
                            </div>
                            <div class="col-md-6">
                                <div class="row rowmar">
                                    <div class="col-md-12">
                                        <div class="confirm2">
                                            <a href="javascript:void(0);"><input type="checkbox"  id="checkall" name ="confirm" style="    width: 20px; height: 20px;" required> أوؤكد ان جميع البيانات صحيحة</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row rowmar ">
                                    <div class="col-md-6">
                                        <div class="total let">
                                            <h3> المجموع </h3>
                                        </div>
                                    </div>
                                    <div class="col-md-6 paddcol">
                                        <div class="total">
                                        <?php $total = $appointment->infant*$flight->o_infant;
                                            if($appointment->o_adult_b_status == 'on')
                                                $total += $appointment->adult*$flight->o_adult_b;
                                            else
                                                $total += $appointment->adult*$flight->o_adult;
                                            if($appointment->o_child_b_status == 'on')
                                                $total += $appointment->child*$flight->o_child_b;
                                            else
                                                $total += $appointment->child*$flight->o_child;
                                            if($flight->o_infant_b_status == 'on')
                                                $total += $appointment->room*$flight->o_infant_b;

                                        ?>
                                            <h3> <span>$</span><span id="totalmoney"  style="color:#393939;font-size:44px;"><?php echo $total;?></span> </h3>
                                        </div>
                                    </div>
                                </div>
                                
                                <input id="testall" name="test" type="hidden" value="{{rand(10000,99999)}}">
                                <input id="totalmoneyform" name="totalmoney" type="hidden" value="{{rand(10000,99999)}}">
                                <a  class="booknowbuttondiv" href="javascript:void(0);"> 
                                <div class="row rowmar Destinationpdd bgcolorbox2">
                                    <div class="col-md-12">
                                        <div class="boxtitle" style="text-align:center">
                                            <h4>احجز الان</h4>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                <input type="submit" style="display:none">
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8 pleft" id="booking2" style="display:none">
                <div class="box bg-gradient">
                    <div class="row rowmar Destinationpdd bor-bottom bgrow">
                        <div class="col-md-12">
                            <div class="boxtitle">
                                <h4>تأكيد الحجز </h4>
                            </div>
                        </div>
                    </div>
                
                    <div class="row rowmar">
                        <div class="col-md-12">
                            <div class="succuseful">
                                <span> <img src="{{asset('addbyme/images/confirmed.png')}}"></span>

                                <h2>تم تأكيد الحجز</h2>
                                <p>رقم الحجز الخاص بك هو: <span id="bookingrefid">#8137419</span></p>

                                <h4 class="errorhide">قمت بدفع مبلغ لشركة <span>{{$flight->travel_agency_name}}</span> <span id="totalspendmoney">1800</span></h4>

                                <h5 class="errorhide">الرصيد المتبقي<span id="remainmoney">{{$money->remain}}</span></h5>
                            </div>
                        </div>
                    </div>
                    <form action="{{url('/printflight')}}" method="Post" id="printflightform"  class="errorhide">
                    @csrf
                    <div class="row rowmar bor-bottom paddboredr3" style="display:none;">
                        <div class="col-md-4">
                            <div class="bookform1 timeout">
                                <label>رحلة الذهاب</label>
                                <div class="clock3">
                                    <input type="text" name="outbound" placeholder="TK1185" id="outbound">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="bookform1 timeout">
                                <label>رحلة الرجوع</label>
                                <div class="clock3">
                                    <input type="text" name="inbound" placeholder="TK1185" id="inbound">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                        </div>

                        <div class="col-md-4" style="display:none;">
                            <div class="bookform1 timeout">
                                <label>السعر</label>
                                <div class="clock3">
                                    <input type="text" name="pdfprice" placeholder="$1800" id="pdfprice">
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="packageid" value="{{$flight->id}}" id="packageid">
                    <div class="pdf">
                    </div>
                    <div class="row rowmar  paddboredr3">
                        <div class="col-md-6">
                            <div class="bookform1 timeout">
                                <label>ارسال الى البريد الالكتروني</label>
                                <div class="clock3">
                                    <input type="email" name="email" placeholder="Example@exmple.com">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                    <input type="hidden" name="type"  id="printtype">
                    <input type="hidden" name="appointmentid"  id="appointmentid">
                    <div class="row rowmar  paddboredr3">
                        <div class="col-md-6">
                            <div class="sand">
                                <ul>
                                    <li><button class="btn btn-sand1" id="sendbotton">ارسال<i class="fa fa-paper-plane-o"></i></button></li>
                                    <li><button class="btn btn-sand1" id="printbotton">طباعة<i class="fa fa-print"></i></button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
           </div>
           <!--end of col-md-8-->
       </div>
</section>

<div class="modal fade" id="myModal11">
    <div class="modal-dialog modal-dialog-centered">
        <!--   <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <div class="modal-content"> 
            <div class="modal-header d-block" >
                <img src="{{asset('addbyme/images/logo.png')}}" class="img-fluid">
                <p class="small-text" style="text-align:center!important;">Select New Traveler Type</p>
            </div>
            <!-- Modal body -->
            <div class="modal-body w-100 text-center"> 
                <div class="row">
                    <?php if($flight->o_infant_b_status != 'on'){?>
                        <div class="col-md-4">
                            <input type="radio" name="newtraveler" id="newadult"  style="    width: 50px; height: 50px;">
                            <p >بالغ</p>
                        </div>
                        <div class="col-md-4">
                            <input type="radio" name="newtraveler" id="newchild"    style="    width: 50px; height: 50px;">
                            <p >طفل</p>
                        </div>
                        <div class="col-md-4">
                            <input type="radio" name="newtraveler" id="newinfant"    style="    width: 50px; height: 50px;">
                            <p >رضيع</p>
                        </div>
                    <?php }else {?>
                        <div class="col-md-3">
                            <input type="radio" name="newtraveler" id="newadult"  style="    width: 50px; height: 50px;">
                            <p >بالغ</p>
                        </div>
                        <div class="col-md-3">
                            <input type="radio" name="newtraveler" id="newchild"    style="    width: 50px; height: 50px;">
                            <p >طفل</p>
                        </div>
                        <div class="col-md-3">
                            <input type="radio" name="newtraveler" id="newinfant"    style="    width: 50px; height: 50px;">
                            <p >رضيع</p>
                        </div>
                        <div class="col-md-3">
                            <input type="radio" name="newtraveler" id="newroom"    style="    width: 50px; height: 50px;">
                            <p >غرفة اضافية</p>
                        </div>
                    <?php }?>
                </div>
            </div>  
            <!-- Modal footer -->
            <div class="modal-footer conts">
                <button id="addnewtraveler"style="    width: 200px;    height: 50px;    background: whitesmoke;    border-radius: 20%;    font-size: x-large;">ADD</button>
            </div> 
        </div>
    </div>
</div>
<a id="checkmoney" data-toggle="modal" data-target="#myModal131">asdf</a>
<div class="modal fade" id="myModal131">
    <div class="modal-dialog modal-dialog-centered">
        <!--   <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <div class="modal-content" style="border-radius: 2.3rem;"> 
            <div class="modal-header d-block" >
                <img src="{{asset('addbyme/images/logo.png')}}" class="img-fluid">
                <p style="text-align:center!important;font-size: x-large;">You need to Send money to {{$flight->travel_agency_name}}</span></p>
            </div>
             <!-- Modal body -->
             <div class="modal-body w-100 text-center"> 
                <div class="row text-center" style="display: block;font-size: 30px;">
                    <span>Current Total Money </span><span id="totalmoneycurrent"></span>
                </div>
                <div class="row text-center" style="display: block;font-size: 30px;">
                    <span>Remain Money</span><span>$</span><span id="remainmoany">{{$money->remain}}</span>
                </div>
            </div>  
            <!-- Modal footer -->
            <div class="modal-footer conts" style="    justify-content: center;text-align:center">
                <div class="col-md-12">
                    <button id="cancelmodal" style="color:white;    width: 200px;    height: 50px;    background: red;      border: none;  border-radius: 3%;    font-size: x-large;">Cancel</button>
                </div>
            </div> 
        </div>
    </div>
</div>

<input type="hidden" value="1" id="allnum">
<input id="alldone" type="hidden" value="no">
<div id="preloader" style="display:none">
<div id="status">&nbsp;</div>
</div>
@endsection
@section('jscontent')
<script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>

<!--end of js-->





<script type="text/javascript">
var stime;
function oneSecondFunction() {
    if(Number($('#allnum').val()) == 0)
    {
        $.ajax({
            type:'post',
            url:'/addappointmentallflightnew',
            data: $('#addappointmentall').serialize(),
            success:function(data) {
                $("#preloader").hide();
                $('body').css('overflow','auto'); 
                $('#alldone').val('no');
                $('#bookingrefid').text('#'+data);
                $('#appointmentid').val(data);
                $('#totalspendmoney').text($('#totalmoney').text()+'$');
                var nu1= Number($('#remainmoany').text()) - Number($('#totalmoney').text());
                $('#remainmoney').text(nu1+'$');
                $('#booking1').hide();
                $('#booking2').show();
                if(data == 'Error')
                {
                    $('.errorhide').hide();
                }
            },
            failure:function(){
            }
        });
        clearInterval(stime);
    }
}
	// add an attribute dir="ltr" to the slider's container
//$('.slider').attr('dir', 'ltr');

// OR add `rtl: false` property to slider settings

autosize(document.getElementsByClassName("textareahome"));
$('#adultnumber').on('change',function(){
   var total = 0;
   total +=  Number($('#adultmoney').text()) * Number($('#adultnumber').val());
   total +=  Number($('#childmoney').text()) * Number($('#childnumber').val());
   total +=  Number($('#infantmoney').text()) * Number($('#infantnumber').val());
   if($('#roomstatus').val() == 'on')
    total +=  Number($('#roommoney').text()) * Number($('#roomnumber').val());
   $('#totalmoney').text(total);
});
$('#childnumber').on('change',function(){
   var total = 0;
   total +=  Number($('#adultmoney').text()) * Number($('#adultnumber').val());
   total +=  Number($('#childmoney').text()) * Number($('#childnumber').val());
   total +=  Number($('#infantmoney').text()) * Number($('#infantnumber').val());
   if($('#roomstatus').val() == 'on')
    total +=  Number($('#roommoney').text()) * Number($('#roomnumber').val());
   $('#totalmoney').text(total);
});
$('#infantnumber').on('change',function(){
   var total = 0;
   total +=  Number($('#adultmoney').text()) * Number($('#adultnumber').val());
   total +=  Number($('#childmoney').text()) * Number($('#childnumber').val());
   total +=  Number($('#infantmoney').text()) * Number($('#infantnumber').val());
   if($('#roomstatus').val() == 'on')
    total +=  Number($('#roommoney').text()) * Number($('#roomnumber').val());
   $('#totalmoney').text(total);
});
$('#roomnumber').on('change',function(){
   var total = 0;
   total +=  Number($('#adultmoney').text()) * Number($('#adultnumber').val());
   total +=  Number($('#childmoney').text()) * Number($('#childnumber').val());
   total +=  Number($('#infantmoney').text()) * Number($('#infantnumber').val());
   if($('#roomstatus').val() == 'on')
    total +=  Number($('#roommoney').text()) * Number($('#roomnumber').val());
   $('#totalmoney').text(total);
});
$('#addnewtraveler').on('click',function(){
    $('#myModal11').modal('toggle');
    var html = '';
    if($('#newadult').is(':checked'))
        html +="<div class='oneadult onetraveler'>";
    if($('#newchild').is(':checked'))
        html +="<div class='onechild onetraveler'>";
    if($('#newinfant').is(':checked'))
        html +="<div class='oneinfant onetraveler'>";
    if($('#newroom').is(':checked'))
        html +="<div class='oneroom onetraveler'>";
    html +="<div class='bookingname'>";
    html +="                    <div class='row rowmar'>";
    html +="                    <div class='col-md-12'>";
    html +="                        <div class='ablitbotton'>";
    if($('#newadult').is(':checked'))
        html +="                        <a href='#'>بالغ</a>";
    if($('#newchild').is(':checked'))
        html +="                        <a href='#'>طفل</a>";
    if($('#newinfant').is(':checked'))
        html +="                        <a href='#'>رضيع</a>";
    if($('#newroom').is(':checked'))
        html +="                        <a href='#'>غرفة اضافية</a>";
    html +="                    </div>";
    html +="                    </div>";
    html +="                    </div>";
    html +="                </div>";
    html +="                <div class='bookingform'>";

    html +="                    <div class='row rowmar bor-bottom paddro'>";
    html +="                        <div class='col-md-4'>";
    html +="                           <div class='bookform1'>";
    html +="                                <label>الجنس </label>";
    html +="                                <select name='sex'  class='mainheit3 mainheit'>";
    html +="                                    <option value='MR'>MR</option>";
    html +="                                    <option value='MISS'>MISS</option>";
    html +="                                    <option value='MRS'>MRS</option>";
    html +="                                </select>";
    html +="                            </div>";
    html +="                        </div>";
    html +="                        <div class='col-md-4'>";
    html +="                        </div>";
    html +="                       <div class='col-md-4'>";
    html +="                        </div>";
    html +="                    <div class='col-md-4'>";
    html +="                        <div class='bookform1'>";
    html +="                        <label>الأسم </label>";
    html +="                        <input type='text' name='first_name' placeholder='' required>";
    html +="                        </div>";
    html +="                    </div>";

    html +="                        <div class='col-md-4'>";
    html +="                       <div class='bookform1'>";
    html +="                        <label>اللقب</label>";
    html +="                       <input type='text' name='last_name' placeholder='' required>";
    html +="                        </div>";
    html +="                    </div>";

    html +="                       <div class='col-md-4'>";
    html +="                   <div class='bookform1'>";
    html +="                        <label>تاريخ الولادة</label>";
    html +="                        <span class='map1'><i class='fa fa-calendar'></i></span><input type='date' name='day_of_birth' placeholder='' required>";
    html +="                    </div>";
    html +="                    </div>";

    html +="                   <div class='col-md-4'>";
    html +="                        <div class='bookform1'>";
    html +="                        <label>رقم الجواز</label>";
    html +="                        <input type='text' name='pssport_no' placeholder='' required>";
    html +="                        </div>";
    html +="                     </div>";
    html +="                       <div class='col-md-4'>";
    html +="                       <div class='bookform1'>";
    html +="                        <label>تاريخ اصدار الجواز</label>";
    html +="                        <span class='map1'><i class='fa fa-calendar'></i></span><input type='date' name='passport_issue_date' placeholder='' required>";
    html +="                        </div>";
    html +="                    </div>";


    html +="                        <div class='col-md-4'>";
    html +="                        <div class='bookform1'>";
    html +="                        <label>تاريخ نفاذ الجواز</label>";
    html +="                        <span class='map1'><i class='fa fa-calendar'></i></span><input type='date' name='passport_expire_date' placeholder='' required>";
    html +="                        </div>";
    html +="                    </div>";


    html +="                                 <div class='col-md-4'>";
    html +="                                         <div class='Passportuplo'>";
    html +="                                             <h5>الجواز</h5>";
    html +="                                             <div id='drop--area'>";
    html +="                                                 <input type='file' data-input='false' class='passportphoto' name='photo' style='display:none' data-buttonText='Upload photo' data-size='sm' data-badge='false' accept='image/*'> ";
    html +="                                                 <label class='button uploadpassport'> تحميل الصورة </label> ";                             
    html +="                                                 <div id='gallery'></div>";
    html +="                                             </div>";
    html +="                                         </div>";
    html +="                                    </div>";
    html +="                                    <div class='col-md-4'>";
    html +="                                         <div class='Passportuplo'>";
    html +="                                             <h5>صورة الجواز (صفحة معلومات الجواز)</h5>";
    html +="                                            <div id='drop--area' >";
    html +="                                                <img src='{{asset('addbyme/images/Passport.png')}}'  class='passportphoto_preview' style='height:auto;width:50%;display: initial;'> ";                             
    html +="                                                <div id='gallery'></div>";
    html +="                                             </div>";
    html +="                                         </div>";
    html +="                                     </div>";


    html +="                        <div class='col-md-4'>";
    html +="                            <div class='ablitbotton textright2'>";
    if($('#newadult').is(':checked'))
        html +="                                <a class='deladult' style='color:white'>حذف <i class='fa fa-trash'></i></a>";
    if($('#newchild').is(':checked'))
        html +="                                <a class='delchild' style='color:white'>حذف <i class='fa fa-trash'></i></a>";
    if($('#newinfant').is(':checked'))
        html +="                                <a class='delinfant' style='color:white'>حذف <i class='fa fa-trash'></i></a>";
    if($('#newroom').is(':checked'))
        html +="                                <a class='delroom' style='color:white'>حذف <i class='fa fa-trash'></i></a>";
 
    html +="                            </div>";
    html +="                        </div>";
    html +="                    </div>";
    html +="                </div>";
    html +="     </div>";
    if($('#newadult').is(':checked'))
    {
        $('#adulttable').append(html);
        var adultnu = Number($('#adultnumber').val());
        adultnu++;
        if(adultnu >15)
            alert('Number Adult limit is 15!');
        else
             $('#adultnumber').val(adultnu).trigger('change');
    }
    if($('#newchild').is(':checked'))
    {
        $('#childtable').append(html);
        var childnu = Number($('#childnumber').val());
        childnu++;
        if(childnu >15)
            alert('Number Child limit is 15!');
        else
             $('#childnumber').val(childnu).trigger('change');
    }
    if($('#newinfant').is(':checked'))
    {
        $('#infanttable').append(html);
        var infantnu = Number($('#infantnumber').val());
        infantnu++;
        if(infantnu >15)
            alert('Number Infant limit is 15!');
        else
             $('#infantnumber').val(infantnu).trigger('change');
    }
    if($('#newroom').is(':checked'))
    {
        $('#roomtable').append(html);
        var roomnu = Number($('#roomnumber').val());
        roomnu++;
        if(roomnu >15)
            alert('Number Infant limit is 15!');
        else
             $('#roomnumber').val(roomnu).trigger('change');
    }
})
$('#sendallform').on('click','.deladult',function(){
    if((Number($('#adultnumber').val()) + Number($('#childnumber').val()) + Number($('#roomnumber').val()) + Number($('#infantnumber').val()))== 1)
    {
        alert("Must have more than one traveler!");
    }
    else
    {
        $(this).parents('.oneadult').first().empty().removeClass('oneadult');
        var adultnu = Number($('#adultnumber').val());
        adultnu--;
        $('#adultnumber').val(adultnu).trigger('change');
    }
})
$('#sendallform').on('click','.delchild',function(){
    if((Number($('#adultnumber').val()) + Number($('#childnumber').val()) + Number($('#roomnumber').val()) + Number($('#infantnumber').val()))== 1)
    {
        alert("Must have more than one traveler!");
    }
    else
    {
        $(this).parents('.onechild').first().empty().removeClass('onechild');
        var adultnu = Number($('#childnumber').val());
        adultnu--;
        $('#childnumber').val(adultnu).trigger('change');
    }
})
$('#sendallform').on('click','.delinfant',function(){
    if((Number($('#adultnumber').val()) + Number($('#childnumber').val()) + Number($('#roomnumber').val()) + Number($('#infantnumber').val()))== 1)
    {
        alert("Must have more than one traveler!");
    }
    else
    {
        $(this).parents('.oneinfant').first().empty().removeClass('oneinfant');
        var adultnu = Number($('#infantnumber').val());
        adultnu--;
        $('#infantnumber').val(adultnu).trigger('change');
    }
})
$('#sendallform').on('click','.delroom',function(){
    if((Number($('#adultnumber').val()) + Number($('#childnumber').val()) + Number($('#roomnumber').val()) + Number($('#infantnumber').val()))== 1)
    {
        alert("Must have more than one traveler!");
    }
    else
    {
        $(this).parents('.oneroom').first().empty().removeClass('oneroom');
        var adultnu = Number($('#roomnumber').val());
        adultnu--;
        $('#roomnumber').val(adultnu).trigger('change');
    }
})
$('#addappointmentall').submit(function(){
    if($('#alldone').val() == 'no')
    {
        $('#sendallformsubmit').click();
      
    }
    else if($('#alldone').val() == 'yes')
    {
        if(Number($('#totalmoney').text()) <= Number($('#remainmoany').text()))
        {
            var nu = Number($('#adultnumber').val()) + Number($('#childnumber').val())
            +Number($('#childbednumber').val())+Number($('#infantnumber').val());
            nu *=1000;
            $("#preloader").show();
            $("#status").show();
            $('#totalmoneyform').val($('#totalmoney').text());
            var focusElement = $("#preloader");
            $(focusElement).focus();
            ScrollToTop(focusElement);
            $('body').css('overflow','hidden'); 
            stime=setInterval(oneSecondFunction,1000);
        } 
        else
        {
            $('#totalmoneycurrent').text('$'+$('#totalmoney').text());
            $('#myModal131').modal('toggle');
        }
    }
    return false;
})
$('#cancelmodal').on('click',function(){
    $('#myModal131').modal('toggle');
});
function ScrollToTop(el) {
    $('html, body').animate({ scrollTop: $(el).offset().top - 50 }, 'fast');          
}

$('#sendallform').submit(function(){
    var num = 0;
    var adultnu = Number($('#adultnumber').val());
    for(var i =0;i<adultnu;i++)
    {
        num ++;
        var dataimg = new FormData();
        if($('#singlestatus').val()=='on')
        {
            dataimg.append("type", 'adult&business');
        }
        else
        {
            dataimg.append("type", 'adult');
        }
        dataimg.append("sex", $('#adulttable').find('.oneadult:eq( '+i+')').find('[name="sex"]').val());
        dataimg.append("first_name", $('#adulttable').find('.oneadult:eq( '+i+')').find('[name="first_name"]').val());
        dataimg.append("last_name", $('#adulttable').find('.oneadult:eq( '+i+')').find('[name="last_name"]').val());
        dataimg.append("day_of_birth", $('#adulttable').find('.oneadult:eq( '+i+')').find('[name="day_of_birth"]').val());
        dataimg.append("pssport_no", $('#adulttable').find('.oneadult:eq( '+i+')').find('[name="pssport_no"]').val());
        dataimg.append("passport_issue_date", $('#adulttable').find('.oneadult:eq( '+i+')').find('[name="passport_issue_date"]').val());
        dataimg.append("passport_expire_date", $('#adulttable').find('.oneadult:eq( '+i+')').find('[name="passport_expire_date"]').val());
        dataimg.append("image",$('#adulttable').find('.oneadult:eq( '+i+')').find('[name="photo"]')[0].files[0]);
        dataimg.append("appointment_id", '0');
        dataimg.append("status", $('#testall').val());
        dataimg.append("_token", $('meta[name="csrf-token"]').attr('content'));
        $.ajax({
            type:'post',
            url:'/addvisitornew',
            cache : false,
            contentType : false,
            processType : false,
            processData: false,
            data: dataimg,
            success:function(data) {
                    var allnum =Number($('#allnum').val());
                    allnum--;
                    $('#allnum').val(allnum);
            },
            failure:function(){
            }
        });
    }
    var childnu = Number($('#childnumber').val());
    for(var i =0;i<childnu;i++)
    {
        num ++;
        var dataimg = new FormData();
        if($('#childstatus').val()=='on')
        {
            dataimg.append("type", 'child&business');
        }
        else
        {
            dataimg.append("type", 'child');
        }
        dataimg.append("sex", $('#childtable').find('.onechild:eq( '+i+')').find('[name="sex"]').val());
        dataimg.append("first_name", $('#childtable').find('.onechild:eq( '+i+')').find('[name="first_name"]').val());
        dataimg.append("last_name", $('#childtable').find('.onechild:eq( '+i+')').find('[name="last_name"]').val());
        dataimg.append("day_of_birth", $('#childtable').find('.onechild:eq( '+i+')').find('[name="day_of_birth"]').val());
        dataimg.append("pssport_no", $('#childtable').find('.onechild:eq( '+i+')').find('[name="pssport_no"]').val());
        dataimg.append("passport_issue_date", $('#childtable').find('.onechild:eq( '+i+')').find('[name="passport_issue_date"]').val());
        dataimg.append("passport_expire_date", $('#childtable').find('.onechild:eq( '+i+')').find('[name="passport_expire_date"]').val());
        dataimg.append("image",$('#childtable').find('.onechild:eq( '+i+')').find('[name="photo"]')[0].files[0]);
        dataimg.append("appointment_id", '0');
        dataimg.append("status", $('#testall').val());
        dataimg.append("_token", $('meta[name="csrf-token"]').attr('content'));
        $.ajax({
            type:'post',
            url:'/addvisitornew',
            cache : false,
            contentType : false,
            processType : false,
            processData: false,
            data: dataimg,
            success:function(data) {
                    var allnum =Number($('#allnum').val());
                    allnum--;
                    $('#allnum').val(allnum);
            },
            failure:function(){
            }
        });
    }
    var infantnu = Number($('#infantnumber').val());
    for(var i =0;i<infantnu;i++)
    {
        num ++;
        var dataimg = new FormData();
        dataimg.append("type", 'infant');
        dataimg.append("sex", $('#infanttable').find('.oneinfant:eq( '+i+')').find('[name="sex"]').val());
        dataimg.append("first_name", $('#infanttable').find('.oneinfant:eq( '+i+')').find('[name="first_name"]').val());
        dataimg.append("last_name", $('#infanttable').find('.oneinfant:eq( '+i+')').find('[name="last_name"]').val());
        dataimg.append("day_of_birth", $('#infanttable').find('.oneinfant:eq( '+i+')').find('[name="day_of_birth"]').val());
        dataimg.append("pssport_no", $('#infanttable').find('.oneinfant:eq( '+i+')').find('[name="pssport_no"]').val());
        dataimg.append("passport_issue_date", $('#infanttable').find('.oneinfant:eq( '+i+')').find('[name="passport_issue_date"]').val());
        dataimg.append("passport_expire_date", $('#infanttable').find('.oneinfant:eq( '+i+')').find('[name="passport_expire_date"]').val());
        dataimg.append("image",$('#infanttable').find('.oneinfant:eq( '+i+')').find('[name="photo"]')[0].files[0]);
        dataimg.append("appointment_id", '0');
        dataimg.append("status", $('#testall').val());
        dataimg.append("_token", $('meta[name="csrf-token"]').attr('content'));
        $.ajax({
            type:'post',
            url:'/addvisitornew',
            cache : false,
            contentType : false,
            processType : false,
            processData: false,
            data: dataimg,
            success:function(data) {
                    var allnum =Number($('#allnum').val());
                    allnum--;
                    $('#allnum').val(allnum);
            },
            failure:function(){
            }
        });
    }
    if($('#roomstatus').val() == 'on'){
        var childbnu = Number($('#roomnumber').val());
        for(var i =0;i<childbnu;i++)
        {
            num ++;
            var dataimg = new FormData();
            dataimg.append("type", 'room');
            dataimg.append("sex", $('#roomtable').find('.oneroom:eq( '+i+')').find('[name="sex"]').val());
            dataimg.append("first_name", $('#roomtable').find('.oneroom:eq( '+i+')').find('[name="first_name"]').val());
            dataimg.append("last_name", $('#roomtable').find('.oneroom:eq( '+i+')').find('[name="last_name"]').val());
            dataimg.append("day_of_birth", $('#roomtable').find('.oneroom:eq( '+i+')').find('[name="day_of_birth"]').val());
            dataimg.append("pssport_no", $('#roomtable').find('.oneroom:eq( '+i+')').find('[name="pssport_no"]').val());
            dataimg.append("passport_issue_date", $('#roomtable').find('.oneroom:eq( '+i+')').find('[name="passport_issue_date"]').val());
            dataimg.append("passport_expire_date", $('#roomtable').find('.oneroom:eq( '+i+')').find('[name="passport_expire_date"]').val());
            dataimg.append("image",$('#roomtable').find('.oneroom:eq( '+i+')').find('[name="photo"]')[0].files[0]);
            dataimg.append("appointment_id", '0');
            dataimg.append("status", $('#testall').val());
            dataimg.append("_token", $('meta[name="csrf-token"]').attr('content'));
            $.ajax({
                type:'post',
                url:'/addvisitornew',
                cache : false,
                contentType : false,
                processType : false,
                processData: false,
                data: dataimg,
                success:function(data) {
                    var allnum =Number($('#allnum').val());
                    allnum--;
                    $('#allnum').val(allnum);
                },
                failure:function(){
                }
            });
        }
    }
    $('#allnum').val(num);
    $('#alldone').val('yes');
    $('#addappointmentall').submit();
    return false;
})
$('#allgoodsubmit').on('click',function(){
    $('#alldone').val('yes');
    $('#addappointmentall').submit();
})
$('#sendallform').on('click','.uploadpassport',function(){
    $('#sendallform').find('.justopenpassport').removeClass('justopenpassport');
    $(this).parent().find('input').addClass('justopenpassport');
    $(this).parent().find('input').click();
})

$('#sendallform').on('change','.passportphoto',function(e){
    var file = e.target.files[0];
    var reader = new FileReader();
    reader.onloadend =function(){
        $('#sendallform').find('.justopenpassport').parents('.onetraveler').first().find('.passportphoto_preview').attr('src',reader.result);    
    }
    reader.readAsDataURL(file);  
})

$('.booknowbuttondiv').on('click',function(){
  $(this).next('input').click();
})

setInterval('settimefunction()', 1000);
function settimefunction(){
    var dateVar2 = $('.resttime').next('input').val();
    var d1 = new Date($.now());
    var d2=new Date(dateVar2);
    
    diff  = new Date(d2 - d1),
    diffDays  = parseInt(diff/(1000*60*60*24));
    diffhours  = parseInt(diff%(1000*60*60*24)/(60*60*1000));
    diffmins  = parseInt(diff%(1000*60*60)/(60*1000));
    diffsecs  = parseInt(diff%(1000*60)/1000);

    $('.resttime').text(diffDays+'  ايام '+diffhours+':'+diffmins+':'+diffsecs);
}
$('#printbotton').on('click',function(){
   $('#printtype').val('print');
})
$('#sendbotton').on('click',function(){
   $('#printtype').val('send');
})
$('#printflightform').submit(function(){
    if( $('#printtype').val() == 'print')
        return true;
    else if( $('#printtype').val() == 'send')
    {
        $.ajax({
            type:'post',
            url:'/print',
            data: $('#printflightform').serialize(),
            success:function(data) {
            },
            failure:function(){
            }
        });
    }
    return false;
})
</script>
@endsection