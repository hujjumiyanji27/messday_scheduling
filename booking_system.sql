CREATE DATABASE IF NOT EXISTS `booking_system`;

USE `booking_system`;

-- Table to store bookings
CREATE TABLE IF NOT EXISTS `bookings` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `subject` VARCHAR(50) NOT NULL,
    `reason` TEXT NOT NULL,
    `time_slot` VARCHAR(20) NOT NULL,
    `booking_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
