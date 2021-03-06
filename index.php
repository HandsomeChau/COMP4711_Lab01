<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab 01</title>
    </head>
    <body>
        <?php
            include('Student.php');
            
            $students = array();
            
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home', 'john@doe.com');
            $first->add_email('work', 'jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;
            
            
            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home', 'albert@braniacs.com');
            $second->add_email('work1', 'a_einstein@bcit.ca');
            $second->add_email('work2', 'albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(80);
            $second->add_grade(50);
            $students['a456'] = $second;
            
            $myself = new Student();
            $myself->surname = "Pham";
            $myself->first_name = "Edwin";
            $myself->add_email("home", "edwin.pham@yahoo.com");
            $myself->add_grade(88);
            $students["a083"] = $myself;
            
            ksort($students);
            
            foreach ($students as $student) {
                echo $student->toString();
            }
        ?>
    </body>
</html>


