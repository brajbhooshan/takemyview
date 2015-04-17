//custom validation rule - text only
//validation for login functionallity
$(document).ready(function() 
{

      // Add New sites validation
      $("#acountform").validate
      ({
            rules:
            {
                  "first":{
                  required: true,     
                  minlength:2,
                  maxlength:100
                  },
                  "last":{
                  required: true,     
                  minlength:2,
                  maxlength:40
                  },  
                  "mobile":{
                   required: true,     
                  number: true,
                  minlength:10,
                  maxlength:10
                  },  
                    "alternate":{
					 required: false, 	
                  number: true,
                  minlength:10,
                  maxlength:10
                  }, 
                  email:
                  {
                  required:true,
                  },
                 "address":{
                  required:true,
                  minlength:2,
                  maxlength:40
                  
                  },
                  "residential":{
                  required: true,     
                  minlength:2,
                  maxlength:40
                  },  
                  "street":{
                  required: true,     
                  minlength:2,
                  maxlength:40
                  },
				  "country":{
                  required: true,     
                  minlength:2,
                  maxlength:40
                  },
                  "zip":{
                  number:true,
                  minlength:5,
                  maxlength:9
                  },  
                  "age":{
				number:true,
                  minlength:1,
                
                  },
                   "usertype":{
                  required: true    
                 
                  },     
				   "servicetype":{
                  required: true    
                 
                  },  
 "plan":{
                  required: true    
                 
                  }, 
				  "pccov":{
                  required: true,     
                  minlength:2,
                  maxlength:40
                  },
				  "purdate":{
                  required: true,     
                  minlength:2,
                  maxlength:40
                  },
   				   "description":{
                  required: true,     
                  minlength:2,
                  maxlength:40
                  },
            },
            messages:
            {
                  first:{
                        required: "Please provide a First",
                        minlength: "Your First Name must be at least 2 characters long",
                        maxlength: "Your First Name must be at least less than or equal to 40"
                  },
                  last:{
                        required: "Please provide a Last Name",
                        minlength: "Your Last Name must be at least 2 characters long",
                        maxlength: "Your Last Name must be at least less than or equal to 40"
                  },
                  mobile:{
                        
                        required: "Please provide Phone Number",      
                        number: "Plese provide Number only"
                  },
                    
                  alternate:{
               
                        number: "Plese provide Number only"
                  },
                  
                  address:{
                        required: "Please provide Address",
                        minlength: "Your Address1 must be at least 2 characters long",
                        maxlength: "Your address1 must be at least less than or equal to 40"
                        
                  },
                  residential:{
                        required: "Please provide House Number",
                        minlength: "Your City must be at least 2 characters long",
                        maxlength: "Your City Name must be at least less than or equal to 40"
                  },
                  street:{
                        required: "Please provide State",
                        minlength: "Your State must be at least 2 characters long",
                        maxlength: "Your State Name must be at least less than or equal to 40"
                  },
				  country:{
                        required: "Please provide country",
                        minlength: "Your country must be at least 2 characters long",
                        maxlength: "Your country Name must be at least less than or equal to 40"
                  },
				  zip:{
                  
                        number: "Plese provide Number only"
                  },
                  age:{
                      
                       number: "Plese provide Number only",
					     minlength: "Your age must be at least 1 characters long",
                      
                      
                  },
				  usertype:{
                        required: "Please provide User Type",
                        
                  },
				  servicetype:{
                        required: "Please provide Service Type",
                        
                  },
				  plan:{
                        required: "Please  provide Plan",
                        
                  },
				 pccov:{
                        required: "Please provide PC Covered ",
                        minlength: "Your PC Covered  must be at least 2 characters long",
                        maxlength: "Your PC Covered  Name must be at least less than or equal to 40"
                  },
				   purdate:{
                        required: "Please provide Purchase Date ",
                        minlength: "Your Purchase Date  must be at least 2 characters long",
                        maxlength: "Your Purchase Date  Name must be at least less than or equal to 40"
                  },
				  purdate:{
                        required: "Please provide Issue description ",
                        minlength: "Your Issue description  must be at least 2 characters long",
                        maxlength: "Your Issue description  Name must be at least less than or equal to 40"
                  },
				  
                  contact:{
                        required: "Please provide Phone Number",      
                        number: "Plese provide Number only"
                  },
                  fax:{
                        required: "Please provide Fax Number",
                        number:     "Plese provide Number only",
                        
                  }
            }
      });      

});

 