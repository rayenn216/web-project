<!--
=========================================================
* Material Dashboard 3 - v3.2.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2024 GYMNATION (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by GYMNATION

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 3 - Coach Registration
  </title>
  <!--     Fonts and icons     -->
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
      padding: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }
    .form-group {
      margin-bottom: 1.5rem;
    }
    .form-label {
      font-weight: 600;
      margin-bottom: 0.5rem;
      display: block;
    }
    .form-control {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #d2d6da;
      border-radius: 0.5rem;
      transition: all 0.2s ease;
    }
    .form-control:focus {
      border-color: #e91e63;
      box-shadow: 0 0 0 2px rgba(233, 30, 99, 0.25);
    }
    .btn-submit {
      background-color: #e91e63;
      color: white;
      border: none;
      padding: 0.75rem 1.5rem;
      border-radius: 0.5rem;
      cursor: pointer;
      font-weight: 600;
      transition: all 0.2s ease;
    }
    .btn-submit:hover {
      background-color: #c2185b;
    }
    .alert {
      padding: 1rem;
      border-radius: 0.5rem;
      margin-bottom: 1.5rem;
    }
    .alert-success {
      background-color: rgba(24, 206, 15, 0.1);
      color: #18ce0f;
    }
    .alert-error {
      background-color: rgba(255, 0, 0, 0.1);
      color: #f44336;
    }
  </style>
</head>

<body class="g-sidenav-show  bg-gray-100">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand px-4 py-3 m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img" width="26" height="26" alt="main_logo">
        <span class="ms-1 text-sm text-dark">GYMNATION</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
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
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item">
  <a class="nav-link bg-gradient-dark text-white active" href="../pages/billing.php">
    <i class="material-symbols-rounded opacity-5">receipt_long</i>
    <span class="nav-link-text ms-1">Add a Coach</span>
  </a>
</li>

        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/virtual-reality.html">
            <i class="material-symbols-rounded opacity-5">view_in_ar</i>
            <span class="nav-link-text ms-1">Virtual Reality</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/rtl.html">
            <i class="material-symbols-rounded opacity-5">format_textdirection_r_to_l</i>
            <span class="nav-link-text ms-1">RTL</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/notifications.html">
            <i class="material-symbols-rounded opacity-5">notifications</i>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/profile.html">
            <i class="material-symbols-rounded opacity-5">person</i>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/sign-in.html">
            <i class="material-symbols-rounded opacity-5">login</i>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/sign-up.html">
            <i class="material-symbols-rounded opacity-5">assignment</i>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    
    </div>
  </aside>
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
  
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="form-container">
            <h4 class="mb-4">Register New Coach</h4>
            
            <?php
            // Connexion à la base de données
            $servername = "127.0.0.1"; // Ou "localhost"
            $username = "root";
            $password = "";
            $dbname = "projet";
            $port = 4306; // Ajout du port !
            
            // Créer la connexion
            $conn = new mysqli($servername, $username, $password, $dbname, $port);

            // Vérifier la connexion
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Traitement du formulaire lorsqu'il est soumis
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Récupération et nettoyage des données
                $nomprenom = htmlspecialchars($_POST['nomprenom']);
                $email = htmlspecialchars($_POST['email']);
                $age = intval($_POST['age']);
                $specialite = htmlspecialchars($_POST['specialite']);
                $experience = htmlspecialchars($_POST['experience']);
                $salaire = intval($_POST['salaire']);
                $date = $_POST['date'];
                $cin = intval($_POST['cin']);
                
                // Gestion du fichier image
                $image = '';
                if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                    $target_dir = "uploads/";
                    if (!file_exists($target_dir)) {
                        mkdir($target_dir, 0777, true);
                    }
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    
                    // Vérifier si le fichier est une image
                    $check = getimagesize($_FILES["image"]["tmp_name"]);
                    if ($check !== false) {
                        // Autoriser certains formats de fichier
                        if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif") {
                            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                                $image = $target_file;
                            } else {
                                echo '<div class="alert alert-error">Une erreur est survenue lors du téléchargement de l\'image.</div>';
                            }
                        } else {
                            echo '<div class="alert alert-error">Seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés.</div>';
                        }
                    } else {
                        echo '<div class="alert alert-error">Le fichier n\'est pas une image.</div>';
                    }
                }

                // Préparation de la requête SQL
                $sql = "INSERT INTO coach (nomprenom, email, age, specialite, experience, salaire, date, image, cin) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssissiisi", $nomprenom, $email, $age, $specialite, $experience, $salaire, $date, $image, $cin);
                
                // Exécution de la requête
                if ($stmt->execute()) {
                    echo '<div class="alert alert-success">Coach registered successfully!</div>';
                } else {
                    echo '<div class="alert alert-error">Error: ' . $stmt->error . '</div>';
                }
                
                $stmt->close();
            }
            $conn->close();
            ?>
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="nomprenom">Full Name</label>
                    <input type="text" class="form-control" id="nomprenom" name="nomprenom" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-label" for="age">Age</label>
                    <input type="number" class="form-control" id="age" name="age" min="18" max="99" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-label" for="specialite">Specialty</label>
                    <input type="text" class="form-control" id="specialite" name="specialite" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-label" for="experience">Experience (years)</label>
                    <input type="text" class="form-control" id="experience" name="experience" required>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-label" for="salaire">Salary (DT)</label>
                    <input type="number" class="form-control" id="salaire" name="salaire" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-label" for="date">Hire Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-label" for="cin">CIN</label>
                    <input type="number" class="form-control" id="cin" name="cin" required>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <label class="form-label" for="image">Photo</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
              </div>
              
              <button type="submit" class="btn-submit">Register Coach</button>
            </form>
          </div>
        </div>
        <?php
// Connexion à la base de données
$conn = new mysqli("127.0.0.1", "root", "", "projet", 4306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Suppression d'un coach si demandé
if (isset($_GET['delete'])) {
    $idToDelete = intval($_GET['delete']);
    $conn->query("DELETE FROM coach WHERE id = $idToDelete");
    echo '<div class="alert alert-success">Coach deleted successfully.</div>';
}

// Récupération des coachs
$result = $conn->query("SELECT * FROM coach");

if ($result->num_rows > 0) {
    echo '<h4 class="mt-5">All Coaches</h4>';
    echo '<div class="table-responsive"><table class="table table-bordered">';
    echo '<thead><tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Specialty</th>
            <th>Experience</th>
            <th>Salary</th>
            <th>Hire Date</th>
            <th>Actions</th>
          </tr></thead><tbody>';

    while ($row = $result->fetch_assoc()) {
        echo '<tr>
                <td>' . $row['cin'] . '</td>
                <td><img src="' . $row['image'] . '" width="50" height="50" alt="Coach Photo"></td>
                <td>' . $row['nomprenom'] . '</td>
                <td>' . $row['email'] . '</td>
                <td>' . $row['age'] . '</td>
                <td>' . $row['specialite'] . '</td>
                <td>' . $row['experience'] . '</td>
                <td>' . $row['salaire'] . '</td>
                <td>' . $row['date'] . '</td>
                <td>
                    <a href="detailcoach.php?cin=' . $row['cin'] . '" class="btn btn-sm btn-info">Details</a>
                    <a href="edit_coach.php?cin=' . $row['cin'] . '" class="btn btn-sm btn-primary">Edit</a>
                    <a href="deletecoach.php?cin=' . $row['cin'] . '" class="btn btn-sm btn-danger" onclick="return confirm(\'Are you sure?\')">Delete</a>
                </td>
              </tr>';
    }

    echo '</tbody></table></div>';
} else {
    echo '<p class="mt-4">No coaches found.</p>';
}

$conn->close();
?>

    </div>
      </div>
    </div>
  </main>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.2.0"></script>
</body>
<!-- Edit Coach Modal -->
<div class="modal fade" id="editCoachModal" tabindex="-1" aria-labelledby="editCoachModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editCoachModalLabel">Edit Coach</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="editCoachForm" method="post">
          <input type="hidden" id="coachId" name="id">
          <div class="mb-3">
            <label for="editName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="editName" name="nomprenom" required>
          </div>
          <div class="mb-3">
            <label for="editEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="editEmail" name="email" required>
          </div>
          <div class="mb-3">
            <label for="editAge" class="form-label">Age</label>
            <input type="number" class="form-control" id="editAge" name="age" required>
          </div>
          <div class="mb-3">
            <label for="editSpeciality" class="form-label">Specialty</label>
            <input type="text" class="form-control" id="editSpeciality" name="specialite" required>
          </div>
          <div class="mb-3">
            <label for="editExperience" class="form-label">Experience (years)</label>
            <input type="number" class="form-control" id="editExperience" name="experience" required>
          </div>
          <div class="mb-3">
            <label for="editSalary" class="form-label">Salary</label>
            <input type="number" class="form-control" id="editSalary" name="salaire" required>
          </div>
          <div class="mb-3">
            <label for="editDate" class="form-label">Hire Date</label>
            <input type="date" class="form-control" id="editDate" name="date" required>
          </div>
          <div class="mb-3">
            <label for="editCIN" class="form-label">CIN</label>
            <input type="text" class="form-control" id="editCIN" name="cin" required>
          </div>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

</html>
