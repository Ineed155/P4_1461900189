<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  padding: 5px;
}
table {
  border-spacing: 15px;
}
</style>
</head>
<body>

<h2>data tanpa join</h2>
<p>data pada xls telah berlaku join</p>
<a href="{{route('exportbuku')}}" class="btn btn-success" >Export</a>

<table style="width:100%">
  <tr>
    <th>Judul</th>
    <th>Tahun</th> 
    <th>ID</th>
  </tr>
  @foreach($buku as $item)
    <tr>
    <td>{{$item->judul}}</td>
    <td>{{$item->tahun_terbit}}</td>
    <td>{{$item->id}}</td>
    <td></td>
    </tr>
  @endforeach
</table>


</body>
</html>