<?php

class CourseModel
{
    public function __construct(protected PDO $db)
    {
        if (!$this->db) {
            throw new Exception('Invalid database connection.');
        }
    }

    public function getAllCourses()
    {
        $query = $this->db->query('SELECT * FROM Cursos');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
