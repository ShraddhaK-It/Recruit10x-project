<?php
require_once dirname(__DIR__, 2) . '/include/database.php'; // Include your database connection

if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = intval($_GET['id']); // Get the applicant ID and sanitize it

    // Prepare the DELETE query
    $sql = "DELETE FROM `contact_form` WHERE `id` = ?";
    $stmt = $mydb->prepare($sql);

    // Bind the parameter (id) to the statement
    $stmt->bind_param('i', $id); // 'i' is the type (integer)

    // Execute the query
    if ($stmt->execute()) {
        // Redirect back to the applicants page with a success message
        header("Location: index.php?view=training_applicants&msg=deleted");
        exit();
    } else {
        // Redirect with an error message if delete fails
        header("Location: index.php?view=training_applicants&msg=error");
        exit();
    }
}
?>
