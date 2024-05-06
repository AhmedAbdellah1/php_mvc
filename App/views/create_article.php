<?php require "partial/header.php" ?>
<?php require "partial/navbar.php" ?>
    <div class="row">
      <div class="col-md-6 offset-md-3 ">
        <div class="card mt-5">
          <div class="card-header text-center">
            Create Article
          </div>
          <div class="card-body shadow">
            <form action="/articles/store" method="post">
              <div class="form-group">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control">
              </div>
              <div class="form-group">
                <label for="body" class="form-label">Body</label>
                <textarea name="body" id="body" cols="30" rows="10" class="form-control" ></textarea>
              </div>
              <div class="form-group d-flex justify-content-end mt-3">
                <button type="submit" class="btn btn-primary me-2">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
<?php require "partial/footer.php" ?>