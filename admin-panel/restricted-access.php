               <?php             
                                    if($row['pdf']!='0')
                                     {  
                    
                                        // Check if the user is logged in, if not then redirect him to login page
                                        if(isset($_SESSION["loggedin"]) ){
                                            echo   '<p> <a href="blog/'. $row['pdf'] .'" >Read More
                                            </a></p>';
                                        }
                                        else{
                                            echo   '<p> <a href="login.php" >Read More
                                            </a></p>';
                                        }
                                 }
                                else{
                                    if(isset($_SESSION["loggedin"])){
                                        echo   '<p> <a href="view.php" >Read More
                                        </a></p>';
                             ?>