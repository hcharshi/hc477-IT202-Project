CREATE TABLE MassageBallSetProducts (
  ProductID INT(11) NOT NULL AUTO_INCREMENT,
  ProductCode VARCHAR(10) NOT NULL UNIQUE,
  ProductName VARCHAR(255) NOT NULL,
  Description TEXT NOT NULL,
  Color VARCHAR(50) NOT NULL,
  CategoryID INT(11) NOT NULL,
  WholesalePrice DECIMAL(10,2) NOT NULL,
  ListPrice DECIMAL(10,2) NOT NULL,
  DateCreated DATETIME NOT NULL,
  PRIMARY KEY (ProductID),
  FOREIGN KEY (CategoryID) REFERENCES MassageBallSetCategories(CategoryID)
);

INSERT INTO MassageBallSetProducts (ProductCode, ProductName, Description, Color, CategoryID, WholesalePrice, ListPrice, DateCreated)
VALUES ('MB001', 'Massage Ball', 'A small ball for deep tissue massage', 'Blue', 1, 5.00, 10.00, NOW()),
       ('RB001', 'Resistance Band', 'Light resistance band for stretching', 'Green', 2, 2.50, 5.00, NOW());
