<html>

<head>
    <title>score.php</title>
</head>

<body>
    <center>
        <?php
        if (isset($_POST['submit'])) {
            $filename = $_POST['filename'];
            if (file_exists($filename)) {
            $text = file($filename);
            echo "<td width='150' align ='left'>ผลลัพธ์การคำนวณเกรด</td>";
            echo "<table border='0' cellpadding='0' cellspacing='0'>";
            echo "<tr><td width='150' align = 'left'>นักศึกษา</td>";
            echo "<td width='150' align = 'left'>ทดสอบย่อย</td>";
            echo "<td width='150' align = 'left'>สอบกลางภาค</td>";
            echo "<td width='150' align = 'left'>สอบปลายภาค</td>";
            echo "<td width='150' align = 'left'>รวม 100 คะแนน</td>";
            echo "<td width='150' align = 'left'>เกรด</td></tr>";
            foreach ($text as $tr_data) {
                $array_word = explode(",", $tr_data);
                $student_id = trim($array_word[0]);
                $score1 = isset($array_word[1])?(int)trim($array_word[1]) : 0;
                $score2 = isset($array_word[2])?(int)trim($array_word[2]) : 0;
                $score3 = isset($array_word[3])?(int)trim($array_word[3]) : 0;

                $total = $score1 + $score2 + $score3;
                $grade = "";

                if ($total >= 80) {
                    $grade = 'A';
                } elseif ($total >= 70){
                    $grade = 'B';
                } elseif ($total >= 60){
                    $grade = 'C';
                } elseif ($total >= 50){
                    $grade = 'D';
                } else {
                    $grade = 'F';
                }

                echo "<tr>
                <td width='150' align = 'left'>$student_id</td>
                <td width='150' align = 'left'>$score1</td>
                <td width='150' align = 'left'>$score2</td>
                <td width='150' align = 'left'>$score3</td>
                <td width='150' align = 'left'>$total</td>
                <td width='150' align = 'left'>$grade</td>
                </tr>";

            }
            
        } else {
            echo "<p style='color:red;'>File not found. Please check the file name.</p>";
        }
        } else {
        ?>
            <h3>score.php</h3>
            <form method="post" action="score.php">
                <table border="0" align="center" width="400">
                    <tr>
                        <td width="150">File name </td>
                        <td width="150" align="center"><input type="text" name="filename" size="40" value=""></td>
                    </tr>
                    <tr>
                    <tr></tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="submit" value=" SUBMIT " />&nbsp;
                        <input type="reset" name="reset" value=" RESET " />
                    </td>
                    </tr>
                </table>

            </form>


        <?php

        }
        ?>
    </center>
</body>

</html>