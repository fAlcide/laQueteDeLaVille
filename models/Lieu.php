<?php
  class Lieu {
    private $db;

    public function __construct() {
      $this->db = new Database;
    }

    public function addLieu($data) {
      // Prepare Query
      $this->db->query('INSERT INTO Lieu (`nom`,`description`, `type`, `lon`, `lat`, `horraire`) VALUES(:nom, :description, :type, :lon, :lat, :horraire)');

      // Bind Values
      $this->db->bind(':nom', $data['nom']);
      $this->db->bind(':description', $data['description']);
      $this->db->bind(':type', $data['type']);
      $this->db->bind(':lon', $data['lon']);
      $this->db->bind(':lat', $data['lat']);
      $this->db->bind(':horraire', $data['horraire']);

      echo "INSERT INTO Lieu (`nom`,`description`, `type`, `lon`, `lat`, `horraire`) VALUES(" . $data['nom'] . ", " . $data['description'] . ", " . $data['type'] . ", " . $data['lon'] . ", " . $data['lat'] . ", " . $data['horraire'] . ")";
      // Execute
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

    public function getLieux() {
      $this->db->query('SELECT * FROM Lieu ORDER BY createdAt DESC');

      $results = $this->db->resultset();

      return $results;
    }
  }