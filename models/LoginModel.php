<?php

  class LoginModel extends Model{
    public function __construct(){
        parent:: __construct();
        

    }
    public function getUsers(){
      
      try {
          $query=$this->db->connect()->query(GETALL_USERS);
          while ($row = $query->fetch()) {
              $users[] = $row;
          }
          return $users;
          
        }catch(\PDOException $e){
          $_SESSION['error'] = "Error from GET ALL USERS is:\n ".$e;
          return null;
        }
    
      }
    
    public function getUserData($use, $users)
      {
        foreach($users as $user){
        if($user['us_name']==$use){
          return $user['us_name'];              
          }
        }
                    
      }
            

    public function checkUserPass($password, $users,$use){
    //print_r ($users);
    //session_start();
      foreach($users as $user){
      
          if(password_verify($password, $user['us_password'])&&$user["us_name"]==$use){
                  http_response_code(200);
                  
                  $_SESSION['userId'] = $user["us_name"];
                  $_SESSION['creatorId'] = $user["us_id"];
                  $_SESSION['time'] = time();                  
          }else if(!password_verify($password, $user['us_password'])){ 
            $_SESSION['wrongPassword']="Wrong password";
          }
        }
    }  
  }
  //   $pwHash = array_reduce($users, function ($carry, $user) use ($email) {
  //     foreach($users as $user){
      
  //       if(password_verify($password, $user['us_password'])) {
  //         echo $user['us_password'];
  //       };
  //     }
  //       if ($user['email'] === $email) {
  //           return $user['password'];
  //       };
  //   }, '');
  //   return password_verify($password, $pwHash);
  // }
  // public function checkUser($email, $users)
  //   {
  //       $userData = getUserData($email, $users);
  //       if ($userData && checkUserPass($email, $users)) {
  //           http_response_code(200);
  //           session_start();
  //           $_SESSION['userId'] = $userData['userId'];
  //           $_SESSION['time'] = time();
  //       } else {
  //           http_response_code(401);
  //       }
  //   }  
  //   $users = getUsers();
  //   $email = $_POST['email'];
  //   checkUser($email, $users);
  // }
