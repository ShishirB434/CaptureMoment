<!DOCTYPE html>
<html lang="en">
<head>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );  
    }
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capture Moments</title>
    <style>
        /* General Body Styles */
body {
    background-color: #f7fafc !important; /* Softer off-white background */
    font-family: 'Poppins', sans-serif; /* Sleek and modern font */
    font-style: italic;
    color: #333; /* Consistent dark grey for text */
    line-height: 1.7; /* Increased line spacing for better readability */
    transition: all 0.3s ease-in-out; /* Smooth transitions */
}

/* Navigation Bar */
.navbar-nav {
    position: absolute;
    right: 50px;
    top: 15px; /* Adjusted for better balance */
}

.navbar-brand {
    margin: 5px 30px; /* Fine-tuned margins */
    font-size: 24px; /* Slightly larger font for brand */
    color: #00695c; /* Stylish teal color */
    font-weight: 700; /* Bold for emphasis */
    transition: color 0.3s ease-in-out; /* Smooth hover */
}

.navbar-brand:hover {
    color: #004d40; /* Darker teal on hover */
}

/* Main Image Styling */
.main_img {
    width: 100% !important;
    height: auto;
    border-radius: 20px; /* Slightly more rounded corners */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    transition: transform 0.4s ease-in-out; /* Smooth hover effect */
}

.main_img:hover {
    transform: scale(1.02); /* Slightly larger on hover */
}

/* Text Area Styling */
.text-area {
    position: absolute;
    top: 45%; /* Adjusted to move text slightly higher */
    width: 450px; /* Wider for more content */
    color: white; /* White text color */
    transform: translateY(-50%);
    opacity: 0.9; /* Slight transparency for elegance */
}

.text-area.left {
    left: 10%;
    text-align: left;
}

.text-area.right {
    right: 10%;
    text-align: right;
}

.text-area .title {
    font-family: 'Poppins', sans-serif;
    font-size: 30px; /* Enhanced font size */
    font-weight: 700; /* Bold for emphasis */
    font-style: italic; /* Italic text */
    color: white; /* White text color */
    border-bottom: none; /* Remove border if not needed */
    padding-bottom: 8px;
    margin-bottom: 20px;
    text-transform: uppercase; /* All caps for impact */
    letter-spacing: 4px; /* More spacious lettering */
}

.text-area .description {
    font-size: 18px; /* Kept sleek */
    font-style: italic; /* Italic text */
    color: white; /* White text color */
    line-height: 1.6;
}

/* Section Backgrounds */
div#photo_background {
    background-color: #ffffff !important; /* Clean white background */
    padding: 50px !important;
    border-bottom: solid #e0e0e0 2px !important; /* Soft grey border */
    border-radius: 10px; /* Added rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05); /* Soft shadow for section depth */
}

div#contact, div#portfolio {
    background-color: #f0f4f8 !important; /* Very light blue-grey */
    padding: 40px !important; /* Increased padding */
    border-bottom: solid #ddd 1px !important; /* Light border */
}

/* Large Display Titles */
.display-1 {
    color: #333 !important; /* Neutral dark color */
    padding: 60px !important;
    font-size: 50px !important; /* Larger for better focus */
    font-weight: 600; /* Added weight */
    text-transform: uppercase; /* Capitalized for emphasis */
    letter-spacing: 3px; /* Enhanced letter spacing */
}

/* Navbar Links */
/* Navbar Links */
/* Navbar Links - Uniform color, no highlighting */
/* Navbar Links - Brighter color, no highlighting */
.nav a {
    padding: 10px 20px !important;
    font-size: 16px !important;
    font-weight: 500; /* Semi-bold for more weight */
    text-transform: none !important; /* Normal text for a cleaner look */
    letter-spacing: 2px; /* Subtle letter-spacing */
    color: #00d4ff !important; /* Brighter aqua color */
    transition: none; /* No transition effect */
    background-color: transparent !important; /* No background color on hover or select */
}

/* Remove hover and active highlight effects */
.nav a:hover, 
.nav a:active, 
.nav a:focus {
    color: #00d4ff !important; /* Keep the same bright color on hover, focus, or active state */
    background-color: transparent !important; /* No background color change */
    outline: none !important; /* No focus outline */
    box-shadow: none !important; /* No focus shadow */
}



/* Cards and Portfolio */
.col-md-4 {
    padding: 15px !important;
    margin-bottom: 30px;
}

.card#portfolio {
    background-color: #ffffff !important;
    border: solid #eee 1px !important;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); /* Light shadow for depth */
    border-radius: 10px; /* Rounded edges */
    transition: transform 0.4s ease-in-out, box-shadow 0.3s ease-in-out;
}

.card#portfolio:hover {
    transform: translateY(-5px); /* Lift on hover */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); /* Stronger shadow on hover */
    cursor: pointer;
}

/* Gallery */
.gallery-row {
    display: flex;
    flex-wrap: wrap;
    gap: 20px; /* Increased gap for better spacing */
}

.gallery-img {
    flex: 1 1 calc(25% - 20px); /* Equal image distribution */
    max-width: calc(25% - 20px);
    padding: 10px;
    border-radius: 12px; /* Soft rounded edges */
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.gallery-img:hover {
    transform: scale(1.05); /* Gentle scaling on hover */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Added shadow on hover */
}

/* Skills and Experience Section */
.skills-container {
    display: flex;
    flex-wrap: wrap; /* Allows images to wrap onto multiple lines if necessary */
    gap: 20px; /* Space between images */
    justify-content: center; /* Centers images horizontally */
}

.skill-image {
    flex: 1 1 calc(25% - 20px); /* Adjust percentage based on the number of images per row */
    max-width: calc(25% - 20px); /* Ensures images do not exceed their container's width */
    height: auto; /* Maintain aspect ratio */
    border-radius: 12px; /* Rounded edges */
    object-fit: cover; /* Ensures images cover their container without distortion */
}

/* Responsive Adjustments for Smaller Screens */
@media (max-width: 1200px) {
    .skill-image {
        flex: 1 1 calc(33.333% - 20px); /* 3 images per row for medium screens */
    }
}

@media (max-width: 768px) {
    .skill-image {
        flex: 1 1 calc(50% - 20px); /* 2 images per row for smaller screens */
    }
}

@media (max-width: 480px) {
    .skill-image {
        flex: 1 1 calc(100% - 20px); /* 1 image per row for very small screens */
    }
}

/* Category Menu */
.category-menu {
    text-align: center;
    margin-bottom: 30px; /* More spacing */
}

.category-menu button {
    margin: 10px;
    padding: 12px 30px;
    background-color: #0288d1; /* Vibrant blue */
    color: white;
    border-radius: 30px; /* Smooth pill-shaped button */
    border: none;
    font-size: 16px; /* Slightly larger */
    font-weight: 500; /* Bold for better impact */
    transition: background-color 0.3s ease-in-out;
}

.category-menu button:hover {
    background-color: darkblue; /* Darker on hover */
    cursor: pointer;
}
/* Active Category Button Style */
.category-menu button.active {
    background-color: #ff9800 !important; /* Highlight color (orange in this case) */
    color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Stronger shadow for emphasis */
}

/* Contact Section */
#contact {
    background-color: #ffffff; /* Clean, white */
    padding: 50px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
}


    </style>
    <!-- Icons ko library -->
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Mina:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mina:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
<body>
    <nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom nav justify-content-center" data-bs-theme="dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="icons and images/logo1.jpg" alt="Logo" width="46" height="38" class="d-inline-block align-text-top">
                CAPTURE MoMeNtS
            </a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active mina-regular mina-bold" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mina-regular mina-bold" href="#photo_gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mina-regular mina-bold" href="#portfolio">Skills/Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mina-regular mina-bold" href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<meta charset="UTF-8">
<meta name="copyright" content="Captured Moments Photography, 2024">
<meta name="author" content="Captured Moments, http://www.capturedmoments.com">
<meta name="keywords" content="Photography, Portfolio, Captured Moments, Wildlife Photography, Event Photography, Portrait Photography, Travel Photography, Photographers, Professional Photography">
<meta name="description" content="Captured Moments showcases stunning photography from talented photographers specializing in wildlife, events, portraits, and travel. Discover their unique work and artistic perspectives through breathtaking imagery.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="index, follow">

<!-- Open Graph for Social Media -->
<meta property="og:title" content="Captured Moments - Professional Photography Portfolio">
<meta property="og:type" content="website">
<meta property="og:url" content="http://www.capturedmoments.com">
<meta property="og:image" content="http://www.capturedmoments.com/images/og-image.jpg">
<meta property="og:description" content="Explore the captivating photography portfolio of our talented photographers, featuring breathtaking moments in wildlife, events, and portrait photography.">

<!-- Twitter Card for Social Media -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Captured Moments - Photography Portfolio">
<meta name="twitter:description" content="Discover a collection of powerful photography from top photographers, showcasing wildlife, events, and portrait moments captured with passion.">
<meta name="twitter:image" content="http://www.capturedmoments.com/images/twitter-image.jpg">

    <div class="main_img">
        <img src="icons and images/Main_3.jpeg" class="main_img">
        <div class="container-fluid">
        <div class="text-area left">
            <div class="title"><?php include 'connect.php';
          $query = "SELECT title2, description2 FROM home";          
          $result = mysqli_query($conn, $query);
          if (mysqli_num_rows($result) > 0) {            
            while ($row = mysqli_fetch_assoc($result)) {                
              echo $row['title2'];
            }
          } 
              ?></div>
            <div class="description"><?php include 'connect.php';
          $query = "SELECT title2, description2 FROM home";          
          $result = mysqli_query($conn, $query);
          if (mysqli_num_rows($result) > 0) {            
            while ($row = mysqli_fetch_assoc($result)) {                
              echo $row['description2'];
            }
          } 
              ?></div>
        </div>
        </div>
        <div class="text-area right">
            <div class="title"><?php include 'connect.php';
          $query = "SELECT title, description FROM home";          
          $result = mysqli_query($conn, $query);
          if (mysqli_num_rows($result) > 0) {            
            while ($row = mysqli_fetch_assoc($result)) {                
              echo $row['title'];
            }
          } 
              ?></div>
            <div class="description"><?php include 'connect.php';
          $query = "SELECT title, description FROM home";          
          $result = mysqli_query($conn, $query);
          if (mysqli_num_rows($result) > 0) {            
            while ($row = mysqli_fetch_assoc($result)) {                
              echo $row['description'];
            }
          } 
              ?></div>
        </div>
    </div>
    <div class="container-fluid" id="photo_gallery"></div>
    <div class="container-fluid" id="photo_background">
        <center><h1 class="carter-one-regular">Gallery</h1></center>

        <div class="category-menu">
            <form method="POST" id="categoryForm" action="#photo_background">
                
                <button type="submit" name="all">Show All</button>
                <?php
                include 'connect.php';
                
                
                $categoryQuery = "SELECT DISTINCT img_category FROM image_information";
                $categoryResult = mysqli_query($conn, $categoryQuery);

                if (mysqli_num_rows($categoryResult) > 0) {
                    while ($categoryRow = mysqli_fetch_assoc($categoryResult)) {
                        $category = $categoryRow['img_category'];
                        
                        echo '<button type="submit" name="category" value="' . $category . '">' . ucwords(str_replace('_', ' ', $category)) . '</button>';
                    }
                }
                ?>
            </form>
        </div>

        <div class="gallery-row" id="gallery">
            <?php
           
            if (isset($_POST['all'])) {
                $query = "SELECT img_name FROM image_information";
            }
           
            elseif (isset($_POST['category'])) {
                $selectedCategory = $_POST['category'];
                $query = "SELECT img_name FROM image_information WHERE img_category = '$selectedCategory'";
            }
            
            else {
                $query = "SELECT img_name FROM image_information";
            }

            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<img src="uploads/' . $row['img_name'] . '" class="gallery-img">';
                    
                }
            } else {
                echo '<p>No images found in the database.</p>';
            }
            ?>
        </div>
    </div>
    <div class="container-fluid" id="portfolio">
    <h1 class="text-center carter-one-regular white_text down-bottom">Our Skills and Experience</h1>

    <div class="container-fluid" id="skills">
    <br>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php
        include 'connect.php';

        // Check if the connection was successful
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $query = "SELECT id, title, skill_image FROM skills";
        $result = mysqli_query($conn, $query);

        // Check if the query executed successfully
        if ($result === false) {
            echo "Error in query execution: " . mysqli_error($conn);
        } else {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $imagePath = 'uploads/' . htmlspecialchars($row['skill_image']);
                    $title = htmlspecialchars($row['title']);
                    $id = htmlspecialchars($row['id']);

                    echo '<div class="col-md-4" id="skillcard">';
                    echo '<div class="card" id="portfolio">';
                    echo '<img src="' . $imagePath . '" class="card-img-top" alt="Skill Image">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $title . '</h5>';
                    echo '<a href="view_portfolio.php?id=' . $id . '" class="btn btn-primary">View Portfolio</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>No data found in the database.</p>';
            }
        }

        mysqli_close($conn); // Close the database connection
        ?>
    </div>
</div>


<div class="container-fluid" id="contact">
<div class="row">
    <div class="col-md-6 offset-md-3">
       <center> <h2 class=" carter-one-regular">Contact Us</h2></center>
        
        <form method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Enter your message" name="message" required></textarea>
            </div>
            <br>
            <div class="category-menu">
            <button type="submit" name="contact" class="button">Submit</button>
            </div>
            
        </form>
    </div>
</div>
<br>
<br>
</div>

<footer class="bg-dark text-white text-center py-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <p>&copy; 2024 Capture Moments. All rights reserved.</p>
      </div>
      <div class="col">
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="https://www.facebook.com/" class="text-white">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://www.x.com/ class="text-white">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://www.instagram.com/kushpanthi/" class="text-white">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

<?php
include 'connect.php';
if (isset($_POST['contact'])) {
    $inquiry_name = ($_POST['name']);
    $inquiry_email = ($_POST['email']);
    $inquiry_message = ($_POST['message']);
    $query2 = "insert into customer_inquiry (name,email,message) values('$inquiry_name','$inquiry_email','$inquiry_message');";
    $inquiry_check = mysqli_query($conn, $query2);
    if($inquiry_check)
    {
        echo "<script>alert('Your message has been successfully sent. We’ll respond soon.');</script>";
    }
    else
    {
        echo "<script>alert('Failed to submit inquiry');</script>";
    }
    
  }
?>