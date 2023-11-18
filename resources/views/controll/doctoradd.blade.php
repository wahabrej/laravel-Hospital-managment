<!DOCTYPE html>
<html lang="en">

<head>
    @include("controll.css");
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates,
                                and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                                target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial:partials/_sidebar.html -->
        @include("controll.sideber");
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include("controll.navber");
            <!-- body part -->
            <center>
                <div class="container-fluid page-body-wrapper" style="margin-top:100px">

                    <h1>Add New Doctor</h1>

                    <form action="{{url('upload')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="fname">Doctor name :</label>
                        <input type="text" name="name"><br>
                        <label for="lname">Phone :</label>
                        <input type="text" name="phone"><br>



                        <label for="lname">Spetiality :</label>
                        <select name="spetiality" style="color:black">
                            <option>--selectOne---</option>
                            <option value="skin">Skin</option>
                            <option value="heart">Heart</option>
                            <option value="eye">Eye</option>
                            <option value="nose">Nose</option>

                        </select><br>
                        <label for="lname">Room :</label>
                        <input type="text" name="room"><br>
                        <label for="image">Image :</label>
                        <input type="file" name="image">

                        <input style="background:white;color:purple" type="submit" value="Submit">
                    </form>


                </div>
            </center>

            <!-- @include("controll.footer"); -->
            <!-- End custom js for this page -->
</body>