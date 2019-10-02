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
<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-product" role="tab" aria-controls="pills-home" aria-selected="true">產品資訊</a>
</li>
<li class="nav-item">
<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-download" role="tab" aria-controls="pills-profile" aria-selected="false">下載</a>
</li>
<li class="nav-item">
<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-acc" role="tab" aria-controls="pills-contact" aria-selected="false">配件</a>
</li>
<li class="nav-item">
<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-qa" role="tab" aria-controls="pills-contact" aria-selected="false">常見問答</a>
</li>
</ul>
<div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade show active" id="pills-product" role="tabpanel" aria-labelledby="pills-home-tab">
<!--Info-->
<div class="row">
<div class="col-12">
<form action="{{ url('products') }}" method="post">
  <div class="form-group">
	<label for="exampleInputEmail1">產品名稱</label>
	<input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="產品名稱" required>
  </div>
  <div class="form-group">
	<label for="exampleInputEmail1">產品型號</label>
	<input type="text" class="form-control" name="model" aria-describedby="emailHelp" placeholder="產品型號" required>
  </div>
  <div class="form-group">
	<label for="exampleFormControlSelect2">產品類別</label>
	<select class="form-control" name="type_id" required>
	  <option value="1">印表機</option>
	  <option value="2">掃描器</option>
	</select>
  </div>
  <div class="form-group">
	<label for="exampleInputEmail1">產品精選圖片</label>
	<input type="file" class="form-control" name="picture" aria-describedby="emailHelp" placeholder="產品精選圖片" required>
  </div>
  <div class="form-group">
	<label for="exampleFormControlSelect2">Flag</label>
	<select class="form-control" name="flag" required>
	  <option value="1">無</option>
	  <option value="2">新產品</option>
	  <option value="3">發燒產品</option>
	</select>
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
	<label for="exampleInputEmail1">產品簡介</label>
	<textarea type="email" class="form-control" name="description" aria-describedby="emailHelp" placeholder="產品簡介" required></textarea>
  </div>
  
  
  
  
  <div class="form-group">
	<label for="exampleInputEmail1">機台規格</label>
	<div>
	<select class="form-control multiselect" name="spec[]" multiple required>
		<option>機台規格1</option>
		<option>機台規格2</option>
	</select>
	</div>
  </div>
  <div class="form-group">
	<label for="exampleInputEmail1">附贈軟體</label>
	<div>
	<select class="form-control multiselect" name="software[]" multiple required>
		<option>附贈軟體1</option>
		<option>附贈軟體2</option>
	</select>
	</div>
  </div>
  <div class="form-group">
	<label for="exampleInputEmail1">認證標章</label>
	<div>
	<select class="form-control multiselect" name="cert[]" multiple required>
		<option>認證標章1</option>
		<option>認證標章2</option>
	</select>
	</div>
  </div>
  <hr class="nature_hr">
  <div class="form-group">
	<label for="exampleFormControlSelect2">總覽篩選</label>
	<select class="form-control" id="exampleFormControlSelect2" name="filter[]" multiple required>
	  <option>顯示</option>
	  <option>不顯示</option>
	</select>
  </div>

  <div class="form-group">
	<label for="exampleFormControlSelect2">產品狀態</label>
	<select class="form-control" name="status" required>
	  <option value="1">顯示</option>
	  <option value="0">不顯示</option>
	</select>
  </div>
  <button type="submit" class="btn btn-primary send_button">送出</button>
</form>
</div>
</div>
<!--Info-->
</div>
<div class="tab-pane fade" id="pills-download" role="tabpanel" aria-labelledby="pills-profile-tab">
<div class="row mt-2">
	<div class="col-12">
		<a class="btn btn-primary add-btn" data-toggle="modal" data-target="#group">新增手冊</a>
		<a class="btn btn-primary add-btn" data-toggle="modal" data-target="#spec">新增軟體程式</a>
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
					<tr>
						<td>用戶手冊</td>
						<td>用戶手冊一</td>
						<td>30MB</td>
						<td>zh-tw</td>
						<td><a class="btn btn-primary edit_btn" href="product-create.html">編輯</a><a class="btn btn-primary delete_btn" href="product-create.html">刪除</a></td>
					</tr>
					<tr>
						<td>型錄</td>
						<td>型錄一</td>
						<td>30MB</td>
						<td>zh-tw</td>
						<td><a class="btn btn-primary edit_btn" href="product-create.html">編輯</a><a class="btn btn-primary delete_btn" href="product-create.html">刪除</a></td>
					</tr>
				</tbody>
			</table>
		  </div>
	</div>
	</div>
</div>
<div class="row mt-2">
	<div class="col-12">
	<div class="card">
		<div class="card-header">軟體程式</div>
		  <div class="card-body">
			<table class="table">
				<thead>
					<th>文件類型</th>
					<th>文件名稱</th>
					<th>版本</th>
					<th>檔案大小</th>
					<th>系統相容性</th>
					<th>檢查碼(sha1)</th>
					<th>編輯</th>
				</thead>
				<tbody>
					<tr>
						<td>驅動程式</td>
						<td>驅動程式一</td>
						<td>版本一</td>
						<td>30MB</td>
						<td>系統相容性一</td>
						<td>檢查碼一</td>
						<td><a class="btn btn-primary edit_btn" href="product-create.html">編輯</a><a class="btn btn-primary delete_btn" href="product-create.html">刪除</a></td>
					</tr>
					<tr>
						<td>驅動程式</td>
						<td>驅動程式一</td>
						<td>版本一</td>
						<td>30MB</td>
						<td>系統相容性一</td>
						<td>檢查碼一</td>
						<td><a class="btn btn-primary edit_btn" href="product-create.html">編輯</a><a class="btn btn-primary delete_btn" href="product-create.html">刪除</a></td>
					</tr>
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
		<a class="btn btn-primary add-btn" data-toggle="modal" data-target="#add-acc">新增配件</a>
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
					<tr>
						<td>配件名稱</td>
						<td>配件說明</td>
						<td>配件圖片</td>
						<td>聯絡我們URL</td>
						<td><a class="btn btn-primary edit_btn" href="product-create.html">編輯</a><a class="btn btn-primary delete_btn" href="product-create.html">刪除</a></td>
					</tr>
					<tr>
						<td>配件名稱</td>
						<td>配件說明</td>
						<td>配件圖片</td>
						<td>聯絡我們URL</td>
						<td><a class="btn btn-primary edit_btn" href="product-create.html">編輯</a><a class="btn btn-primary delete_btn" href="product-create.html">刪除</a></td>
					</tr>
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
		<a class="btn btn-primary add-btn" data-toggle="modal" data-target="#add-qa">新增常見問答</a>
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
					<tr>
						<td>硬體常見問題</td>
						<td>硬體常見問題一</td>
						<td>內容</td>
						<td><a class="btn btn-primary edit_btn" href="product-create.html">編輯</a><a class="btn btn-primary delete_btn" href="product-create.html">刪除</a></td>
					</tr>
					<tr>
						<td>硬體常見問題</td>
						<td>硬體常見問題一</td>
						<td>內容</td>
						<td><a class="btn btn-primary edit_btn" href="product-create.html">編輯</a><a class="btn btn-primary delete_btn" href="product-create.html">刪除</a></td>
					</tr>
				</tbody>
			</table>
		  </div>
	</div>
	</div>
</div>
</div>
</div>
<!--modal-->
<div id="group" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">新增下載</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">
		<form action="create.php" method="post">
		  <div class="form-group">
			<label for="exampleInputEmail1">文件類型</label>
			<select class="form-control" name="">
				<option>用戶手冊</option>
				<option>型錄</option>
				<option>快速指南</option>
			</select>
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">文件名稱</label>
			<input type="text" class="form-control" name="" aria-describedby="emailHelp" placeholder="文件名稱">
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">文件語系</label>
			<input type="text" class="form-control" name="" aria-describedby="emailHelp" placeholder="文件語系">
		  </div>
		  </form>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-secondary cancel_btn" data-dismiss="modal">取消</button>
		<button type="button" class="btn btn-primary add-btn">儲存</button>
	  </div>
	</div>
  </div>
</div>
<!--modal-->
<!--modal-->
<div id="spec" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">新增下載-驅動程式</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">
		<form action="create.php" method="post">
		  <div class="form-group">
			<label for="exampleInputEmail1">文件類型</label>
			<select class="form-control" name="">
				<option>驅動程式</option>
				<option>應用軟體</option>
			</select>
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">文件名稱</label>
			<input type="text" class="form-control" name="" aria-describedby="emailHelp" placeholder="文件名稱">
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">版本</label>
			<input type="text" class="form-control" name="" aria-describedby="emailHelp" placeholder="版本">
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">系統相容性</label>
			<input type="text" class="form-control" name="" aria-describedby="emailHelp" placeholder="系統相容性">
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">檢查碼(sha1)	</label>
			<input type="text" class="form-control" name="" aria-describedby="emailHelp" placeholder="檢查碼(sha1)	">
		  </div>
		  </form>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-secondary cancel_btn" data-dismiss="modal">取消</button>
		<button type="button" class="btn btn-primary add-btn">儲存</button>
	  </div>
	</div>
  </div>
</div>
<!--modal-->
<!--modal-->
<div id="add-acc" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">新增配件</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">
		<form action="create.php" method="post">
		  <div class="form-group">
			<label for="exampleInputEmail1">配件名稱</label>
			<input type="text" class="form-control" name="" aria-describedby="emailHelp" placeholder="配件名稱">
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">配件說明</label>
			<input type="text" class="form-control" name="" aria-describedby="emailHelp" placeholder="配件說明">
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">配件圖片</label>
			<input type="file" class="form-control" name="" aria-describedby="emailHelp">
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">連絡我們</label>
			<input type="text" class="form-control" name="" aria-describedby="emailHelp" placeholder="url">
		  </div>
		  </form>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-secondary cancel_btn" data-dismiss="modal">取消</button>
		<button type="button" class="btn btn-primary add-btn">儲存</button>
	  </div>
	</div>
  </div>
</div>
<!--modal-->
<!--modal-->
<div id="add-qa" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">新增常見問答</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">
		<form action="create.php" method="post">
		  <div class="form-group">
			<label for="exampleInputEmail1">分類</label>
			<select class="form-control" name="">
				<option>硬體常見問題</option>
				<option>軟體常見問題</option>
				<option>操作指南</option>
			</select>
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">題目</label>
			<input type="text" class="form-control" name="" aria-describedby="emailHelp" placeholder="題目">
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">內容</label>
			<textarea class="form-control editor" name="" aria-describedby="emailHelp" placeholder="內容"></textarea>
		  </div>
		  </form>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-secondary cancel_btn" data-dismiss="modal">取消</button>
		<button type="button" class="btn btn-primary add-btn">儲存</button>
	  </div>
	</div>
  </div>
</div>
<!--modal-->
@endsection

@section('script')
@parent
<script>
@if(isset($product))
	var product = {!! json_encode($product) !!};
	console.log(product.title);
	$("[name='title']").val(product.title);
	$("[name='model']").val(product.model);
	$("[name='type_id']").val(product.type_id);
	//$("[name='picture']").val(product.picture);
	$("[name='flag']").val(product.flag);
	$("[name='characteristic_1']").val(product.characteristic_1);
	$("[name='characteristic_2']").val(product.characteristic_2);
	$("[name='characteristic_3']").val(product.characteristic_3);
	$("[name='description']").val(product.description);
	$("[name='spec[]']").val(product.spec);
	$("[name='software[]']").val(product.software);
	$("[name='cert[]']").val(product.cert);
	$("[name='filter[]']").val(product.filter);
	$("[name='status']").val(product.status);
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
	
	for(x in teacher.subject){
		$("[name^='subject']").filter('[value='+teacher.subject[x]+']').prop('checked', true);
	}
	*/
@endif
</script>
@endsection