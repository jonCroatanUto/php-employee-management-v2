INSERT INTO users(
us_name,
us_password,
us_email
)VALUES
("admin", "$2y$10$nuh1LEwFt7Q2/wz9/CmTJO91stTBS4cRjiJYBY3sVCARnllI.wzBC", "admin@assemblerschool.com"),
("admin2", "hola", "admin2@assemblerschool.com");


INSERT INTO employees(
us_id,
emp_name,
emp_lastName,
emp_email,
emp_gender,
emp_streetAddress,
emp_city,
emp_state,
emp_postalCode,
emp_phoneNum,
emp_age
)VALUES
(1, "Rack","Lei","jackon@network.com","man","126","San Jone","CA","394221","7383627627","24"),
(2, "John","Doe","jhondoe@foo.com","man","89","New York","WA","09889","1283645645","34"),
(2, "Leila","Mills","mills@leila.com","woman","55","San Diego","CA","098765","9983632461","29"),
(1, "Susan","Smith","susanmith@baz.com","woman","126","Louisville","CA","394221","7383627627","24"),
(2, "Brad","Simpson","brad@foo.com","man","128","Atlanta","GEO","394221","7383627627","40"),
(1, "Neil","Walker","walkerneil@baz.com","man","1","Nashville","TN","90143","45372788192","42"),
(1, "Robert","Thomson","jackon@network.com","man","126","New Orleans","LU","394221","7383627627","24"),
(2, "Rack","Lei","jackon@network.com","man","126","New Orleans","CA","63281","91232876454","26");


INSERT INTO holidays(

employee_no,
holiday_startDate,
holiday_finalDate,
holiday_location
)VALUES
(1,"2022-02-12","2022-04-24","Paris"),
(1,"2022-12-12","2022-04-24","London"),
(2,"2022-03-12","2022-12-24","Barcelona"),
(2,"2022-10-12","2022-04-24","Bangladesh"),
(3,"2022-09-12","2022-10-24","Estocolmo"),
(3,"2022-12-12","2022-04-24","Suizland"),
(4,"2022-12-12","2022-12-24","Dinamark"),
(4,"2022-01-12","2022-04-24","Italy"),
(5,"2022-05-12","2022-05-24","Rio de Janeiro"),
(5,"2022-07-12","2022-06-24","Conga"),
(5,"2022-09-12","2022-04-24","China"),
(6,"2022-02-12","2022-11-24","Sevilla"),
(6,"2022-03-12","2022-05-24","Mallorca"),
(7,"2022-12-12","2022-04-24","Rumania"),
(7,"2022-11-12","2022-01-24","Olesa de Montserrat"),
(8,"2022-01-12","2022-08-24","La Rapita");

INSERT INTO images(
employee_no,
photo

)VALUES
(1,"https:\/\/m.media-amazon.com\/images\/M\/MV5BMzI5NDIzNTQ1Nl5BMl5BanBnXkFtZTgwMjQ0Mzc1MTE@._V1_UY256_CR4,0,172,256_AL_.jpg"),
(2,"https:\/\/randomuser.me\/api\/portraits\/men\/33.jpg"),
(3,"https:\/\/pbs.twimg.com\/profile_images\/647526574120529920\/T5rm0m7W.jpg"),
(4,"https:\/\/i.imgur.com\/Qz5CrD0.jpg"),
(5,"https:\/\/pbs.twimg.com\/profile_images\/869994638110736385\/CVYUarcq.jpg"),
(6,"https:\/\/pbs.twimg.com\/profile_images\/1094979667143069696\/QrD0ovrh.jpg"),
(7,"https:\/\/images-na.ssl-images-amazon.com\/images\/M\/MV5BNjk1MjIxNjUxNF5BMl5BanBnXkFtZTcwODk2NzM4Mg@@._V1_UY256_CR3,0,172,256_AL_.jpg"),
(8,"https:\/\/images.generated.photos\/eL-OqIIteJK_ORyTXpJ96fDVgV_vY5PCvb0CfFGXMxs\/rs:fit:512:512\/Z3M6Ly9nZW5lcmF0\/ZWQtcGhvdG9zLzAx\/Njk3NTcuanBn.jpg");

INSERT INTO categories(

employee_no,
categories_position,
categories_startDate,
categories_finalDate

)VALUES
(1,"Director","2022-02-12","2022-04-24"),
(1,"Auxilar","2022-12-12","2022-04-24"),
(2,"Oficial","2022-03-12","2022-12-24"),
(2,"Manager","2022-10-12","2022-04-24"),
(3,"Director","2022-09-12","2022-10-24"),
(3,"Auxilar","2022-12-12","2022-04-24"),
(4,"Manager","2022-12-12","2022-12-24"),
(4,"Oficial","2022-01-12","2022-04-24"),
(5,"Auxilar","2022-05-12","2022-05-24"),
(5,"Manager","2022-07-12","2022-06-24"),
(5,"Oficial","2022-09-12","2022-04-24"),
(6,"Auxilar","2022-02-12","2022-11-24"),
(6,"Director","2022-03-12","2022-05-24"),
(7,"Manager","2022-12-12","2022-04-24"),
(7,"Auxilar","2022-11-12","2022-01-24"),
(8,"Auxilar","2022-01-12","2022-08-24");