<?php
include 'Connection.php';
$row_id=$_POST['row_id'];
 session_start();
                                                        $name=$_SESSION['Name'];
$sql = "select * from product_details where productID='$productID'";
$result = $conn->query($sql);

while ($row = mysqli_fetch_assoc($result)) {

    $category_type = $row['category_type'];
    $dress_type = $row['dress_type'];
    $product_name = $row['product_name'];
    $size = $row['size'];
    $waist = $row['waist'];
    $chest = $row['chest'];
    $sleeve = $row['sleeve'];
    $width = $row['width'];
    $bust = $row['bust'];
    $brand = $row['brand'];
    $color = $row['color'];
    $purchase_price = $row['purchase_price'];
    $purchase_date = $row['purchase_date'];
    $rent_price = $row['rent_price'];
    $status = $row['status'];
    $addressID = $row['addressID'];
    $row_id = $row['row_id'];
    $productID=$row['productID'];
}


?>



<?php  ?>

    <div class="row">
        <div class="col-12 col-sm-12 col-sm-12">
            <div class="card  card-tabs">

              
                

                <div style="height: 530px; overflow-y: scroll;">

                 

                            <form id="form" action="ProductProc.php?function=update&module=product_details&row_id=<?php echo $row_id ;?>" enctype="multipart/form-data"  method="post">

                                <div class="card">
                                    <div class="card-body card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title"> Product Details</h3>
                                        </div>
                                        <br>
                                        <div class="row">
                                            
                                            
                                            
                                            
                                            
                                            <input type="text" name="productID" id="productID" VALUE="<?php echo $productID?>" style="display:none;">
                                            <div class="col-sm-12">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label>Category Type</label>
                                                    <select class="form-control" name="category_type" id="category_type" onchange="getDress(this.value);">
                                                        <option>--Select Category Type--</option>
                                                        
                                                        <?php 
                                                        if($category_type=='Mens Wear'){
                                                             echo'<option selected>Mens Wear</option>';
                                                        }
                                                        else{
                                                             echo'<option selected>Womens Wear</option>';
                                                        }
                                                        
                                                        ?>
                                                       
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-12" id="bindType">
                                                <div class="form-group">
                                                    <label>Dress Type</label>
                                                    <select class="form-control" name="dress_type">
                                                        <option>--Select Dress Type--</option>
                                                        <?php 
                                                            include 'Connection.php';
                                                            $sql2 = "SELECT Value FROM renton.categorymaster where Type in ('Mens Wear','Womens Wear') and Status='Enabled'";
                                                            $result = $conn->query($sql2);
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                          
                                                                if($dress_type==$row['Value']){
                                                                    $selected='selected';
                                                                }
                                                                else{
                                                                    $selected='';
                                                                }
                                                               
                                                                
                                                                
                                                              echo'<option '.$selected.'>'.$row['Value'].'</option>';  
                                                            }
                                                        ?>
                                                            
                                                  
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Product Name</label>
                                            <input type="text" class="form-control" name="product_name" placeholder="Enter Value" value="<?php echo $product_name ;?>" >
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label>Size</label>
                                                    <select class="form-control" name="size">
                                                        <option>-- Select Size--</option>
                                                        
                                                        <?php 
                                                        include 'Connection.php';
                                                        $sql2 = "SELECT Value FROM renton.categorymaster where Type='Size' and Status='Enabled'";
                                                        $result = $conn->query($sql2);
                                                      
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                           if($size==$row['Value']){
                                                               $selected='selected';
                                                           }
                                                           else{
                                                               $selected='';
                                                           }
                                                            
                                                            echo'<option '.$selected.'>'.$row['Value'].'</option>';  
                                                        }
                                                        ?>
                                                            
                                                        
                                                    
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Waist</label>
                                                    <input type="text" class="form-control" name="waist" placeholder="Enter Value" value="<?php echo $waist ;?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Chest</label>
                                                    <input type="text" class="form-control" name="chest" placeholder="Enter Value"     value="<?php echo $chest ;?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label>Sleeve Length</label>
                                                    <input type="text" class="form-control" name="sleeve" placeholder="Enter Value"     value="<?php echo $sleeve ;?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Shoulder Width</label>
                                                    <input type="text" class="form-control" name="width" placeholder="Enter Value"     value="<?php echo $sleeve ;?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Bust</label>
                                                    <input type="text" class="form-control" name="bust" placeholder="Enter Value" value="<?php echo $bust ;?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label>Brand</label>
                                                    <select class="form-control" name="brand">
                                                        
                                                         <?php 
                                                        include 'Connection.php';
                                                        $sql2 = "SELECT Value FROM renton.categorymaster where Type='Brand' and Status='Enabled'";
                                                        $result = $conn->query($sql2);
                                                      
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                           if($brand==$row['Value']){
                                                               $selected='selected';
                                                           }
                                                           else{
                                                               $selected='';
                                                           }
                                                            
                                                            echo'<option '.$selected.'>'.$row['Value'].'</option>';  
                                                        }
                                                        ?>
                                                        
                                                        
                                                        
                                               
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Color</label>
                                                    <input type="text" class="form-control" name="color" placeholder="Enter Value">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label>Purchase Price</label>
                                                    <input type="text" class="form-control" name="purchase_price" placeholder="Enter Value" value="<?php echo $purchase_price;?>" >
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Purchase Date</label>
                                                    <input type="date" class="form-control" name="purchase_date" placeholder="Enter Value">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label>Rent Price</label>
                                                    <input type="text" class="form-control" name="rent_price" placeholder="Enter Value" value="<?php echo $rent_price ;?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control" name="status"   value="<?php echo $status ;?>">
                                                        <option>--Select Status--</option>
                                                        
                                                        <?php
                                                         if($status=='Enabled'){
                                                            echo'<option selected>Enabled</option>
                                                        <option >Disabled</option>';
                                                         }
                                                         else{
                                                             echo'<option >Enabled</option>
                                                        <option selected >Disabled</option>';
                                                         }
                                                        
                                                       
                                                         ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <INPUT type="hidden" name="productId" value="<?php echo $productID; ?>">
                                        <div class="card-body card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Add Product Photos</h3>
                                            </div>
                                            <link rel="stylesheet" href="fontawesome-free-5.11.2-web/css/all.css">
                                            <style>
                                                input[type="file"] {
                                                    display: block;
                                                }
                                                .imageThumb {
                                                    max-height: 75px;
                                                    border: 2px solid;
                                                    padding: 1px;
                                                    cursor: pointer;
                                                }
                                                .pip {
                                                    display: inline-block;
                                                    margin: 10px 10px 0 0;
                                                }
                                                .remove {
                                                    display: block;
                                                    background: RED;
                                                    border: 1px solid black;
                                                    color: white;
                                                    text-align: center;
                                                    cursor: pointer;
                                                }
                                                .remove:hover {
                                                    background: white;
                                                    color: black;
                                                }
                                            </style>
                                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                                            <script>
                                                $(document).ready(function () {
                                                    if (window.File && window.FileList && window.FileReader) {
                                                        $("#files").on("change", function (e) {
                                                            var files = e.target.files,
                                                                    filesLength = files.length;
                                                            for (var i = 0; i < filesLength; i++) {
                                                                var f = files[i]
                                                                var fileReader = new FileReader();
                                                                fileReader.onload = (function (e) {
                                                                    var file = e.target;
                                                                    $("<span class=\"pip\">" +
                                                                            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                                                                            "<br/><BR><span class=\"remove\">Delete</span>" +
                                                                            "</span>").insertAfter("#files");
                                                                    $(".remove").click(function () {
                                                                        $(this).parent(".pip").remove();
                                                                    });

                                                                });
                                                                fileReader.readAsDataURL(f);
                                                            }
                                                        });
                                                    } else {
                                                        alert("Your browser doesn't support to File API")
                                                    }
                                                });
                                            </script>   
                                            <br>
                                            <div class="field" align="left">
                                                <?php
                                                  include 'Connection.php';
                                                        $sql2 = "SELECT * from product_photos where product_id='$productID'";
                                                        $result = $conn->query($sql2);
                                                      
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            $images=$row['fileName'];
                                                            echo"<img src='Uploads/$images' style='height:100px;'>  &nbsp; <button type='button' style='margin-top: -65px;' class='btn btn-sm bg-gradient-danger'>Delete</button>  &nbsp;&nbsp;";
                                                
                                                
                                                
                                                        }
                                                       
                                                        ?>
                                                <br><br>
                                                <h5>Upload New Photos</h5>
                                                <font style="color:green"> Note : You can select Multiple Images at once </font>
                                                <br>
                                                <br>
                                                <input type="file" id="files" name="files[]" multiple />
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <!-----<div class="card-footer" style="float:right">
                                             <button type="submit" class="btn btn-warning" onclick="" >Proceed To Next</button>
                                          </div> !---->
                                        <div class="card-footer" style="float:left">
                                            <button type="submit" class="btn btn-success">Save Data</button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                       

                      
                   
                    </div>

                </div>
                <!-- /.card -->
            </div>
        </div>


        <div class="col-sm-12" style="display:none;">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">  <i class="fa fa-bars" aria-hidden="true"></i> &nbsp; Product List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover" id="example1">
                        <thead>
                            <tr>
                                <th style="padding: 9px;">Sr </th>
                                <th style="padding: 9px;">Image</th>
                                <th style="padding: 9px;">Product Name</th>

                                <th style="padding: 9px;">Rent</th>
                                <th style="padding: 9px;">Status</th>
                                <th style="padding: 9px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 1;
                                include 'Connection.php';

                                $sql = "select * from categorymaster";

                                $result = $conn->query($sql);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo'<tr>
                                    <td>' . $i++ . '</td>
                                    <td><img src="flash-sale1.png" style="height:10%;"></td>    
                                        <td>Nuti chunru fondf dfnknksd sdinjm</td>

                                             <td>50000</td>
                                        <td>' . $row['Status'] . '</td>
                                        <td><i class="fa fa-edit" style="color:#007bff;"></i>  &nbsp;<i class="fa fa-trash" style="color:red;"></i></td>

                                    </tr>';
                                }
                            ?>
                        </tbody>
                    </table>  
                </div>
            </div>
        </div> <script>
             $(document).ready(function(e) {
                $("#form").on('submit', (function(e) {
                    
                 e.preventDefault();
                 $.ajax({
                     url: "ProductProc.php?function=update&module=product_details&row_id=<?php echo $_POST['row_id'] ;?>",
                     type: "POST",
                     data: new FormData(this),
                     contentType: false,
                     cache: false,
                     processData: false,
                     beforeSend: function() {
                         //$("#preview").fadeOut();
                         $("#err").fadeOut();
                     },
                    success: function(data) {
                        alert(data);
                      alert('sucessfully updated');
                         const Toast = Swal.mixin({
                             toast: true,
                             position: 'top-end',
                             showConfirmButton: false,
                             timer: 3000
                         });
                         Toast.fire({
                             type: 'success',
                             title: 'Sucessfully Updated Record'
                         })
                         toastr.success('Sucessfully updtared Record');
                         location.reload();
                      },
                        error: function(e) {
                         alert('Oops! something went wrong')
                        }
                    });
                }));
              });
</script>

    </div>