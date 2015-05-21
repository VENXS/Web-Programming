<?php require("includes/head.php");
require("includes/nav.php");

session_start();
?>

    <br><br>

    <div id="contentBookings">
        <h2> The Latest Movies Out Now </h2>


        <script>

            $.ajax({
                dataType: "json",
                method: "POST",
               //  url: "https://<?php echo $_SERVER['SERVER_NAME']; ?>/~e54061/wp/movie-service.php"
                url: "https://jupiter.csit.rmit.edu.au/~e54061/wp/movie-service.php"
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


        <div id="childrensmovie">
            <img src="childrens.jpg" alt="cinderella poster" width="200px">

            <div class="description">


                <h2> Cinderella </h2>
                <img src="g.jpg" alt="movie rating">

                <p> Very mild themes </p>

                <div id="comment">

                    <div id="normalCinderella">
                        The story of Cinderella follows the fortunes of young Ella (Lily James) whose merchant father
                        remarries following the death of her mother.
                        <a href="#" onclick="showMoreCinderella()"> Read More </a>

                        <script>
                            function showMoreCinderella() {
                                document.getElementById("normalCinderella").style.display = "none";
                                document.getElementById("hiddenCinderella").style.display = "inline";
                            }
                        </script>
                    </div>

                    <div id="hiddenCinderella">
                        <p> The story of Cinderella follows the fortunes of young Ella (Lily James) whose merchant
                            father
                            remarries following the death of her mother. Eager to support her loving father, Ella
                            welcomes
                            her new stepmother (Cate Blanchett) and her daughters Anastasia (Holliday Grainger) and
                            Drisella
                            (Sophie McShera) into the family. </p>

                        <div id="times">
                            <h4> Times showing: </h4>
                            <ul>
                                <li>Monday 1pm</li>
                                <li> Tuesday 1pm</li>
                                <li> Wednesday 6pm</li>
                                <li> Thursday 6pm</li>
                                <li> Friday 6pm</li>
                                <li> Saturday 12pm</li>
                                <li> Sunday 12pm</li>
                            </ul>
                        </div>

                        <a href="book.html"><h4> Book Now </h4></a>
                        <br>
                        <a href="#" onclick="showLessCinderella()"> Show Less </a>
                        <script>
                            function showLessCinderella() {
                                document.getElementById("normalCinderella").style.display = "inline";
                                document.getElementById("hiddenCinderella").style.display = "none";
                            }
                        </script>
                    </div>


                </div>

            </div>
        </div>

        <div id="artmovie">
            <img src="art.jpg" alt="dior poster" width="200px">

            <div class="description">
                <h2> Dior and I </h2>
                <img src="m.jpg" alt="movie rating">

                <p> Coarse language </p>
                <br>


                <div id="normalDior">
                    DIOR AND I is a tantalising ‘behind-the-seams’ glimpse at the making of Raf Simons’ first haute
                    couture
                    collection for Christian Dior in 2012.
                    <a href="#" onclick="showMoreDior()"> Read More </a>

                    <script>
                        function showMoreDior() {
                            document.getElementById("normalDior").style.display = "none";
                            document.getElementById("hiddenDior").style.display = "inline";
                        }
                    </script>
                </div>

                <div id="hiddenDior">
                    Established in the fashion world as a minimalist designer, Simons has both his reputation and the
                    legacy
                    of Dior on the line when appointed Creative Director of the iconic Parisian brand. With only eight
                    weeks
                    to complete the collection, Simons and his dedicated group of collaborators work against time to
                    make
                    his vision a sublime reality. Melding the everyday, pressure-filled world of fashion with mysterious
                    echoes from Dior’s past, the film is also a colourful homage to the long-serving seamstresses at the
                    couturier, as history is once again created at Dior.
                    <br><br>

                    <div id="times">
                        <h4> Times showing: </h4>
                        <ul>
                            <li>Monday 6pm</li>
                            <li> Tuesday 6pm</li>
                            <li> Saturday 3pm</li>
                            <li> Sunday 3pm</li>
                        </ul>
                    </div>

                    <a href="book.html"><h4> Book Now </h4></a>

                    <a href="#" onclick="showLessDior()"> Show Less </a>


                    <script>
                        function showLessDior() {
                            document.getElementById("normalDior").style.display = "inline";
                            document.getElementById("hiddenDior").style.display = "none";
                        }
                    </script>
                </div>

            </div>
        </div>

        <div id="romanticmovie">
            <img src="romantic.jpg" alt="the longest ride poster" width="200px">

            <div class="description">
                <h2> The Longest Ride </h2>
                <img src="m.jpg" alt="movie rating">

                <p> Mature themes and sex scenes </p>
                <br>


                <div id="normalRide">
                    Based on the bestselling novel from master storyteller Nicholas Sparks (The Notebook, Message in a
                    Bottle, Dear John), comes an unforgettable tale of two intertwining love stories.
                    <a href="#" onclick="showMoreRide()"> Read More </a>

                    <script>
                        function showMoreRide() {
                            document.getElementById("normalRide").style.display = "none";
                            document.getElementById("hiddenRide").style.display = "inline";
                        }
                    </script>
                </div>

                <div id="hiddenRide">
                    Based on the bestselling novel from master storyteller Nicholas Sparks (The Notebook, Message in a
                    Bottle, Dear John), comes an unforgettable tale of two intertwining love stories. In one, an elderly
                    man, drifting in and out of consciousness, reunites with his beloved wife – who had died years
                    before;
                    in the second, a man fighting to save his family's ranch falls in love with a sophisticated young
                    woman.
                    A strange occurrence unites the two generations in an extraordinary journey.
                    <br><br>

                    <div id="times">
                        <h4> Times showing: </h4>
                        <ul>
                            <li>Monday 9pm</li>
                            <li> Tuesday 9pm</li>
                            <li> Wednesday 1pm</li>
                            <li> Thursday 1pm</li>
                            <li> Friday 1pm</li>
                            <li> Saturday 6pm</li>
                            <li> Sunday 6pm</li>
                        </ul>
                    </div>

                    <a href="book.html"><h4> Book Now </h4></a>


                    <a href="#" onclick="showLessRide()"> Show Less </a>

                    <script>
                        function showLessRide() {
                            document.getElementById("normalRide").style.display = "inline";
                            document.getElementById("hiddenRide").style.display = "none";
                        }
                    </script>
                </div>
            </div>
        </div>

        <div id="actionmovie">
            <img src="action.jpg" alt="fast and furious poster" width="200px">

            <div class="description">
                <h2> Fast and Furious 7 </h2>
                <img src="m.jpg" alt="movie rating">

                <p> Action violence </p>
                <br>

                <div id="normalFast">
                    Continuing the global exploits in the unstoppable franchise built on speed, Vin Diesel, Paul Walker
                    and
                    Dwayne Johnson lead the returning cast of Fast &Furious 7.
                    <a href="#" onclick="showMoreFast()"> Read More </a>

                    <script>
                        function showMoreFast() {
                            document.getElementById("normalFast").style.display = "none";
                            document.getElementById("hiddenFast").style.display = "inline";
                        }
                    </script>
                </div>

                <div id="hiddenFast">
                    Continuing the global exploits in the unstoppable franchise built on speed, Vin Diesel, Paul Walker
                    and
                    Dwayne Johnson lead the returning cast of Fast &Furious 7. James Wan directs this chapter of the
                    hugely
                    successful series that also welcomes back favorites Michelle Rodriguez, Jordana Brewster, Tyrese
                    Gibson,
                    Chris "Ludacris" Bridges, Elsa Pataky and Lucas Black.
                    <br><br>

                    <div id="times">
                        <h4> Times showing: </h4>
                        <ul>
                            <li> Wednesday 9pm</li>
                            <li> Thursday 9pm</li>
                            <li> Friday 9pm</li>
                            <li> Saturday 9pm</li>
                            <li> Sunday 9pm</li>
                        </ul>
                    </div>

                    <a href="book.html"><h4> Book Now </h4></a>

                    <a href="#" onclick="showLessFast()"> Show Less </a>

                    <script>
                        function showLessFast() {
                            document.getElementById("normalFast").style.display = "inline";
                            document.getElementById("hiddenFast").style.display = "none";
                        }
                    </script>
                </div>
            </div>
        </div>

    </div>

<?php require("includes/footer.php"); ?>