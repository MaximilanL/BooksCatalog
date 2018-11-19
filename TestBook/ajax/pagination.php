<?php
//connect to the database 
$db=new mysqli('localhost', 'root', '', 'TestBook') or die(mysqli_error($db));      

$record_per_page = 4; //number of entries per page   

$page = '';  
  
if(isset($_POST["page"]))  
{  
  $page = $_POST["page"];  
} else {  
  $page = 1;  
} 

$start_from = ($page - 1)*$record_per_page; 
$authors = $db->query ("SELECT * FROM `Authors` ORDER BY `name` LIMIT $start_from, $record_per_page");  

//output from the db    
while ($row = mysqli_fetch_array($authors)) {
  $id=$row['id'];             
  $output .= "<div id='img_div'>";  
  $output .= "<tr>";
  $output .= "<td>"."<span>"." Name: "."</span>".$row['name']."</td>";
  $output .= "</tr>";          
  $output .= "<img src='data:image/jpeg;base64,".base64_encode($row['photo'])."'/>";
  $output .= "<p>"."<span>"." Books: "."</span>";   
  $books = $db->query ("SELECT * FROM `Books` WHERE `author_id`='$id' ORDER BY `title`" );
  while ($bow = mysqli_fetch_array($books)) {
    $output .= " ".$bow['title']."; ";}
  $output .= "</p>";                 
  $output .= "</div>";    
    }

 $output .= '</table><br /><div align="center">';  
 $page_query = $db->query ("SELECT * FROM `Authors` ORDER BY `id`");   
 $total_records = mysqli_num_rows($page_query);  
 $total_pages = ceil($total_records/$record_per_page); 
 for($i=1; $i<=$total_pages; $i++)  
 {  
    $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>"; 
 } 
 $output .= '</div><br /><br />';  
 echo $output;  
 ?>  