
<table border=1>
   <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Birthday</th>
      <th>Email</th>
      <th>Image</th>
      <th>Action</th>
   </tr>
@foreach ($emp as $item)
   <tr>
      <td>{{$item['id']}}</td>
      <td>{{ $item['first_name'] ." ". $item['last_name']}}</td>
      <td>{{ $item['birthday'] }}</td>
      <td>{{ $item['address'] }}</td>
      <td><img src="{{ asset('storage/images/' . $item['Image']) }}" alt="" style="height:10vw"></td>
      <td>
         <a href="{{ url('edit') }}/{{$item['id']}}"><button>EDIT</button></a>

      </td>
   </tr>
@endforeach  

</table>