@extends('site.layout.layout')
@section('content2')
<div class="container">
	<div class="banner-info mb-5">
		<div class="mapInfo false" style="" data-reactid="47">
			@if(empty(Auth::user()->image))
			<img style="color:#ffffff;background-color:rgb(188, 188, 188);user-select:none;display:inline-flex;align-items:center;justify-content:center;font-size:40px;border-radius:50%;height:80px;width:80px;" alt="TVM" size="80" src="images/no-avatar.png" class="avatar" data-reactid="57">
			@else
			<img style="color:#ffffff;background-color:rgb(188, 188, 188);user-select:none;display:inline-flex;align-items:center;justify-content:center;font-size:40px;border-radius:50%;height:80px;width:80px;" alt="TVM" size="80" src="{{Auth::user()->image}}" class="avatar" data-reactid="57">
			@endif
			<a href="user/profile/edit"><div style="color: rgba(0, 0, 0, 0.87); background-color: transparent; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; box-sizing: border-box; font-family: Verdana, Arial, sans-serif; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 10px, rgba(0, 0, 0, 0.23) 0px 3px 10px; border-radius: 50%; display: inline-block; position: absolute; right: 20px; bottom: -17px;"><button tabindex="0" type="button" style="border: 10px; box-sizing: border-box; display: inline-block; font-family: Verdana, Arial, sans-serif; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); cursor: pointer; text-decoration: none; margin: 0px; padding: 0px; outline: none; font-size: 25px; font-weight: inherit; position: relative; vertical-align: bottom;  background-color: rgb(255, 255, 255); transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; height: 35px; width: 35px; overflow: hidden; border-radius: 50%; text-align: center; color: rgb(51, 51, 51);"><div><div style="transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; top: 0px;"><span class="ion-android-create" style="color: rgb(51, 51, 51); position: relative; font-size: 25px; display: inline-block; user-select: none; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; height: 35px; line-height: 35px; fill: rgb(255, 255, 255);"><i class="fas fa-pencil-alt"></i></span></div></div></button></div></a>
		</div>
		<div class="info">
			<h4 class="name" data-reactid="59">{{ Auth::user()->fullname }}</h4>
			<div class="infoText">
				Tham gia {{ time_elapsed_string(Auth::user()->created_at) }} - {{ Auth::user()->created_at }}
			</div>
		</div>
	</div>
	<div class="mypage">
		<h4>Tin đã đăng gần đây</h4>
		@if(session('thongbao'))
		<div class="alert bg-danger">
			<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
			<span class="text-semibold">Hi!</span>  {{session('thongbao')}}
		</div>
		@endif
		<div class="mainpage">
			@if( count(Auth::user()->motel) < 1)
			<div class="alert alert-info">
				Bạn chưa có tin đăng phòng trọ nào đang cho thuê, thử đăng ngay.
			</div>
			<a href="user/motel/add" class="btn-motel">ĐĂNG TIN</a>
			@else
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>Tiêu đề</th>
							<th>Danh mục</th>
							<th>Gía phòng</th>
							<th>Lượt xem</th>
							<th>Tình trạng</th>
							<th> </th>
						</tr>
					</thead>
					<tbody>
						@foreach(Auth::user()->motel as $motel)
						<tr>
							<td>{{ $motel->name }}</td>
							<td>{{ $motel->category->name }}</td>
							<td>{{ $motel->price }}</td>
							<td>{{ $motel->view }}</td>
							<td>
								@if($motel->status == 1)
								<span class="label label-success">Đã kiểm duyệt</span>
								@elseif($motel->status == 0)
								<span class="label label-warning">Chờ phê duyệt</span>
								@else
								<span class="label label-danger">Đã tạm dừng</span>
								@endif
							</td>
							<td>
								<a href="{{$motel->category->slug}}/{{ $motel->slug }}.html"><i class="fas fa-eye"></i> Xem</a>
								<a href="user/motel/disable/{{ $motel->id }}" style="color:red"><i class="fas fa-trash-alt"></i> Đóng</a>
								<a href="user/motel/edit/{{ $motel->id }}" style="color:red"><i class="fas fa-pencil-alt"></i> Sửa</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			@endif
		</div>
	</div>
</div>
<br>
@endsection