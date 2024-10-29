<x-layout>

<form method="POST" action="{{route('befores.update', $before)}}" enctype="multipart/form-data"  class="p-5">
         @csrf
         @method('PUT')
<div>
    <label> 1- Face Size::</label>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="face_size" id="flexRadioDefault1 " value="Check">
    <label class="form-check-label" for="flexRadioDefault1">
      Check
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="face_size" id="flexRadioDefault1 " value="Accepted">
    <label class="form-check-label" for="flexRadioDefault1">
     Accepted
    </label>
    
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="face_size" id="flexRadioDefault1 " value="Rejected">
    <label class="form-check-label" for="flexRadioDefault1">
    Rejected
    </label>
    
   
    </div>
 </div>
<div>
    <label> 2- Neck Size::</label>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="neck_size" id="flexRadioDefault1 " value="Check">
    <label class="form-check-label" for="flexRadioDefault1">
      Check
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="neck_size" id="flexRadioDefault1 " value="Accepted">
    <label class="form-check-label" for="flexRadioDefault1">
     Accepted
    </label>
    
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="neck_size" id="flexRadioDefault1 " value="Rejected">
    <label class="form-check-label" for="flexRadioDefault1">
    Rejected
    </label>
    
    </>
    </div>
 </div>
<div>
    <label> 3- Thickness is out of tolerance::</label>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="thickness" id="flexRadioDefault1 " value="Check">
    <label class="form-check-label" for="flexRadioDefault1">
      Check
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="thickness" id="flexRadioDefault1 " value="Accepted">
    <label class="form-check-label" for="flexRadioDefault1">
     Accepted
    </label>
    
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="thickness" id="flexRadioDefault1 " value="Rejected">
    <label class="form-check-label" for="flexRadioDefault1">
    Rejected
    </label>
    
    </>
    </div>
 </div>
<div>
    <label> 4- Angle is out of tolerance::</label>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="angle" id="flexRadioDefault1 " value="Check">
    <label class="form-check-label" for="flexRadioDefault1">
      Check
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="angle" id="flexRadioDefault1 " value="Accepted">
    <label class="form-check-label" for="flexRadioDefault1">
     Accepted
    </label>
    
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="angle" id="flexRadioDefault1 " value="Rejected">
    <label class="form-check-label" for="flexRadioDefault1">
    Rejected
    </label>
    
    </>
    </div>
 </div>
<div>
    <label>5- Joint gap is out of tolerance::</label>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="joint" id="flexRadioDefault1 " value="Check">
    <label class="form-check-label" for="flexRadioDefault1">
      Check
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="joint" id="flexRadioDefault1 " value="Accepted">
    <label class="form-check-label" for="flexRadioDefault1">
     Accepted
    </label>
    
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="joint" id="flexRadioDefault1 " value="Rejected">
    <label class="form-check-label" for="flexRadioDefault1">
    Rejected
    </label>
    
    </>
    </div>
 </div>
<div>
    <label> 6- Deformed	::</label>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="deformed" id="flexRadioDefault1 " value="Check">
    <label class="form-check-label" for="flexRadioDefault1">
      Check
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="deformed" id="flexRadioDefault1 " value="Accepted">
    <label class="form-check-label" for="flexRadioDefault1">
     Accepted
    </label>
    
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="deformed" id="flexRadioDefault1 " value="Rejected">
    <label class="form-check-label" for="flexRadioDefault1">
    Rejected
    </label>
    
    </>
    </div>
 </div>
<div>
    <label> 7- Surface scratches::</label>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="surface" id="flexRadioDefault1 " value="Check">
    <label class="form-check-label" for="flexRadioDefault1">
      Check
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="surface" id="flexRadioDefault1 " value="Accepted">
    <label class="form-check-label" for="flexRadioDefault1">
     Accepted
    </label>
    
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="surface" id="flexRadioDefault1 " value="Rejected">
    <label class="form-check-label" for="flexRadioDefault1">
    Rejected
    </label>
    
    </>
    </div>
 </div>
<div>
    <label> 8- Bad finish ::</label>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="bad" id="flexRadioDefault1 " value="Check">
    <label class="form-check-label" for="flexRadioDefault1">
      Check
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="bad" id="flexRadioDefault1 " value="Accepted">
    <label class="form-check-label" for="flexRadioDefault1">
     Accepted
    </label>
    
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="bad" id="flexRadioDefault1 " value="Rejected">
    <label class="form-check-label" for="flexRadioDefault1">
    Rejected
    </label>
    
    </>
    </div>
 </div>

<button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
