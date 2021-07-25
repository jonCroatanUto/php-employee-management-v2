<?php

    // Dashboard Model queries
    define("GETALL_EMPLOYEES", "SELECT * FROM employees");
    define("INSERT_EMPLOYEE_DASHBOARD", 
        "INSERT INTO employees 
        (us_id, emp_name, emp_lastName, emp_email, emp_age, emp_streetAddress, emp_city, emp_state, emp_postalCode, emp_phoneNum) 
        VALUES
        (:us_id, :emp_name, :emp_lastName, :emp_email, :emp_age, :emp_streetAddress, :emp_city, :emp_state, :emp_postalCode, :emp_phoneNum )"
    );
    define("DELETE_EMPLOYEE","DELETE FROM employees WHERE employee_no = :employee_no");
    define("GET_EMPLOYEE_BY_ID","SELECT * FROM employees WHERE employee_no = :employee_no");
    
    // Employee Model queries
    define("UPDATE_EMPLOYEE", "UPDATE employees SET 
        emp_name = :emp_name, emp_lastName = :emp_lastName, emp_email = :emp_email, emp_age = :emp_age, emp_streetAddress = :emp_streetAddress, emp_city = :emp_city, emp_state = :emp_state, emp_postalCode = :emp_postalCode, emp_phoneNum = :emp_phoneNum, emp_gender = :emp_gender 
        WHERE employee_no = :employee_no"
    );
    define("INSERT_EMPLOYEE_EMPLOYEE", 
        "INSERT INTO employees 
        (us_id, emp_name, emp_lastName, emp_email, emp_age, emp_streetAddress, emp_city, emp_state, emp_postalCode, emp_phoneNum, emp_gender) 
        VALUES
        (:us_id, :emp_name, :emp_lastName, :emp_email, :emp_age, :emp_streetAddress, :emp_city, :emp_state, :emp_postalCode, :emp_phoneNum, :emp_gender)"
    );
?>