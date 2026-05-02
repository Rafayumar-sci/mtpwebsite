CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    age INT,
    class VARCHAR(20)
);
INSERT INTO students (name, age, class) VALUES ('Ali', 20, 'BSCS');
INSERT INTO students (name, age, class) VALUES ('Sara', 19, 'BSIT');
INSERT INTO students (name, age, class) VALUES ('Ahmed', 21, 'BBA');
SELECT * FROM students;
SELECT name,class FROM students WHERE age > 19;
UPDATE students
SET age = 22
WHERE id = 1;
DELETE FROM students
WHERE id = 2;
SELECT * FROM students;