<?php
include "links/include/db.php";

if (isset($_POST["text"])) {
    $msg = $_POST["text"];
    $msg = strtolower($msg);
    $query = mysqli_query($conn, "SELECT * FROM question WHERE question RLIKE '[[:<:]]" . $msg . "[[:>:]]';");
    $count = mysqli_num_rows($query);
    if ($count == "0") {
        $data = "I am sorry but I am not exactly clear how to help you,You can ask:</br><button class='m-1 btn btn-primary' onclick='passMessage(this)'>Admission</button><button class='m-1 btn btn-primary' onclick='passMessage(this)'>Faculty</button><button class='m-1 btn btn-primary' onclick='passMessage(this)'>About</button>";
        $query2 = mysqli_query($conn, "INSERT INTO `tmp_questions` (`tmp_question_id`, `question`, `type`) VALUES (NULL, '$msg', '');");
    
    } else {
        while ($row = mysqli_fetch_array($query)) {
            $data = $row['answer'];
            $action = $row['type'];
        }
    }
}
echo ' <div id="single-message">
                            <div style="float:right;"
                                class="justify-content-end d-flex flex-wrap my-1 p-1 w-75">
                                <span class="bg-msg p-1">
                                ' . $msg . '
                                </span>
                            </div>
                            <div style="float:left;"
                                class="d-flex flex-wrap  w-75 my-1 p-1">
                                <span class="bg-msg p-1">
                                    ' . $data . '
                                </span>
                            </div>

                        </div>';
