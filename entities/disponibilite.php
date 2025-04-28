<?php
class Disponibilite {
    private $id;
    private $jour;
    private $heureDebut;
    private $heureFin;
    private $coachCin; // Clé étrangère

    public function __construct($id, $jour, $heureDebut, $heureFin, $coachCin) {
        $this->id = $id;
        $this->jour = $jour;
        $this->heureDebut = $heureDebut;
        $this->heureFin = $heureFin;
        $this->coachCin = $coachCin;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getJour() {
        return $this->jour;
    }

    public function getHeureDebut() {
        return $this->heureDebut;
    }

    public function getHeureFin() {
        return $this->heureFin;
    }

    public function getCoachCin() {
        return $this->coachCin;
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setJour($jour) {
        $this->jour = $jour;
    }

    public function setHeureDebut($heureDebut) {
        $this->heureDebut = $heureDebut;
    }

    public function setHeureFin($heureFin) {
        $this->heureFin = $heureFin;
    }

    public function setCoachCin($coachCin) {
        $this->coachCin = $coachCin;
    }
}
?>
