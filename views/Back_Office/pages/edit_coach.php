<?php
$conn = new mysqli("localhost", "root", "", "projet", 4306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$cin = intval($_GET['cin'] ?? 0);

// Traitement du formulaire (méthode POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['nomprenom']);
    $email = trim($_POST['email']);
    $age = intval($_POST['age']);
    $speciality = trim($_POST['specialite']);
    $experience = intval($_POST['experience']);
    $salary = intval($_POST['salaire']);
    $hireDate = $_POST['date'];

    $sql = "UPDATE coach SET nomprenom=?, email=?, age=?, specialite=?, experience=?, salaire=?, `date`=? WHERE cin=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssissisi", $name, $email, $age, $speciality, $experience, $salary, $hireDate, $cin);

    if ($stmt->execute()) {
        header("Location: billing.php?updated=1");
        exit;
    } else {
        echo "Update failed: " . $stmt->error;
    }
    $stmt->close();
}

// Charger les données du coach
$sql = "SELECT * FROM coach WHERE cin = ?";
$stmt = $conn->prepare($sql);

// Vérifier si la préparation de la requête a échoué
if ($stmt === false) {
    die("Erreur de préparation de la requête : " . $conn->error);
}

$stmt->bind_param("i", $cin);
$stmt->execute();
$result = $stmt->get_result();

// Vérifier si des résultats ont été obtenus
if ($result->num_rows > 0) {
    $coach = $result->fetch_assoc();
} else {
    echo "Aucun coach trouvé avec ce CIN.";
}

$stmt->close();
$conn->close();


?>

<!-- Affichage du formulaire HTML -->
<h2>Edit Coach</h2>
<form method="post">
    <input type="text" name="nomprenom" value="<?= $coach['nomprenom'] ?>" required><br>
    <input type="email" name="email" value="<?= $coach['email'] ?>" required><br>
    <input type="number" name="age" value="<?= $coach['age'] ?>" required><br>
    <input type="text" name="specialite" value="<?= $coach['specialite'] ?>" required><br>
    <input type="number" name="experience" value="<?= $coach['experience'] ?>" required><br>
    <input type="number" name="salaire" value="<?= $coach['salaire'] ?>" required><br>
    <input type="date" name="date" value="<?= $coach['date'] ?>" required><br>
    <button type="submit">Update Coach</button>
</form>
