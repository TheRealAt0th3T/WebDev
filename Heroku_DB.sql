use heroku_62a614f50868c33;
-- dropping table if it exists already so we have a new one each time 
DROP TABLE IF EXISTS Commissions;
DROP TABLE IF EXISTS Users;

-- table of users and their info
CREATE TABLE Users (
	ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(20) NOT NULL,
    lastname VARCHAR(20) NOT NULL,
    username VARCHAR(20) NOT NULL UNIQUE,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(20) NOT NULL
);

-- table to store commissions
CREATE TABLE Commissions (
	ID INT,
	first VARCHAR(20) NOT NULL, 
    last VARCHAR(20) NOT NULL,
    phoneNumber VARCHAR(10),
    description VARCHAR(1500) NOT NULL,
    FOREIGN KEY (ID) REFERENCES Users(ID)
);

-- inserting test data into User table
INSERT INTO Users (firstname, lastname, username, email, password) VALUES ('Amara','Tariq','at0th3t','tariq.amara00@yahoo.com','Pass123');
INSERT INTO Users (firstname, lastname, username, email, password) VALUES ('tariq','amara','tt0th3a','someemail@yahoo.com','123Pass');

-- insert test data into Commissions table
INSERT INTO Commissions (first, last, phoneNumber, description) VALUES ('Amara2','Tariq2','2085627448','testing description for commission');
INSERT INTO Commissions (first, last, phoneNumber, description) VALUES ('tariq2','amara2','5555555555','testing description for testing commission');

-- selecting table so we can view the inputs/outputs
SELECT * FROM Users;
-- SELECT * FROM Commissions;