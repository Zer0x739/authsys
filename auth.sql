CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) UNIQUE,
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255) NOT NULL,
    user_type ENUM ('silver', 'gold', 'platinum') NOT NULL
);
INSERT INTO users (username, email, password, user_type) VALUES ('user1', 'user1@example.com', 'password1', 'silver');
INSERT INTO users (username, email, password, user_type) VALUES ('user2', 'user2@example.com', 'password2', 'gold');
INSERT INTO users (username, email, password, user_type) VALUES ('user3', 'user3@example.com', 'password3', 'platinum');
