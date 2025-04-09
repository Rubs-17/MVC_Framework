
<form action="../controller/UserController.php?action=create" method="post" class="container mt-5">
<h2>Add User</h2>
<div class="mb-3">
<label>Lastname:</label>
<input type="text" name="lastname" class="form-control" required>
</div>
<div class="mb-3">
<label>Firstname:</label>
<input type="text" name="firstname" class="form-control" required>
</div>
<button class="btn btn-success">Save</button>
<a href="../index.php" class="btn btn-secondary">Back</a>
<link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
</form>