<?php
class Student {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function add($username, $number_of_ticket, $genre, $subscribe, $time) {
        $stmt = $this->pdo->prepare(
            "INSERT INTO library_geeks (username, number_of_ticket, genre, subscribe, time) VALUES (?, ?, ?, ?, ?)"
        );
        $stmt->execute([$username, $number_of_ticket, $genre, $subscribe, $time]);
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM library_geeks");
        return $stmt->fetchAll();
    }

    public function update($id, $username) {
        $stmt = $this->pdo->prepare("UPDATE library_geeks SET username=? WHERE id=?");
        $stmt->execute([$username, $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM library_geeks WHERE id=?");
        $stmt->execute([$id]);
    }
}
