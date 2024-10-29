<x-layout>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Project</th>
      <th scope="col">Quality Inspector </th>
    </tr>
  </thead>
  <tbody>
    @foreach ($finals as $final )
    <tr>
      <th scope="row">{{$final->id}}</th>
      <td>{{ $final->customer_name }}</td>
      <td>{{ $final->project }}</td>
      <td>{{ $final->quality_inspector }}</td>
      
      <td>
      <button type="button" class="btn btn-dark">
        <a href="{{ route('finals.show', $final) }}"> Show </a>
        </button></td>

    </tr>
    @endforeach
   

  </tbody>
</table>
</x-layout>
