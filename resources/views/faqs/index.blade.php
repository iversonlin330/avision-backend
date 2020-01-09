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
                    <th>分類</th>
                    <th>題目</th>
                    <th>內容</th>
                    <th>編輯</th>
				</thead>
				<tbody>
				@foreach($faqs as $faq)
                <tr data-id="{{ $faq->id }}">
                    <td data-val="{{ $faq->id }}">{{ $faq->type_text }}</td>
                    <td>{{ $faq->title }}</td>
                    <td>{{ $faq->description }}</td>
                    <td>
                        <a class="btn btn-primary edit_btn" href="#" onclick="software_modal(this)">編輯</a>
                        <form method="POST" action="/faqs/{{$faq->id}}" class="d-inline">
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
	  <form action="{{ url('faqs') }}" enctype="multipart/form-data" method="post">
	  @method('PUT')
	  <div class="modal-body">
		  <input name="type" value="{{ $type}}" hidden>
          <div class="form-group">
              <label for="exampleInputEmail1">題目</label>
              <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="題目" required>
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">內容</label>
              <textarea class="form-control editor" name="description" aria-describedby="emailHelp" placeholder="內容" required></textarea>
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
	  <form action="{{ url('faqs') }}" enctype="multipart/form-data" method="post">
	  <div class="modal-body">
		  <ul id="group_sort">
            @foreach($faqs as $faq)
                <li class="btn btn-primary add-btn mt-2" style="display: block;float: none;">{{ $faq->title }}
                    <input name="order[]" value="{{ $faq->id }}" hidden>
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
		$("#software form").attr('action',"{{ url('faqs') }}");
		$("#software .modal-title").text('新增-{{ $type_text }}');
	}else{
		$("#software [name='_method']").val('PUT');
        $("#software [name='type']").val($(obj).closest('tr').find('td:eq(0)').data('val'));
        $("#software [name='title']").val($(obj).closest('tr').find('td:eq(1)').text());
        $("#software [name='description']").val($(obj).closest('tr').find('td:eq(2)').text());
		$("#software form").attr('action',"{{ url('faqs') }}/"+$(obj).closest('tr').data('id'));
		$("#software .modal-title").text('修改-{{ $type_text }}');
	}
	$("#software").modal('show');
}
</script>
@endsection
