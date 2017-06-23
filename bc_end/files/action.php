<?php
//action.php
if(isset($_POST["action"]))
{
    $connect = mysqli_connect("localhost", "root", "", "project_pi");
    if($_POST["action"] == "fetch")
    {
        $query = "SELECT * FROM tbl_images ORDER BY id DESC";
        $result = mysqli_query($connect, $query);
        $output = '
           <table class="table">  
            <tr>
             <th width="10%">ID</th>
             <th width="30%">Image</th>
             <th width="20%">Type</th>
             <th width="20%">Change</th>
             <th width="20%">Remove</th>
            </tr>
            <tbody">
          ';
        while($row = mysqli_fetch_array($result))
        {
            $output .= '

            <tr>
             <td>'.$row["id"].'</td>
             <td>
              <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).' "style="height: 80px; width: 75px;" class="img-thumbnail" />
             </td>
             <td>'.$row["type_img"].'
             <td><button type="button" name="update" class="btn btn-warning bt-xs update" id="'.$row["id"].'">Change</button></td>
             <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["id"].'">Remove</button></td>
            </tr>
           ';
        }
        $output .= '</tbody>
                    </table>';
        echo $output;
    }

    if($_POST["action"] == "insert")
    {
        $type_img = $_POST['type_img'];
        $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
        $query = "INSERT INTO tbl_images(name, type_img) VALUES ('$file' , '$type_img')";
        if(mysqli_query($connect, $query))
        {
            echo 'Image Inserted into Database';
        }
    }
    if($_POST["action"] == "update")
    {
        $type_img = $_POST['type_img'];
        $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
        $query = "UPDATE tbl_images SET name = '$file', type_img = '$type_img' WHERE id = '".$_POST["image_id"]."'";
        if(mysqli_query($connect, $query))
        {
            echo 'Image Updated into Database';
        }
    }
    if($_POST["action"] == "delete")
    {
        $query = "DELETE FROM tbl_images WHERE id = '".$_POST["image_id"]."'";
        if(mysqli_query($connect, $query))
        {
            echo 'Image Deleted from Database';
        }
    }
}
?>