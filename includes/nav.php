 <!-- <div id="nav">
    <div id="nav0">
        <div id="nav1"><a href="movies.php"> || Movies </a> ||</div>
        <div id="nav2"><a href="book.php"> || Book Now </a> ||</div>
        <div id="nav3"><a href="prices.php"> || Prices </a> ||</div>
        <div id="nav4"><a href="contact.php">|| Contact Us  </a> || </div>
    </div>
</div>
-->

<div id="nav">
 <div id='cssmenu'>
     <ul>
         <li><a href='movies.php'><span>Movies</span></a></li>
         <li><a href='book.php'><span>Bookings</span></a></li>
         <li><a href='prices.php'><span>Prices</span></a></li>
         <li><a href='contact.php'><span>Contact Us</span></a></li>
         <li><a href='checkout.php'><span>Shopping Cart</span></a></li>
     </ul>
 </div>
    </div>


 <script>
     ( function( $ ) {
         $( document ).ready(function() {
             $('#cssmenu').prepend('<div id="bg-one"></div><div id="bg-two"></div><div id="bg-three"></div><div id="bg-four"></div>');
         });
     } )( jQuery );

 </script>