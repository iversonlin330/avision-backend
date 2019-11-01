@extends('layouts.master')

@section('title', 'index')

@section('style')
@parent
<style>
</style>
@endsection
@section('content')
 <div class="row mt-2">
	<div class="col-12">
		<a class="btn btn-primary add-btn" onclick="modal('create')">新增Logo</a>
	</div>
</div>
<div class="row mt-2">
	<div class="col-12">
	<table class="table">
		<thead>
			<th>名稱</th>
			<th>圖片</th>
			<th>連結</th>
			<th>編輯</th>
		</thead>
		<tbody>
		@foreach($logos as $logo)
		<tr data-id="{{ $logo->id }}">
			<td>{{ $logo->title }}</td>
			<td><img src="{{ asset('storage/'.$logo->file) }}"></td>
			<td>{{ $logo->url }}</td>
			<td>
				<a class="btn btn-primary edit_btn" href="#" onclick="modal(this)">編輯</a>
				<form method="POST" action="/logos/{{$logo->id}}" class="d-inline">
					{{ method_field('DELETE') }}
					<button type="submit" class="btn btn-primary delete_btn">刪除</button>
				 </form>
			</td>
		</tr>
		@endforeach
			<!--tr>
				<td>AN240</td>
				<td><a class="btn btn-primary edit_btn" href="product-create.html">編輯</a><a class="btn btn-primary delete_btn" href="product-create.html">刪除</a></td>
			</tr>
			<tr>
				<td>AN240</td>
				<td><a class="btn btn-primary edit_btn" href="product-create.html">編輯</a><a class="btn btn-primary delete_btn" href="product-create.html">刪除</a></td>
			</tr-->
		</tbody>
	</table>
	</div>
</div>
<!--modal-->
<div id="modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">新增Logo</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <form action="{{ url('logos') }}" enctype="multipart/form-data" method="post">
	  @method('PUT')
	  <div class="modal-body">
			<input name="type" value="{{ $type }}" hidden>
		  <!--div class="form-group">
			<label for="exampleInputEmail1">分類</label>
			<select class="form-control" name="type" required>
				<option value="1">用戶手冊</option>
				<option value="2">型錄</option>
				<option value="3">快速指南</option>
			</select>
		  </div-->
		  <div class="form-group">
			<label for="exampleInputEmail1">名稱</label>
			<input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="名稱" required>
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">圖片</label>
			<input type="file" class="form-control" name="file">
		  </div-->
		  <div class="form-group">
			<label for="exampleInputEmail1">連結</label>
			<input type="text" class="form-control" name="url" aria-describedby="emailHelp" placeholder="URL" required>
		  </div>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-secondary cancel_btn" data-dismiss="modal">取消</button>
		<button type="submit" class="btn btn-primary add-btn">儲存</button>
	  </div>
	  </form>
	</div>
  </div>
</div>
<!--modal-->
@endsection
@section('script')
@parent
<script>
function modal(obj){
	if(obj == 'create'){
		$("#modal [name='_method']").val('POST');
		$("#modal form").attr('action',"{{ url('logos') }}");
		$("#modal .modal-title").text('新增Logo');
	}else{
		$("#modal [name='_method']").val('PUT');
		//$("#modal [name='type']").val($(obj).closest('tr').find('td:eq(0)').data('val'));
		$("#modal [name='title']").val($(obj).closest('tr').find('td:eq(0)').text());
		$("#modal [name='url']").val($(obj).closest('tr').find('td:eq(2)').text());
		//$("#modal [name='lang']").val($(obj).closest('tr').find('td:eq(3)').text());
		$("#modal form").attr('action',"{{ url('logos') }}/"+$(obj).closest('tr').data('id'));
		$("#modal .modal-title").text('修改Logo');
	}
	$("#modal").modal('show');
}
$("table form").submit(function(){
	if(confirm('確認刪除？')){
	}else{
		return false;
	}
});
</script>
@endsection