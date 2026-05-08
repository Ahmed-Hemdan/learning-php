<?php
 // validate => remove unwanted spacing * trim - 
 // html tags * strip_tags - deactivate * htmlspecialchars
 // slaches  * strip_slashes

 function check($var){
    $var=trim($var); // first and last spcaces but if there is space in the middel it wouldn't remove
    $var=strip_tags($var);
    $var =stripslashes($var);
    return $var;
 }
        if(isset($_POST["show"])){
            $fname=check($_POST['fname']);
            // you have to continue like that with all inputs you need 
            // and you can make new file too add all your function in 
            // and just include it or make it reuqire as you want 
            $lname= check($_POST['lname']);
            $pass= check($_POST['pass']);
            $phone=check($_POST['phone']);
            $email= check($_POST['email']);
            $website =check($_POST['website']);
            $comment =check($_POST['comment']);

            if(ctype_alpha($fname)){ // check for alphabatic only
                echo "valide frist name<br>";
            }else{
                echo "not valid first name<br>";
            }

            if(ctype_digit($phone)){ // this check for number only
                echo "valid phone number<br>";
            }else{
                echo "invalid phone number<br>";
            }

            if(ctype_alnum($lname)){ // this allows alphabatic and numbers
                echo 'valid last name <br>';
            }else{
                echo "invalid last name <br>";
            }
            
            if(ctype_upper($comment)){ // this check for capital and small chars but can check simbols or spaces 
                echo "capital chars <br>";
            }elseif(ctype_lower($comment)){
                echo "small chars <br>";
            }else{
                echo "mix <br>";
            }

            if(ctype_graph($email)){ // this allows every thing but spaces 
                echo "no spaces <br>";
            }else{
                echo "there is spaces <br>";
            }
        }



// if(isset($_POST["show"])){
//     $fname=$_POST['fname'];
//     echo "Before ".$fname."<br>"; 
//     // $fname=strip_tags($fname);
//     // $fname=htmlspecialchars($fname);
//     // $fname= trim($fname);
//     $fname=strip_slashes($fname);
//     echo $fname;
// }

?>


<html>
    <head></head>
    <body>
        
            <form method="post">
                    <table>
                        <tr>
                            <td>First name:</td>
                            <td> <input type="text" name="fname", placeholder="First name"></td>
                        </tr>
                        <tr>
                            <td> Last name:</td>
                            <td> <input type="text" name="lname" ></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td> <input type="password" name="pass"></td>
                        </tr>
                        <tr>
                            <td>Phone number:</td>
                            <td><input type="text" name="phone"></td>
                        </tr>
                        <tr>
                             <!-- i will try to make validation with php -->
                            <td>Email:</td>
                            <td><input name="email"><br></td>
                        </tr>
                        <tr>
                            <td>  Website:</td>
                            <td><input type="text" name="link"></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><input type="radio" value="Male"  name="male"> Male </td>
                            <td> <input type="radio" value="Female"  name="female"> Female</td>
                        </tr>
                        <tr>
                            <td>  Image:</td>
                            <td><input type="file" name="image"></td>
                        </tr>
                        <tr>
                            <td>Comments: </td>
                            <td><textarea name="comment" cols=10 rows=4></textarea></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="show"  value="submit" ></td>
                           <td><input type="reset" name="reset"></td> 
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                </table>
            </form>

    </body>
</html>