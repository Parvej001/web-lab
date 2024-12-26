<!DOCTYPE html>
<head>
    <title>database with php</title>
</head>
<body>
    <h1>Sorted table on grade of students</h1>
    <table>
        <tr><th>student_id</th><th>student_name</th><th>student_grade</th></tr>
        <?php
        $conn= new mysqli('localhost','root','15472448','school_db');
        $results=$conn->query("select * from students");
        $students=$results->fetch_all(MYSQLI_ASSOC);

        for( $i= 0; $i < count($students)-1; $i++ )
        {
            $minidx=$i;
            for($j=$i+1;$j<count($students);$j++)
            {
                if($students[$j]['grade']<$student[$minidx]['grade'])
                {
                    $minidx=$j;
                }
                
            }
            $temp=$students[$i];
            $student[$i]=$Students[$j];
            $students[$j]=$temp;
        }
        foreach($students as $student)
        {
            echo"<tr><td>{$student['id']}</td><td>{$student['name']}</td><td>{$student['grade']}</td></tr>";
        }
        ?>
    </table>
</body>