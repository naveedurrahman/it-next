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
                    <h2 class="title">SOCIAL ICON</h2>
                </div>
                <div class="card-body">
                    <form action="#" method="POST" >
                       
                        <div class="form-row">
                            <div class="name">Icon Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Icon</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="icon">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Icon Link</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="link">
                            </div>
                        </div>
                        <div class="form-row">
                            <div>
                                <button class="btn btn--radius-2 btn--blue-2" type="submit" name="done">Add Icon</button>
                                <span>
                                    <?php
                                    include("../db.php");
                                    if (isset($_POST['done'])) {
                                        $name = $_POST['name'];
                                        $icon = $_POST['icon'];
                                        $link = $_POST['link'];

                                            mysqli_query($connect, "insert into social_icon values('','$name','$icon','$link')");
                                            echo "<span style='color: blue; margin-left: 40px;' > Icon added ...</span>";
                                        
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