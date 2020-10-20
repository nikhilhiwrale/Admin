
    <div class="form-group">
        <label>Dress Type</label>
        <select class="form-control" name="dress_type">
                <option>--Select Dress Type--</option>
                <?php
                    include 'Connection.php';
                    $Value=$_POST['Value'];
                    $sql = "SELECT * FROM categorymaster where Type='$Value' and Status='Enabled'";
                    $result = $conn->query($sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                         echo'<option>'.$row['Value'].'</option>'; 

                    }
                ?>
        </select>
    </div>
