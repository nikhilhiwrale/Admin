

    <?php
        include 'Connection.php';
        $row_id = $_POST['row_id'];

        $sql = "select * from categorymaster where row_id='$row_id'";

        $result = $conn->query($sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $type = $row['Type'];
            $value = $row['Value'];
            $status = $row['Status'];
           
        }

        $list = ["Men's Wear", "Women's Wear", "Size", "Colour", "Brand"];
        $statusList = ["Enabled", "Disabled"];
    ?>
   
   <input type="hidden" id="row_id" value="<?php echo $row_id ;?>">

    <form role="form">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Category Type</label>
                <select class="form-control" name="Type" id="Type">
                    <?php
                    for ($i = 0; $i <= 5; $i++) {
                        if ($type == $list[$i]) {
                            $selected = 'selected';
                        } else {
                            $selected = '';
                        }

                        echo"<option $selected>$list[$i]</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Value</label>
                <input type="text" class="form-control" id="Value" Name="Value" placeholder="Enter Value" value="<?php echo $value; ?>">
            </div>   
            <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <select class="form-control" name="Status" id="Status">
                    <?php
                    for ($j = 0; $j < 2; $j++) {
                        if ($status == $statusList[$j]) {
                            $selected2 = 'selected';
                        } else {
                            $selected2 = '';
                        }

                        echo"<option $selected2>$statusList[$j]</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
    <!-- /.card-body -->

            <div class="card-footer" style="display:none;">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>