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
		<a class="btn btn-primary add-btn" onclick="group_modal('create')">新增第一層</a>
		<a class="btn btn-primary add-btn" data-toggle="modal" data-target="#group_sort_modal">第一層排序</a>
		<a class="btn btn-primary add-btn" onclick="spec_modal('create')">新增第二層</a>
		<a class="btn btn-primary add-btn" data-toggle="modal" data-target="#spec_sort_modal">第二層排序</a>
	</div>
</div>
<div class="row mt-2">
	<div class="col-12">
	<div class="card">
		<div class="card-header">第一層</div>
		  <div class="card-body">
			<table class="table">
				<thead>
					<th>第一層名稱</th>
					<th>描述文字</th>
					<!--th>Banner</th>
					<th>產品圖片</th-->
					<th>編輯</th>
				</thead>
				<tbody>
				@foreach($group_types as $group_type)
				<tr data-id="{{ $group_type->id }}">
					<td>{{ $group_type->title }}</td>
					<td>{{ $group_type->description }}</td>
					<!--td><img src="{{ asset('storage/'.$group_type->banner) }}"></td>
					<td><img src="{{ asset('storage/'.$group_type->picture) }}"></td-->
					<td>
						<a class="btn btn-primary edit_btn" href="#" onclick="group_modal(this)">編輯</a>
						<form method="POST" action="/group_types/{{$group_type->id}}" class="d-inline">
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
		<div class="card-header">第二層</div>
		  <div class="card-body">
			<table class="table">
				<thead>
					<th>第二層名稱</th>
					<th>所屬第一層</th>
					<!--th>規格內容</th-->
					<th>編輯</th>
				</thead>
				<tbody>
				@foreach($group_types as $group_type)
					@foreach($group_type->types as $type)
						<tr data-id="{{ $type->id }}" data-description="{{ $type->description }}">
							<td>{{ $type->title }}</td>
							<td data-id="{{ $group_type->id }}">{{ $group_type->title }}</td>
							<td>
								<a class="btn btn-primary edit_btn" href="#" onclick="spec_modal(this)">編輯</a>
								<form method="POST" action="/types/{{$type->id}}" class="d-inline">
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
		<h5 class="modal-title">新增第一層</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <form action="{{ url('groupTypes') }}" enctype="multipart/form-data" method="post">
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
			<label for="exampleInputEmail1">第一層名稱</label>
			<input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="第一層名稱" required>
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">敘述文字</label>
			<textarea type="text" class="form-control" name="description" aria-describedby="emailHelp" placeholder="敘述文字" required></textarea>
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">Banner</label>
			<input type="file" class="form-control" name="banner" required>
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">產品圖片</label>
			<input type="file" class="form-control" name="picture" required>
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
		<h5 class="modal-title">新增第二層</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <form action="{{ url('types') }}" enctype="multipart/form-data" method="post">
	  @method('PUT')
	  <div class="modal-body">
		  <div class="form-group">
			<label for="exampleInputEmail1">群組名稱</label>
			<select class="form-control" name="type" required>
				@foreach($group_types as $group_type)
					<option value="{{ $group_type->id }}">{{ $group_type->title }}</option>
				@endforeach
			</select>
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">規格名稱</label>
			<input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="規格名稱" required>
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">敘述文字</label>
			<textarea type="text" class="form-control" name="description" aria-describedby="emailHelp" placeholder="敘述文字" required></textarea>
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">分類精選圖</label>
			<input type="file" class="form-control" name="picture" required>
		  </div>
		  <!--div class="form-group">
			<label for="exampleInputEmail1">規格內容</label>
			<input type="text" class="form-control" name="description" aria-describedby="emailHelp" placeholder="規格內容" required>
		  </div-->
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
		<h5 class="modal-title">第一層排序</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <form action="{{ url('group_types') }}" enctype="multipart/form-data" method="post">
	  <div class="modal-body">
		  <ul id="group_sort">
				@foreach($group_types as $group_type)
					<li class="btn btn-primary add-btn mt-2" style="display: block;float: none;">{{ $group_type->title }}
						<input name="order[]" value="{{ $group_type->id }}" hidden>
					</li>
				@endforeach
			</ul>
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
<div id="spec_sort_modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">第二層排序</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <form action="{{ url('types') }}" enctype="multipart/form-data" method="post">
	  <div class="modal-body">
		  <ul id="spec_sort">
		  @foreach($group_types as $group_type)
				@foreach($group_type->types as $type)
					<li class="btn btn-primary add-btn mt-2" style="display: block;float: none;">{{ $type->title }}
						<input name="order[]" value="{{ $type->id  }}" hidden>
					</li>
				@endforeach
			@endforeach
			</ul>
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
$("#group_sort,#spec_sort").sortable();
function group_modal(obj){
	if(obj == 'create'){
		$("#spec_modal [name='title']").val('');
		$("#group_modal [name='_method']").val('POST');
		$("#group_modal form").attr('action',"{{ url('group_types') }}");
	}else{
		$("#group_modal [name='_method']").val('PUT');
		//$("#modal [name='type']").val($(obj).closest('tr').find('td:eq(0)').data('val'));
		$("#group_modal [name='title']").val($(obj).closest('tr').find('td:eq(0)').text());
        $("#group_modal [name='description']").val($(obj).closest('tr').find('td:eq(1)').text());
		//$("#modal [name='lang']").val($(obj).closest('tr').find('td:eq(3)').text());
		$("#group_modal form").attr('action',"{{ url('group_types') }}/"+$(obj).closest('tr').data('id'));
	}
	$("#group_modal").modal('show');
}

function spec_modal(obj){
	if(obj == 'create'){
		$("#spec_modal [name='title']").val('');
		$("#spec_modal [name='_method']").val('POST');
		$("#spec_modal form").attr('action',"{{ url('types') }}");
	}else{
		$("#spec_modal [name='_method']").val('PUT');
		//$("#modal [name='type']").val($(obj).closest('tr').find('td:eq(0)').data('val'));
		$("#spec_modal [name='title']").val($(obj).closest('tr').find('td:eq(0)').text());
		$("#spec_modal [name='type']").val($(obj).closest('tr').find('td:eq(1)').data('id'));
		$("#spec_modal [name='description']").val($(obj).closest('tr').data('description'));
		//$("#modal [name='lang']").val($(obj).closest('tr').find('td:eq(3)').text());
		$("#spec_modal form").attr('action',"{{ url('types') }}/"+$(obj).closest('tr').data('id'));
	}
	$("#spec_modal").modal('show');
}
</script>
@endsection
