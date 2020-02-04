<html>

<head></head>

<body>
    <?php
        require "connection.php";

        if(isset($_POST['search'])){
            $searchq = ($_POST['searchtext']);
            if($searchq == ""){
                header("Location:../../Homepage.php?");
            }
            $search = strtolower($searchq);
            if($search == "homestay"){
                echo "search not found";
                exit(0);
            }
            $searchq =mysqli_real_escape_string($conn,$searchq);
            $sql = "SELECT * FROM community_homestay WHERE ch_name LIKE '%$searchq%' LIMIT 1";   
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $num=$row['ch_reg_num'];
                    
             
                    
                header("Location:../../homestaypage.php?value=$num");
                }
            }
            else{
                echo"search not found";
            }
            mysqli_free_result($result);
            mysqli_close($conn);
        }

        else{
            header("Location:../../Homepage.php?search error=".mysqli_error($conn));
        }
        ?>
</body>

</html>
