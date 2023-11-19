<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped table-bordered" border="2">
        <thead>
            <tr>
                <th>S.No</th>
                <th>User Name</th>
                <th>Email</th>
                <th>DOB</th>
                
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
           require 'con.php';

            $sql = "Select * from user_form";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){

                    $id = $row["id"];
                    $name = $row["name"];
                    $email = $row["email"];
                    $password = $row["password"];
                    $DOB = $row["DOB"];

                    echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$DOB.'</td>
                    
                    <td>
                         <a href="updateUserDetails.php?id='.$id.'">
                                 <button> Update</button>
                          </a>
                    <a href="deleteUserDetails.php?id='.$id.'">
                    <button class="btn btn-danger">Delete</button>
                    </a>
                    </td>
                    </tr>';
                }
            }else{
                echo"No data found.";
            }
            ?>
        </tbody>
    </table>
</body>
</html>