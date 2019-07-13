@extends('layout.layout')
@section('content')
    <div id="totop" class="container">
        <div id="find">
            <h3 class="title-comm"><span class="title-holder">LỌC TIN NHANH</span></h3>
            <div class="find">
                <div class="row">
                    <form onsubmit="return false">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="dk">Chọn Quận/Huyện/Thành phố</label>
                                <select id="city" name="city"
                                        class="selectpicker form-control" data-show-subtext="true"
                                        data-live-search="true">
                                    <option value="0">Chọn tất cả</option>
                                    @foreach ($listCity as $city)
                                        <option @if($city->id==1) selected
                                                @endif value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="dk">Chọn Xã/Phường/Thị trấn</label>
                                <select  id="ward" name="ward"
                                        class="selectpicker form-control" data-show-subtext="true"
                                        data-live-search="true">
                                    <option value="0">Chọn tất cả</option>
                                    @foreach ($listWard as $ward)
                                        <option @if($ward->id==1) selected
                                                @endif  value="{{$ward->id}}">{{$ward->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="dk">Chọn khoản giá</label>
                                <select id="price" name="price" class="selectpicker form-control"
                                        data-show-subtext="true" data-live-search="true">
                                    <option min="0" max="10000000">Chọn tất cả</option>
                                    <option min="0" max="600000">Từ 400.000 - 600.000 vnđ</option>
                                    <option min="600000" max="800000">Từ 600.000 - 800.000 vnđ</option>
                                    <option min="800000" max="1000000">Từ 800.000 - 1.000.000 vnđ</option>
                                    <option min="1000000" max="1200000">Từ 1.000.000 - 1200.000 vnđ</option>
                                    <option min="1200000" max="1400000">Từ 1.200.000 - 1.400.000 vnđ</option>
                                    <option min="1400000" max="10000000">Từ 1.400.000 - 10.000.000 vnđ</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="dk">Chọn diện tích phòng</label>
                                <select id="acreage" name="acreage" class="selectpicker form-control"
                                        data-show-subtext="true" data-live-search="true">
                                    <option min="0" max="100">Chọn tất cả</option>
                                    <option min="10" max="20">Từ 10 20 m2</option>
                                    <option min="20" max="25">Từ 20 - 25 m2</option>
                                    <option min="25" max="30">Từ 25 - 30 m2</option>
                                    <option min="30" max="35">Từ 30 -35 m2</option>
                                    <option min="35" max="40">Từ 35 - 40 m2</option>
                                    <option min="40" max="45">Từ 40 - 45 m2</option>
                                    <option min="45" max="100">Từ 45 - 100 m2</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="dk">Tiện nghi nhà trọ (có thể chọn nhiều)</label>
                                <select id="convenient" name="convenient[]" class="selectpicker form-control" multiple
                                        data-selected-text-format="count > 3" data-show-subtext="true"
                                        data-live-search="true" >
                                    @foreach ($listConvenient as $convenient)
                                        <option value="{{$convenient->id}}">{{$convenient->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="dk">Tìm theo tên . quận . huyện . xã . phường . thành phố</label>
                                <input id="name_2" type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <button style="margin-top: 25px" class="btn btn-info form-control"
                                            onclick="searchMotelajax_2()">Tìm kiếm
                                    </button>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <button style="margin-top: 25px" class="btn btn-warning form-control"
                                    ">Xóa lọc</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <button id="btntop" data-toggle="tooltip" title="TO TOP"><span class="glyphicon glyphicon-chevron-up"></span>
        </button>
        <div id="content">
            <!-- danh mục -->
            <h3 class="title-comm"><span class="title-holder">XEM NHIỀU NHẤT</span></h3>
        @includeIf('product', ['motels' => $motel_views])
        <!-- danh mục -->
            <h3 class="title-comm"><span class="title-holder">GIÁ TỐT NHẤT</span></h3>
        @includeIf('product', ['motels' => $motel_prices])
        <!-- danh mục -->
            <h3 class="title-comm"><span class="title-holder">MỚI THÊM GẦN ĐÂY</span></h3>
            @includeIf('product', ['motels' => $motel_news])
        </div>
    </div>
@endsection