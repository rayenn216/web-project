<?php
include __DIR__ . '/../config.php';
include __DIR__ . '/../entities/Disponibilite.php';



class DisponibiliteC {
    
    public function ajouterDisponibilite($disponibilite) {
        $sql = "INSERT INTO disponibilite (jour, heureDebut, heureFin, coachCin) 
                VALUES (:jour, :heureDebut, :heureFin, :coachCin)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $req->bindValue(':jour', $disponibilite->getJour());
            $req->bindValue(':heureDebut', $disponibilite->getHeureDebut());
            $req->bindValue(':heureFin', $disponibilite->getHeureFin());
            $req->bindValue(':coachCin', $disponibilite->getCoachCin());

            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function afficherDisponibilites() {
        $sql = "SELECT * FROM disponibilite";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function supprimerDisponibilite($id) {
        $sql = "DELETE FROM disponibilite WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function rechercherDisponibiliteParJour($jour) {
        if (empty($jour)) {
            throw new Exception("Le jour ne peut pas être vide.");
        }

        $sql = "SELECT * FROM disponibilite WHERE jour = :jour";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':jour', $jour);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    
    public function afficherDisponibilitesParCoach($coachCin) {
        $sql = "SELECT * FROM disponibilite WHERE coachCin = :coachCin";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':coachCin', $coachCin);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}
?>