CREATE TABLE MassageBallSetCategories (
  CategoryID INT(11) NOT NULL AUTO_INCREMENT,
  CategoryCode VARCHAR(10) NOT NULL UNIQUE,
  CategoryName VARCHAR(255) NOT NULL,
  AisleNumber INT NOT NULL,
  DateCreated DATETIME NOT NULL,
  PRIMARY KEY (CategoryID)
);

INSERT INTO MassageBallSetCategories (CategoryCode, CategoryName, AisleNumber, DateCreated) 
VALUES ('FIT', 'Fitness Tracker', 1, NOW()), 
       ('RES', 'Resistance Bands', 2, NOW()),
       ('JUM', 'Jump Rope', 3, NOW()),
       ('EXB', 'Exercise Ball', 4, NOW()),
       ('FOA', 'Foam Roller', 5, NOW());
