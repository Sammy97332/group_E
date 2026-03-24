<h2>Available Course Materials</h2>

<?php
$levels = [1 => "Level 100", 2 => "Level 200", 3 => "Level 300", 4 => "Level 400"];
$semesters = [1 => "First Semester", 2 => "Second Semester"];

foreach($levels as $level_id => $level_name){
    echo "<h3>$level_name</h3>";

    foreach($semesters as $semester_id => $semester_name){
        echo "<h4>$semester_name</h4>";

        $query = "SELECT * FROM files 
                  WHERE level_id='$level_id' AND semester_id='$semester_id'";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0){
            echo "<ul>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<li>
                        📄 {$row['title']}
                        <a href='../uploads/{$row['file_name']}' download>
                            <button>Download</button>
                        </a>
                      </li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No materials available</p>";
        }
    }
}
?>