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
		<a class="btn btn-primary add-btn" onclick="group_modal('create')">新增群組</a>
		<a class="btn btn-primary add-btn" onclick="spec_modal('create')">新增規格</a>
	</div>
</div>
<div class="row mt-2">
	<div class="col-12">
	<div class="card">
		<div class="card-header">群組</div>
		  <div class="card-body">
			<table class="table">
				<thead>
					<th>群組名稱</th>
					<th>編輯</th>
				</thead>
				<tbody>
				@foreach($groups as $group)
				<tr data-id="{{ $group->id }}">
					<td>{{ $group->title }}</td>
					<td>
						<a class="btn btn-primary edit_btn" href="#" onclick="group_modal(this)">編輯</a>
						<form method="POST" action="/groups/{{$group->id}}" class="d-inline">
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
<div class="row mt-2">
	<div class="col-12">
	<div class="card">
		<div class="card-header">規格</div>
		  <div class="card-body">
			<table class="table">
				<thead>
					<th>規格名稱</th>
					<th>群組</th>
					<th>規格內容</th>
					<th>編輯</th>
				</thead>
				<tbody>
				@foreach($groups as $group)
					@foreach($group->specs as $spec)
						<tr data-id="{{ $spec->id }}">
							<td>{{ $spec->title }}</td>
							<td data-id="{{ $group->id }}">{{ $group->title }}</td>
							<td>{{ $spec->description }}</td>
							<td>
								<a class="btn btn-primary edit_btn" href="#" onclick="spec_modal(this)">編輯</a>
								<form method="POST" action="/specs/{{$spec->id}}" class="d-inline">
									{{ method_field('DELETE') }}
									<button type="submit" class="btn btn-primary delete_btn">刪除</button>
								 </form>
							</td>
						</tr>
					@endforeach
				@endforeach
				</tbody>
			</table>
		  </div>
	</div>
	</div>
</div>
<!--modal-->
<div id="group_modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">新增群組</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <form action="{{ url('groups') }}" enctype="multipart/form-data" method="post">
	  @method('PUT')
	  <div class="modal-body">
		<input name="type" value="{{ $type }}" hidden>
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
			<label for="exampleInputEmail1">群組名稱</label>
			<input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="群組名稱" required>
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
<div id="spec_modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">新增規格</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <form action="{{ url('specs') }}" enctype="multipart/form-data" method="post">
	  @method('PUT')
	  <div class="modal-body">
		  <div class="form-group">
			<label for="exampleInputEmail1">群組名稱</label>
			<select class="form-control" name="group_id" required>
				@foreach($groups as $group)
					<option value="{{ $group->id }}">{{ $group->title }}</option>
				@endforeach
			</select>
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">規格名稱</label>
			<input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="規格名稱" required>
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">規格內容</label>
			<input type="text" class="form-control" name="description" aria-describedby="emailHelp" placeholder="規格內容" required>
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
function group_modal(obj){
	if(obj == 'create'){
		$("#spec_modal [name='title']").val('');
		$("#group_modal [name='_method']").val('POST');
		$("#group_modal form").attr('action',"{{ url('groups') }}");
	}else{
		$("#group_modal [name='_method']").val('PUT');
		//$("#modal [name='type']").val($(obj).closest('tr').find('td:eq(0)').data('val'));
		$("#group_modal [name='title']").val($(obj).closest('tr').find('td:eq(0)').text());
		//$("#modal [name='lang']").val($(obj).closest('tr').find('td:eq(3)').text());
		$("#group_modal form").attr('action',"{{ url('groups') }}/"+$(obj).closest('tr').data('id'));
	}
	$("#group_modal").modal('show');
}

function spec_modal(obj){
	if(obj == 'create'){
		$("#spec_modal [name='title']").val('');
		$("#spec_modal [name='_method']").val('POST');
		$("#spec_modal form").attr('action',"{{ url('specs') }}");
	}else{
		$("#spec_modal [name='_method']").val('PUT');
		//$("#modal [name='type']").val($(obj).closest('tr').find('td:eq(0)').data('val'));
		$("#spec_modal [name='title']").val($(obj).closest('tr').find('td:eq(0)').text());
		$("#spec_modal [name='group_id']").val($(obj).closest('tr').find('td:eq(1)').data('id'));
		$("#spec_modal [name='description']").val($(obj).closest('tr').find('td:eq(2)').text());
		//$("#modal [name='lang']").val($(obj).closest('tr').find('td:eq(3)').text());
		$("#spec_modal form").attr('action',"{{ url('specs') }}/"+$(obj).closest('tr').data('id'));
	}
	$("#spec_modal").modal('show');
}
</script>
@endsection