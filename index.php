<!DOCTYPE HTML>
<html>
    <head>
        <title>Student</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div>            
        <form action="" method="POST">
            <table>
                <tr>
                    <td><input type="number" name="id" placeholder="number"></td>
                    <td><input type="text" name="name" placeholder="name"></td>
                    <td><select name="course">
                            <option>C#</option>
                            <option>PHP</option>
                            <option>JS</option>
                            <option>C/C++</option>
                        </select>
                    </td>
                   <td><input type="text" name="avg_notes" placeholder="average"></td>
                </tr>
           <tr>
            <td colspan="4">
            <fieldset>
                <p>Gender</p>
                <label for="M">M</label>
                <input class="radiobox" type="radio" id="M" name="gender" value="M">
                <label for="F">F</label>
                <input class="radiobox" type="radio" id="F" name="gender" value="F">
            </fieldset>
            </td>
            </tr>
            <tr>
            <td><input type="submit" class ="button" value="Add" name = "button"></td>
            <td><input type="submit" class ="button" value="Delete" name = "button"></td>           
            <td><input type="submit" class ="button" value="Edit" name = "button"></td>
            <td><input type="reset" class ="button" value="Clear form" name = "button"></td>
            </tr>
            </table>
        </form>      
        <?php
            require_once("student.php");
            require_once("functions.php");                           
            if($_POST)
            {            
            $student = new Student();
            $student->id=$_POST["id"];
            $student->name=$_POST["name"];
            $student->course=$_POST["course"];
            $student->gender=$_POST["gender"];
            $student->avg_notes=$_POST["avg_notes"];            
            if($_POST["button"] == "Add")
                Add_To_Db($student);
            if($_POST["button"] == "Delete")
                Delete($student);             
            if($_POST["button"] == "Edit")
                Edit($student);            
           } 
           echo 'Students:<br>';
           View(); 
        ?>
        </div>
    </body>
</html>