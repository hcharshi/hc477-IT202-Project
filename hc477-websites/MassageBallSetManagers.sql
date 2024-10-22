CREATE TABLE MassageBallSetManagers (
    ManagerID INT(11) NOT NULL AUTO_INCREMENT,
    emailAddress VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(64) NOT NULL,
    pronouns VARCHAR(60) NOT NULL,
    firstName VARCHAR(60) NOT NULL,
    lastName VARCHAR(60) NOT NULL,
    dateCreated DATETIME NOT NULL,
    PRIMARY KEY (ManagerID)
);

INSERT INTO MassageBallSetManagers (emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('taylor@example.com', SHA2('mySecurePassword', 256), 'She/Her', 'Taylor', 'Swift', NOW()),
('brad@example.com', SHA2('anotherPassword123', 256), 'He/Him', 'Brad', 'Pitt', NOW()),
('chris@example.com', SHA2('topSecretPass', 256), 'They/Them', 'Chris', 'Pratt', NOW());
