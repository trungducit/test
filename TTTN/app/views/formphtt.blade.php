@extends('index')
@section('content')
	<div class="title">
	<h2 style="font-size:30px;">Xin vui lòng đóng góp ý kiến</h2>
	</div>
	<div class="block-content hovergallery">
		<div class="col-sm-12 alpha">
			<form action="{{asset('guiph')}}">
				<table>
					<tr>
						<td>Tên phản hồi</td>
						<td><input type="text" name="tenph"></td>
					</tr>
					<tr>
						<td>Nội dung</td>
						<td><textarea name="noidung" id="" cols="30" rows="10"></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="submit" value="Gửi ý kiến">
							<input type="reset" name="reset" value=" Làm lại">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	</div>

@stop