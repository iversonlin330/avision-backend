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
                  <th>配件名稱</th>
                  <th>配件說明</th>
                  <th>配件圖片</th>
                  <th>聯絡我們</th>
                  <th>編輯</th>
                  </thead>
                  <tbody>
                      @foreach($accessories->sortBy('order') as $accessory)
                          <tr data-id="{{ $accessory->id }}">
                              <td>{{ $accessory->title }}</td>
                              <td>{{ $accessory->description }}</td>
                              <td><img src="{{ asset('storage/'.$accessory->file) }}"></td>
                              <td>{{ $accessory->url }}</td>
                              <td>
                                  <a class="btn btn-primary edit_btn" href="#" onclick="software_modal(this)">編輯</a>
                                  <form method="POST" action="/accessories/{{$accessory->id}}" class="d-inline">
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
        <form action="{{ url('accessories') }}" enctype="multipart/form-data" method="post">
            @method('PUT')
            <div class="modal-body">
                <input name="group_type_id" value="{{ $group_type_id}}" hidden>
                <div class="form-group">
                    <label for="exampleInputEmail1">配件名稱</label>
                    <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="配件名稱" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">配件說明</label>
                    <input type="text" class="form-control" name="description" aria-describedby="emailHelp" placeholder="配件說明" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">配件圖片</label>
                    <input type="file" class="form-control" name="file" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">連絡我們</label>
                    <input type="text" class="form-control" name="url" aria-describedby="emailHelp" placeholder="url" required>
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
	  <form action="{{ url('accessories') }}" enctype="multipart/form-data" method="post">
	  <div class="modal-body">
		  <ul id="group_sort">
				@foreach($accessories as $accessory)
					<li class="btn btn-primary add-btn mt-2" style="display: block;float: none;">{{ $accessory->title }}
						<input name="order[]" value="{{ $accessory->id }}" hidden>
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
		$("#software form").attr('action',"{{ url('accessories') }}");
		$("#software .modal-title").text('新增-{{ $type_text }}');
		$("#software [name='file']").prop('required',true);
	}else{
		$("#software [name='_method']").val('PUT');
        $("#software [name='title']").val($(obj).closest('tr').find('td:eq(0)').text());
        $("#software [name='description']").val($(obj).closest('tr').find('td:eq(1)').text());
        $("#software [name='url']").val($(obj).closest('tr').find('td:eq(3)').text());
		$("#software form").attr('action',"{{ url('accessories') }}/"+$(obj).closest('tr').data('id'));
		$("#software .modal-title").text('修改-{{ $type_text }}');
		$("#software [name='file']").prop('required',false);
	}
	$("#software").modal('show');
}
</script>
@endsection
