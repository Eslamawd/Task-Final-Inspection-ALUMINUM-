<x-layout>
<form method="POST" action="{{route('finals.store')}}" enctype="multipart/form-data"  class="p-5">
         @csrf
  <div class="m-4 ">
    <label class="form-label text-dark">Customer Name: </label>
    <input type="title"  name="customer_name" class="form-control">
  </div>
  <div class="m-4">
    <label class="form-label text-dark">Project:</label>
    <input type="title" name="project" class="form-control" >
  </div>
  <div class="m-4">
    <label  class="form-label text-dark">Quality Inspector:</label>
    <input type="title"  name="quality_inspector" class="form-control" >
  </div>
 
 

 
 
  <button type="submit" class="btn btn-primary">Submit</button>


</form>
</x-layout>