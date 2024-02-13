@foreach($fdeals as $fd)
        <tr>
        <td><img src='{{$fd->logo}}' height="30px"/></td>
        <td><a href="{{$fd->c_website}}" target="_blank">{{$fd->company}}</a></td>
        <td>{{$fd->country}} </td>
        <td>{{$fd->funding}}</td>
        <td>{{$fd->funding_type}}</td>
        <td><a href="{{$fd->i_website}}" target="_blank">{{$fd->lead_investor}}</a></td>
        <td>{{$fd->completion_date}}</td>
        </tr>
    @endforeach