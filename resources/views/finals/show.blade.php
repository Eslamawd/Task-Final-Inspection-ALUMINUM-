<x-layout>
<table class="table">
  <th>
    <tr>
    <th scope="col">Customer Name</th>
    <td scope="col">{{ $final->customer_name }} </td>
    <th scope="col">Project   </th>
    <td scope="col">{{ $final->project }} </td>
    </tr>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Inspection Parameter</th>
      <th scope="col">Status</th>
      
      <th scope="col">Qc Noted   </th>
    </tr>
  
  </thead>
  <tbody>
   <tr>  
    <th scope="col">Before Paint</th>
    </tr>
    
    @foreach ($final->before as $inspection )
    <tr>
      <th >1</th>
      <th scope="row">Face Size </th>
      <td scope="row">{{ $inspection->face_size}} </td>
      <th></th>
      <th> <a href="{{ route('befores.edit', $inspection) }}"> <button type="button" class="btn btn-dark">  Edit Before</button> </a></th>
    </tr>
    <tr>
      <th >2</th>
      <th scope="row">Neck Size </th>
      <td scope="row">{{ $inspection->neck_size}} </td>
    </tr>
    <tr>
      <th >3</th>
      <th scope="row">Thickness is out of tolerance </th>
      <td scope="row">{{ $inspection->thickness}} </td>
    </tr>
    <tr>
      <th >4</th>
      <th scope="row">Angle is out of tolerance </th>
      <td scope="row">{{ $inspection->angle}} </td>
    </tr>
    <tr>
      <th >5</th>
      <th scope="row">Joint gap is out of tolerance </th>
      <td scope="row">{{ $inspection->joint}} </td>
    </tr>
    <tr>
      <th >6</th>
      <th scope="row">Deformed </th>
      <td scope="row">{{ $inspection->deformed}} </td>
    </tr>
    <tr>
      <th >7</th>
      <th scope="row">Surface scratches </th>
      <td scope="row">{{ $inspection->surface}} </td>
    </tr>
    <tr>
      <th >8</th>
      <th scope="row">Bad finish </th>
      <td scope="row">{{ $inspection->bad}} </td>
    </tr>
    @endforeach
  
    <tr>
    <th scope="col">After Paint</th>
    </tr>
    @foreach ($final->after as $inspection )
    <t>
      <th >1</th>
      <th scope="row">Bad sealing </th>
      <td scope="row">{{ $inspection->bad_sealing}} </td>
      <th></th>
      <th> <a href="{{route('afters.edit', $inspection)}}"><button type="button" class="btn btn-dark">Edit After </button></a></th>
    </tr>
    <tr>
      <th >2</th>
      <th scope="row">Bad Paint </th>
      <td scope="row">{{ $inspection->bad_paint}} </td>
    </tr>
    <tr>
      <th >3</th>
      <th scope="row"> Bad fabrication </th>
      <td scope="row">{{ $inspection->bad_fabrication}} </td>
    </tr>
    <tr>
      <th >4</th>
      <th scope="row">Color is not matching approved sample </th>
      <td scope="row">{{ $inspection->color}} </td>
    </tr>
    <tr>
      <th >5</th>
      <th scope="row">Coating thickness 
      is not as per standard </th>
      <td scope="row">{{ $inspection->coating}} </td>
    </tr>
    <tr>
      <th >6</th>
      <th scope="row">Bad Packging</th>
      <td scope="row">{{ $inspection->bad_packging}} </td>
    </tr>
    <tr>
      <th >7</th>
      <th scope="row">pass of previous stage </th>
      <td scope="row">{{ $inspection->previous_stage}} </td>
    </tr>
    <tr>
      <th >8</th>
      <th scope="row">Missed or wrong 
      weep hole location  </th>
      <td scope="row">{{ $inspection->weep_hole}} </td>
    </tr>
    @endforeach

    <tr>  
    <th scope="col"> Approved By:</th>
    </tr>
    <tr>  
    <th scope="col"> Quality Inspector  :-</th>
    <td> {{$final->quality_inspector}}</td>
    </tr>
    
    <tr>  
    <th scope="col"> Date  :-</th>
    <td> {{$final->created_at}}</td>
    </tr>

    <tr>  
    <th scope="col"> </th>
    <th scope="col"> </th>
    <th scope="col"> </th>
    <th scope="col"> </th>
    <th>
    <form action="{{route('finals.destroy', $final)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class=" m-4 btn btn-danger" > Delete</button>
        </form> </th>
   
    
    </tr>
    
  
  

  </tbody>


</table>
</x-layout>
