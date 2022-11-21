<?php

class Student
{
    public $table_name = "Students";
    private $reg_no;
    private $name;
    private $email;
    private $gender;
    private $year;
    private $dep;
    private $phone;

    /**
     * Get all non-deleted students
     */
    public function get_students()
    {
        $query = "SELECT * FROM Students WHERE is_deleted=0";

        $result = mysqli_query($GLOBALS["mysqli"], $query);

        if ($result) {
            header("location:" . __DIR__ . "/../views/students_list.php");
        } else {
            die("MySQLi Execution Error");
        }
    }

    /**
     * Get all deleted students
     */
    public function get_deleted_students()
    {
        $query = "SELECT * FROM Students WHERE is_deleted=1";

        $result = mysqli_query($GLOBALS["mysqli"], $query);

        if ($result) {
            header("location:" . __DIR__ . "/../views/students_list.php");
        } else {
            die("MySQLi Execution Error");
        }
    }

    /**
     * Get a student data by sid
     * @param string $sid
     */
    public function get_student($sid)
    {
        if (!isset($sid)) {
            die("Provide student id");
        }

        $query = "SELECT * FROM Students WHERE sid='$sid'";

        $result = mysqli_query($GLOBALS["mysqli"], $query);

        if ($result) {
            header("location:" . __DIR__ . "/../views/students_list.php");
        } else {
            die("MySQLi Execution Error");
        }
    }

    /**
     * Create a student
     * @param array $student
     */
    public function create_student($student)
    {
        $reg_no = $student["reg_no"];
        $name = $student["name"];
        $email = $student["email"];
        $gender = $student["gender"];
        $year = $student["year"];
        $dep = $student["dep"];
        $phone = $student["phone"];

        if (!isset($reg_no) || !isset($name) || !isset($email) || !isset($gender) || !isset($year) || !isset($dep) || !isset($phone)) {
            die("Provide Register number, name, gender, email, year, dep and phone");
        }

        $query = "INSERT INTO Students(reg_no,name,gender,email,year,dep,phone,status,is_deleted)
                     VALUES('$reg_no','$name','$gender','$email','$year','$dep','Active','$phone',0)";

        $result = mysqli_real_query($GLOBALS["mysqli"], $query);

        if ($result) {
            header("location:" . __DIR__ . "/../views/students_list.php");
        } else {
            die("MySQLi Execution Error");
        }
    }

    /**
     * Update a student details
     * @param array $student
     */
    public function update_student($student)
    {
        $sid = $_GET["sid"];
        $reg_no = $_GET["reg_no"];
        $name = $_GET["name"];
        $email = $_GET["email"];
        $year = $_GET["year"];
        $dep = $_GET["dep"];
        $phone = $_GET["phone"];

        if (!isset($sid) || !isset($reg_no) || !isset($name) || !isset($email) || !isset($year) || !isset($dep) || !isset($phone)) {
            die("Provide Register number, name, email, year, dep and phone");
        }

        $query = "UPDATE Students SET reg_no='$reg_no', name='$name', email='$email', year='$year', dep='$dep', phone='$phone' WHERE sid='$sid'";

        $result = mysqli_real_query($GLOBALS["mysqli"], $query);

        if ($result) {
            header("location:" . __DIR__ . "/../views/students_list.php");
        } else {
            die("MySQLi Execution Error");
        }
    }

    /**
     * Change student status
     * @param string $sid
     * @param string $status
     */
    public function change_student_status($sid, $status)
    {
        if (!isset($sid) || !isset($status)) {
            die("Provide Student id and status");
        }

        $query = "UPDATE Students SET status='$status' WHERE sid='$sid'";

        $result = mysqli_query($GLOBALS["mysqli"], $query);

        if ($result) {
            header("location:" . __DIR__ . "/../views/students_list.php");
        } else {
            die("MySQLi Execution Error");
        }
    }


    /**
     * To delete Student for temporarily
     * @param string $sid
     */
    public function soft_delete_student($sid)
    {
        if (!isset($sid)) {
            die("Provide student id");
        }

        $query = "UPDATE Students SET is_deleted=1 WHERE sid='$sid'";

        $result = mysqli_query($GLOBALS["mysqli"], $query);

        if ($result) {
            header("location:" . __DIR__ . "/../views/students_list.php");
        } else {
            die("MySQLi Execution Error");
        }
    }

    /**
     * To restore a Student
     * @param string $sid
     */
    public function restore_deleted_student($sid)
    {
        if (!isset($sid)) {
            die("Provide student id");
        }

        $query = "UPDATE Students SET is_deleted=0 WHERE sid='$sid'";

        $result = mysqli_query($GLOBALS["mysqli"], $query);

        if ($result) {
            header("location:" . __DIR__ . "/../views/students_list.php");
        } else {
            die("MySQLi Execution Error");
        }
    }

    /**
     * To delete a Student permanently
     * @param string $sid
     */
    public function delete_student($sid)
    {
        if (!isset($sid)) {
            die("Provide student id");
        }

        $query = "DELETE Students WHERE sid='$sid'";

        $result = mysqli_query($GLOBALS["mysqli"], $query);

        if ($result) {
            header("location:" . __DIR__ . "/../views/students_list.php");
        } else {
            die("MySQLi Execution Error");
        }
    }

    /**
     * To delete all the Students
     */
    public function delete_all_students()
    {
        $query = "TRUNCATE TABLE Students";

        $result = mysqli_query($GLOBALS["mysqli"], $query);

        if ($result) {
            header("location:" . __DIR__ . "/../views/students_list.php");
        } else {
            die("MySQLi Execution Error");
        }
    }
}
