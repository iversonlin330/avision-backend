<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/style.css">
	<title>Avision｜產品比較結果</title>
</head>

<body>
{!! get_header() !!}
	<!--選取的產品區-->
	<div class="container-fluid section_product_compare">
		<div class="row">
			<div class="col-md-12 mx-auto">
				<p class="page_title text-left">比較結果</p>
				<hr>
				<p class="bread" style="margin:20px 0;">< BACK </p>
			</div>
		</div>
		<div id="sticky-anchor"></div>
		<div class="row" style="padding: 0 15px;" id="product_sticky">
            @foreach($products as $product)
                <div class="col-md-4 col-sm-4 col-6 p-0">
                    <div class="compare_box ">
                        <img src="{{ asset('storage/'.$product->picture) }}" alt="">
                        <p>{{ $product->title }}</p>
                    </div>
                </div>
            @php
                $spec_arrays[] = $product->product_specs->pluck('value','spec_id')->toArray();
            @endphp
            @endforeach
			<!--div class="col-md-4 col-sm-4 col-6 p-0">
				<div class="compare_box ">
					<img src="images/all_product_01.png" alt="">
					<p>IS15</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-6 p-0">
				<div class="compare_box ">
					<img src="images/all_product_01.png" alt="">
					<p>行動CoCo棒 2 Wi-Fi 專業版(掃描器+專用底座)</p>
				</div>
			</div>
			<div class="ccol-md-4 col-sm-4 col-6 p-0 compare_none">
				<div class="compare_box ">
					<img src="images/all_product_01.png" alt="">
					<p>行動CoCo棒</p>
				</div>
			</div-->
		</div>
		<div class="row" style="padding: 0 15px;">
			<div class="col-md-12">
				<!--start-->
				<div class="accordion" id="accordionExample">
					@foreach($groups as $group)
                        <div class="card">
                            <div class="card-header table-header" id="headingOne">
                                <span class="table-title">{{ $group->title }}</span>
                                <div class="float-right d-inline" data-toggle="collapse" data-target="#collapse{{ $group->id }}"
                                     aria-expanded="true" aria-controls="collapseOne">
                                    <img class="up" src="/images/icon_up.png">
                                    <img class="down" src="/images/icon_down.png">
                                </div>
                            </div>
                            <div id="collapse{{ $group->id }}" class="collapse show" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <table class="table table-borderless compare_table" >
                                        @foreach($group->specs as $spec)
                                            <tbody>
                                            <tr>
                                                @foreach($spec_arrays as $spec_array)
                                                    <td><p class="{{ ($loop->last)? "compare_none" : ""}}">{{ ($loop->first)? $spec->title : " "}}</p>{{ array_key_exists($spec->id,$spec_array)? $spec_array[$spec->id] : "" }}</td>
                                                @endforeach
                                                <!--td><p>{{ $spec->title }}</p>CIS接觸式影像感應器</td>
                                                <td><p>&nbsp;</p>CIS接觸式影像感應器</td>
                                                <td class="compare_none"><p>&nbsp;</p>CIS接觸式影像感應器</td-->
                                            </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endforeach
				</div>
				<!--end-->
			</div>
		</div>
	</div>
{!! get_footer() !!}







	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
		<script>
		$('.down').hide();
		$(".compare").hide();
		var json_str = localStorage.getItem("product-compare");

		if (JSON.parse(json_str)) {

			var arr = JSON.parse(json_str);
			for (x in arr) {
				$("#product_" + arr[x]).prop('checked', true);
				$(".compare_list").append("<img src='images/all_product_0" + arr[x] + ".png'>");
			}
			if (arr.length > 0) {
				$(".compare").show();
			}
		}

		$(".add-compare").click(function () {
			$(".compare").show();
			var json_str = localStorage.getItem("product-compare");
			if (JSON.parse(json_str)) {
				var arr = JSON.parse(json_str);
			} else {
				var arr = [];
			}

			if (arr.indexOf($(this).val()) > -1) {
				arr.splice(arr.indexOf($(this).val()), 1);
			} else {
				arr.push($(this).val());
			}

			//var json_str = JSON.stringify(arr);
			localStorage.setItem("product-compare", JSON.stringify(arr));
			$(".compare_list").empty();
			for (x in arr) {
				$(".compare_list").append("<img src='images/all_product_0" + arr[x] + ".png'>");
			}

		});
		$(".compare_close").click(function () {
			$(".compare").hide();
			localStorage.setItem("product-compare", JSON.stringify([]));
		});

		$('[data-toggle="collapse"]').click(function () {
			if ($(this).attr('aria-expanded') == 'true') {
				$(this).find('.down').show();
				$(this).find('.up').hide();
				$(this).closest('.table-header').addClass('active');
			} else {
				$(this).find('.down').hide();
				$(this).find('.up').show();
				$(this).closest('.table-header').removeClass('active');
			}
		});
	</script>
	<script>
		function sticky_relocate() {
				var window_top = $(window).scrollTop();
				var div_top = $('#sticky-anchor').offset().top;
				if (window_top > div_top) {
					$('#product_sticky').addClass('stick');
				} else {
					$('#product_sticky').removeClass('stick');
				}
			}

			$(function () {
				$(window).scroll(sticky_relocate);
				sticky_relocate();
			});
	</script>
</body>

</html>
