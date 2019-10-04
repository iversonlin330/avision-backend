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

    <title>產品</title>
  </head>
  <style>
  
  </style>
  <body>
	<div class="d-flex" id="wrapper">
	<?php
		$sidebar_active = array_fill(1, 7, '');
		//$sidebar_active[] = '';
		switch (Request::fullUrl()) {
		  case url('products'):
		  case url('products/create'):
			$sidebar_active[1] = 'sidebar-active';
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
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><img src="{{ asset('images/logo.png') }}" alt=""></div>
      <div class="list-group list-group-flush">
        <a href="{{ url('products') }}"           class="list-group-item list-group-item-action bg-light {{ $sidebar_active[1] }}">產品</a>
        <a href="{{ url('groups?type=1') }}" class="list-group-item list-group-item-action bg-light {{ $sidebar_active[2] }}">產品規格(印表機)</a>
		<a href="{{ url('groups?type=2') }}" class="list-group-item list-group-item-action bg-light {{ $sidebar_active[3] }}">產品規格(掃描器)</a>
		<a href="{{ url('logos?type=1') }}"   class="list-group-item list-group-item-action bg-light {{ $sidebar_active[4] }}">機台規格</a>
		<a href="{{ url('logos?type=2') }}"   class="list-group-item list-group-item-action bg-light {{ $sidebar_active[5] }}">附贈軟體</a>
		<a href="{{ url('logos?type=3') }}"   class="list-group-item list-group-item-action bg-light {{ $sidebar_active[6] }}">認證標章</a>
		<a href="{{ url('filters') }}"                class="list-group-item list-group-item-action bg-light {{ $sidebar_active[7] }}">篩選</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

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
	@show
  </body>
</html>