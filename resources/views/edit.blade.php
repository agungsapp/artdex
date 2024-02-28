<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post Modal</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- Button to trigger the modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPostModal">
  Add Post
</button>

<!-- Modal -->
<div class="modal fade" id="addPostModal" tabindex="-1" role="dialog" aria-labelledby="addPostModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addPostModalLabel">Add Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form for adding a post -->
        <form>
          <div class="form-group">
            <label for="postTitle">Title</label>
            <input type="text" class="form-control" id="postTitle" placeholder="Enter Title" required>
          </div>
          <div class="form-group">
            <label for="postCategory">Category</label>
            <select class="form-control" id="postCategory" required>
              <option value="category1">2D</option>
              <option value="category2">3D</option>
            </select>
          </div>
          <div class="form-group">
            <label for="postDescription">Description</label>
            <textarea class="form-control" id="postDescription" rows="3" placeholder="Enter Description" required></textarea>
          </div>
          <div class="form-group">
            <label for="postImage">Upload Image</label>
            <input style="width: 100%" type="file" class="form-control-file" id="postImage" accept="image/*" required>
          </div>
          <button style="width:100%; background-color: goldenrod; border:none;" type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
