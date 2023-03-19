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
        $result = $conn->query("SELECT * FROM data_barang");
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function insert_data($data) {
        $conn = $this->connect();
        $sql = "INSERT INTO data_barang (nama_barang, harga_barang, img, distributor_id) VALUES ('" . $data['nama_barang'] . "', '" . $data['harga_barang'] . "', '" . $data['img'] . "','" . $data['distributor_id'] . "')";
        $result = $conn->query($sql);
        return $result;
    }

    public function update_data($id,$data) {
        $conn = $this->connect();
        $sql = "UPDATE data_barang SET nama_barang='" . $data['nama_barang'] . "', harga_barang='" . $data['harga_barang'] . "', img='" . $data['img'] . "', distributor_id='" . $data['distributor_id'] . "' WHERE id=" . $id;
        $result = $conn->query($sql);
        return $result;
    }

    public function delete_data($id) {
        $conn = $this->connect();
        $sql = "DELETE FROM data_barang WHERE id=" . $id;
        $result = $conn->query($sql);
        return $result;
    }


    public function edit($id) {
        $conn = $this->connect();
        $result = $conn->query("SELECT * FROM data_barang where id=$id");
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }


}
