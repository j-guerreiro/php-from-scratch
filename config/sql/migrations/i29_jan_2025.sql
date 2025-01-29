CREATE TABLE Courses (
course_id INT auto_increment NOT NULL,
course_title varchar(100) NULL,
course_image varchar(100) NULL,
course_description varchar(100) NULL,
course_button_link varchar(100) NULL,
CONSTRAINT Courses_PK PRIMARY KEY (course_id)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;

INSERT INTO Courses (course_title, course_image, course_description, course_button_link) 
VALUES 
('Introduction to Programming', 'love-to-learn.jpg', 'Basic course for beginners in programming.', 'https://courses-php-project-from-scratch.ddev.site/intro_programming'),
('Web Development', 'love-to-learn.jpg', 'Learn how to create amazing websites from scratch.', 'https://courses-php-project-from-scratch.ddev.site/web_dev'),
('Machine Learning', 'love-to-learn.jpg', 'Understand the fundamentals of machine learning.', 'https://courses-php-project-from-scratch.ddev.site/machine_learning'),
('Graphic Design', 'love-to-learn.jpg', 'Master design tools and techniques.', 'https://courses-php-project-from-scratch.ddev.site/design_grafico'),
('Digital Marketing', 'love-to-learn.jpg', 'Learn how to attract and engage customers online.', 'https://courses-php-project-from-scratch.ddev.site/digital_marketing'),
('Database', 'love-to-learn.jpg', 'Learn how to model, create, and manage databases.', 'https://courses-php-project-from-scratch.ddev.site/databases'),
('Cybersecurity', 'love-to-learn.jpg', 'Protect systems and networks against cyber attacks.', 'https://courses-php-project-from-scratch.ddev.site/cybersecurity');

