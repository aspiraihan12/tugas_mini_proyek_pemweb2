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
        $result = $conn->query("SELECT * FROM transaksi");
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function insert_data($data) {
        $conn = $this->connect();
        $sql = "INSERT INTO transaksi (costumer_id, data_barang_id, admin_id, jumlah_transaksi,tanggal_transaksi) VALUES ('" . $data['costumer_id'] . "', '" . $data['data_barang_id'] . "', '" . $data['admin_id'] . "','" . $data['jumlah_transaksi'] . "','" . $data['tanggal_transaksi'] . "')";
        $result = $conn->query($sql);
        return $result;
    }

    public function update_data($id,$data) {
        $conn = $this->connect();
        $sql = "UPDATE transaksi SET costumer_id='" . $data['costumer_id'] . "', data_barang_id='" . $data['data_barang_id'] . "', admin_id='" . $data['admin_id'] . "', jumlah_transaksi='" . $data['jumlah_transaksi'] . "', tanggal_transaksi='" . $data['tanggal_transaksi'] .  "' WHERE id=" . $id;
        $result = $conn->query($sql);
        return $result;
    }

    public function delete_data($id) {
        $conn = $this->connect();
        $sql = "DELETE FROM transaksi WHERE id=" . $id;
        $result = $conn->query($sql);
        return $result;
    }


    public function edit($id) {
        $conn = $this->connect();
        $result = $conn->query("SELECT * FROM transaksi where id=$id");
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }


}
