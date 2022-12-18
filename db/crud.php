
<?php 
    class crud{
        //private database object
        private $db;

        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db =$conn;
        }

        //function to insert a new record into the database
        public function insertFriend($fname, $lname, $address, $email, $phone, $gender, $avatar_path){
            try {
                //define sql statement to be executed
                $sql = "INSERT INTO friend(firstname,lastname,address,email,phone,
                gender_id, avatar_path) VALUES (:fname,:lname, :address, :email, :phone, :gender, :avatar_path)";
                //prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);
                //bind all placeholders to actual values
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':address',$address);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':phone',$phone);
                $stmt->bindparam(':gender',$gender);
                $stmt->bindparam(':avatar_path',$avatar_path);
            
                $stmt->execute();
                return true;
            
            } catch (PDOException $e) { 
                 echo $e->getMessage();
                 return false;
            } 
        }

        public function editFriend($id,$fname, $lname, $address, $email, $phone, $gender){
           try{
        
           $sql = "UPDATE `friend` SET `firstname`=:fname,`lastname`=:lname,`address`=:address,
            `email`=:email,`phone`=:phone,`gender_id`=:gender WHERE friend_id = 
            :id ";
            $stmt = $this->db->prepare($sql);
            //bind all placeholders to actual values
            $stmt->bindparam(':id',$id);
            $stmt->bindparam(':fname',$fname);
            $stmt->bindparam(':lname',$lname);
            $stmt->bindparam(':address',$address);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':phone',$phone);
            $stmt->bindparam(':gender',$gender);
        
            $stmt->execute();
            return true;
           }catch (PDOException $e) { 
            echo $e->getMessage();
            return false;
           }
        }   

        public function getFriends(){
            try{
            $sql = "SELECT * FROM `friend` a inner join gender s on a.gender_id = s.gender_id";
            $result = $this->db->query($sql);
            return $result;
        }catch (PDOException $e) { 
            echo $e->getMessage();
            return false;
           }
        }


        public function getFriendDetails($id){
            try{
            $sql = "Select * from friend a inner join gender s on a.gender_id = s.gender_id where gender_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }catch (PDOException $e) { 
            echo $e->getMessage();
            return false;
           }
        }

        public function deleteFriend($id){
            try{
                $sql = "delete from friend where friend_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
            }catch (PDOException $e) { 
                echo $e->getMessage();
                return false;
            }
       }


        public function  getGender(){
            try{
            $sql = "SELECT * FROM `gender`";
            $result = $this->db->query($sql);
            return $result;
        }catch (PDOException $e) { 
            echo $e->getMessage();
            return false;
           }
        }


        public function  getGenderById($id){
            try{
            $sql = "SELECT * FROM `gender` WHERE gender_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }catch (PDOException $e) { 
            echo $e->getMessage();
            return false;
           }
        }
        

    }

?>