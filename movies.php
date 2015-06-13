<?php require("includes/head.php");
require("includes/nav.php");
session_start();
?>

    <br><br>

    
        <h1> Movies Out Now </h1><br>
<div id="contentBookings">
        <script>

            $.ajax({
                dataType: "json",
                method: "POST",
               url: "https://<?php echo $_SERVER['SERVER_NAME']; ?>/~e54061/wp/movie-service.php"
            })
                .done(function (data) {
                    $.each(data, function (key, val) {
                        $.get("includes/movietemplate.html", function (template) {
                            $.tmpl(template, val).appendTo("#movies");
                            console.log(data);
                        });
                    });
                });

        </script>

        <div id="movies"></div>
       

    </div>

<?php require("includes/footer.php"); ?>