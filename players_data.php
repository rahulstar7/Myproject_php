<?php
include('connection.php');

$message = "";

// DELETE
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM players WHERE id=$id");
    $message = "Player deleted successfully!";
}

// ADD / UPDATE
if ($_POST) {
    $name = $_POST['name'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];

    if ($_POST['id'] != "") {
        $id = $_POST['id'];
        $conn->query("UPDATE players SET name='$name', country='$country', gender='$gender', role='$role' WHERE id=$id");
        $message = "Player updated successfully!";
    } else {
        $conn->query("INSERT INTO players (name, country, gender, role) VALUES ('$name','$country','$gender','$role')");
        $message = "Player added successfully!";
    }
}

// EDIT
$editData = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $res = $conn->query("SELECT * FROM players WHERE id=$id");
    $editData = $res->fetch_assoc();
}

// FETCH
$players = $conn->query("SELECT * FROM players");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Player Management</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #1d2671, #c33764);
            min-height: 100vh;
        }
        .card {
            border-radius: 15px;
        }
        .table {
            border-radius: 10px;
            overflow: hidden;
        }
        .btn-custom {
            border-radius: 20px;
        }
    </style>
</head>

<body>

<div class="container py-5">

    <div class="card shadow-lg p-4">

        <div class="d-flex justify-content-between mb-3">
            <h3 class="text-primary">🏏 Player Management</h3>
            <button class="btn btn-success btn-custom" data-bs-toggle="modal" data-bs-target="#playerModal">
                + Add Player
            </button>
        </div>

        <!-- Message -->
        <?php if ($message) { ?>
            <div class="alert alert-success" id="msg"><?php echo $message; ?></div>
        <?php } ?>

        <!-- Table -->
        <table class="table table-striped table-hover text-center align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Country</th>
                    <th>Gender</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
            <?php while($row = $players->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['country']; ?></td>
                    <td><?= $row['gender']; ?></td>
                    <td><?= $row['role']; ?></td>
                    <td>
                        <a href="?edit=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="?delete=<?= $row['id']; ?>" 
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>

        </table>

    </div>

</div>

<!-- Modal (Add/Edit Form) -->
<div class="modal fade" id="playerModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <form method="POST">

                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">
                        <?= $editData ? "Edit Player" : "Add Player"; ?>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <input type="hidden" name="id" value="<?= $editData['id'] ?? ''; ?>">

                    <input type="text" name="name" class="form-control mb-2"
                        placeholder="Player Name"
                        value="<?= $editData['name'] ?? ''; ?>" required>

                    <input type="text" name="country" class="form-control mb-2"
                        placeholder="Country"
                        value="<?= $editData['country'] ?? ''; ?>" required>

                    <select name="gender" class="form-control mb-2" required>
                        <option value="">Select Gender</option>
                        <option <?= (($editData['gender'] ?? '')=="Male")?"selected":""; ?>>Male</option>
                        <option <?= (($editData['gender'] ?? '')=="Female")?"selected":""; ?>>Female</option>
                    </select>

                    <input type="text" name="role" class="form-control mb-2"
                        placeholder="Role"
                        value="<?= $editData['role'] ?? ''; ?>" required>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-success w-100">
                        <?= $editData ? "Update Player" : "Add Player"; ?>
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Auto hide message
setTimeout(() => {
    let msg = document.getElementById("msg");
    if(msg) msg.style.display = "none";
}, 3000);

// Auto open modal in edit mode
<?php if ($editData) { ?>
    var myModal = new bootstrap.Modal(document.getElementById('playerModal'));
    myModal.show();
<?php } ?>
</script>

</body>
</html>