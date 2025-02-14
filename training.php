<?php
require_once dirname(__DIR__, 2) . '/include/database.php';

// Fetch all applicants who applied for training
$sql = "SELECT * FROM `contact_form`";
$mydb->setQuery($sql);
$trainingApplicants = $mydb->loadResultList();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Applicants</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            max-width: 900px;
        }
        .card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 250px; /* Ensure uniform height */
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
            background: #fff;
            padding: 15px;
        }
        .card:hover {
            transform: scale(1.02);
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #007bff;
        }
        .card-text {
            font-size: 1.1rem;
            color: #333;
        }
        .text-muted {
            font-size: 0.9rem;
            color: #666;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
         .col-md-4 {
             flex: 1 1 calc(33.333% - 20px);  /*3 cards per row */ 
             /* max-width: calc(33.333% - 20px); */
             min-width: 200px; 
        } 
    </style>
</head>
<body>

<h2 class="text-center">Training Applicants</h2>
<div class="container">
    <div class="row">
        <?php if (!empty($trainingApplicants)) : ?>
            <?php foreach ($trainingApplicants as $applicant) : ?>
                <div class="col-md-4 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($applicant->first_name) ?></h5>
                            <p class="card-text"><strong>Email:</strong> <?= htmlspecialchars($applicant->email) ?></p>
                            <p class="card-text"><strong>Phone:</strong> <?= htmlspecialchars($applicant->phone_number) ?></p>
                            <p class="card-text"><strong>Course:</strong> <?= htmlspecialchars($applicant->course_name) ?></p>
                            <p class="card-text"><strong>Query:</strong> <?= htmlspecialchars($applicant->query) ?></p>
                            <p class="text-muted small">Applied on: <?= htmlspecialchars($applicant->created_at) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p class="text-center text-danger">No training applicants found.</p>
        <?php endif; ?>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
