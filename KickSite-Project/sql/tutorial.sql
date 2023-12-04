CREATE TABLE users(
    Id int PRIMARY KEY AUTO_INCREMENT,
    Email varchar(200),
    Username varchar(200),
    Password varchar(200)
);

CREATE TABLE admin_table(
    Id int PRIMARY KEY AUTO_INCREMENT,
    Email varchar(200),
    Password varchar(200)
);
CREATE TABLE enrolled_forms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    age INT NOT NULL,
    birthday DATE NOT NULL,
    parents_name VARCHAR(255) NOT NULL,
    contact VARCHAR(11) NOT NULL,
    phone VARCHAR(11) NOT NULL,
    your_email VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    school VARCHAR(255) NOT NULL,
    status VARCHAR(50) NOT NULL,
    enrollee_category VARCHAR(50) NOT NULL,
    ranked_belt VARCHAR(50) NOT NULL
);


INSERT INTO `admin_table` (`id`, `email`, `password`) VALUES
(1, 'pkldojo@gmail.com', 'pkldojobatangas');