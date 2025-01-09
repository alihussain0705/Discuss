<style>
    .answer-wrapper {
        border-bottom: 1px solid #c9c5c5;
        /* padding: 5px;
        margin: 5px; */
        margin-bottom:10px;
        padding:5px;
        font-weight:550;
        /* width:30rem; */
    }
</style>

<div class="container">
    <div >
    <h5>Answers:</h5>
    <?php
        $query="select * from answers where question_id = $qid";
        $result=$conn->query($query);
        foreach ($result as $row) {
            $answer=$row['answer'];
            echo "<p class='answer-wrapper'>$answer</p>";
        }
    ?>
</div>
</div>