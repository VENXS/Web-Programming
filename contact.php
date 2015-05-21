<?php require("includes/head.php");
require("includes/nav.php");

session_start();
?>
		
             <h2> <br> Welcome to our contact page. </h2>
             <p> Do you have a question or enquiry? Just fill out the form below. </p>
               
         <div id="content">
		  <div id="formContact">
		    <form id="contact_form" action="http://titan.csit.rmit.edu.au/~e54061/wp/form-tester.php" method="POST" enctype="multipart/form-data">
			 <div class="rowContact">
               <label for="name">Your name (optional):</label><br />
	           <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
	         </div>
	         <div class="rowContact">
	           <label for="email">Your email:</label><br />
	           <input id="email" class="input" name="email" type="text" value="" size="30" required/><br />
	         </div>
             <div class="rowContact">
               <label for="subjet">Subject:</label><br />
                  <select>
	                <option>General Enquiry</option>
	                <option>Group and Corporate Bookings</option>
 	                <option>Suggestions & Complaints</option>
	              </select>
             <div class="rowContact">
	           <label for="message">Your message:</label><br />
	           <textarea id="message" class="input" name="message" rows="7" cols="30" required/></textarea><br />
	         </div>
	         <input id="submit_button" type="submit" value="Please send now" onclick='alert(Thank you for your message!')" />   
            </form>	
          </div>					
         </div>
	
         <div id=image> <!-- Image sourced from http://www.pinterest.com/ for educational purposes only -->	
	        <img src="cinema-girl.jpg" alt="picture" width="190px" height="290px"/> 
         </div> 
	</div>

<?php require("includes/footer.php"); ?>