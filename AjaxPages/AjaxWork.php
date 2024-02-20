<tr>
<?php 
include("../Connection/Connection.php");

$sel = "select * from tbl_workpost w inner join tbl_labour l on w.labour_id=l.labour_id inner join tbl_place p on p.place_id=l.place_id where workpost_status='0'";
if($_GET["did"]!=""){
	$sel.=" and p.district_id=".$_GET['did'];
}
if($_GET["pid"]!=""){
	$sel.=" and l.place_id=".$_GET['pid'];
}
if($_GET["tid"]!=""){
	$sel.=" and l.worktype_id=".$_GET['tid'];
}
echo $sel;
$i = 0;


	$row = $conn->query($sel);
	while($data = $row->fetch_assoc())
	{
		
		$average_rating = 0;
	$total_review = 0;
	$five_star_review = 0;
	$four_star_review = 0;
	$three_star_review = 0;
	$two_star_review = 0;
	$one_star_review = 0;
	$total_user_rating = 0;

	$query = "
	SELECT * FROM tbl_review where labour_id = '".$data["labour_id"]."' ORDER BY review_id DESC
	";

	$result = $conn->query($query);

	while($row = $result->fetch_assoc())
	{
		if($row["user_rating"] == '5')
		{
			$five_star_review++;
		}

		if($row["user_rating"] == '4')
		{
			$four_star_review++;
		}

		if($row["user_rating"] == '3')
		{
			$three_star_review++;
		}

		if($row["user_rating"] == '2')
		{
			$two_star_review++;
		}

		if($row["user_rating"] == '1')
		{
			$one_star_review++;
		}

		$total_review++;

		$total_user_rating = $total_user_rating + $row["user_rating"];

	}
		if($total_user_rating>0)
		{
			$average_rating = $total_user_rating / $total_review;
		}

		
		
		$i++;
		?>
			<td style="padding:30px">
            	<p style="border:1px solid black;padding:20px;text-align:center">
                <img src="../Assets/LabourPhoto/<?php echo $data["labour_photo"];?>" style="border-radius:50%" width="80" height="80"/><br /><br />
                Name : <?php echo $data["labour_name"];?></br><br />
                 Rating :	<?php echo number_format($average_rating, 1);?>/5</br><br />
				Details :	<?php echo $data["workpost_details"];?></br><br />
				Amount :	<?php echo $data["workpost_amount"];?>
                </br><br />
				<a href="SearchWork.php?bid=<?php echo $data["workpost_id"];?>">Book Now</a>
                </p>
			</td>
		<?php
		if($i==4)
		{
			echo "</tr><tr>";
			$i=0;
		}
	}
?>