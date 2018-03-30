@extends('adminlte::page')
@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('bower_components/fullcalendar/dist/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/fullcalendar/dist/fullcalendar.print.min.css') }}" media="print">
    @yield('css')
@stop
@section('title', 'HomeStay')

@section('content_header')
  <h1>
    Homestay
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Homestay</li>
  </ol>
@stop

@section('content')
  <div class="row">
    @foreach ($homestays as $homestay)
      <div class="col-md-4">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-aqua-active" style="background-image: url('http://ccd.hwstatic.com/propertyimages/9/92424/1.jpg')">
            <h3 class="widget-user-username"><a href="/admin/homestays/{{$homestay->id}}" style="color: red">{{$homestay->name}}</a></h3>
            <h5 class="widget-user-desc"><i class="fa fa-home"></i>  {{$homestay->address}}</h5>
            <h5 class="widget-user-desc"><i class="fa fa-phone"></i>  {{$homestay->phone}}</h5>
          </div>
          <div class="widget-user-image">
            <img class="img-circle" src="https://adminlte.io/themes/AdminLTE/dist/img/user8-128x128.jpg" alt="User Avatar">
          </div>
          <div class="box-footer">
            <div class="row">
              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header">50</h5>
                  <span class="description-text">Review</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header"  style="color: red">5 <i class="fa fa-star"></i></h5>
                  <span class="description-text">Đánh giá</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-4" style="text-align: center">
                  <a class="btn btn-app" href="/admin/homestays/1/calendar">
                    <i class="fa fa-calendar"></i> Booking
                  </a>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
        </div>
        <!-- /.widget-user -->
      </div>
    @endforeach
    <!-- /.col -->
  </div>
@stop
@section('adminlte_js')
    <script src="{{ asset('bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    {{-- <script src="{{ asset('dist/js/demo.js') }}"></script> --}}
    <script src="{{ asset('bower_components/moment/moment.js') }}"></script>
    <script src="{{ asset('bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    @yield('js')
    <script>
</script>
@stop