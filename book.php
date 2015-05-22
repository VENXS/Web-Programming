<?php require("includes/head.php");
require("includes/nav.php");

session_start();

if(isset($_POST) && !empty($_POST)){
    var_dump($_POST);
    echo "<p> Movie name is: " . $film . "</p>";
};

?>

    <h2> Book Movie Tickets Now </h2>
    <p> Fill out the form below to book your tickets </p>

    <div id="contentBookings">

        <div id="form">
            <form id="bookingform" action="voucher.php" method="POST"
                  enctype="multipart/form-data">
                <select name="film">
                    <option value=${title}> ${title} </option>
                    <option value="RC"> The Longest Ride</option>
                    <option value="AC"> Fast and Furious 7</option>
                    <option value="AF"> Dior and I</option>
                </select>
                <select name="day">
                    <option value="Monday"> Monday</option>
                    <option value=2> Tuesday</option>
                    <option value=3> Wednesday</option>
                    <option value=4> Thursday</option>
                    <option value=5> Friday</option>
                    <option value=6> Saturday</option>
                    <option value=0> Sunday</option>
                </select>
                <select name="time">
                    <option> 1pm</option>
                    <option> 6pm</option>
                    <option> 9pm</option>
                </select>

                <table style="width:70%">
                    <tr>
                        <td> Adult</td>
                        <td> $18</td>
                        <td> Quantity <select name="SA">
                                <option> 0</option>
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                                <option> 4</option>
                                <option> 5</option>
                                <option> 6</option>
                                <option> 7</option>
                                <option> 8</option>
                                <option> 9</option>
                                <option> 10</option>
                        </td>
                    <tr>
                        <td> Consession</td>
                        <td> $15</td>
                        <td> Quantity <select name="SP">
                                <option> 0</option>
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                                <option> 4</option>
                                <option> 5</option>
                                <option> 6</option>
                                <option> 7</option>
                                <option> 8</option>
                                <option> 9</option>
                                <option> 10</option>
                        </td>
                    <tr>
                        <td> Child</td>
                        <td> $12</td>
                        <td> Quantity <select name="SC">
                                <option> 0</option>
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                                <option> 4</option>
                                <option> 5</option>
                                <option> 6</option>
                                <option> 7</option>
                                <option> 8</option>
                                <option> 9</option>
                                <option> 10</option>
                        </td>
                    </tr>
                    <tr>
                        <td> First Class Adult</td>
                        <td> $30</td>
                        <td> Quantity <select name="FA">
                                <option> 0</option>
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                                <option> 4</option>
                                <option> 5</option>
                                <option> 6</option>
                                <option> 7</option>
                                <option> 8</option>
                                <option> 9</option>
                                <option> 10</option>
                        </td>
                    </tr>
                    <tr>
                        <td> First Class Child</td>
                        <td> $25</td>
                        <td> Quantity <select name="FC">
                                <option> 0</option>
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                                <option> 4</option>
                                <option> 5</option>
                                <option> 6</option>
                                <option> 7</option>
                                <option> 8</option>
                                <option> 9</option>
                                <option> 10</option>
                        </td>
                    </tr>
                    <tr>
                        <td> Beanbag</td>
                        <td> $30</td>
                        <td> Quantity <select name="B1">
                                <option> 0</option>
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                                <option> 4</option>
                                <option> 5</option>
                                <option> 6</option>
                                <option> 7</option>
                                <option> 8</option>
                                <option> 9</option>
                                <option> 10</option>
                        </td>
                    </tr>
                    <tr>
                        <td> Beanbag for 2 people</td>
                        <td> $30</td>
                        <td> Quantity <select name="B2">
                                <option> 0</option>
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                                <option> 4</option>
                                <option> 5</option>
                                <option> 6</option>
                                <option> 7</option>
                                <option> 8</option>
                                <option> 9</option>
                                <option> 10</option>
                        </td>
                    </tr>
                    <tr>
                        <td> Beanbag for 3 people</td>
                        <td> $30</td>
                        <td> Quantity <select name="B3">
                                <option> 0</option>
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                                <option> 4</option>
                                <option> 5</option>
                                <option> 6</option>
                                <option> 7</option>
                                <option> 8</option>
                                <option> 9</option>
                                <option> 10</option>
                        </td>
                    </tr>
                </table>


                <div>
                    <input id="submit_button" type="submit" value="Book Tickets / Next"/>
                </div>
        </div>
    </div>

    <script>

        var SUNDAY = 0;
        var MONDAY = 1;
        var TUESDAY = 2;
        var WEDNESDAY = 3;
        var THURSDAY = 4;
        var FRIDAY = 5;
        var SATURDAY = 6;


        var prices = {
            'SA': {
                'cheap': 12,
                'expensive': 18
            },
            'SP': {
                'cheap': 10,
                'expensive': 15
            },
            'SC': {
                'cheap': 8,
                'expensive': 12
            },
            'FA': {
                'cheap': 25,
                'expensive': 30
            },
            'FC': {
                'cheap': 20,
                'expensive': 25
            },
            'B1': {
                'cheap': 20,
                'expensive': 30
            },
            'B2': {
                'cheap': 20,
                'expensive': 30
            },
            'B3': {
                'cheap': 20,
                'expensive': 30
            }

        };


        var movie = {
            'CH': {
                MONDAY: [1300],
                TUESDAY: [1300],
                WEDNESDAY: [1800],
                THURSDAY: [1800],
                FRIDAY: [1800],
                SATURDAY: [1200],
                SUNDAY: [1200]
            },
            'AF': {
                MONDAY: [1800],
                TUESDAY: [1800],
                SATURDAY: [1500],
                SUNDAY: [1500]
            }


            'RC': {
                MONDAY: [2100],
                TUESDAY: [2100],
                WEDNESDAY: [1300],
                THURSDAY: [1300],
                FRIDAY: [1300],
                SATURDAY: [1800],
                SUNDAY: [1800]
            }

            'AC': {
                WEDNESDAY: [2100],
                THURSDAY: [2100],
                FRIDAY: [2100],
                SATURDAY: [2100],
                SUNDAY: [2100]
            }
        };

        document
        ).ready(function () {
            .
            change()
                .getElementById()


        }


// change();

        // variables into JQuery, select = target
        // .val
        // switch
        // google: populate select with JSon

    var subTotal = prices['SA', 'SP'];
        console.log(subTotal);


    $change(day) 

    </script>


<?php include_once("includes/footer.php"); ?>