<?php
include 'connect.php';
?>

<html>
    <head>
    
    </head>
    <body> 
        <form action="#" method="POST">
            <table>
                <tr>
            <td > DISTRICT NAME</td>
                        <td><input type="text"  name="district_name" ></td>
        </tr>
                <div class="form-group">
                                <label for="state">STATE</label>
                                <div class="form-select">

                                    <select  name="statename" id="statename">
                                        <?php
                                        $con = mysqli_connect("localhost", "root", "", "db_sample");
                                        if (!$con) {
                                            echo "Could not connect..Try again";
                                        } else {
                                            $sql = "Select state_id, statename from tbl_state where status=1";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_array($sql)) {
                echo '<option value=' . $row['state_id'] . '>' . $row['statename'] . '</option>';
            }
                                            echo "<option value =><------Select state------></option>";
                                            while ($row = mysqli_fetch_array($result)) {
                                                $statename = $row['statename'];
                                                $state_id = $row['state_id'];
                                                echo "<option value='$statename'>$statename</option>";
                                            }
                                        }
                                        mysqli_close($con);
                                        ?>
                                    </select>



                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>



                
                <tr>
                    <td></td>
            <td colspan=2>
         <input type="submit" name="submit"  id="submit" value="submit" class="btnRegister"></td>
        </tr>
            </table>
        </form>
    </body>
</html>
<?php
if (isset($_POST['submit']))
    {
    $con = mysqli_connect("localhost", "root", "", "db_sample");
                                        if (!$con) {
                                            echo "Could not connect..Try again";
                                        } else {
   // $c_id=$_POST['c_id'];
   $district_name=$_POST['district_name']; 
   $statename=$_POST['statename']; 
   $sql2="Select state_id from tbl_state where statename='$statename' and  status=1";
   $result1 = mysqli_query($con, $sql2);
   while ($row = mysqli_fetch_array($result1)) {
        $state_id = $row['state_id'];
   }
   //echo $sname;
   $sql1=mysqli_query($con,"INSERT INTO `tbl_district`( `district_name`,`state_id`,`status`) VALUES ('$district_name','$state_id',1)");
                                        }
  //$result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));
}
?>




