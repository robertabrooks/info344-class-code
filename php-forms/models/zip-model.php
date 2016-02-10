<<<<<<< HEAD
<?php
=======
<?php 
>>>>>>> dd127347d12c8bb16a0f6d7fa4d2cd6133701c08
class Zips {
    protected $conn;
    
    public function __construct($conn) {
        $this->conn = $conn;
    }
    
    public function search($q) {
        $sql = 'select * from zips where zip=? or primary_city=?';
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute(array($q,$q));
<<<<<<< HEAD
        
        if (!$success) {
            var_dump($stmt->errorInfo()); // trigger_error($stmt->errorInfo());
            return false;
        } else { 
            return $stmt->fetchAll();
        } //else
    }
}

=======
        if (!$success) {            
            var_dump($stmt->errorInfo());
            return false;
        } else {
            return $stmt->fetchAll();
        }
    }
}
>>>>>>> dd127347d12c8bb16a0f6d7fa4d2cd6133701c08
?>