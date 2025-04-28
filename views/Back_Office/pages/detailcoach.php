<?php
// Inclusion of configuration file

require_once "../../../core/disponibiliteC.php";
require_once "../../../entities/disponibilite.php";

// Check if coach ID is provided
if (!isset($_GET['cin']) || empty($_GET['cin'])) {
    header("Location: billing.php");
    exit;
}

$cin = intval($_GET['cin']);

// Connect to database
$conn = new mysqli("127.0.0.1", "root", "", "projet", 4306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get coach details
$stmt = $conn->prepare("SELECT * FROM coach WHERE cin = ?");
$stmt->bind_param("i", $cin);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    $conn->close();
    header("Location: billing.php");
    exit;
}

$coach = $result->fetch_assoc();
$conn->close();

// Gestion des disponibilités
$disponibiliteC = new DisponibiliteC();
$message = "";

// Ajouter une nouvelle disponibilité
if (isset($_POST['ajouterDisponibilite'])) {
    $jour = $_POST['jour'];
    $heureDebut = $_POST['heureDebut'];
    $heureFin = $_POST['heureFin'];
    
    // Valider les entrées
    if (empty($jour) || empty($heureDebut) || empty($heureFin)) {
        $message = '<div class="alert alert-danger">Tous les champs sont obligatoires.</div>';
    } else {
        $nouvelleDisponibilite = new Disponibilite(null, $jour, $heureDebut, $heureFin, $cin);
        $disponibiliteC->ajouterDisponibilite($nouvelleDisponibilite);
        $message = '<div class="alert alert-success">Disponibilité ajoutée avec succès.</div>';
    }
}

// Supprimer une disponibilité
if (isset($_GET['deleteDisp']) && !empty($_GET['deleteDisp'])) {
    $idDisp = intval($_GET['deleteDisp']);
    $disponibiliteC->supprimerDisponibilite($idDisp);
    header("Location: detailcoach.php?cin=".$cin."&message=deleted");
    exit;
}

// Message de confirmation de suppression
if (isset($_GET['message']) && $_GET['message'] == 'deleted') {
    $message = '<div class="alert alert-success">Disponibilité supprimée avec succès.</div>';
}

// Récupérer les disponibilités du coach
$disponibilites = $disponibiliteC->afficherDisponibilitesParCoach($cin);
?>
<!--
=========================================================
* Material Dashboard 3 - v3.2.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2024 GYMNATION (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

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
    GYMNATION - Coach Details
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
    .coach-detail-container {
      background-color: #fff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }
    
    .coach-avatar {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 20px;
      border: 3px solid #e91e63;
    }
    
    .coach-detail-item {
      margin-bottom: 15px;
      display: flex;
      align-items: center;
    }
    
    .coach-detail-icon {
      margin-right: 10px;
      color: #e91e63;
    }
    
    .detail-label {
      font-weight: 600;
      width: 120px;
    }
    
    .detail-value {
      font-weight: 400;
    }
    
    .action-buttons {
      margin-top: 20px;
    }
    
    .btn-detail {
      margin-right: 10px;
    }
    
    #disponibiliteForm {
      display: none;
      margin-top: 20px;
      padding: 20px;
      background-color: #f8f9fa;
      border-radius: 8px;
      border: 1px solid #ddd;
    }
    
    .disponibilite-table {
      margin-top: 20px;
    }
    
    .disponibilite-table th {
      background-color: #e91e63;
      color: white;
    }
    
    .day-badge {
      padding: 5px 10px;
      border-radius: 15px;
      font-size: 12px;
      font-weight: 600;
      text-transform: uppercase;
    }
    
    .monday { background-color: #4CAF50; color: white; }
    .tuesday { background-color: #2196F3; color: white; }
    .wednesday { background-color: #FF9800; color: white; }
    .thursday { background-color: #9C27B0; color: white; }
    .friday { background-color: #F44336; color: white; }
    .saturday { background-color: #795548; color: white; }
    .sunday { background-color: #607D8B; color: white; }
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
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-gradient-dark text-white active" href="../pages/billing.php">
            <i class="material-symbols-rounded opacity-5">receipt_long</i>
            <span class="nav-link-text ms-1">Coaches</span>
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
    <div class="sidenav-footer position-absolute w-100 bottom-0">
    
    </div>
  </aside>
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Coach Details</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="container">
                <?php if (!empty($message)) echo $message; ?>
                <div class="row">
                  <div class="col-md-4 text-center">
                    <img src="<?php echo !empty($coach['image']) ? $coach['image'] : '../assets/img/team-3.jpg'; ?>" alt="<?php echo $coach['nomprenom']; ?>" class="coach-avatar">
                    <h4><?php echo $coach['nomprenom']; ?></h4>
                    <h6 class="text-primary"><?php echo $coach['specialite']; ?></h6>
                  </div>
                  <div class="col-md-8">
                    <div class="coach-detail-item">
                      <i class="material-symbols-rounded coach-detail-icon">email</i>
                      <span class="detail-label">Email:</span>
                      <span class="detail-value"><?php echo $coach['email']; ?></span>
                    </div>
                    <div class="coach-detail-item">
                      <i class="material-symbols-rounded coach-detail-icon">badge</i>
                      <span class="detail-label">CIN:</span>
                      <span class="detail-value"><?php echo $coach['cin']; ?></span>
                    </div>
                    <div class="coach-detail-item">
                      <i class="material-symbols-rounded coach-detail-icon">cake</i>
                      <span class="detail-label">Age:</span>
                      <span class="detail-value"><?php echo $coach['age']; ?> years</span>
                    </div>
                    <div class="coach-detail-item">
                      <i class="material-symbols-rounded coach-detail-icon">fitness_center</i>
                      <span class="detail-label">Specialty:</span>
                      <span class="detail-value"><?php echo $coach['specialite']; ?></span>
                    </div>
                    <div class="coach-detail-item">
                      <i class="material-symbols-rounded coach-detail-icon">work_history</i>
                      <span class="detail-label">Experience:</span>
                      <span class="detail-value"><?php echo $coach['experience']; ?> years</span>
                    </div>
                    <div class="coach-detail-item">
                      <i class="material-symbols-rounded coach-detail-icon">paid</i>
                      <span class="detail-label">Salary:</span>
                      <span class="detail-value"><?php echo $coach['salaire']; ?> DT</span>
                    </div>
                    <div class="coach-detail-item">
                      <i class="material-symbols-rounded coach-detail-icon">calendar_month</i>
                      <span class="detail-label">Hire Date:</span>
                      <span class="detail-value"><?php echo $coach['date']; ?></span>
                    </div>
                    
                    <div class="action-buttons">
                      <a href="edit_coach.php?cin=<?php echo $coach['cin']; ?>" class="btn btn-primary btn-detail">
                        <i class="material-symbols-rounded">edit</i> Edit
                      </a>
                      <a href="billing.php" class="btn btn-secondary btn-detail">
                        <i class="material-symbols-rounded">arrow_back</i> Back to List
                      </a>
                      <a href="deletecoach.php?cin=<?php echo $coach['cin']; ?>" class="btn btn-danger btn-detail" onclick="return confirm('Are you sure you want to delete this coach?')">
                        <i class="material-symbols-rounded">delete</i> Delete
                      </a>
                      <button type="button" id="showDisponibiliteForm" class="btn btn-info btn-detail">
                        <i class="material-symbols-rounded">schedule</i> Ajouter Disponibilité
                      </button>
                    </div>
                    
                    <!-- Formulaire Disponibilité -->
                    <form id="disponibiliteForm" method="post" action="">
                      <h5><i class="material-symbols-rounded">schedule</i> Ajouter une nouvelle disponibilité</h5>
                      <div class="row g-3">
                        <div class="col-md-4">
                          <label for="jour" class="form-label">Jour</label>
                          <select class="form-control" id="jour" name="jour" required>
                            <option value="">Choisir un jour</option>
                            <option value="Lundi">Lundi</option>
                            <option value="Mardi">Mardi</option>
                            <option value="Mercredi">Mercredi</option>
                            <option value="Jeudi">Jeudi</option>
                            <option value="Vendredi">Vendredi</option>
                            <option value="Samedi">Samedi</option>
                            <option value="Dimanche">Dimanche</option>
                          </select>
                        </div>
                        <div class="col-md-4">
                          <label for="heureDebut" class="form-label">Heure de début</label>
                          <input type="time" class="form-control" id="heureDebut" name="heureDebut" required>
                        </div>
                        <div class="col-md-4">
                          <label for="heureFin" class="form-label">Heure de fin</label>
                          <input type="time" class="form-control" id="heureFin" name="heureFin" required>
                        </div>
                      </div>
                      <div class="mt-3">
                        <button type="submit" name="ajouterDisponibilite" class="btn btn-success">Ajouter</button>
                        <button type="button" id="cancelDisponibilite" class="btn btn-secondary">Annuler</button>
                      </div>
                    </form>
                  </div>
                </div>
                
                <!-- Tableau des disponibilités -->
                <div class="row mt-4">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header p-3 bg-gradient-secondary">
                        <h5 class="mb-0 text-white"><i class="material-symbols-rounded">event_available</i> Disponibilités du Coach</h5>
                      </div>
                      <div class="card-body">
                        <?php if (!empty($disponibilites) && count($disponibilites) > 0): ?>
                          <div class="table-responsive">
                            <table class="table table-hover disponibilite-table">
                              <thead>
                                <tr>
                                  <th>Jour</th>
                                  <th>Heure de début</th>
                                  <th>Heure de fin</th>
                                  <th>Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($disponibilites as $disp): ?>
                                  <tr>
                                    <td>
                                      <?php 
                                        $dayClass = strtolower($disp['jour']);
                                        echo '<span class="day-badge ' . $dayClass . '">' . $disp['jour'] . '</span>';
                                      ?>
                                    </td>
                                    <td><?php echo $disp['heureDebut']; ?></td>
                                    <td><?php echo $disp['heureFin']; ?></td>
                                    <td>
                                      <a href="detailcoach.php?cin=<?php echo $cin; ?>&deleteDisp=<?php echo $disp['id']; ?>" 
                                         class="btn btn-danger btn-sm" 
                                         onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette disponibilité?')">
                                        <i class="material-symbols-rounded">delete</i>
                                      </a>
                                    </td>
                                  </tr>
                                <?php endforeach; ?>
                              </tbody>
                            </table>
                          </div>
                        <?php else: ?>
                          <div class="alert alert-info">
                            <i class="material-symbols-rounded">info</i>
                            Aucune disponibilité enregistrée pour ce coach.
                          </div>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
    
    // Script pour afficher/masquer le formulaire de disponibilité
    document.addEventListener('DOMContentLoaded', function() {
      const showForm = document.getElementById('showDisponibiliteForm');
      const cancelBtn = document.getElementById('cancelDisponibilite');
      const form = document.getElementById('disponibiliteForm');
      
      showForm.addEventListener('click', function() {
        form.style.display = 'block';
      });
      
      cancelBtn.addEventListener('click', function() {
        form.style.display = 'none';
      });
    });
  </script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.2.0"></script>
</body>

</html>