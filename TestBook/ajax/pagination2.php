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
$books = $db->query ("SELECT * FROM `Books` ORDER BY `title` LIMIT $start_from, $record_per_page");  

//output from the db    
while ($row = mysqli_fetch_array($books)) {
  $id=$row['author_id'];             
  $output .= "<div id='img_div'>";  
  $output .= "<tr>";
  $output .= "<td>"."<span>"." Title: "."</span>".$row['title']."</td>";
  $output .= "<td>"."<button class=\"btn btn-outline-warning btx\" id='bkk'>Make a request</button>"."</td>";
  $output .= "</tr>";          
  $output .= "<img id='bkimg' src='data:image/jpeg;base64,".base64_encode($row['img'])."'/>";
  $output .= "<p>"."<span>"." Author: "."</span>";   
  $authors = $db->query ("SELECT * FROM `Authors` WHERE `id`='$id'" );
  while ($bow = mysqli_fetch_array($authors)) {
    $output .= " ".$bow['name']." ";}
  $output .= "</p>";                 
  $output .= "</div>";    
    }

 $output .= '</table><br /><div align="center">';  
 $page_query = $db->query ("SELECT * FROM `Books` ORDER BY `id`");   
 $total_records = mysqli_num_rows($page_query);  
 $total_pages = ceil($total_records/$record_per_page); 
 for($i=1; $i<=$total_pages; $i++)  
 {  
    $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>"; 
 } 
 $output .= '</div><br /><br />';  
 echo $output;  
 ?>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/main.js"></script>