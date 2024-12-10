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

    .button1 button {
        border: none;
    }

    .enrol {
        background-color: #5650aa;
        font-size: 13px;
    }

    .delete {
        background-color: red;
        font-size: 13px;
    }

    p, h5, h6 {
        margin: 0;
    }

    .decribe {
        width: 75%;
    }

    .wow {
        background-color: #5650aa;
    }

    ul {
        list-style-type: none;
    }

    .yee {
        background-color: #dfebfb;
    }

    .im1 {
        background-color: white;
    }

    .ii {
        display: flex;
        gap: 7px;
    }

    .course1 {
        background-color: #eaebff;
    }

    input {
        width: 100%;
    }

    a {
        text-decoration: none;
        color: white;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-2 col-md-2 col-sm-12 wow d-flex flex-column align-items-center justify-content-between py-4">
                <div class="links d-flex flex-column gap-3 align-items-center">
                    <b class="text-light fs-4">SUCCESS</b>
                    <ul class=" text-light d-flex flex-column gap-3">
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
                    </ul>
                </div>
                <img src="./images/download-removebg-preview.png" alt="" class="">

            </div>
            <div class="col-lg-10 col-md-10 col-sm-12 yee ">
                <div class="oneof px-4 d-flex flex-column border border-dark gap-2 ">
                    <div class="rounded-3 d-flex justify-content-between px-3 im1">
                        <h4>Welcome <?php echo $fetch["fullname"]; ?></h4>
                        <form class="" role="search">
                            <input class="form-control  rounded-3" type="search" placeholder="search" aria-label="Search">
                            <i type="submit" class="fa-solid fa-arrow-right-from-bracket"></i>
                        </form>
                    </div>
                    <!-- <div class="firstcont "> -->
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-6 im1 rounded-3 d-flex justify-content-between">
                            <div class="d-flex justify-content-between">
                                <img src="images/<?php echo $fetch["image"]; ?>" id="image" alt="">
                                <div class="">
                                    <h5><?php echo $fetch["fullname"]; ?></h5>
                                    <p>Email <span class=""> : <?php echo $fetch["email"]; ?></span></p>
                                    <p>State of Origin <span class=""> : <?php echo $fetch["countryandcity"]; ?></span></p>
                                    <p>Telephone <span class=""> : <?php echo $fetch["phonenumber"]; ?></span></p>
                                    <p>Date of Birth <span class=""> : <?php echo $fetch["birthdate"]; ?></span></p>
                                    <p>Date of Resumption<span class=""> : <?php echo $fetch["regdate"]; ?></span></p>
                                    <div class="ii"><i class="fa-brands fa-square-instagram"></i><i class="fa-brands fa-facebook"></i><i class="fa-brands fa-twitter"></i><i class="fa-brands fa-square-whatsapp"></i><i class="fa-brands fa-telegram"></i></div>
                                </div>
                            </div>
                            <div class="edit-icon">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="im1 rounded-3 p-3">
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
                    <div class="row ">
                        <div class="col-lg-8 col-md-8 col-sm-6 im1 rounded-3">
                            <div class="im2 rounded-3 py-2 px-2">
                                <h5>Courses</h5>
                                <div class="row rounded-3">
                                    <div class=" d-flex flex-column gap-2 rounded-3 ">
                                        <div class="d-flex justify-content-between  course1 px-3 py-2 rounded-3">
                                            <div class="d-flex flex-column decribe">
                                                <h6>UI/UX Design</h6>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                            </div>
                                            <div class="button1 d-flex flex-column gap-2">
                                                <button type="submit" class="enrol rounded-3 text-light p-2">Enrol Now</button>
                                                <button type="submite" class="delete rounded-3 text-light py-1">Delete</button>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between  course1 p-3 rounded-3">
                                            <div class="d-flex flex-column decribe">
                                                <h6>UI/UX Design</h6>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                            </div>
                                            <div class="button1 d-flex flex-column gap-2">
                                                <button type="submit" class="enrol rounded-3 text-light p-2">Enrol Now</button>
                                                <button type="submite" class="delete rounded-3 text-light py-1">Delete</button>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between  course1 p-3 rounded-3">
                                            <div class="d-flex flex-column decribe">
                                                <h6>UI/UX Design</h6>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                            </div>
                                            <div class="button1 d-flex flex-column gap-2">
                                                <button type="submit" class="enrol rounded-3 text-light p-2">Enrol Now</button>
                                                <button type="submite" class="delete rounded-3 text-light py-1">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 wow rounded-3 text-light d-flex flex-column align-items-center">
                            <h5> Success Premium</h5>
                            <ul class="">
                                <li>Lorem ipsum dolor sit.</li>
                                <li>Lorem ipsum dolor sit.</li>
                                <li>Lorem ipsum dolor sit.</li>
                                <li>Lorem ipsum dolor sit.</li>
                                <li>Lorem ipsum dolor sit.</li>
                                <li>Lorem ipsum dolor sit amet consectetur.</li>
                            </ul>
                            <div class="d-flex align-items-center justify-content-center">
                                <button type="button" class="btn btn-light ">Subscribe</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


</body>

</html>