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
                    <h2 class="title">EXPERIENCED STAFF</h2>
                </div>
                <div class="card-body">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="name">Image</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="image" id="file">
                                    <label class="label--file" for="file">Choose image</label>
                                    <span class="input-file__info">No image chosen</span>
                                </div>
                                <div class="label--desc">Upload your image or any other relevant file.</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Facebook Id</div>
                            <div class="value">
                                 <input class="input--style-6" type="text" name="facebook">  
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Google-Plus Id</div>
                            <div class="value">
                                 <input class="input--style-6" type="text" name="google">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Twitter Id</div>
                            <div class="value">
                                 <input class="input--style-6" type="text" name="twitter">                                
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Linkedin Id</div>
                            <div class="value">
                                 <input class="input--style-6" type="text" name="linkedin">                               
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Instagram Id</div>
                            <div class="value">
                                 <input class="input--style-6" type="text" name="instagram">                                
                            </div>
                        </div>
                        <div class="form-row">
                            <div>
                                <button class="btn btn--radius-2 btn--blue-2" type="submit" name="done">Add Staff</button>
                                <span>
                                    <?php
                                    include("../db.php");
                                    if (isset($_POST['done'])) {
                                        $name = $_POST['name'];
                                        $facebook = $_POST['facebook'];
                                        $google = $_POST['google'];
                                        $twitter = $_POST['twitter'];
                                        $linkedin = $_POST['linkedin'];
                                        $instagram = $_POST['instagram'];


                                        $image_name = $_FILES['image']['name'];
                                        $image_tmp = $_FILES['image']['tmp_name'];

                                        $folder = "uploads/";
                                        $path = $folder.basename($image_name);
                                        if (move_uploaded_file($image_tmp, $path)) {
                                            mysqli_query($connect, "insert into our_staff values('','$image_name','$name','$facebook','$google','$twitter','$linkedin','$instagram')");
                                            echo "<span style='color: blue; margin-left: 40px;' > Staff added ...</span>";
                                        }
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