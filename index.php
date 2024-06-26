<?php
    //  print_r ($_REQUEST);

if(!empty($_REQUEST["name"]) && !empty($_REQUEST["Email"]) && !is_numeric($_REQUEST["name"])==1 ) {
    echo "<h2> Your given values are as :- </h2>";
    echo "Name : ". $_REQUEST['name']. "<br>";
    echo "E-mail ". $_REQUEST['Email']. "<br>";
    echo "Group # :" . $_REQUEST['Group']."<br>";
    echo "class details:" . $_REQUEST['Class']."<br>";
    echo "Gender :" . $_REQUEST['Gender']."<br>";
    echo "Your courses are  :- ";
    foreach ($_POST['flower'] as $names)
    {
            echo "  ". $names ;
    }




 } else{
    $nameErr = "Name is required";

 }
 ?>

<?php
echo "<h1>Application name :- CMS_PHP Class registration</h1>";
// include'index.html';  
  echo '<span style="color:red;">* Required filed .</span>';
  echo '<br>';
  echo '<br>';

?>
<html>
    
    <body>

    

        <form action="<?php $_PHP_SELF ?>"  method="POST">
            <table >
           
            <tr>
                <td> <label for="name" aria-required="">Name:</label>    </td>
                <td>  <input type="text" id="name" name="name" Required> </td>
            </tr>
            <tr>
                <td> <label for="Email">E-mail:</label> </td>
                <td> <input type="email" id="Email" name="Email" Required><br> </td>
            </tr>
            <tr>
                <td> <label for="Group">Group #</label> </td>
                <td><input type="number" id="Group" name="Group"> </td>
            </tr>
            <tr>
                <td> <label for="Class">  details: </label> </td>
                <td> <textarea name="Class" id="Class"></textarea> </td>
            </tr>
            <tr>
                <td> <label for="Gender">Gender: </label> </td>
                <td> <input type="radio" id="Female" name="Gender" value="Female"> 
                 <label for="Female">Female</label> 
                <input type="radio" id="male" name="Gender" value="male"> 
                 <label for="male">male</label><br> </td>
            </tr>
            <tr>
                <td><label for="Courses">Select Courses:</label> </td>
                <td><select multiple  size="4" name="flower[ ]" >
                <option value="php">php</option>
                <option value="java script">java script</option>
                <option value="MySQl">MySQl</option>
                <option value="Html">Html</option>
                <option value="c++">c++</option>
                <option value="c">c </option>

                </select> </td>
            </tr>
            <tr>

            <td><label for="Agree">Agree </label> </td>
            <td><input type="checkbox" id="Agree" name="Agree" >
            </td>

            </tr>  
            <tr>

            <td> <input type = "submit" />
            </td>
            

            </tr>  
            </table>
                
                
                

                
                
                

                
           

            


        </form>
    </body>
</html>












