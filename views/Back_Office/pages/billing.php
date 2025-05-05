<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    GYMNATION - Coach Management
  </title>
  <!-- Fonts and icons -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.2.0" rel="stylesheet" />
  <style>
    .form-container {
      background-color: #fff;
      border-radius: 10px;
      padding: 25px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
      margin-top: 20px;
    }
    .form-group {
      margin-bottom: 1.5rem;
    }
    .form-label {
      font-weight: 600;
      margin-bottom: 0.5rem;
      display: block;
      color: #344767;
    }
    .form-control {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #d2d6da;
      border-radius: 0.5rem;
      transition: all 0.3s ease;
      font-size: 0.875rem;
    }
    .form-control:focus {
      border-color: #e91e63;
      box-shadow: 0 0 0 2px rgba(233, 30, 99, 0.25);
    }
    .btn-submit {
      background-color: #e91e63;
      color: white;
      border: none;
      padding: 0.75rem 1.75rem;
      border-radius: 0.5rem;
      cursor: pointer;
      font-weight: 600;
      transition: all 0.3s ease;
      font-size: 0.875rem;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    .btn-submit:hover {
      background-color: #c2185b;
      transform: translateY(-1px);
    }
    .alert {
      padding: 1rem;
      border-radius: 0.5rem;
      margin-bottom: 1.5rem;
      font-size: 0.875rem;
    }
    .alert-success {
      background-color: rgba(24, 206, 15, 0.1);
      color: #18ce0f;
      border: 1px solid rgba(24, 206, 15, 0.2);
    }
    .alert-error {
      background-color: rgba(255, 0, 0, 0.1);
      color: #f44336;
      border: 1px solid rgba(244, 67, 54, 0.2);
    }
    .coach-table {
      margin-top: 30px;
    }
    .coach-table img {
      border-radius: 50%;
      object-fit: cover;
    }
    .action-btns .btn {
      margin-right: 5px;
      margin-bottom: 5px;
    }
    .section-title {
      color: #344767;
      margin-bottom: 20px;
      font-weight: 600;
    }
    .required-field::after {
      content: " *";
      color: #e91e63;
    }
    .preview-image {
      max-width: 100px;
      max-height: 100px;
      margin-top: 10px;
      display: none;
      border-radius: 5px;
    }
  </style>
</head>

<body class="g-sidenav-show bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand px-4 py-3 m-0" href="https://demos.creative-tim.com/material-dashboard/pages/dashboard" target="_blank">
        <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img" width="26" height="26" alt="main_logo">
        <span class="ms-1 text-sm text-dark">GYMNATION</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/dashboard.html">
            <i class="material-symbols-rounded opacity-5">dashboard</i>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/tables.html">
            <i class="material-symbols-rounded opacity-5">table_view</i>
            <span class="nav-link-text ms-1">Members</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-gradient-dark text-white active" href="../pages/billing.php">
            <i class="material-symbols-rounded opacity-5">fitness_center</i>
            <span class="nav-link-text ms-1">Coaches</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/virtual-reality.html">
            <i class="material-symbols-rounded opacity-5">calendar_today</i>
            <span class="nav-link-text ms-1">Schedule</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/notifications.html">
            <i class="material-symbols-rounded opacity-5">payments</i>
            <span class="nav-link-text ms-1">Payments</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Account</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/profile.html">
            <i class="material-symbols-rounded opacity-5">person</i>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/sign-in.html">
            <i class="material-symbols-rounded opacity-5">logout</i>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="form-container">
            <h4 class="mb-4">Register New Coach</h4>
            
            <?php
            // Database connection
            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            $dbname = "projet";
            $port = 4306;
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname, $port);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Form submission handling
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Data validation flag
                $isValid = true;
                
                // Retrieve and sanitize data
                $nomprenom = trim(htmlspecialchars($_POST['nomprenom']));
                $email = trim(htmlspecialchars($_POST['email']));
                $age = intval($_POST['age']);
                $specialite = trim(htmlspecialchars($_POST['specialite']));
                $experience = intval($_POST['experience']);
                $salaire = floatval($_POST['salaire']);
                $date = $_POST['date'];
                $cin = trim(htmlspecialchars($_POST['cin']));
                
                // Validate inputs
                $errors = [];
                
                if (empty($nomprenom)) {
                    $errors[] = "Full name is required.";
                    $isValid = false;
                }
                
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors[] = "Invalid email format.";
                    $isValid = false;
                }
                
                if ($age < 18 || $age > 99) {
                    $errors[] = "Age must be between 18 and 99.";
                    $isValid = false;
                }
                
                if (empty($specialite)) {
                    $errors[] = "Specialty is required.";
                    $isValid = false;
                }
                
                if ($experience < 0 || $experience > 50) {
                    $errors[] = "Experience must be between 0 and 50 years.";
                    $isValid = false;
                }
                
                if ($salaire <= 0) {
                    $errors[] = "Salary must be a positive number.";
                    $isValid = false;
                }
                
                if (empty($date)) {
                    $errors[] = "Hire date is required.";
                    $isValid = false;
                }
                
                if (!preg_match('/^[0-9]{8}$/', $cin)) {
                    $errors[] = "CIN must be 8 digits.";
                    $isValid = false;
                }
                
                // Check if CIN already exists
                $checkStmt = $conn->prepare("SELECT cin FROM coach WHERE cin = ?");
                $checkStmt->bind_param("s", $cin);
                $checkStmt->execute();
                $checkStmt->store_result();
                
                if ($checkStmt->num_rows > 0) {
                    $errors[] = "A coach with this CIN already exists.";
                    $isValid = false;
                }
                $checkStmt->close();
                
                // Handle file upload
                $image = '';
                if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
                    $target_dir = "uploads/";
                    if (!file_exists($target_dir)) {
                        mkdir($target_dir, 0777, true);
                    }
                    
                    // Generate unique filename
                    $file_ext = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
                    $unique_name = uniqid() . '.' . $file_ext;
                    $target_file = $target_dir . $unique_name;
                    
                    // Check if image file is a actual image
                    $check = getimagesize($_FILES["image"]["tmp_name"]);
                    if ($check === false) {
                        $errors[] = "File is not an image.";
                        $isValid = false;
                    }
                    
                    // Check file size (max 2MB)
                    if ($_FILES["image"]["size"] > 2000000) {
                        $errors[] = "Image is too large (max 2MB).";
                        $isValid = false;
                    }
                    
                    // Allow certain file formats
                    $allowed_exts = ['jpg', 'jpeg', 'png', 'gif'];
                    if (!in_array($file_ext, $allowed_exts)) {
                        $errors[] = "Only JPG, JPEG, PNG & GIF files are allowed.";
                        $isValid = false;
                    }
                    
                    // Try to upload file if everything is OK
                    if ($isValid) {
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            $image = $target_file;
                        } else {
                            $errors[] = "Error uploading image.";
                            $isValid = false;
                        }
                    }
                } else {
                    $errors[] = "Coach photo is required.";
                    $isValid = false;
                }
                
                // Display errors if any
                if (!$isValid) {
                    foreach ($errors as $error) {
                        echo '<div class="alert alert-error">' . $error . '</div>';
                    }
                } else {
                    // Prepare SQL statement
                    $sql = "INSERT INTO coach (nomprenom, email, age, specialite, experience, salaire, date, image, cin) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("ssisdisss", $nomprenom, $email, $age, $specialite, $experience, $salaire, $date, $image, $cin);
                    
                    // Execute the statement
                    if ($stmt->execute()) {
                        echo '<div class="alert alert-success">Coach registered successfully!</div>';
                        
                        // Clear form fields
                        echo '<script>
                            document.getElementById("coachForm").reset();
                            document.getElementById("imagePreview").style.display = "none";
                        </script>';
                    } else {
                        echo '<div class="alert alert-error">Error: ' . $stmt->error . '</div>';
                    }
                    
                    $stmt->close();
                }
            }
            ?>
            
            <form id="coachForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label required-field" for="nomprenom">Full Name</label>
                    <input type="text" class="form-control" id="nomprenom" name="nomprenom" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label required-field" for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-label required-field" for="age">Age</label>
                    <input type="number" class="form-control" id="age" name="age" min="18" max="99" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-label required-field" for="specialite">Specialty</label>
                    <input type="text" class="form-control" id="specialite" name="specialite" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-label required-field" for="experience">Experience (years)</label>
                    <input type="number" class="form-control" id="experience" name="experience" min="0" max="50" required>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-label required-field" for="salaire">Salary (DT)</label>
                    <input type="number" step="0.01" class="form-control" id="salaire" name="salaire" min="0" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-label required-field" for="date">Hire Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-label required-field" for="cin">CIN (8 digits)</label>
                    <input type="text" class="form-control" id="cin" name="cin" pattern="[0-9]{8}" title="8 digit CIN number" required>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <label class="form-label required-field" for="image">Photo</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required onchange="previewImage(this)">
                <img id="imagePreview" class="preview-image" src="#" alt="Preview">
                <small class="text-muted">Max size: 2MB (JPG, PNG, GIF)</small>
              </div>
              
              <button type="submit" class="btn-submit">Register Coach</button>
            </form>
          </div>
        </div>
      </div>
      
      <div class="row mt-5">
        <div class="col-12">
          <div class="form-container coach-table">
            <h4 class="section-title">Coaches List</h4>
            
            <?php
            // Display coaches table
            $result = $conn->query("SELECT * FROM coach ORDER BY date DESC");
            
            if ($result->num_rows > 0) {
                echo '<div class="table-responsive">
                        <table class="table table-bordered table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Specialty</th>
                                <th>Experience</th>
                                <th>Salary (DT)</th>
                                <th>Hire Date</th>
                                <th class="action-btns">Actions</th>
                            </tr>
                        </thead>
                        <tbody>';
                
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>
                            <td><img src="' . $row['image'] . '" width="50" height="50" alt="Coach Photo"></td>
                            <td>' . htmlspecialchars($row['nomprenom']) . '</td>
                            <td>' . htmlspecialchars($row['specialite']) . '</td>
                            <td>' . $row['experience'] . ' years</td>
                            <td>' . number_format($row['salaire'], 2) . '</td>
                            <td>' . date('M d, Y', strtotime($row['date'])) . '</td>
                            <td class="action-btns">
                                <a href="detailcoach.php?cin=' . $row['cin'] . '" class="btn btn-sm btn-info">Details</a>
                                <a href="edit_coach.php?cin=' . $row['cin'] . '" class="btn btn-sm btn-primary">Edit</a>
                                <a href="deletecoach.php?cin=' . $row['cin'] . '" class="btn btn-sm btn-danger" onclick="return confirm(\'Are you sure you want to delete this coach?\')">Delete</a>
                            </td>
                          </tr>';
                }
                
                echo '</tbody></table></div>';
            } else {
                echo '<div class="alert alert-info">No coaches found. Please add a coach using the form above.</div>';
            }
            
            $conn->close();
            ?>
          </div>
        </div>
      </div>
    </div>
  </main>
  
  <!-- Core JS Files -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    // Initialize perfect scrollbar
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    
    // Image preview function
    function previewImage(input) {
      const preview = document.getElementById('imagePreview');
      const file = input.files[0];
      const reader = new FileReader();
      
      reader.onload = function(e) {
        preview.src = e.target.result;
        preview.style.display = 'block';
      }
      
      if (file) {
        reader.readAsDataURL(file);
      }
    }
    
    // Form validation
    function validateForm() {
      const cin = document.getElementById('cin').value;
      if (!/^\d{8}$/.test(cin)) {
        alert('CIN must be exactly 8 digits.');
        return false;
      }
      
      const age = document.getElementById('age').value;
      if (age < 18 || age > 99) {
        alert('Age must be between 18 and 99.');
        return false;
      }
      
      const experience = document.getElementById('experience').value;
      if (experience < 0 || experience > 50) {
        alert('Experience must be between 0 and 50 years.');
        return false;
      }
      
      const salary = document.getElementById('salaire').value;
      if (salary <= 0) {
        alert('Salary must be a positive number.');
        return false;
      }
      
      return true;
    }
    
    // Set max date to today for hire date
    document.getElementById('date').max = new Date().toISOString().split('T')[0];
  </script>
</body>
</html>