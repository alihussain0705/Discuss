<div class="container">
  <div class="heading">
    <h1>login</h1>
  </div>
    <form action="./server/requests.php" method="post">
  <div class="sm-3 col-6 offset-sm-3 my-4">
    <label for="email" class="form-label">User Email</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="user email">
  </div>
  <div class="sm-3 col-6 offset-sm-3 my-4">
    <label for="password" class="form-label">Password</label>
    <input type="text" name="password" class="form-control" id="password" placeholder="password">
  </div>
  <div class="sm-3 col-6 offset-sm-3 my-4">
      
      <button type="submit" name="login" class="btn btn-primary">Login</button>
    </div>
</form>
</div>