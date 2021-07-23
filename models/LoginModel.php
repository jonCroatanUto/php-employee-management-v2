<?php

class LoginModel extends Model{
  public function __construct(){
      parent:: __construct();
      

  }
  public function getUsers(){
      
      $query=$this->db->connect()->query("SELECT us_name, us_password FROM users");

   
        while ($row = $query->fetch()) {
            $dataQuestions[] = $row;
            
        }
        return $dataQuestions;
    
    // $conn->close();
    }
  
  public function getUserData($use, $users)
    {
            foreach($users as $user){
             if($user['us_name']==$use){
               return $user['us_name'];              
              }
            };  
                  
    }
          

  public function checkUserPass($password, $users,$use){
   //print_r ($users);
    foreach($users as $user){
        if(password_verify($password, $user['us_password'])&&$user["us_name"]==$use){
                http_response_code(200);
                session_start();
                $_SESSION['userId'] = $user["us_name"];
                $_SESSION['time'] = time();                  
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
