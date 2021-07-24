<?php

    define("GETALL_EMPLOYEES", "SELECT * FROM employees");
    define("INSERT_EMPLOYEE", 
        "INSERT INTO employees 
        (us_id, emp_name, emp_lastName, emp_email, emp_age, emp_streetAddress, emp_city, emp_state, emp_postalCode, emp_phoneNum) 
        VALUES
        (:us_id, :emp_name, :emp_lastName, :emp_email, :emp_age, :emp_streetAddress, :emp_city, :emp_state, :emp_postalCode, :emp_phoneNum )"
    );
    define("DELETE_EMPLOYEE","DELETE FROM employees WHERE employee_no = :employee_no");
    // define("USER", "root");
    // define("PASSWORD", "");
    // define("HOST", "localhost");
    // define('CHARSET', 'utf8mb4');

?>