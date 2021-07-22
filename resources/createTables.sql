CREATE DATABASE MVCemployees;
USE MVCemployees;

CREATE TABLE users(
    us_id       BIGINT         NOT NULL AUTO_INCREMENT  ,
    us_name     VARCHAR(10)    NOT NULL,
    us_password VARCHAR(150)    NOT NULL,
    us_email    VARCHAR(50)    NOT NULL, 
    PRIMARY KEY (us_id)
);

CREATE TABLE employees(
    employee_no           BIGINT    NOT NULL AUTO_INCREMENT ,
    us_id                 BIGINT    NOT NULL,
    emp_name              VARCHAR(50)  NOT NULL,
    emp_lastName          VARCHAR(50)  NOT NULL,
    emp_email             VARCHAR(360)  NOT NULL,
    emp_gender            VARCHAR(50)  NOT NULL,
    emp_streetAddress     VARCHAR(50)  NOT NULL,
    emp_city              VARCHAR(50)  NOT NULL,
    emp_state             VARCHAR(50)  NOT NULL,
    emp_postalCode        CHAR(50)  NOT NULL,
    emp_phoneNum          CHAR(50)  NOT NULL,
    emp_age               VARCHAR(50)  NOT NULL,
    
    FOREIGN KEY (us_id) REFERENCES users (us_id),
    PRIMARY KEY (employee_no)    
);

CREATE TABLE holidays(
    holiday_no            BIGINT    NOT NULL AUTO_INCREMENT ,
    employee_no           BIGINT    NOT NULL,
    holiday_startDate     DATE  NOT NULL,
    holiday_finalDate     DATE  NOT NULL,
    holiday_location      VARCHAR(50)  NOT NULL,
   
    
    FOREIGN KEY (employee_no) REFERENCES employees (employee_no) ON DELETE CASCADE,
    PRIMARY KEY (holiday_no)    
);

CREATE TABLE images(
    employee_no      BIGINT         NOT NULL,
    photo            VARCHAR(360)   NOT NULL,   
   
    
    FOREIGN KEY (employee_no) REFERENCES employees (employee_no) ON DELETE CASCADE,
    PRIMARY KEY (employee_no)    
);

CREATE TABLE categories(
    categories_no         BIGINT      NOT NULL AUTO_INCREMENT ,
    employee_no           BIGINT      NOT NULL,
    categories_position   VARCHAR(50) NOT NULL,
    categories_startDate  DATE        NOT NULL,
    categories_finalDate  DATE        NOT NULL,
   
   
    
    FOREIGN KEY (employee_no) REFERENCES employees (employee_no) ON DELETE CASCADE,
    PRIMARY KEY (categories_no)    
);