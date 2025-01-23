<?php

class DBCONNECT
{

    const SERVER_NAME = 'localhost';
    const DB = 'gymwebsite';
    const USER_NAME = 'root';
    const PASSWORD = '';


    function __construct()
    {

        try {
            $conn = new PDO("mysql:host=" . self::SERVER_NAME . ";dbname=" . self::DB, self::USER_NAME, self::PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        $GLOBALS['conn'] = $conn;

        
    }

    // User Sign In
    public function insert_signup($fnm,  $email, $password, $phone, $package, $startdate, $time)
    {
      
    
        try {
            $query = "INSERT INTO login (vName,vEmail ,vPassword, vPhone, vPackage, vStartdate, vTime) VALUES (:fnm,  :email, :pass, :phone, :package, :sdate, :timee)";

            $sql = $GLOBALS['conn']->prepare($query);

            $sql->execute([
                ':fnm' => $fnm,
                ':email' => $email,
                ':pass' => $password,
                ':phone'  => $phone,
                ':package' => $package,
                ':sdate'  => $startdate,
                'timee' => $time
               
            ]);
            return 1;
        } catch (PDOException $e) {
            echo 'failed' . $e->getMessage();
            return 0;
        }
    }

    //for user login
    public function fetch_login($emaill, $pass)
    {
        $result = [];
        $email = $emaill;
        $password = $pass;
         
        try {
            $query = 'SELECT * FROM login WHERE vEmail = :email AND vPassword = :password LIMIT 1';
            $sql = $GLOBALS['conn']->prepare($query);
            $sql->execute([':email' => $email, ':password' => $password]);
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $result;
    }

    // for user home details view
    public function fetch_userpage($email)
    {
        
        $result = [];
        
        try {
            $query = 'SELECT * FROM login WHERE vEmail = :email';
            $sql = $GLOBALS['conn']->prepare($query);
            $sql->execute([':email' => $email]);
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $result;
    }

    // for visitor data insert
    public function insert_admin_data($name, $email ,$mobile, $message)
    {
        try {
            $query = "INSERT INTO admin_data(vName, vEmail, vMobile, vMessage) VALUES (:namee,  :emaill, :mobilee, :messagee)";

            $sql = $GLOBALS['conn']->prepare($query);

            $sql->execute([
                ':namee' => $name,
                ':emaill' => $email,
                ':mobilee' => $mobile,
                ':messagee'  => $message
            ]);
            return 1;
        } catch (PDOException $e) {
            echo 'failed' . $e->getMessage();
            return 0;
        }
        
    }

    // for admin home page
    public function fetch_costomer_data()
    {
        
        $count = [];
        
        try {
            $query = 'SELECT * FROM login';
            $sql = $GLOBALS['conn']->prepare($query);
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            $count = $result;

        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $count;
    }

    public function fetch_feedback_data()
    {
        
        $count = [];
        
        try {
            $query = 'SELECT * FROM admin_data';
            $sql = $GLOBALS['conn']->prepare($query);
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            $count = $result;

        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $count;
    }
 
 }
