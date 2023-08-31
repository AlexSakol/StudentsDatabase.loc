<?php
    function Add_To_Db($student)
    {
        try
        {
            $pdo = new PDO("mysql:host=127.0.0.1;dbname=Student", "root");
            $sql = "INSERT INTO Students (Id, Name, Course, Gender, Avg_Notes) VALUES
                (:id, :name, :course, :gender, :avg_notes)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(":id", $student->id);
            $stmt->bindValue(":name", $student->name);
            $stmt->bindValue(":course", $student->course);
            $stmt->bindValue(":gender", $student->gender);
            $stmt->bindValue(":avg_notes", $student->avg_notes);
            $stmt->execute();            
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        finally {$pdo=null;}
    }

    function Delete($student)
    {
        try
        {
            $pdo = new PDO("mysql:host=127.0.0.1;dbname=Student", "root");
            $sql = "DELETE FROM Students WHERE Id = :id and Name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(":id", $student->id);  
            $stmt->bindValue(":name", $student->name);           
            $stmt->execute();                                    
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        finally {$pdo=null;}
    }

    function View()
    {
        try
        {
            $pdo = new PDO("mysql:host=127.0.0.1;dbname=Student", "root");
            $sql = "Select * FROM Students";
            $result = $pdo->query($sql);
            echo '<table class="student_table">
            <tr><th>Id</th><th>Name</th><th>Corse</th><th>Gender</th><th>Average</th></tr>';
            foreach($result as $row)
            {
                echo "<tr>";
                echo "<td>" . $row["Id"] . "</td>";
                echo "<td>" . $row["Name"] . "</td>";
                echo "<td>" . $row["Course"] . "</td>";
                echo "<td>" . $row["Gender"] . "</td>";
                echo "<td>" . $row["Avg_Notes"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";                           
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        finally {$pdo=null;}
    }

    function Edit($student)
    {
        try
        {
            $pdo = new PDO ("mysql:host=127.0.0.1;dbname=Student", "root");
            $sql = "UPDATE Students SET 
                Name = :name, Course = :course, Gender = :gender, Avg_Notes = :avg_notes
                WHERE Id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(":id", $student->id);
            $stmt->bindValue(":name", $student->name);
            $stmt->bindValue(":course", $student->course);
            $stmt->bindValue(":gender", $student->gender);
            $stmt->bindValue(":avg_notes", $student->avg_notes);
            $stmt->execute();
        }   
        catch(PDOException $e) { echo $e->getMessage();}
        finally { $pdo = null;}
    }