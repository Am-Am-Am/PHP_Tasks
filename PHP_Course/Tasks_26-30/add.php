<?php
    function input($name){
        {
            if(isset($_POST[$name])){
                $value = $_POST[$name];
            }else{
                $value = "";
            }
        }
        
        return '<input name="' . $name .'" value="' . $value .'">';
    }

    if(!empty($_POST)){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $salary = $_POST['salary'];

        $query = "INSERT INTO workers SET name='$name', age='$age', salary='$salary'";
        mysqli_query($link, $query) or die(mysqli_error($link));
    }


?>


<form action="" method="POST">
        <?php echo input('name');?>
        <?php echo input('age');?>
        <?php echo input('salary');?>
        <input type="submit" value="добавить работника">
    </form>