<!DOCTYPE html>
<html>
<head>
	<title>Html Dom Laravel</title>
</head>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<body>
<table class="table table-bordered">
	@php 
		$html = new \Htmldom('https://www.minhngoc.net.vn/ket-qua-xo-so/mien-nam.html');
		$tinh = $html->find("td.tinh a");
		$giai8 = $html->find("td.gia8 div.giaiSo",0);
		$province = [];
		foreach ($tinh as $key => $value) {
			
			$value = $value->innertext ;
			$array = array($value);
			foreach ($array as $key => $val) {
				$province[] = $val;
			}
		}
		dd($province);
	@endphp
</table>
</body>
</html>