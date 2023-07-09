CREATE TABLE marketing (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    bdate INT NOT NULL,
    gender INT NOT NULL,
    cstatus INT NOT NULL,
    telno INT NOT NULL,
    celno INT NOT NULL,
    email INT NOT NULL,
    cname VARCHAR(50) NOT NULL,
    etype INT NOT NULL,
    ctype INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
