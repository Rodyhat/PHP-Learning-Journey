<?php
session_start();
include("connect.php");
if (!isset($_SESSION['email'])) {
    header('location: first_login.php');
}
$email = $_SESSION['email'];
$select = "SELECT * FROM `studentsignup` WHERE email = '$email'";
$selectQuery = mysqli_query($connect, $select);
$fetch = mysqli_fetch_assoc($selectQuery);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css link -->
    <link rel="stylesheet" href="first_project.css">
    <!-- icon link -->
    <script src="https://kit.fontawesome.com/5440431d94.js" crossorigin="anonymous"></script>
    <!-- boostrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
    .wow {
        background-color: #5650aa;
    }

    .lii {
        display: flex;
        gap: 10px;

    }

    form {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    ul {
        list-style-type: none;
    }

    .yee {
        background-color: #dfebfb;
    }

    .oneof {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .pkk {
        border-radius: 50%;
        width: 130px;
        height: 150px;

    }

    .by {
        font-weight: 600;
    }

    .im1 {
        background-color: white;
        display: flex;
        gap: 30px;


    }

    .visa {
        background-color: white;

    }

    .nes {
        display: flex;
        flex-direction: column;
    }

    .ii {
        display: flex;
        gap: 7px;
    }

    .logs {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .r1 {
        display: flex;
        /* gap: 45px; */
        justify-content: space-between;
        align-items: center;
    }

    .firstcont {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .runna {
        background-color: #fff;
    }

    .course1{
        background-color: #eaebff;
    }

    .tyh {
        display: flex;
        justify-content: space-between;
    }

    .alli {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    input {
        width: 100%;
    }

    .okk {
        background-color: white;
    }

    .oky {
        background-color: #5650aa;
        ;

    }

    .row2 {
        display: flex;
        /* justify-content: space-between; */
        gap: 10px;
    }

    .whit {
        color: white;
    }

    .hj {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    a {
        list-style-type: none;
        text-decoration: none;
        color: white;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12 wow"><br>
                <b class="py-5 px-4">SUCCESS</b>
                <ul class="py-5 whit">
                    <li>
                        <div class="lii">
                            <i class="fa-regular fa-user"></i>
                            <a href="./profile.php">Profile</a>
                        </div>
                    </li>
                    <li>
                        <div class="lii"><i class="fa-regular fa-address-book"></i>
                            <a href="">Contact</a>
                        </div>
                    </li>
                    <li>
                        <div class="lii"><i class="fa-regular fa-floppy-disk"></i>
                            <a href="">Saved</a>
                        </div>
                    </li>
                    <li>
                        <div class="lii"><i class="fa-regular fa-calendar-day"></i>
                            <a href="">Calender</a>
                        </div>
                    </li>
                    <li>
                        <div class="lii"><i class="fa-regular fa-shield-heart"></i>
                            <a href="">Safety</a>
                        </div>
                    </li>
                    <li>
                        <div class="lii"><i class="fa-regular fa-comments"></i>
                            <a href="">Comment</a>
                        </div>
                    </li>
                </ul><br><br><br><br><br>
                <img src="./images/download-removebg-preview.png" alt="" class="py-5">

            </div>
            <div class="col-lg-10 col-md-10 col-sm-12 yee">
                <div class="oneof">
                    <nav class="navbar bg-body-tertiary rounded-3">
                        <div class="container-fluid">
                            <a class="navbar-brand">Welcome <?php echo $fetch["fullname"]; ?></a>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2 rounded-3" type="search" placeholder="search" aria-label="Search">
                                <i type="submit" class="fa-solid fa-arrow-right-from-bracket"></i>
                            </form>
                        </div>
                    </nav>
                    <div class="firstcont ">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-6 im1 rounded-3 d-flex justify-content-between">
                                <div class=" p-3 d-flex justify-content-between">
                                    <img src="images/<?php echo $fetch["image"]; ?>" id="image" alt="">
                                    <div class="nes">
                                        <h5><?php echo $fetch["fullname"]; ?></h5>
                                        <h6>Email <span class="by"> : <?php echo $fetch["email"]; ?></span></h6>
                                        <h6>State of Origin <span class="by"> : <?php echo $fetch["countryandcity"]; ?></span></h6>
                                        <h6>Telephone <span class="by"> : <?php echo $fetch["phonenumber"]; ?></span></h6>
                                        <h6>Date of Birth <span class="by"> : <?php echo $fetch["birthdate"]; ?></span></h6>
                                        <h6>Date of Resumption<span class="by"> : <?php echo $fetch["regdate"]; ?></span></h6>
                                        <div class="ii"><i class="fa-brands fa-square-instagram"></i><i class="fa-brands fa-facebook"></i><i class="fa-brands fa-twitter"></i><i class="fa-brands fa-square-whatsapp"></i><i class="fa-brands fa-telegram"></i></div>
                                    </div>
                                </div>
                                <div class="edit-icon">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="visa rounded-3 p-3">
                                    <h5>Payment Method</h5>
                                    <label for="">House expenses:</label><br>
                                    <input type="number" name="" id="" placeholder="236 *** *** *** 265" class="rounded-3 px-3">
                                    <div class="logs py-2">
                                        <div class="r1">
                                            <img src="./images/west.jpg" alt="" width="40px">
                                            <img src="./images/gpayy.png" alt="err" width="40px">
                                        </div>
                                        <div class="r1">
                                            <img src="./images/maser.jpg" alt="" width="40px">
                                            <img src="./images/visa.jpg" alt="" width="40px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row2">
                            <div class="col-lg-8 col-md-8 col-sm-6 okk rounded-3 ">
                                <div class="im2  rounded-3 p-3">
                                    <h5>More About</h5>
                                    <div class="alli rounded-3">
                                        <div class="box course1 rounded-3 p-3">
                                            <div class="tex">
                                                <div class="tyh">
                                                    <h6>UI/UX Design</h6>
                                                    <button type="button" class="btn btn-outline-success">Get Started</button>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A expedita iusto vitae.</p>
                                            </div>

                                        </div>
                                        <div class="box course1 rounded-3 p-3">
                                            <div class="tex">
                                                <div class="tyh">
                                                    <h6>UI/UX Design</h6>
                                                    <button type="button" class="btn btn-outline-success">Get Started</button>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A expedita iusto vitae.</p>
                                            </div>

                                        </div>
                                        <div class="box course1 rounded-3 p-3">
                                            <div class="tex">
                                                <div class="tyh">
                                                    <h6>UI/UX Design</h6>
                                                    <button type="button" class="btn btn-outline-success">Get Started</button>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A expedita iusto vitae.</p>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 oky rounded-3 p-3">
                                <div class="im2 whit">
                                    <h5>Lorem ipsum dolor Success Premium</h5>
                                    <ul class="py-5">
                                        <li>Lorem ipsum dolor sit.</li>
                                        <li>Lorem ipsum dolor sit.</li>
                                        <li>Lorem ipsum dolor sit.</li>
                                        <li>Lorem ipsum dolor sit.</li>
                                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit..</li>
                                        <li>Lorem ipsum dolor sit amet consectetur.</li>
                                    </ul><br><br><br><br>
                                    <div class="hj"> <button type="button" class="btn btn-light px-3">Get Started</button>
                                    </div>

                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


</body>

</html>