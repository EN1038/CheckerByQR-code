@foreach ($major_data as $row)
    <tr>
        <td>{{$row-> major_name}}<br></td>
        <td>{{$row->Agency->Agency_name}}<br></td>
@endforeach