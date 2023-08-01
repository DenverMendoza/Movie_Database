<table border=1>
   <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Birthday</th>
      <th>Email</th>
   </tr>
@foreach ($emp as $item)
   <tr>
      <td>{{$item['id']}}</td>
      <td>{{ $item['first_name'] ." ". $item['last_name']}}</td>
      <td>{{ $item['birthday'] }}</td>
      <td>{{ $item['address'] }}</td>
   </tr>
@endforeach  

</table>