<!doctype html>
<html lang="zh-TW">
  <head>
    <!-- Required meta tags -->
	<meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/backend.css') }}">
	<link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">

    <title>產品</title>
  </head>
  <style>
  
  </style>
  <body>
	<div class="d-flex" id="wrapper">
	<?php
		$sidebar_active = array_fill(1, 20, '');
		//$sidebar_active[] = '';
		switch (Request::fullUrl()) {
		  case url('products?type=1'):
		  case url('products/create?type=1'):
			$sidebar_active[11] = 'sidebar-active';
			break;
		case url('products?type=2'):
		case url('products/create?type=2'):
			$sidebar_active[12] = 'sidebar-active';
			break;
		case url('products?type=3'):
		  case url('products/create?type=3'):
			$sidebar_active[13] = 'sidebar-active';
			break;
		case url('products?type=4'):
		case url('products/create?type=4'):
			$sidebar_active[14] = 'sidebar-active';
			break;
		case url('products?type=5'):
		  case url('products/create?type=5'):
			$sidebar_active[15] = 'sidebar-active';
			break;
		case url('products?type=6'):
		case url('products/create?type=6'):
			$sidebar_active[16] = 'sidebar-active';
			break;
		case url('products?type=7'):
		  case url('products/create?type=7'):
			$sidebar_active[17] = 'sidebar-active';
			break;
		case url('products?type=8'):
		case url('products/create?type=8'):
			$sidebar_active[18] = 'sidebar-active';
			break;
		  case url('groups?type=1'):
			$sidebar_active[2] = 'sidebar-active';
			break;
		case url('groups?type=2'):
			$sidebar_active[3] = 'sidebar-active';
			break;
		case url('logos?type=1'):
			$sidebar_active[4] = 'sidebar-active';
			break;
		case url('logos?type=2'):
			$sidebar_active[5] = 'sidebar-active';
			break;
		case url('logos?type=3'):
			$sidebar_active[6] = 'sidebar-active';
			break;
		case url('filters'):
			$sidebar_active[7] = 'sidebar-active';
			break;
		}
	?>
    <!-- Sidebar -->
    <!--div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><img src="{{ asset('images/logo.png') }}" alt=""></div>
      <div class="list-group list-group-flush">
        <a href="{{ url('products?type=1') }}" class="list-group-item list-group-item-action bg-light {{ $sidebar_active[1] }}">產品(掃描器)</a>
		<a href="{{ url('products?type=2') }}" class="list-group-item list-group-item-action bg-light {{ $sidebar_active[8] }}">產品(印表機)</a>
        <a href="{{ url('groups?type=1') }}" class="list-group-item list-group-item-action bg-light {{ $sidebar_active[2] }}">產品規格(掃描器)</a>
		<a href="{{ url('groups?type=2') }}" class="list-group-item list-group-item-action bg-light {{ $sidebar_active[3] }}">產品規格(印表機)</a>
		<a href="{{ url('logos?type=1') }}" class="list-group-item list-group-item-action bg-light {{ $sidebar_active[4] }}">機台規格</a>
		<a href="{{ url('logos?type=2') }}" class="list-group-item list-group-item-action bg-light {{ $sidebar_active[5] }}">附贈軟體</a>
		<a href="{{ url('logos?type=3') }}" class="list-group-item list-group-item-action bg-light {{ $sidebar_active[6] }}">認證標章</a>
		<a href="{{ url('filters') }}" class="list-group-item list-group-item-action bg-light {{ $sidebar_active[7] }}">篩選</a>
      </div>
    </div-->
    <!-- /#sidebar-wrapper -->
	<!-- 191030修正 -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><img src="{{ asset('images/logo.png') }}" alt=""></div>
      <div class="list-group list-group-flush">
      	<div class="menu-group">
	      	<h5 class="menu_title">產品維護</h5>
	      	<button class="dropdown-btn list-group-item list-group-item-action bg-light">印表機<i class="fa fa-caret-down"></i></button>
	        <div class="dropdown-container">
		        <a class="dropdown-item {{ $sidebar_active[17] }}" href="{{ url('products?type=7') }}">印表機</a>
			    <a class="dropdown-item {{ $sidebar_active[18] }}" href="{{ url('products?type=8') }}">多功能事務機</a>
	        </div>
	        <button class="dropdown-btn list-group-item list-group-item-action bg-light">掃描器<i class="fa fa-caret-down"></i></button>
	        <div class="dropdown-container">
		        <a class="dropdown-item {{ $sidebar_active[11] }}" href="{{ url('products?type=1') }}">文件掃描</a>
			    <a class="dropdown-item {{ $sidebar_active[12] }}" href="{{ url('products?type=2') }}">平台掃描</a>
			    <a class="dropdown-item {{ $sidebar_active[13] }}" href="{{ url('products?type=3') }}">智慧可攜帶式掃描</a>
			    <a class="dropdown-item {{ $sidebar_active[14] }}" href="{{ url('products?type=4') }}">文件直通車</a>
			    <a class="dropdown-item {{ $sidebar_active[15] }}" href="{{ url('products?type=5') }}">多功能掃描</a>
			    <a class="dropdown-item {{ $sidebar_active[16] }}" href="{{ url('products?type=6') }}">生產級掃描</a>
	        </div>
	    </div>
	    <div class="menu-group">
	    	<h5 class="menu_title">規格維護</h5>
			<a href="{{ url('groups?type=2') }}" class="list-group-item list-group-item-action bg-light {{ $sidebar_active[1] }}">印表機</a>
	    	<a href="{{ url('groups?type=1') }}" class="list-group-item list-group-item-action bg-light {{ $sidebar_active[8] }}">掃描器</a>
	    </div>

	    <div class="menu-group">
	    	<h5 class="menu_title">Logo維護</h5>
			<a href="{{ url('logos?type=1') }}" class="list-group-item list-group-item-action bg-light {{ $sidebar_active[4] }}">機台規格</a>
			<a href="{{ url('logos?type=2') }}" class="list-group-item list-group-item-action bg-light {{ $sidebar_active[5] }}">附贈軟體</a>
			<a href="{{ url('logos?type=3') }}" class="list-group-item list-group-item-action bg-light {{ $sidebar_active[6] }}">認證標章</a>
	    </div>

	    <div class="menu-group">
	    	<h5 class="menu_title">篩選條件維護</h5>
			<a href="{{ url('filters') }}" class="list-group-item list-group-item-action bg-light {{ $sidebar_active[7] }}">產品側欄篩選</a>
	    </div>
      </div>
    </div>
    <!-- 191030修正結束 -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
		 @yield('content')
      </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
  @section('script')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
  <script>
	var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
	$("table form").submit(function(){
		if(confirm('確認刪除？')){
		}else{
			return false;
		}
	});
  </script>
	@show
  </body>
</html>