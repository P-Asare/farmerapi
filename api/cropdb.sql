-- Create the farm database
CREATE DATABASE IF NOT EXISTS farm_database;
USE farm_database;

-- Create a table for crops
CREATE TABLE crops (
    crop_id INT AUTO_INCREMENT PRIMARY KEY,
    crop_name VARCHAR(100) NOT NULL,
    UNIQUE(crop_name)
);

-- Create a table for quantities of crops grown
CREATE TABLE crop_quantities (
    crop_quantity_id INT AUTO_INCREMENT PRIMARY KEY,
    crop_id INT,
    quantity DECIMAL(10,2) NOT NULL,
    planting_date DATE,
    harvesting_date DATE,
    FOREIGN KEY (crop_id) REFERENCES crops(crop_id)
);

-- Insert values into the crops table
INSERT INTO crops (crop_name) VALUES 
('Wheat'),
('Corn'),
('Tomato'),
('Potato'),
('Carrot');

-- Insert values into the crop_quantities table
-- Assuming crop_id 1 is Wheat, crop_id 2 is Corn, and so on
INSERT INTO crop_quantities (crop_id, quantity, planting_date, harvesting_date) VALUES 
(1, 500, '2023-01-01', '2023-05-01'),
(2, 800, '2023-02-01', '2023-07-01'),
(3, 300, '2023-03-01', '2023-09-01'),
(4, 600, '2023-04-01', '2023-11-01'),
(5, 400, '2023-05-01', '2023-10-01');
