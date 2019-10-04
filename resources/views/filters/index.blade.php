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
		<a class="btn btn-primary add-btn" onclick="modal('create')">新增篩選</a>
	</div>
</div>
<div class="row mt-2">
	<div class="col-12">
	<table class="table">
		<thead>
			<th>篩選名稱</th>
			<th>編輯</th>
		</thead>
		<tbody>
		@foreach($filters as $filter)
		<tr data-id="{{ $filter->id }}">
			<td>{{ $filter->title }}</td>
			<td>
				<a class="btn btn-primary edit_btn" href="#" onclick="modal(this)">編輯</a>
				<form method="POST" action="/filters/{{$filter->id}}" class="d-inline">
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
		<h5 class="modal-title">新增下載</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <form action="{{ url('downloads') }}" enctype="multipart/form-data" method="post">
	  @method('PUT')
	  <div class="modal-body">
		  <!--div class="form-group">
			<label for="exampleInputEmail1">文件類型</label>
			<select class="form-control" name="type" required>
				<option value="1">用戶手冊</option>
				<option value="2">型錄</option>
				<option value="3">快速指南</option>
			</select>
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">文件名稱</label>
			<input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="文件名稱" required>
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">文件語系</label>
			<input type="text" class="form-control" name="lang" aria-describedby="emailHelp" placeholder="文件語系" required>
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">檔案</label>
			<input type="file" class="form-control" name="file">
		  </div-->
		  <div class="form-group">
			<label for="exampleInputEmail1">篩選名稱</label>
			<input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="篩選名稱" required>
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
		$("#modal form").attr('action',"{{ url('filters') }}");
	}else{
		$("#modal [name='_method']").val('PUT');
		//$("#modal [name='type']").val($(obj).closest('tr').find('td:eq(0)').data('val'));
		$("#modal [name='title']").val($(obj).closest('tr').find('td:eq(0)').text());
		//$("#modal [name='lang']").val($(obj).closest('tr').find('td:eq(3)').text());
		$("#modal form").attr('action',"{{ url('filters') }}/"+$(obj).closest('tr').data('id'));
	}
	$("#modal").modal('show');
}
</script>
@endsection