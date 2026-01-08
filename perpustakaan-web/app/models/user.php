<?php
class User {
    private $db;
    public function __construct() {
        $this->db = (new Database)->connect();
    }

    public function login($email) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email=?");
        $stmt->execute([$email]);
        return $stmt->fetch();
    }

    public function register($data) {
        $stmt = $this->db->prepare(
            "INSERT INTO users (nama,email,password) VALUES (?,?,?)"
        );
        return $stmt->execute($data);
    }
}
