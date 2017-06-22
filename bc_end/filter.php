<?php
//filter.php
if(isset($_POST["from_date"], $_POST["to_date"]))
{
    $connect = mysqli_connect("localhost", "root", "Meas1122", "project_pi");
    $output = '';
    $query = "  
           SELECT * FROM booking  
           WHERE from_date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";
    $result = mysqli_query($connect, $query);
    $output .= '  
           <table class="table table-bordered">  
                <tr>  
                    <th>Place</th>
                    <th>Adult</th>
                    <th>Children</th>
                    <th>Suite</th>
                    <th>Number of Room</th>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Cuisine</th>
                    <th>Action</th>
                </tr>  
      ';
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $output .= '  
                     <tr>  
                          <td>'. $row["place"] .'</td>  
                          <td>'. $row["adult"] .'</td>  
                          <td>'. $row["children"] .'</td>  
                          <td>'. $row["suite"] .'</td>  
                          <td>'. $row["no"] .'</td> 
                          <td>'. $row["from_date"] .'</td>  
                          <td>'. $row["to_date"] .'</td>  
                          <td>'. $row["cuisine"] .'</td>  
                          
                     </tr>  
                ';
        }
    }
    else
    {
        $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';
    }
    $output .= '</table>';
    echo $output;
}
?>