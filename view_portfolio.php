<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    
    $query = "SELECT title, description, skill_image FROM skills WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            $imagePath = 'uploads/' . htmlspecialchars($row['skill_image']);
            $title = htmlspecialchars($row['title']);
            $description = htmlspecialchars($row['description']);
        } else {
            $error_message = 'No details found for this skill.';
        }
        mysqli_stmt_close($stmt);
    } else {
        $error_message = 'Error preparing SQL statement.';
    }
} else {
    $error_message = 'No skill ID provided.';
}
?>
<!DOCTYPE html>
<html lang="en">
<>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill Details</title>
    <style>
    /* General Styles */
body {
    background-color: #f1f5f9;
    font-family: 'Montserrat', sans-serif;
    color: #333;
    margin: 0;
    padding: 0;
    line-height: 1.6;
}

/* Container for Skill Details */
.container.resume-container {
    max-width: 900px;
    margin: 50px auto;
    padding: 30px;
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.container.resume-container:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

/* Header Section */
.resume-header {
    padding-bottom: 20px;
    border-bottom: 2px solid #e0e0e0;
    margin-bottom: 30px;
}

.resume-header h1 {
    font-size: 2.8rem;
    color: #2c3e50;
    letter-spacing: 1.2px;
    font-weight: 700;
    text-transform: capitalize;
    margin: 0;
}

/* Body Section */
.resume-body {
    padding: 0 20px;
}

.resume-body p {
    font-size: 1.2rem;
    color: #555;
    margin-top: 15px;
    line-height: 1.8;
}

/* Image Styling */
.resume-img {
    width: 100%;
    max-height: 400px;
    border-radius: 12px;
    object-fit: cover;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
}

.resume-img:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

/* Button Styles */
.btn-secondary {
    display: inline-block;
    padding: 12px 30px;
    font-size: 1rem;
    color: #ffffff;
    background-color: #1e88e5;
    border: none;
    border-radius: 8px;
    text-decoration: none;
    margin-top: 20px;
    transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
}

.btn-secondary:hover {
    background-color: #1565c0;
    transform: translateY(-3px);
}

/* Error Message Styling */
.error-message {
    color: #e74c3c;
    font-size: 1.4rem;
    text-align: center;
    margin: 20px 0;
    font-weight: 600;
}

/* Responsive Design */
@media (max-width: 768px) {
    .resume-header h1 {
        font-size: 2rem;
    }

    .resume-body p {
        font-size: 1rem;
    }

    .btn-secondary {
        font-size: 0.9rem;
        padding: 10px 25px;
    }
}
</style>
</head>
<body>
    <div class="container resume-container">
        <?php if (isset($error_message)) { ?>
            <p class="error-message"><?php echo htmlspecialchars($error_message); ?></p>
        <?php } else { ?>
            <div class="resume-header">
                <h1><?php echo htmlspecialchars($title); ?></h1>
            </div>
            <div class="resume-body">
                <img src="<?php echo htmlspecialchars($imagePath); ?>" class="resume-img" alt="Skill Image">
                <p><?php echo htmlspecialchars($description); ?></p>
                <a href="index.php" class="btn-secondary">Back to Home</a>
            </div>
        <?php } ?>
    </div>
</body>
</html>
