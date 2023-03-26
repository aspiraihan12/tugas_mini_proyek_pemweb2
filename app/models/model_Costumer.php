<?php

class Model
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "toko_sepatu";

    public function connect()
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    public function index()
    {
        $conn = $this->connect();
        $result = $conn->query("SELECT * FROM costumer");
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function insert_data($data)
    {
        $conn = $this->connect();
        $sql = "INSERT INTO costumer (name, email, password) VALUES ('" . $data['name'] . "', '" . $data['email'] . "', '" . $data['password'] . "')";
        $result = $conn->query($sql);
        return $result;
    }

    public function update_data($id, $data)
    {
        $conn = $this->connect();
        $sql = "UPDATE costumer SET name='" . $data['name'] . "', email='" . $data['email'] . "', password='" . $data['password'] . "' WHERE id=" . $id;
        $result = $conn->query($sql);
        return $result;
    }

    public function delete_data($id)
    {
        $conn = $this->connect();
        $sql = "DELETE FROM costumer WHERE id=" . $id;
        $result = $conn->query($sql);
        return $result;
    }


    public function edit($id)
    {
        $conn = $this->connect();
        $result = $conn->query("SELECT * FROM costumer where id=" . $id);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function register($data)
    {
        error_reporting(E_ALL);
        ini_set('display_errors', 'On');


        session_start();

        if (isset($_SESSION['name'])) {
            header("Location: index.php");
        }

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            echo "<script>alert('$email')</script>";

            // if ($password == $cpassword) {
            $sql = "SELECT * FROM costumer WHERE email='$email'";
            $conn = new mysqli('localhost', 'root', '', 'toko_sepatu');
            $result = mysqli_query($conn, $sql);
            echo "<script>alert('bruh 1 selcect')</script>";
            if (!$result->num_rows > 0) {
                $sql = "INSERT INTO costumer (name, email, password)
                    VALUES ('$name', '$email', '$password')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                    $name = "";
                    $email = "";
                    $_POST['password'] = "";
                } else {
                    echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
                }
            } else {
                echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
            }
        }
    }
}
