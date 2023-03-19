<?php

class Model {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "toko_sepatu";

    public function connect() {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    public function index() {
        $conn = $this->connect();
        $result = $conn->query("SELECT * FROM admin");
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function insert_data($data) {
        $conn = $this->connect();
        $sql = "INSERT INTO admin (name, email, password) VALUES ('" . $data['name'] . "', '" . $data['email'] . "', '" . $data['password'] . "')";
        $result = $conn->query($sql);
        return $result;
    }

    public function update_data($id,$data) {
        $conn = $this->connect();
        $sql = "UPDATE admin SET name='" . $data['name'] . "', email='" . $data['email'] . "', password='" . $data['password'] . "' WHERE id=" . $id;
        $result = $conn->query($sql);
        return $result;
    }

    public function delete_data($id) {
        $conn = $this->connect();
        $sql = "DELETE FROM admin WHERE id=" . $id;
        $result = $conn->query($sql);
        return $result;
    }


    public function edit($id) {
        $conn = $this->connect();
        $result = $conn->query("SELECT * FROM admin where id=".$id);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }


}
