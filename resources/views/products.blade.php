<!DOCTYPE html>
<html>
<body>

    <h1>product page</h1>
    <table>
    @foreach($prods as $data)
    <tr >
      <td style="border: 1px solid black">{{$data->name}}</td>
      <td style="border: 1px solid black">{{$data->price}}</td>
      <td style="border: 1px solid black">{{$data->type}}</td>

    </tr>
@endforeach
</table>


</body>
</html>