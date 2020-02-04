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
		<a class="btn btn-primary add-btn" onclick="software_modal('create')">新增{{ $type_text }}</a>
		<a class="btn btn-primary add-btn" data-toggle="modal" data-target="#group_sort_modal">{{ $type_text }}排序</a>
	</div>
</div>
<div class="row mt-2">
	<div class="col-12">
	<div class="card">
		<div class="card-header">{{ $type_text }}</div>
		  <div class="card-body">
			<table class="table">
				<thead>
					<th>文件名稱</th>
					<th>版本</th>
					<th>系統相容性</th>
					<th>檢查碼(sha1)</th>
					<th>檔案大小</th>
					<th>編輯</th>
				</thead>
				<tbody>
				@foreach($softwares as $software)
				<tr data-id="{{ $software->id }}">
					<td>{{ $software->title }}</td>
					<td>{{ $software->version }}</td>
					<td>{{ $software->compatibility }}</td>
					<td>{{ $software->sha1 }}</td>
					<td>{{ $software->file_size }}</td>
					<td>
						<a class="btn btn-primary edit_btn" href="#" onclick="software_modal(this)">編輯</a>
						<form method="POST" action="/softwares/{{$software->id}}" class="d-inline">
							{{ method_field('DELETE') }}
							<button type="submit" class="btn btn-primary delete_btn">刪除</button>
						 </form>
					</td>
				</tr>
				@endforeach
				</tbody>
			</table>
		  </div>
	</div>
	</div>
</div>
<!--modal-->
<div id="software" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">新增{{ $type_text }}</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <form action="{{ url('softwares') }}" enctype="multipart/form-data" method="post">
	  @method('PUT')
	  <div class="modal-body">
		  <input name="type" value="{{ $type}}" hidden>
		  <div class="form-group">
			<label for="exampleInputEmail1">文件名稱</label>
			<input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="文件名稱" required>
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">版本</label>
			<input type="text" class="form-control" name="version" aria-describedby="emailHelp" placeholder="版本" required>
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">系統相容性</label>
			<input type="text" class="form-control" name="compatibility" aria-describedby="emailHelp" placeholder="系統相容性" required>
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">檢查碼(sha1)	</label>
			<input type="text" class="form-control" name="sha1" aria-describedby="emailHelp" placeholder="檢查碼(sha1)	" required>
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">檔案</label>
			<input type="file" class="form-control" name="file" required>
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
<!--modal-->
<div id="group_sort_modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">{{ $type_text }}排序</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <form action="{{ url('softwares') }}" enctype="multipart/form-data" method="post">
	  <div class="modal-body">
		  <ul id="group_sort">
				@foreach($softwares as $software)
					<li class="btn btn-primary add-btn mt-2" style="display: block;float: none;">{{ $software->title }}
						<input name="order[]" value="{{ $software->id }}" hidden>
					</li>
				@endforeach
			<ul>
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
$("#group_sort").sortable();
/*
function group_modal(obj){
	if(obj == 'create'){
		$("#spec_modal [name='title']").val('');
		$("#group_modal [name='_method']").val('POST');
		$("#group_modal form").attr('action',"{{ url('softwares') }}");
	}else{
		$("#group_modal [name='_method']").val('PUT');
		//$("#modal [name='type']").val($(obj).closest('tr').find('td:eq(0)').data('val'));
		$("#group_modal [name='title']").val($(obj).closest('tr').find('td:eq(0)').text());
		//$("#modal [name='lang']").val($(obj).closest('tr').find('td:eq(3)').text());
		$("#group_modal form").attr('action',"{{ url('softwares') }}/"+$(obj).closest('tr').data('id'));
	}
	$("#group_modal").modal('show');
}
*/
function software_modal(obj){
	if(obj == 'create'){
		$("#software [name='_method']").val('POST');
		$("#software form").attr('action',"{{ url('softwares') }}");
		$("#software .modal-title").text('新增下載-{{ $type_text }}');
		$("#software [name='file']").prop("required",true);
	}else{
		$("#software [name='_method']").val('PUT');
		//$("#software [name='type']").val($(obj).closest('tr').find('td:eq(0)').data('val'));
		$("#software [name='title']").val($(obj).closest('tr').find('td:eq(0)').text());
		$("#software [name='version']").val($(obj).closest('tr').find('td:eq(1)').text());
		$("#software [name='compatibility']").val($(obj).closest('tr').find('td:eq(2)').text());
		$("#software [name='sha1']").val($(obj).closest('tr').find('td:eq(3)').text());
		$("#software form").attr('action',"{{ url('softwares') }}/"+$(obj).closest('tr').data('id'));
		$("#software .modal-title").text('修改下載-{{ $type_text }}');
		$("#software [name='file']").prop("required",false);
	}
	$("#software").modal('show');
}
</script>
@endsection