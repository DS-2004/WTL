<?php
$file = "students.json";

// // Load existing data
$students = [];
if (file_exists($file)) {
    $students = json_decode(file_get_contents($file), true);
}

// Handle Add
if (isset($_GET['action']) && $_GET['action'] == 'add') {
    $rno = $_GET['rno'];
    $name = $_GET['name'];
    $age = $_GET['age'];
    $students[$rno] = ["name" => $name, "age" => $age];
    echo "✅ Student added.<br>";
}

// Handle Update
if (isset($_GET['action']) && $_GET['action'] == 'update') {
    $rno = $_GET['rno'];
    if (isset($students[$rno])) {
        $students[$rno] = ["name" => $_GET['name'], "age" => $_GET['age']];
        echo "🔁 Student updated.<br>";
    } else {
        echo "❌ Student not found.<br>";
    }
}

// Handle Delete
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $rno = $_GET['rno'];
    if (isset($students[$rno])) {
        unset($students[$rno]);
        echo "🗑️ Student deleted.<br>";
    } else {
        echo "❌ Student not found.<br>";
    }
}

// Save updated data to file
file_put_contents($file, json_encode($students, JSON_PRETTY_PRINT));
?>

<!-- Add Student Form -->
<h2>Add Student</h2>
<form method="GET">
    <input type="hidden" name="action" value="add">
    Roll No: <input type="text" name="rno"><br>
    Name: <input type="text" name="name"><br>
    Age: <input type="text" name="age"><br>
    <button type="submit">Add</button>
</form>

<!-- Update Student Form -->
<h2>Update Student</h2>
<form method="GET">
    <input type="hidden" name="action" value="update">
    Roll No: <input type="text" name="rno"><br>
    New Name: <input type="text" name="name"><br>
    New Age: <input type="text" name="age"><br>
    <button type="submit">Update</button>
</form>

<!-- Delete Student Form -->
<h2>Delete Student</h2>
<form method="GET">
    <input type="hidden" name="action" value="delete">
    Roll No: <input type="text" name="rno"><br>
    <button type="submit">Delete</button>
</form>

<!-- Display All Students -->
<h2>All Students</h2>
<?php
foreach ($students as $rno => $info) {
    echo "<strong>Roll No:</strong> $rno | <strong>Name:</strong> {$info['name']} | <strong>Age:</strong> {$info['age']}<br>";
}
?>
