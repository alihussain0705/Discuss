<style>
    .myquestion{
        display:flex;   
        justify-content:space-between;
    }   
</style>

<div class="container">
    <h1 class="heading">Questions</h1>
    <div class="row">
        <div class="col-8">
<?php
    $uid = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null; // Get user ID from session or set null

    include('./common/db.php');

    // Initialize query variable
    $query = "SELECT * FROM questions"; // Default query, get all questions

    // Check if category id is passed
    if(isset($_GET['c-id']) && !empty($_GET['c-id'])){
        $cid = $_GET['c-id']; // Get category ID from the URL
        $query = "SELECT * FROM questions WHERE category_id = $cid";
    }
    // Check if user id is passed
    else if(isset($_GET['u-id']) && !empty($_GET['u-id'])){
        $uid = $_GET['u-id']; // Get user ID from the URL
        $query = "SELECT * FROM questions WHERE user_id = $uid";
    }
    // Check if latest is passed
    else if(isset($_GET['latest'])){
        $query = "SELECT * FROM questions ORDER BY id DESC"; // Get the latest questions
    }
    // Check if search term is passed
    else if(isset($_GET['search']) && !empty($_GET['search'])){
        $search = $_GET['search']; // Get search term from URL
        // Use prepared statements to prevent SQL injection
        $query = "SELECT * FROM questions WHERE title LIKE '%$search%'";
    }

    // Execute the query
    if ($result = $conn->query($query)) {
        // Loop through the results and display questions
        foreach ($result as $row) {
            $title = $row['title'];
            $id = $row['id'];
            echo "<div class='question-list'>
            <h4 class='myquestion'><a href='?q-id=$id'>$title</a>";
            echo $uid ? "<a href='./server/requests.php?delete=$uid'>Delete</a>" : NULL;
            echo "</h4></div>";
        }
    } else {
        // If the query fails, output the error
        echo "Error: " . $conn->error;
    }
?>
        </div>
        <div class="col-4">
            <?php include('category-list.php')?>
        </div>
    </div>
</div>

