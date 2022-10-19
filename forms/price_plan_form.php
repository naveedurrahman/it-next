<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>It.Next</title>
    <!-- site icons -->
    <link rel="icon" href="../images/fevicon/fevicon.png" type="image/gif" />

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">OUR PRICING PLANS</h2>
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        <div class="form-row">
                            <div class="name">Title</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="title">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Text</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="text">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Amount In</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="amount_in">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Amount</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="amount">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Per day/week/month/year</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="per">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Offer One</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="offer_one">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Offer Two</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="offer_two">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Offer Three</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="offer_three">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Offer Four</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="offer_four">
                            </div>
                        </div>

                        <div class="form-row">
                            <div>
                                <button class="btn btn--radius-2 btn--blue-2" type="submit" name="done">Add Price</button>
                                <span>
                                    <?php
                                    include("../db.php");
                                    if(isset($_POST['done'])){
                                        $title = $_POST['title'];
                                        $text = $_POST['text'];
                                        $amount_in = $_POST['amount_in'];
                                        $amount = $_POST['amount'];
                                        $per = $_POST['per'];
                                        $offer_one = $_POST['offer_one'];
                                        $offer_two = $_POST['offer_two'];
                                        $offer_three = $_POST['offer_three'];
                                        $offer_four = $_POST['offer_four'];


                                            mysqli_query($connect,"insert into pricing_plan values('','$title','$text','$amount_in','$amount','$per','$offer_one','$offer_two','$offer_three','$offer_four')");
                                            echo "<span style='color: blue; margin-left: 40px;' > Price added ...</span>";
                                        
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->