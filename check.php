<?php
include('connection.php');
include('DatabaseDetails.php');
$q="select * from survey_details";
$result=mysqli_query($con,$q);
?>
<table border="1">
    <caption style="font-weight: bold;">Survey Details</caption>
    <tr>
        <th width=10%>Sr. no.</th>
        <th width=20%>Name</th>
        <th width=40%>Email</th>
        <th width=50%>Project</th>
    </tr>
    <?php
    $Sr=1;
    while($r=mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td align='center'>".$Sr."</td>";
        echo "<td align='center'>".$r['Name']."</td>";
        echo "<td align='center'>".$r['Email']."</td>";
        echo "<td align='center'>".$r['Project']."</td>";
        echo "</tr>";
        $Sr++;
    }
    
    mysqli_close($con);
    ?>
</table>