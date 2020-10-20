
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:">

        <link rel="icon" href="images/favicon.png">
        <title>Evone - eCommerce Mobile Template</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="packages/core/css/framework7.bundle.css">
        <link rel="stylesheet" href="fontawesome-free-5.11.2-web/css/all.css">
        <link rel="stylesheet" href="mystyle.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="fontawesome-free-5.11.2-web/css/all.css">

        <style>
            .btn {
                display: inline-block;
                margin-bottom: 0;
                font-weight: normal;
                text-align: center;
                vertical-align: middle;
                touch-action: manipulation;
                cursor: pointer;
                background-image: none;
                border: 1px solid transparent;
                white-space: nowrap;
                height: 40px !important;
                width:100% !important;
                font-size: 14px;
                line-height: 2;
                margin-top: 0px;
                margin-left: 0px !important;
                border-radius: 4px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }  
            form.list ul .item-content .item-inner .item-input-wrap input{
                height: 35px !important;
            }


            .navbar {
                background: rgb(0,178, 139);
            }

            .external link{

                margin-left: 40px !important;
            }

            .form.control{
                    border: 1px solid #ccc !important;
                    font-size: 15px;
            }
            .control-label{
                font-size:10px !important;
                
            } 
            imagePreview {
                width:100%;
                height: 180px;
                background-position: center center;
                background:url(http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg);
                background-color:#fff;
                background-size: cover;
                background-repeat:no-repeat;
                display: inline-block;
                box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2);
            }
            .btn-primary
            {
                display:block;
                border-radius:0px;
                box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2);
                margin-top:-5px;
            }
            .imgUp
            {
                margin-bottom:15px;
            }
            .del
            {
                position:absolute;
                top:0px;
                right:15px;
                width:30px;
                height:30px;
                text-align:center;
                line-height:30px;
                background-color:rgba(255,255,255,0.6);
                cursor:pointer;
            }
            .imgAdd
            {
                width:30px;
                height:30px;
                border-radius:50%;
                background-color:#4bd7ef;
                color:#fff;
                box-shadow:0px 0px 2px 1px rgba(0,0,0,0.2);
                text-align:center;
                line-height:30px;
                margin-top:0px;
                cursor:pointer;
                font-size:15px;
            }
            .btn {
                display: inline-block;
                padding: 6px 12px;
                margin-bottom: 0;
                font-size: 14px;
                font-weight: 400;
                line-height: 1.42857143;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                -ms-touch-action: manipulation;
                touch-action: manipulation;
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                background-image: none;
                border: 1px solid transparent;
                border-radius: 34px !important; 
                margin-top: -1px !important;
            }
          
          .panel-heading a:after {
                font-family: "icomoon";
                content: "" !important;
                position: absolute;
                right: 20px;
                font-size: 11px;
                font-weight: 400;
                top: 50%;
                line-height: 1;
                margin-top: -8px;
            }
            .nav-tabs li.active a:after {
                position: absolute;
                bottom: -10px;
                left: 0;
                right: 0;
                content: '';
                width: 0;
                height: 0;
                margin: 0 auto;
                border-style: none !important ; 
                border-width: none !important; 
                border-color: none !important
            }
            .nav-tabs li.active a:hover, .nav-tabs li.active a:focus {
                background: #FFC300 !important;
                border: none;
                color: #fff;

            }.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
                color: #555;
                cursor: default;
                background-color: #ffc300 !important;
                border: 1px solid #ddd;
                border-bottom-color: transparent;
            }
           
            .imagePreview {
                width:100%;
                height: 180px;
                background-position: center center;
                background:url(http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg);
                background-color:#fff;
                background-size: cover;
                background-repeat:no-repeat;
                display: inline-block;
                box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2);
            }
            .btn-primary
            {
                display:block;
                border-radius:0px;
                box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2);
                margin-top:-5px;
            }
            .imgUp
            {
                margin-bottom:15px;
            }
            .del
            {
                position:absolute;
                top:0px;
                right:15px;
                width:30px;
                height:30px;
                text-align:center;
                line-height:30px;
                background-color:rgba(255,255,255,0.6);
                cursor:pointer;
            }
            .imgAdd
            {
                width:30px;
                height:30px;
                border-radius:50%;
                background-color:#4bd7ef;
                color:#fff;
                box-shadow:0px 0px 2px 1px rgba(0,0,0,0.2);
                text-align:center;
                line-height:30px;
                margin-top:0px;
                cursor:pointer;
                font-size:15px;
            }
            
        </style>
        <head>
            
            
            
           <style>
  


.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}
.carousel-inner{
  width:100%;
  max-height: 400px !important;
}
/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the "active" element to highlight the current page */
.topnav a.active {
  background-color: white;
  color: white;
}



header .box-title {
    display: inline-block;
    font-size: 18px;
    margin: 0;
    line-height: 1;
}
        </style>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>



    <body>

        <div id="app">

            <div class="view view-main" data-url="/">

                <div class="page">
                    <div class="navbar navbar-home" style="margin-top: -7px !important;">
                        <div class="navbar-inner">
                            <div class="left">
                                <a href="#" class="panel-open" data-panel="left">
                                    <i class="fa fa-bars" style="color:white;"></i>
                                </a>
                            </div>
                            <div class="title">
                                <h2 style="font-family:Cookie;font-size:26px; color: white"> <center>Rent-On <center></h2>
                                            </div>
                                            <a href="#tab-search" class="tab-link">
                                                <i class="fa fa-search" style="color:white;"></i>

                                            </a>

                                            <div class="right">
                                                <a href="/wishlist/" style="display:none;">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                                <a href="/notification/">
                                                    <i class="fa fa-cart-arrow-down" style="color:white;"></i>

                                                </a>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="page-content">

                                                <div class="panel-backdrop"></div>
                                                <div class="panel panel-left panel-cover sidebar">
                                                    <div class="list accordion-list">


                                                        <ul id="slide-out" class="sidenav">


                                                            <li style="background:royalblue;"><a href="#!">
                                                                    <div class="item-inner">
                                                                        <div class="item-title" style="margin-bottom: -8px;"> &nbsp;&nbsp;&nbsp; &nbsp;  &nbsp; &nbsp;<font size="4" style="color:white;">
                                                                            <i class="fa fa-user-circle" style="font-size:25px;" aria-hidden="true"></i>
 &nbsp;Hello, Nikhil  <strong>(seller)</strong> </font> </div></a>
                                                                </div>
                                                            </li>




                                                            <li><a href="circle.php" class="external link" style="margin-left: 40px !important; color:black">

                                                                    <div class="item-inner">
                                                                        <div class="item-title">Dashboard</div>

                                                                    </div>
                                                                </a></li>
                                                            <li><a href="index.php" class="external link" style="margin-left: 40px !important; color:black">

                                                                    <div class="item-inner">
                                                                        <div class="item-title">Product Master</div>

                                                                    </div>
                                                                </a></li>
                                                                <li><a href="index.php" class="external link" style="margin-left: 40px !important; color:black">

                                                                    <div class="item-inner">
                                                                        <div class="item-title">Rent Master</div>

                                                                    </div>
                                                                </a></li>
                                                            <li><a href="index.php" class="external link" style="margin-left: 40px !important; color:black">

                                                                    <div class="item-inner">
                                                                        <div class="item-title">Order Summary</div>

                                                                    </div>
                                                                </a></li>
                                                           
                                                            <li><a href="index.php" class="external link" style="margin-left: 40px !important; color:black">

                                                                    <div class="item-inner">
                                                                        <div class="item-title">Your Account</div>

                                                                    </div>
                                                                </a></li>
                                                            <!---<li><a href="index.php" class="external link" style="margin-left: 40px !important; color:black">

                                                                    <div class="item-inner">
                                                                        <div class="item-title">Become a Seller</div>

                                                                    </div>
                                                                </a></li> !--->
                                                            <li><a href="index.php" class="external link" style="margin-left: 40px !important; color:black">

                                                                    <div class="item-inner">
                                                                        <div class="item-title">Customer Support</div>

                                                                    </div>
                                                                </a></li>

                                                        </ul> 
                                                    </div>
                                                </div>
                                                <!-- product details -->

                                                <div class="container">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a data-toggle="tab" href="#home">Product Details</a></li>
                                                        <li><a data-toggle="tab" href="#menu1">Rent</a></li>
                                                        <li><a data-toggle="tab" href="#menu2">Address & photo</a></li>

                                                    </ul>

                                                    <div class="tab-content">
                                                        <div id="home" class="tab-pane fade in active">
                                                            <br>
                                                                <div class="col-sm-12">
                                                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" style="font-size:15px !important" for="first-name">Category <span class="required">*</span>
                                                                    </label>
                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                        <select class="form-control">
                                                                            <option>Select Category</option>
                                                                            <option>Sherwanis</option>
                                                                            <option> Suits, blazers and tuxedos</option>
                                                                            <option> Indo western type</option>
                                                                            <option> Bandh galas</option>
                                                                            <option>            Nehru jackets</option>
                                                                            <option>                        Kurta sets
                                                                            </option> 
                                                                        </select> 
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" style="font-size:15px !important" for="last-name">Size <span class="required">*</span>
                                                                    </label>
                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                        <select class="form-control">
                                                                            <option>Select shirt size</option>
                                                                            <option>S</option>
                                                                            <option>M</option>
                                                                            <option> L</option>
                                                                            <option> XL</option>
                                                                            <option>XXL</option>


                                                                        </select>  
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" style="font-size:15px !important">Trouser size</label>
                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                        <input type="text" class="form-control" placeholder=" Enter Trouser Size" style="  border: 1px solid #ccc !important;">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" style="font-size:15px !important">Waist size & length </label>
                                                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                                                        <input type="text" class="form-control" placeholder=" Enter waist Size" style="  border: 1px solid #ccc !important;" >
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                                                        <input type="text" class="form-control" placeholder=" Enter waist length" style="  border: 1px solid #ccc !important;">
                                                                    </div>

                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" style="font-size:15px !important">Brand & Color</label>
                                                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                                                        <select class="form-control"> 
                                                                            <option>--Select Brand--</option>
                                                                            <option>Manyvar</option>
                                                                            <option>Peter England</option>
                                                                            <option>Nayak</option>
                                                                        </select>

                                                                    </div>
                                                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                                                        <select class="form-control">
                                                                            <option>--Select Color--</option>
                                                                            <option>Red</option>
                                                                            <option>Blue</option>
                                                                            <option>Orange</option>
                                                                            <option>Red</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" style="font-size:15px !important">Purchase Date</label>
                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                        <input type="date" class="form-control" placeholder=" Enter Trouser Size" style="  border: 1px solid #ccc !important;">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" style="font-size:15px !important">Purchase Price</label>
                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                        <input type="number" class="form-control" placeholder=" Enter Price" style="  border: 1px solid #ccc !important;">
                                                                        <BR>
                                                                        (Note : 2% of the purchase price will be considered as insurance cost.)

                                                                    </div>
                                                                </div>

                                                                <div class="ln_solid"></div>
                                                                <div class="form-group">
                                                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">


                                                                        <button type="button" id="click" onclick="toggle();" class="btn btn-block btn-success">Next</button>
                                                                    </div>
                                                                </div>
                                                                <script src="js/jquery.min.js"></script>
                                                                <script>
                                                                    
                                                                    function toggle() {
                                                                        $('.nav-tabs a[href="#tab2default"]').tab('show');
                                                                        alert('in');
                                                                    }
                                                                    function toggle2() {
                                                                        $('.nav-tabs a[href="#tab3default"]').tab('show')
                                                                    }
                                                                </script>    

                                                            </form>
                                                                    </div>
                                                        </div>
                                                        <div id="menu1" class="tab-pane fade">
                                                            <br>
                                                            <div class="row">
                                                                 
                                                                <script>
                                                               
                                                                    function toggleBack() {
                                                                        $('.nav-tabs a[href="#tab1default"]').tab('show')
                                                                    }
                                                                    function toggleBack2() {
                                                                        $('.nav-tabs a[href="#tab2default"]').tab('show')
                                                                    }
                                                                </script> 
                                                                <div class="col-md-12 col-sm-12 col-xs-12">

                                                                    <div class="form-group">
                                                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" style="font-size:15px !important">Select one of the below option </label>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">


                                                                            <select class="form-control" id="option" name="option">
                                                                                <option>I want my outfit to be stored at your place for further renting.</option>
                                                                                <option selected>I want my outfit back after use by the customer.</option>

                                                                            </select>




                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                        
                                                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" style="font-size:15px !important"><br>Do you want the outfit to be dry cleaned before it is returned back to you? </label>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">


                                                                            <select class="form-control" id="option" name="option">
                                                                                <option>Yes</option>
                                                                                <option>No</option>

                                                                            </select>




                                                                        </div>
                                                                    </div>
                                                                    <br><br> <br>
                                                                    <div class="form-group">
                                                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" style="font-size:15px !important"><br>Set a Price :</label>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <input type="number" class="form-control" placeholder=" Enter Price" id="price" name="price" onkeyup="CalculateRent();" style="  border: 1px solid #ccc !important;">
                                                                            <BR>
                                                                            (Set a price between 15 to 20% of the purchase price for maximum response.)
                                                                            <br> <br>

                                                                        </div>
                                                                    </div>
                                                                    <br><br> <br>      <br><br> <br>
                                                                    <div class="form-group">
                                                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" style="font-size:15px !important">Amount you will Recieve :</label>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <input type="number" class="form-control" placeholder="" id="rent" name="rent" style="  border: 1px solid #ccc !important;" readonly="true">
                                                                            <BR>
                                                                            (The above amount is calculated based on the options you have selected. It is calculated after deducting the insurance & service charges) 
                                                                            <br><br>

                                                                        </div>
                                                                    </div>
                                                                    <div class="ln_solid"></div>
                                                                    <br><br>
                                                                    <div class="form-group">
                                                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                                          
                                                                            <button type="button"  onclick="toggle2();" class="btn btn-success">Next</button>
                                                                              <br><br>
                                                                            <button class="btn btn-primary" onclick="toggleBack();" type="button">Back</button>
                                                                          
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="menu2" class="tab-pane fade">
                                                            <br>
                                                      
                                                            <div class="">
                                                                <div class="">
                                                                   <form action="/file-upload" class="dropzone">
  <div class="fallback">
    <input name="file" type="file" multiple />
  </div>
</form>


                                                                </div><!-- row -->
                                                            </div><!-- container -->
                                                            <div class="col-sm-12">
                                                                <b> Select Pick up Address </b>
                                                            </div>

                                                            <table class="table table-bordered">
                                                                <th><input type="radio" style="opacity:1 !important; border-radius: 34px;"></th>
                                                                <td>
                                                                    Nikhil Hiwrale <br>
                                                                    102, akar om darshan ,<br> near hari om pooja bldg <br>
                                                                    Garibacha wada, MP road <br>
                                                                    Dombivili-421202</td>
                                                            </table>

                                                            <div class="">
                                                                <div class="field_wrapper">
                                                                    <div>

                                                                        <a href="javascript:void(0);" class="add_button btn btn-success btn-sm" title="Add field">Add New Address &nbsp;<i class="fa fa-plus-circle fa-3x"></i></a>
                                                                        <br>
                                                                        <textarea class="form-control" cols="10" rows="5"></textarea>

                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <center> <input type="submit" class="btn  btn-block btn-warning" value="Submit"> </center>


                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>






                                                <!-- jQuery -->


                                                </body>
                                                <!-- end action product details -->
                                            </div>

                                            </div>
                                            </div>
                                            </div>
                                            </body>
                                                 <script src="dropzone.js"></script>
                                            <script src="packages/core/js/framework7.bundle.min.js"></script>
                                            
                                            <script src="js/routes.js">

                                            </script>
                                            <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
                                            <script>
                                                                                                WebFont.load({
                                                                                                    google: {
                                                                                                        families: ["Cookie:regular"]
                                                                                                    }
                                                                                                });

                                            </script>
                                            <script src="js/app.js"></script>



                                            <script src="js/plugins.js"></script>
                                            <script src="js/main.js"></script>
                                            <script src="js/main2.js"></script>
                                            <script src=js/bootstrap.min.js></script>

                                            <script type="text/javascript">
                                                   

                                                                                                var maxField = 10; //Input fields increment limitation
                                                                                                var addButton = $('.add_button'); //Add button selector
                                                                                                var wrapper = $('.field_wrapper'); //Input field wrapper
                                                                                                var fieldHTML = '<div> <br><textarea class="form-control" cols="10" rows="5"></textarea><a href="javascript:void(0);" class="remove_button"><i class="fa fa-trash fa-2x"></i></a></div>'; //New input field html 
                                                                                                var x = 1; //Initial field counter is 1

                                                                                                //Once add button is clicked
                                                                                                $(addButton).click(function () {
                                                                                                    //Check maximum number of input fields
                                                                                                    if (x < maxField) {
                                                                                                        x++; //Increment field counter
                                                                                                        $(wrapper).append(fieldHTML); //Add field html
                                                                                                    }
                                                                                                });

                                                                                                //Once remove button is clicked
                                                                                                $(wrapper).on('click', '.remove_button', function (e) {
                                                                                                    e.preventDefault();
                                                                                                    $(this).parent('div').remove(); //Remove field html
                                                                                                    x--; //Decrement field counter
                                                                                                });







                                                                                                function CalculateRent() {
                                                                                                    var price = $('#price').val();
                                                                                                    var serviceCharge = 30;
                                                                                                    var insuranceCost = 0.02 * (price);
                                                                                                    var transporationCost = 50;

                                                                                                    var option = $('#option').val();

                                                                                                    if (option == 'I want my outfit to be stored at your place for further renting.') {
                                                                                                        var rent = price - insuranceCost - serviceCharge;
                                                                                                    } else {
                                                                                                        var rent = price - insuranceCost - serviceCharge - transporationCost;
                                                                                                    }
                                                                                                    $('#rent').val(rent);


                                                                                                    var price = "5000"

                                                                                                    var deduction = 5000 - (0.02 * 5000)

                                                                                                    if (option == 1) {

                                                                                                        var finalAmt = deduction - serviceCost;
                                                                                                    } else {
                                                                                                        var finalAmt = deduction - serviceCost - transporation
                                                                                                    }
                                                                                                }


//rent -2%(rent)






                                            </script>

                                            <script>
                                                $(".imgAdd2").click(function () {
                                                    $(this).closest(".row").find('.imgAdd2').before('<div class="col-sm-2 imgUp"><div class="imagePreview"></div><label class="btn btn-block btn btn-primary">Select File<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
                                                });
                                                $(document).on("click", "i.del", function () {
                                                    $(this).parent().remove();
                                                });
                                                $(function () {
                                                    $(document).on("change", ".uploadFile", function ()
                                                    {
                                                        alert('zx');
                                                        var uploadFile = $(this);
                                                        var files = !!this.files ? this.files : [];
                                                        if (!files.length || !window.FileReader)
                                                            return; // no file selected, or no FileReader support

                                                        if (/^image/.test(files[0].type)) { // only image file
                                                            var reader = new FileReader(); // instance of the FileReader
                                                            reader.readAsDataURL(files[0]); // read the local file

                                                            reader.onloadend = function () { // set image data as background of div
                                                                //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                                                                uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url(" + this.result + ")");
                                                            }
                                                        }

                                                    });
                                                });
                                            </script>










