<x-layout>

<form method="POST" action="{{route('afters.update', $after)}}" enctype="multipart/form-data"  class="p-5">
         @csrf
         @method('PUT')
<div>
    <label> 1- Bad sealing::</label>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="bad_sealing" id="flexRadioDefault1 " value="Check">
    <label class="form-check-label" for="flexRadioDefault1">
      Check
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="bad_sealing" id="flexRadioDefault1 " value="Accepted">
    <label class="form-check-label" for="flexRadioDefault1">
     Accepted
    </label>
    
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="bad_sealing" id="flexRadioDefault1 " value="Rejected">
    <label class="form-check-label" for="flexRadioDefault1">
    Rejected
    </label>
    
   
    </div>
 </div>
<div>
    <label> 2- Bad Paint   ::</label>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="bad_paint" id="flexRadioDefault1 " value="Check">
    <label class="form-check-label" for="flexRadioDefault1">
      Check
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="bad_paint" id="flexRadioDefault1 " value="Accepted">
    <label class="form-check-label" for="flexRadioDefault1">
     Accepted
    </label>
    
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="bad_paint" id="flexRadioDefault1 " value="Rejected">
    <label class="form-check-label" for="flexRadioDefault1">
    Rejected
    </label>
    
    </>
    </div>
 </div>
<div>
    <label> 3- Bad fabrication  ::</label>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="bad_fabrication" id="flexRadioDefault1 " value="Check">
    <label class="form-check-label" for="flexRadioDefault1">
      Check
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="bad_fabrication" id="flexRadioDefault1 " value="Accepted">
    <label class="form-check-label" for="flexRadioDefault1">
     Accepted
    </label>
    
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="bad_fabrication" id="flexRadioDefault1 " value="Rejected">
    <label class="form-check-label" for="flexRadioDefault1">
    Rejected
    </label>
    
    </>
    </div>
 </div>
<div>
    <label> 4- Color is not matching
    approved sample ::</label>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="color" id="flexRadioDefault1 " value="Check">
    <label class="form-check-label" for="flexRadioDefault1">
      Check
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="color" id="flexRadioDefault1 " value="Accepted">
    <label class="form-check-label" for="flexRadioDefault1">
     Accepted
    </label>
    
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="color" id="flexRadioDefault1 " value="Rejected">
    <label class="form-check-label" for="flexRadioDefault1">
    Rejected
    </label>
    
    </>
    </div>
 </div>
<div>
    <label> 5- Coating thickness 
    is not as per standard ::</label>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="coating" id="flexRadioDefault1 " value="Check">
    <label class="form-check-label" for="flexRadioDefault1">
      Check
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="coating" id="flexRadioDefault1 " value="Accepted">
    <label class="form-check-label" for="flexRadioDefault1">
     Accepted
    </label>
    
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="coating" id="flexRadioDefault1 " value="Rejected">
    <label class="form-check-label" for="flexRadioDefault1">
    Rejected
    </label>
    
    </>
    </div>
 </div>
<div>
    <label> 6-Bad Packging 	::</label>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="bad_packging" id="flexRadioDefault1 " value="Check">
    <label class="form-check-label" for="flexRadioDefault1">
      Check
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="bad_packging" id="flexRadioDefault1 " value="Accepted">
    <label class="form-check-label" for="flexRadioDefault1">
     Accepted
    </label>
    
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="bad_packging" id="flexRadioDefault1 " value="Rejected">
    <label class="form-check-label" for="flexRadioDefault1">
    Rejected
    </label>
    
    </>
    </div>
 </div>
<div>
    <label> 7- Previous stage::</label>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="previous_stage" id="flexRadioDefault1 " value="Check">
    <label class="form-check-label" for="flexRadioDefault1">
      Check
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="previous_stage" id="flexRadioDefault1 " value="Accepted">
    <label class="form-check-label" for="flexRadioDefault1">
     Accepted
    </label>
    
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="previous_stage" id="flexRadioDefault1 " value="Rejected">
    <label class="form-check-label" for="flexRadioDefault1">
    Rejected
    </label>
    
    </>
    </div>
 </div>
<div>
    <label>  8- Missed or wrong 
    weep hole location ::</label>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="weep_hole" id="flexRadioDefault1 " value="Check">
    <label class="form-check-label" for="flexRadioDefault1">
      Check
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="weep_hole" id="flexRadioDefault1 " value="Accepted">
    <label class="form-check-label" for="flexRadioDefault1">
     Accepted
    </label>
    
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="weep_hole" id="flexRadioDefault1 " value="Rejected">
    <label class="form-check-label" for="flexRadioDefault1">
    Rejected
    </label>
    
    </>
    </div>
 </div>

<button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
