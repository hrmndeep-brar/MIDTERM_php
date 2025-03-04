-- Create database
CREATE DATABASE Harmandeep200613315;

-- Use the database
USE your_database_name;

-- Create the workouts table
CREATE TABLE IF NOT EXISTS workouts (
    workoutId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL
);

-- Insert sample workout data
INSERT INTO workouts (name) 
VALUES 
    ('Upper Body'),
    ('Lower Body'),
    ('Cardio');

-- Create the exercises table
CREATE TABLE IF NOT EXISTS exercises (
    exerciseId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    workoutId INT NOT NULL,
    FOREIGN KEY (workoutId) REFERENCES workouts(workoutId)
);

-- Insert sample exercise data
INSERT INTO exercises (name, workoutId) VALUES
    ('Bench Press', 1),
    ('Shoulder Press', 1),
    ('Bent-Over Rows', 1),
    ('Squats', 2),
    ('Deadlifts', 2),
    ('Reverse Lunges', 2),
    ('Running', 3),
    ('Cycling', 3),
    ('Rowing', 3);
