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
        // if(isset($_POST["show"])){
        //     $fname=check($_POST['fname']);
        //     // you have to continue like that with all inputs you need 
        //     // and you can make new file too add all your function in 
        //     // and just include it or make it reuqire as you want 
        //     $lname= check($_POST['lname']);
        //     $pass= check($_POST['pass']);
        //     $phone=check($_POST['phone']);
        //     $email= check($_POST['email']);
        //     $website =check($_POST['website']);
        //     $comment =check($_POST['comment']);

        //     if(ctype_alpha($fname)){ // check for alphabatic only
        //         echo "valide frist name<br>";
        //     }else{
        //         echo "not valid first name<br>";
        //     }

        //     if(ctype_digit($phone)){ // this check for number only
        //         echo "valid phone number<br>";
        //     }else{
        //         echo "invalid phone number<br>";
        //     }

        //     if(ctype_alnum($lname)){ // this allows alphabatic and numbers
        //         echo 'valid last name <br>';
        //     }else{
        //         echo "invalid last name <br>";
        //     }
            
        //     if(ctype_upper($comment)){ // this check for capital and small chars but can check simbols or spaces 
        //         echo "capital chars <br>";
        //     }elseif(ctype_lower($comment)){
        //         echo "small chars <br>";
        //     }else{
        //         echo "mix <br>";
        //     }

        //     if(ctype_graph($email)){ // this allows every thing but spaces 
        //         echo "no spaces <br>";
        //     }else{
        //         echo "there is spaces <br>";
        //     }
        // }



// if(isset($_POST["show"])){
//     $fname=$_POST['fname'];
//     echo "Before ".$fname."<br>"; 
//     // $fname=strip_tags($fname);
//     // $fname=htmlspecialchars($fname);
//     // $fname= trim($fname);
//     $fname=strip_slashes($fname);
//     echo $fname;
// }


// Filteres validate - senitize 

// if(isset($_POST['show'])){

//     $fname = check($_POST['fname']);

//     if(filter_var($fname,FILTER_VALIDATE_BOOLEAN)) {
//         echo "boolean data type<br>";
//     }else if(filter_var($fname,FILTER_VALIDATE_INT)) {
//         echo "integer<br>";
//     }else if(filter_var($fname, FILTER_VALIDATE_FLOAT)){
//         echo "float<br>";
//     } else if(filter_var($fname, FILTER_VALIDATE_URL)){ // needs all link start from http - https
//             echo 'this is a link<br>';
//     }else if(filter_var($fname,FILTERE_VALIDATE_EMAIL)){
//         echo "email<br>";
//     }else{
//         echo "String<br>";
//     }


// }

if(isset($_POST['show'])){
    if(isset($_FILES['image'])){
    print_r($_FILES['image']);

    $file_name = $_FILES['image']["name"];
    $file_size= $_FILES['image']['size'];
    $file_tpm = $_FILES['image']['tmp_name'];
    $file_type= $_FILES['image']['type'];
    
    $avalibale_ext= array("jpg","png",jpeg);
    //strtolower this to take care of char senc 
    // end to just to take the end of the sentance after /
    // explode to to cut the file type from / mark 
    $ext= strtolower(end(explode("/",$file_type)));

    echo $ext ."<br>";

    if(in_array($ext,$avalibale_ext)){
        echo "valid ext <br>";
    }else{
        echo "invalid ext <br>";
    }

        if(!$error){
            move_uploaded_file($file_tpm,"images/".$file_name );
        }else{
            echo "Error <br>";
        }


}
}

?>


<html>
    <head></head>
    <body>
        
            <form method="post" enctype="multipart/form-data">
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