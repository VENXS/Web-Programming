<?php require("includes/head.php");
require("includes/nav.php");

session_start();
?>

    <br> <h2> Silverado's Grand Reopening </h2>
    <h3> Doors Open 14th of May!</h3>
    <div id="picture"> 
	
<img id="Change_Image" src="http://www.productionparadise.com/newsletters/938/photos/65385/original/citystars-springs-fashion-shoot-louay-nasser-cinema.jpg" alt="Letter A" width="750px" height="500px">

<script>
function change_image() {
    var pic = document.getElementById('Change_Image').src;
    if (pic == 'http://www.productionparadise.com/newsletters/938/photos/65385/original/citystars-springs-fashion-shoot-louay-nasser-cinema.jpg') {
        document.getElementById('Change_Image').src = 'http://www.cedia.org/files/i/current/cinema-front-view.jpg';
    } else {
        document.getElementById('Change_Image').src = 'http://www.productionparadise.com/newsletters/938/photos/65385/original/citystars-springs-fashion-shoot-louay-nasser-cinema.jpg';
    }
}

setInterval(change_image, 2000);
</script>
	
		
        <div id="content">
        <div id="info">
            <h4> Keep it local </h4>

            <p> Experience the cutting edge 3D projector, our new Dolby digital sound and renovated plush seating with
                all the lights and glamour of a real theatre. </p>
        </div>
        <div id="info2">
            <h4> Reopening Night </h4>

            <p> Come down for the grand reopening! We'll be screening classic hits so grab a friend and support the
                local community on our reopening night. 14th of May, don't forget.</p>
        </div>
    </div>

<?php require("includes/footer.php"); ?>