<?php

/**
 * SAMPLE CONTENT. Edit or delete it to start a clean project.
 * 
 * @method: data()      -> BASIC MODEL METHOD that 'manipulates' some  
 *                         strings and returns them to the controller.
 * @method: // create() -> Method (disabled) to INSERT data in a sample  
 *                         table called 'crud'.
 * @method: // read()   -> Method (disabled) to SELECT data in a sample  
 *                         table called 'crud'.
 * @method: // update() -> Method (disabled) to UPDATE data in a sample  
 *                         table called 'crud'.
 * @method: // delete() -> Method (disabled) to DELETE data in a sample  
 *                         table called 'crud'.
 * 
 */
class home_model
{
    public function data()
    {
        $string_one = 'Simple ';
        $string_two = 'MVC Front Controller ';
        $string_three = 'Mini Framework ';
        $string_four = '(V.0.2)';
        $secondary_heading = $string_one . $string_two . $string_three . $string_four;
        return $secondary_heading;
    }

    // public function create($title, $description)
    // {
    //     $conn = new database();
    //     $sql = "INSERT INTO crud VALUES( NULL, :title, :description )";
    //     $conn->query($sql);
    //     $conn->bind(':title', $title);
    //     $conn->bind(':description', $description);
    //     $conn->execute();
    // }

    // public function read()
    // {
    //     $conn = new database();
    //     $sql = "SELECT * FROM crud";
    //     $conn->query($sql);
    //     $rows = $conn->fetch_all();
    //     return $rows;
    // }

    // public function update($id, $title, $description)
    // {
    //     $conn = new database();
    //     $sql = "UPDATE crud SET title = :title, description = :description WHERE id = :id";
    //     $conn->query($sql);
    //     $conn->bind(':id', $id);
    //     $conn->bind(':title', $title);
    //     $conn->bind(':description', $description);
    //     $conn->execute();
    // }

    // public function delete($id)
    // {
    //     $conn = new database();
    //     $sql = "DELETE FROM crud WHERE id = :id";
    //     $conn->query($sql);
    //     $conn->bind(':id', $id);
    //     $conn->execute();
    // }
}

