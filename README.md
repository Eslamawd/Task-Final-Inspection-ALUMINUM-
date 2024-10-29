

## About Task Final Inspection ALUMINUM 
1-set new laravel Task
2-connect my sql database in Task project
3-create Final Inspection ALUMINUM 

       [ migration Model resource view]
  
      Model [C:\xampp\htdocs\TaskProject\app\Models\Finals.php] 

      Migration [C:\xampp\htdocs\TaskProject\database\migrations/2024_10_28_221951_create_finals_table.php]   

      Controller [C:\xampp\htdocs\TaskProject\app\Http\Controllers\FinalsController.php] 



## Migration => Add all Columns in Table 2024_10_28_221951_create_finals_table.php {
    Customer Name :-	
    Project      :-
}
## Migration => Add all Columns in Table 2024_10_28_221951_create_inspection_before_table.php {
  id
  Quality Inspector      :-
  Signature                     :-
  relateion To finals
  1- Face Size                     : [ Check , Accepted , Rejected ]
  2- Neck Size                     : [ Check , Accepted , Rejected ]
  3- Thickness is out of tolerance : [ Check , Accepted , Rejected ]
  4- Angle is out of tolerance     : [ Check , Accepted , Rejected ]
  5- Joint gap is out of tolerance : [ Check , Accepted , Rejected ]
  6- Deformed		               : [ Check , Accepted , Rejected ]
  7- Surface scratches             : [ Check , Accepted , Rejected ]
  8- Bad finish                    : [ Check , Accepted , Rejected ]

}
## Migration => Add all Columns in Table 2024_10_28_221951_create_inspection_after_table.php {
  id
  Quality Inspector      :-
  Signature                     :-
  relateion To finals
  1- Bad sealing                   : [ Check , Accepted , Rejected ]
  2- Bad Paint                     : [ Check , Accepted , Rejected ]
  3- Bad fabrication               : [ Check , Accepted , Rejected ]
  4- Color is not matching
          approved sample          : [ Check , Accepted , Rejected ]
  5- Coating thickness 
         is not as per standard    : [ Check , Accepted , Rejected ]
  6- Bad Packging 	               : [ Check , Accepted , Rejected ]
       : [ Check , Accepted , Rejected ]

}





## Model => Add all Columns in Table Final {
    Customer Name :-	
    Project      :-
}
## Model => Add all Columns in Table Inspection_before {
 fillable {


  id
  Quality Inspector      
  Signature                     
  relateion To finals
   Face Size                     
   Neck Size                    
  Thickness is out of tolerance 
   Angle is out of tolerance     
   Joint gap is out of tolerance 
   Deformed		               
   Face Size                    
   Face Size   
    }                 

}
## Model => Add all Columns in Table Inspection_after {
    fillable {

  id
  Quality Inspector      :-
  Signature                     :-
  relateion To finals
  1- Bad sealing                   
  2- Bad Paint                     
  3- Bad fabrication               
  4- Color is not matching
          approved sample          
  5- Coating thickness 
         is not as per standard    
  6- Bad Packging 	               
  7- No label, marking or
       pass of previous stage      
  8- Missed or wrong 
         weep hole location      
    }  

}




# Task-Final-Inspection-ALUMINUM-
