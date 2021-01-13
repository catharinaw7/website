<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename = excel.xls");
 ?>
 <table>
 	<tr>
 		<th>No</th>
 		<th>Tanggal</th>
 		<th>nama</th>
 		<th>Nominal</th>
 		<th>Keterangan</th>
 		<th>Kategori</th>

 	</tr>
 	@foreach($datas as $no=>$data)
 	 <tr>
 	 	<td>{{$no+1}}</td>
 	 	<td>{{$data->created_at}}</td>
 	 	<td>{{$data->nama}}</td>
 	 	<td>{{$data->nominal}}</td>
 	 	<td>{{$data->keterangan}}</td>
 	 	@foreach($kategoris as $kategori)
 	 	
 	 		@if($data->kategoris_id == $kategori->id)
 	 			<td>{{$kategori->name}}</td>
 	 		@endif
 	 	@endforeach
 	 </tr>
 	 @endforeach
 </table>
</body>
</html>