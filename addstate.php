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
            <td > STATE NAME</td>
                        <td><input type="text"  name="statename" ></td>
        </tr>
                <div class="form-group">
                                <label for="country">COUNTRY</label>
                                <div class="form-select">

                                    <select  name="country_name" id="country_name">
                                        <?php
                                        $con = mysqli_connect("localhost", "root", "", "db_sample");
                                        if (!$con) {
                                            echo "Could not connect..Try again";
                                        } else {
                                            $sql = "Select country_id, country_name from tbl_country where status=1";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_array($sql)) {
                echo '<option value=' . $row['country_id'] . '>' . $row['country_name'] . '</option>';
            }
                                            echo "<option value =><------Select Country------></option>";
                                            while ($row = mysqli_fetch_array($result)) {
                                                $country_name = $row['country_name'];
                                                $country_id = $row['country_id'];
                                                echo "<option value='$country_name'>$country_name</option>";
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
   $statename=$_POST['statename']; 
   $country_name=$_POST['country_name']; 
   $sql2="Select country_id from tbl_country where country_name='$country_name' and  status=1";
   $result1 = mysqli_query($con, $sql2);
   while ($row = mysqli_fetch_array($result1)) {
        $country_id = $row['country_id'];
   }
   //echo $sname;
   $sql1=mysqli_query($con,"INSERT INTO `tbl_state`( `statename`,`country_id`,`status`) VALUES ('$statename','$country_id',1)");
                                        }
  //$result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));
}
?>




