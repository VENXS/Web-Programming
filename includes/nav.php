 <div id='cssmenu'>
     <ul>
	 	 <li><a href='index.php'><span> </span></a></li>
		 <li><a href='movies.php'><span>Movies</span></a></li>
         <li><a href='book.php'><span>Bookings</span></a></li>
         <li><a href='prices.php'><span>Prices</span></a></li>
         <li><a href='contact.php'><span>Contact Us</span></a></li>
         <li><a href='checkout.php'><span>Shopping Cart</span></a></li>
     </ul>
 </div>
   

<script>
     ( function( $ ) {
         $( document ).ready(function() {
             $('#cssmenu').prepend('<div id="bg-one"></div><div id="bg-two"></div><div id="bg-three"></div><div id="bg-four"></div>');
         });
     } )( jQuery );

 </script>