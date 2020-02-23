CREATE TABLE user (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(200) NOT NULL,
    password VARCHAR(200) NOT NULL,
    name VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL,
    sex  VARCHAR(20) NOT NULL,
    education VARCHAR(80),
    year VARCHAR(10),
    rule VARCHAR(10) /* тут надо бы  обязательность и проверку но пока нет*/
)