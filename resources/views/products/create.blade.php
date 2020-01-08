@extends('layouts.master')

@section('title', 'index')

@section('style')
@parent
<style>
</style>
@endsection
@section('content')
<ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
	<li class="nav-item">
	<a class="nav-link active" id="T1" data-toggle="pill" href="#pills-product" role="tab" aria-controls="pills-home" aria-selected="true">產品資訊</a>
	</li>
	@if(isset($product))
	<li class="nav-item">
	<a class="nav-link" id="T2" data-toggle="pill" href="#pills-picture" role="tab" aria-controls="pills-profile" aria-selected="false">其他產品圖片</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" id="T3" data-toggle="pill" href="#pills-spec" role="tab" aria-controls="pills-profile" aria-selected="false">產品規格</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" id="T4" data-toggle="pill" href="#pills-download" role="tab" aria-controls="pills-profile" aria-selected="false">下載</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" id="T5" data-toggle="pill" href="#pills-acc" role="tab" aria-controls="pills-contact" aria-selected="false">配件</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" id="T6" data-toggle="pill" href="#pills-qa" role="tab" aria-controls="pills-contact" aria-selected="false">常見問答</a>
	</li>
	@endif
</ul>
<div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade show active" id="pills-product" role="tabpanel" aria-labelledby="pills-home-tab">
<!--Info-->
<div class="row">
<div class="col-12">
@if(isset($product))
<form id="product_form" action="{{url('products/'.$product->id)}}" enctype="multipart/form-data" method="POST">
@method('PUT')
@else
<form id="product_form" action="{{ url('products') }}" enctype="multipart/form-data" method="post">
@endif
  <div class="form-group">
	<label for="exampleInputEmail1">產品型號</label>
	<input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="產品名稱" required>
  </div>
  <!--div class="form-group">
	<label for="exampleInputEmail1">產品型號</label>
	<input type="text" class="form-control" name="model" aria-describedby="emailHelp" placeholder="產品型號" required>
  </div-->
  <div class="form-group">
	<label for="exampleFormControlSelect2">產品類別</label><br>
	@foreach($types as $type)
	<label class="radio-inline"><input type="radio" name="type_id" value="{{ $type->id }}">{{ $type->title }}</label>
	@endforeach
	@if(0)
	<select class="form-control" name="type_id" required>
		@foreach($types as $type)
			<option value="{{ $type->id }}">{{ $type->title }}</option>
		@endforeach
	</select>
	@endif
  </div>
  <div class="form-group">
	<label for="exampleInputEmail1">產品精選圖片</label>
	<input type="file" class="form-control" name="picture" aria-describedby="emailHelp" placeholder="產品精選圖片" {{ isset($product)? '' : 'required' }}>
  </div>
  <div class="form-group">
	<label for="exampleFormControlSelect2">Flag</label><br>
	<label class="radio-inline"><input type="radio" name="flag" value='1' required>無</label>
	<label class="radio-inline"><input type="radio" name="flag" value='2'>新產品</label>
	<label class="radio-inline"><input type="radio" name="flag" value='3'>發燒產品</label>
	<!--select class="form-control" name="flag" required>
	  <option value="1">無</option>
	  <option value="2">新產品</option>
	  <option value="3">發燒產品</option>
	</select-->
  </div>
   <div class="form-group">
	<div class="inside_title">列點特色</div>
	<label for="exampleInputEmail1">．特色一</label>
	<input type="text" class="form-control" name="characteristic_1" aria-describedby="emailHelp" placeholder="列點特色一" maxlength="10" required>
  </div>
  <div class="form-group">
	<label for="exampleInputEmail1">．特色二</label>
	<input type="text" class="form-control" name="characteristic_2" aria-describedby="emailHelp" placeholder="列點特色二" maxlength="10" required>
  </div>
  <div class="form-group">
	<label for="exampleInputEmail1">．特色三</label>
	<input type="text" class="form-control" name="characteristic_3" aria-describedby="emailHelp" placeholder="列點特色三" maxlength="10" required>
  </div>
  <hr class="nature_hr">
  <div class="form-group">
	<label for="exampleInputEmail1">產品slogan</label>
	<input type="text" class="form-control" name="slogan" aria-describedby="emailHelp" placeholder="產品slogan" required>
  </div>
  <div class="form-group">
	<label for="exampleInputEmail1">產品簡介</label>
	<textarea class="form-control" name="description" placeholder="產品簡介" required></textarea>
  </div>
  <div class="form-group">
	<label for="exampleInputEmail1">產品特色</label>
	<textarea name="characteristic" placeholder="產品特色"></textarea>
  </div>




  <div class="form-group">
	<label for="exampleInputEmail1">機台規格</label>
	<div class="row">
	@foreach($logo1s as $logo1)
	<div class="col-2" style="text-align: center;">
		<img src="{{ asset('storage/'.$logo1->file) }}" style="width:100%;">
		<input type="checkbox" name="spec[]" value="{{ $logo1->id }}">{{ $logo1->title }}</input>
	</div>
	@endforeach
	@if(0)
	<select class="form-control multiselect" name="spec[]" multiple required>
		@foreach($logo1s as $logo1)
			<option value="{{ $logo1->id }}">{{ $logo1->title }}</option>
		@endforeach
		<option>機台規格1</option>
		<option>機台規格2</option>
	</select>
	@endif
	</div>
  </div>
  <div class="form-group">
	<label for="exampleInputEmail1">附贈軟體</label>
	<div class="row">
	@foreach($logo2s as $logo2)
	<div class="col-2" style="text-align: center;">
		<img src="{{ asset('storage/'.$logo2->file) }}" style="width:100%;">
		<input type="checkbox" name="software[]" value="{{ $logo2->id }}">{{ $logo2->title }}</input>
	</div>
	@endforeach
	@if(0)
	<select class="form-control multiselect" name="software[]" multiple required>
		@foreach($logo2s as $logo2)
			<option value="{{ $logo1->id }}">{{ $logo2->title }}</option>
		@endforeach
		<option>附贈軟體1</option>
		<option>附贈軟體2</option>
	</select>
	@endif
	</div>
  </div>
  <div class="form-group">
	<label for="exampleInputEmail1">認證標章</label>
	<div class="row">
	@foreach($logo3s as $logo3)
	<div class="col-2" style="text-align: center;">
		<img src="{{ asset('storage/'.$logo3->file) }}" style="width:100%;">
		<input type="checkbox" name="cert[]" value="{{ $logo3->id }}">{{ $logo3->title }}
	</div>
	@endforeach
	@if(0)
	<select class="form-control multiselect" name="cert[]" multiple required>
		@foreach($logo3s as $logo3)
			<option value="{{ $logo3->id }}">{{ $logo3->title }}</option>
		@endforeach
		<option>認證標章1</option>
		<option>認證標章2</option>
	</select>
	@endif
	</div>
  </div>
  <hr class="nature_hr">
  <div class="form-group">
	<label for="exampleFormControlSelect2">總覽篩選</label><br>
	@foreach($filters as $filter)
	<label class="checkbox-inline"><input type="checkbox" name="filter[]" value="{{ $filter->id }}">{{ $filter->title }}</label>
	@endforeach
	@if(0)
	<select class="form-control" id="exampleFormControlSelect2" name="filter[]" multiple required>
	  <option value="1">tests</option>
	  @foreach($filters as $filter)
	  <option value="{{ $filter->id }}">{{ $filter->title }}</option>
	  @endforeach
	</select>
	@endif
  </div>

  <div class="form-group">
	<label for="exampleFormControlSelect2">產品狀態</label>
	<select class="form-control" name="status" required>
	  <option value="1">顯示</option>
	  <option value="0">不顯示</option>
	</select>
  </div>

  <div class="submit_fixed">
	<button type="submit" class="btn btn-primary send_button">送出</button>
  </div>

  <!--button type="submit" class="btn btn-primary send_button">送出</button-->

</form>
</div>
</div>
<!--Info-->
</div>
@if(isset($product))
	<div class="tab-pane fade" id="pills-spec" role="tabpanel" aria-labelledby="pills-contact-tab">
		<form action="{{ url('product_specs') }}" method="POST">
		<input name="product_id" value="{{ $product->id}}" hidden>
		@foreach($groups as $group)
		<div class="row mt-2">
			<div class="col-12">
			<div class="card">
				<div class="card-header">{{ $group->title }}</div>
				  <div class="card-body">
					<table class="table">
						<thead>
							<th>規格名稱</th>
							<th>編輯</th>
						</thead>
						<tbody>
							@foreach($group->specs as $spec)
								<tr>
									<td>{{ $spec->title }}</td>
									<td><input type="text" class="form-control" name="spec[{{$spec->id}}]" aria-describedby="emailHelp" placeholder="{{ $spec->title }}" required></td>
								</tr>
							@endforeach
						</tbody>
					</table>
				  </div>
			</div>
			</div>
		</div>
		@endforeach
		<button type="submit" class="btn btn-primary send_button">送出</button>
		</form>
	</div>
	<div class="tab-pane fade" id="pills-download" role="tabpanel" aria-labelledby="pills-profile-tab">
	<div class="row mt-2">
		<div class="col-12">
			<a class="btn btn-primary add-btn" onclick="download_modal('create')">新增手冊</a>
			<a class="btn btn-primary add-btn" data-toggle="modal" data-target="#download_sort_modal">手冊排序</a>
			<!--a class="btn btn-primary add-btn" onclick="software_modal('create')">新增軟體程式</a>
			<a class="btn btn-primary add-btn" data-toggle="modal" data-target="#software_sort_modal">軟體程式排序</a-->
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-12">
		<div class="card">
			<div class="card-header">手冊</div>
			  <div class="card-body">
				<table class="table">
					<thead>
						<th>文件類型</th>
						<th>文件名稱</th>
						<th>檔案大小</th>
						<th>文件語系</th>
						<th>編輯</th>
					</thead>
					<tbody>
					@foreach($product->downloads->sortBy('order') as $download)
						<tr data-id="{{ $download->id }}">
							<td data-val="{{ $download->type }}">{{ $download->type_text }}</td>
							<td>{{ $download->title }}</td>
							<td>{{ $download->file_size }}</td>
							<td>{{ $download->lang }}</td>
							<td>
								<a class="btn btn-primary edit_btn" href="#" onclick="download_modal(this)">編輯</a>
								<form method="POST" action="/downloads/{{$download->id}}" class="d-inline">
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
        <hr class="nature_hr">
        <div class="form-group">
            <label for="exampleFormControlSelect2">總覽篩選</label><br>
            @foreach($filters as $filter)
                <label class="checkbox-inline"><input type="checkbox" name="filter[]" value="{{ $filter->id }}">{{ $filter->title }}</label>
            @endforeach
            @if(0)
                <select class="form-control" id="exampleFormControlSelect2" name="filter[]" multiple required>
                    <option value="1">tests</option>
                    @foreach($filters as $filter)
                        <option value="{{ $filter->id }}">{{ $filter->title }}</option>
                    @endforeach
                </select>
            @endif
        </div>
	<div class="row mt-2">
		<div class="col-12">
		<!--div class="card">
			<div class="card-header">軟體程式</div>
			  <div class="card-body">
				<table class="table">
					<thead>
						<th>文件類型</th>
						<th>文件名稱</th>
						<th>版本</th>
						<th>系統相容性</th>
						<th>檢查碼(sha1)</th>
						<th>檔案大小</th>
						<th>編輯</th>
					</thead>
					<tbody>
					@if(0)
					@foreach($product->softwares->sortBy('order') as $software)
						<tr data-id="{{ $software->id }}">
							<td data-val="{{ $software->type }}">{{ $software->type_text }}</td>
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
                    @endif
                    </tbody>
				</table>
			  </div>
		</div>
		</div>
	</div>
	</div>
	<div class="tab-pane fade" id="pills-acc" role="tabpanel" aria-labelledby="pills-contact-tab">
	<div class="row mt-2">
		<div class="col-12">
			<a class="btn btn-primary add-btn" href="#" onclick="accessory_modal('create')">新增配件</a>
			<a class="btn btn-primary add-btn" data-toggle="modal" data-target="#accessory_sort_modal">配件排序</a>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-12">
		<div class="card">
			<div class="card-header">配件</div>
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
					@if(0)
					@foreach($product->accessories->sortBy('order') as $accessory)
						<tr data-id="{{ $accessory->id }}">
							<td>{{ $accessory->title }}</td>
							<td>{{ $accessory->description }}</td>
							<td><img src="{{ asset('storage/'.$accessory->file) }}"></td>
							<td>{{ $accessory->url }}</td>
							<td>
								<a class="btn btn-primary edit_btn" href="#" onclick="accessory_modal(this)">編輯</a>
								<form method="POST" action="/accessories/{{$accessory->id}}" class="d-inline">
									{{ method_field('DELETE') }}
									<button type="submit" class="btn btn-primary delete_btn">刪除</button>
								 </form>
							</td>
						</tr>
					@endforeach
                    @endif
					</tbody>
				</table>
			  </div>
		</div>
		</div>
	</div>
	</div>
	<div class="tab-pane fade" id="pills-qa" role="tabpanel" aria-labelledby="pills-contact-tab">
	<div class="row mt-2">
		<div class="col-12">
			<a class="btn btn-primary add-btn" href="#" onclick="faq_modal('create')">新增常見問答</a>
			<a class="btn btn-primary add-btn" data-toggle="modal" data-target="#faq_sort_modal">常見問答排序</a>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-12">
		<div class="card">
			<div class="card-header">常見問答</div>
			  <div class="card-body">
				<table class="table">
					<thead>
						<th>分類</th>
						<th>題目</th>
						<th>內容</th>
						<th>編輯</th>
					</thead>
					<tbody>
					@if(0)
					@foreach($product->faqs->sortBy('order') as $faq)
						<tr data-id="{{ $faq->id }}">
							<td data-val="{{ $faq->id }}">{{ $faq->type_text }}</td>
							<td>{{ $faq->title }}</td>
							<td>{{ $faq->description }}</td>
							<td>
								<a class="btn btn-primary edit_btn" href="#" onclick="faq_modal(this)">編輯</a>
								<form method="POST" action="/faqs/{{$faq->id}}" class="d-inline">
									{{ method_field('DELETE') }}
									<button type="submit" class="btn btn-primary delete_btn">刪除</button>
								 </form>
							</td>
						</tr>
					@endforeach
                    @endif
					</tbody>
				</table>
			  </div>
		</div>
		</div>
	</div>
	</div>
	<div class="tab-pane fade" id="pills-picture" role="tabpanel" aria-labelledby="pills-contact-tab">
	<div class="row mt-2">
		<div class="col-12">
			<a class="btn btn-primary add-btn" href="#" onclick="picture_modal('create')">新增其他圖片</a>
			<a class="btn btn-primary add-btn" data-toggle="modal" data-target="#picture_sort_modal">其他圖片排序</a>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-12">
		<div class="card">
			<div class="card-header">其他圖片</div>
			  <div class="card-body">
				<table class="table">
					<thead>
						<th>類別</th>
						<th>說明</th>
						<th>檔案</th>
						<th>編輯</th>
					</thead>
					<tbody>
					@foreach($product->pictures->sortBy('order') as $picture)
						<tr data-id="{{ $picture->id }}">
							<td data-val="{{ $picture->type }}">{{ $picture->type_text }}</td>
							<td>{{ $picture->description }}</td>
							@if($picture->type == 2)
								<td><img src="{{ asset('storage/'.$picture->path) }}"></td>
							@else
								<td>{{ $picture->path }}</td>
							@endif
							<td>
								<a class="btn btn-primary edit_btn" href="#" onclick="picture_modal(this)">編輯</a>
								<form method="POST" action="/pictures/{{$picture->id}}" class="d-inline">
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
	</div>
	@endif
</div>
<!--modal-->
@if(isset($product))
<div id="group" class="modal" tabindex="-1" role="dialog">
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
		  <input name="product_id" value="{{ $product->id}}" hidden>
		  <div class="form-group">
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
<div id="software" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">新增下載-驅動程式</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <form action="{{ url('softwares') }}" enctype="multipart/form-data" method="post">
	  @method('PUT')
	  <div class="modal-body">
	  <input name="product_id" value="{{ $product->id}}" hidden>
		  <div class="form-group">
			<label for="exampleInputEmail1">文件類型</label>
			<select class="form-control" name="type" required>
				<option value="1">驅動程式</option>
				<option value="2">應用軟體</option>
			</select>
		  </div>
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
<div id="accessory" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">新增配件</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <form action="{{ url('accessories') }}" enctype="multipart/form-data" method="post">
	  @method('PUT')
	  <div class="modal-body">
		<input name="product_id" value="{{ $product->id}}" hidden>
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
<div id="faq" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">新增常見問答</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <form action="{{ url('faqs') }}" enctype="multipart/form-data" method="post">
	  @method('PUT')
	  <div class="modal-body">
	  <input name="product_id" value="{{ $product->id}}" hidden>

		  <div class="form-group">
			<label for="exampleInputEmail1">分類</label>
			<select class="form-control" name="type">
				<option value="1">硬體常見問題</option>
				<option value="2">軟體常見問題</option>
				<option value="3">操作指南</option>
			</select>
		  </div>
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
<div id="picture" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">新增其他產品圖片</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <form action="{{ url('pictures') }}" enctype="multipart/form-data" method="post">
	  @method('PUT')
	  <div class="modal-body">
		<input name="product_id" value="{{ $product->id}}" hidden>
		  <div class="form-group">
			<label for="exampleInputEmail1">類別</label>
			<select class="form-control" name="type">
				<option value="1">連結</option>
				<option value="2">檔案</option>
			</select>
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">說明</label>
			<input type="text" class="form-control" name="description" aria-describedby="emailHelp" placeholder="說明" required>
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">連結</label>
			<input type="text" class="form-control" name="path" aria-describedby="emailHelp" placeholder="連結" required>
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
<div id="picture_sort_modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">其他圖片排序</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <form action="{{ url('pictures') }}" enctype="multipart/form-data" method="post">
	  <div class="modal-body">
		  <ul class="sortable">
				@foreach($product->pictures->sortBy('order') as $picture)
					<li class="btn btn-primary add-btn mt-2" style="display: block;float: none;">{{ $picture->description }}
						<input name="order[]" value="{{ $picture->id }}" hidden>
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
<div id="download_sort_modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">手冊排序</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <form action="{{ url('downloads') }}" enctype="multipart/form-data" method="post">
	  <div class="modal-body">
		  <ul class="sortable">
				@foreach($product->downloads->sortBy('order') as $download)
					<li class="btn btn-primary add-btn mt-2" style="display: block;float: none;">{{ $download->title }}
						<input name="order[]" value="{{ $download->id }}" hidden>
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
<div id="software_sort_modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">軟體程式排序</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <form action="{{ url('softwares') }}" enctype="multipart/form-data" method="post">
	  <div class="modal-body">
		  <ul class="sortable">
				@foreach($product->softwares->sortBy('order') as $software)
					<li class="btn btn-primary add-btn mt-2" style="display: block;float: none;">{{ $software->title }}
						<input name="order[]" value="{{ $software->id }}" hidden>
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
<div id="accessory_sort_modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">配件排序</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <form action="{{ url('accessories') }}" enctype="multipart/form-data" method="post">
	  <div class="modal-body">
		  <ul class="sortable">
				@foreach($product->accessories->sortBy('order') as $accessory)
					<li class="btn btn-primary add-btn mt-2" style="display: block;float: none;">{{ $accessory->title }}
						<input name="order[]" value="{{ $accessory->id }}" hidden>
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
<div id="faq_sort_modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">常見問答排序</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <form action="{{ url('faqs') }}" enctype="multipart/form-data" method="post">
	  <div class="modal-body">
		  <ul class="sortable">
				@foreach($product->faqs->sortBy('order') as $faq)
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
@endif
@endsection

@section('script')
@parent
<script>
ClassicEditor
        .create( document.querySelector( "#product_form  [name='characteristic']") )
        .catch( error => {
            console.error( error );
        } );
@if(isset($is_type))
	var is_type = {!! json_encode($is_type) !!};
	$("#product_form [name='type_id'][value='"+is_type+"']").prop("checked",true);
@endif
@if(isset($product))
	@if(session('tab'))
		$("#{{session('tab')}}").click();
	@endif

	$(".sortable").sortable();
	var product = {!! json_encode($product) !!};
	var product_specs = {!! json_encode($product_specs) !!};

	//console.log(product.title);
	$("#product_form [name='title']").val(product.title);
	$("#product_form [name='slogan']").val(product.slogan);
	//$("#product_form [name='type_id']").val(product.type_id);
	$("#product_form [name='type_id'][value='"+product.type_id+"']").prop("checked",true);
	//$("[name='picture']").val(product.picture);
	//$("#product_form  [name='flag']").val(product.flag);
	$("#product_form [name='flag'][value='"+product.flag+"']").prop("checked",true);
	$("#product_form  [name='characteristic']").val(product.characteristic);
	$("#product_form  [name='characteristic_1']").val(product.characteristic_1);
	$("#product_form  [name='characteristic_2']").val(product.characteristic_2);
	$("#product_form  [name='characteristic_3']").val(product.characteristic_3);
	$("#product_form  [name='description']").val(product.description);
	$("#product_form  [name='spec[]']").val(product.spec);
	$("#product_form  [name='software[]']").val(product.software);
	$("#product_form  [name='cert[]']").val(product.cert);
	$("#product_form  [name='filter[]']").val(product.filter);
	$("#product_form  [name='status']").val(product.status);
	//$("[name='picture']").val(product.picture);

	/*
	$("[name='gender']").filter('[value='+user.gender+']').prop('checked', true);
	$("[name='city_id']").val(teacher.city_id);
	$("[name='school_id']").val(teacher.school_id);
	$("[name='grade']").val(teacher.grade);
	$("[name='classroom']").val(teacher.classroom);
	$("[name='account']").val(user.account);
	$("[name='password']").val(user.password);
	$("#teacher_password_again").val(user.password);
	$("[name='number_of_class']").val(teacher.number_of_class);
	*/
	for(x in product_specs){
		$("[name='spec["+x+"]']").val(product_specs[x]);
	}


	function download_modal(obj){
		if(obj == 'create'){
			$("#group [name='_method']").val('POST');
			$("#group form").attr('action',"{{ url('downloads') }}");
			$("#group .modal-title").text('新增下載');
		}else{
			$("#group [name='_method']").val('PUT');
			$("#group [name='type']").val($(obj).closest('tr').find('td:eq(0)').data('val'));
			$("#group [name='title']").val($(obj).closest('tr').find('td:eq(1)').text());
			$("#group [name='lang']").val($(obj).closest('tr').find('td:eq(3)').text());
			$("#group form").attr('action',"{{ url('downloads') }}/"+$(obj).closest('tr').data('id'));
			$("#group .modal-title").text('編輯下載');
		}
		$("#group").modal('show');
	}

	function software_modal(obj){
		if(obj == 'create'){
			$("#software [name='_method']").val('POST');
			$("#software form").attr('action',"{{ url('softwares') }}");
			$("#software .modal-title").text('新增下載-驅動程式');
		}else{
			$("#software [name='_method']").val('PUT');
			$("#software [name='type']").val($(obj).closest('tr').find('td:eq(0)').data('val'));
			$("#software [name='title']").val($(obj).closest('tr').find('td:eq(1)').text());
			$("#software [name='version']").val($(obj).closest('tr').find('td:eq(2)').text());
			$("#software [name='compatibility']").val($(obj).closest('tr').find('td:eq(3)').text());
			$("#software [name='sha1']").val($(obj).closest('tr').find('td:eq(4)').text());
			$("#software form").attr('action',"{{ url('softwares') }}/"+$(obj).closest('tr').data('id'));
			$("#software .modal-title").text('修改下載-驅動程式');
		}
		$("#software").modal('show');
	}

	function accessory_modal(obj){
		if(obj == 'create'){
			$("#accessory [name='_method']").val('POST');
			$("#accessory form").attr('action',"{{ url('accessories') }}");
			$("#accessory .modal-title").text('新增配件');
		}else{
			$("#accessory [name='_method']").val('PUT');
			//$("#accessory [name='type']").val($(obj).closest('tr').find('td:eq(0)').data('val'));
			$("#accessory [name='title']").val($(obj).closest('tr').find('td:eq(0)').text());
			$("#accessory [name='description']").val($(obj).closest('tr').find('td:eq(1)').text());
			$("#accessory [name='url']").val($(obj).closest('tr').find('td:eq(3)').text());
			//$("#accessory [name='sha1']").val($(obj).closest('tr').find('td:eq(4)').text());
			$("#accessory form").attr('action',"{{ url('accessories') }}/"+$(obj).closest('tr').data('id'));
			$("#accessory .modal-title").text('修改配件');
		}
		$("#accessory").modal('show');
	}

	function faq_modal(obj){
		if(obj == 'create'){
			$("#faq [name='_method']").val('POST');
			$("#faq form").attr('action',"{{ url('faqs') }}");
			$("#faq .modal-title").text('新增常見問答');
		}else{
			$("#faq [name='_method']").val('PUT');
			$("#faq [name='type']").val($(obj).closest('tr').find('td:eq(0)').data('val'));
			$("#faq [name='title']").val($(obj).closest('tr').find('td:eq(1)').text());
			$("#faq [name='description']").val($(obj).closest('tr').find('td:eq(2)').text());
			//$("#faq [name='url']").val($(obj).closest('tr').find('td:eq(3)').text());
			$("#faq form").attr('action',"{{ url('faqs') }}/"+$(obj).closest('tr').data('id'));
			$("#faq .modal-title").text('編輯常見問答');
		}
		$("#faq").modal('show');
	}

	function picture_modal(obj){
		if(obj == 'create'){
			$("#picture [name='_method']").val('POST');
			$("#picture form").attr('action',"{{ url('pictures') }}");
			$("#picture .modal-title").text('新增其他圖片');
		}else{
			$("#picture [name='_method']").val('PUT');
			$("#picture [name='type']").val($(obj).closest('tr').find('td:eq(0)').data('val'));
			$("#picture [name='title']").val($(obj).closest('tr').find('td:eq(1)').text());
			$("#picture [name='description']").val($(obj).closest('tr').find('td:eq(2)').text());
			//$("#faq [name='url']").val($(obj).closest('tr').find('td:eq(3)').text());
			$("#picture form").attr('action',"{{ url('pictures') }}/"+$(obj).closest('tr').data('id'));
			$("#picture .modal-title").text('修改其他圖片');
		}
		$("#picture").modal('show');
	}

	$("#picture [name='type']").change(function(){
		let type_val = $(this).val();
		if(type_val == 1){
			$("#picture [name='path']").attr('type','text');
			$("#picture [name='path']").parent().find('label').text('連結');
		}else{
			$("#picture [name='path']").attr('type','file');
			$("#picture [name='path']").parent().find('label').text('檔案');
		}
	})

@endif
</script>
@endsection
