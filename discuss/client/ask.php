<div class="container">
  <div class="heading">
    <h1>Ask a question</h1>
  </div>
    <form action="./server/requests.php" method="post">
  <div class="sm-3 col-6 offset-sm-3 my-4">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Enter question">
  </div>

  <div class="sm-3 col-6 offset-sm-3 my-4">
    <label for="Discription" class="form-label">Discription</label>
    <textarea name="description" class="form-control" id="Discription" placeholder="Enter description"></textarea>
  </div>

  <div class="sm-3 col-6 offset-sm-3 my-4">
    <label for="category" class="form-label">Category</label>
    <?php
        include("category.php");
    ?>
  </div>

  <div class="sm-3 col-6 offset-sm-3 my-4">
      <button type="submit" name="ask" class="btn btn-primary">Ask a question</button>
    </div>
</form>
</div>