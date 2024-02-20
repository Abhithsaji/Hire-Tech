<?php
include('SessionValidator.php');
include('Head.php');
include('../Connection/Connection.php');
if(isset($_POST["btn_submit"]))
{
  $feed=$_POST["txt_feedback"];
  $ins="insert into tbl_feedback(feedback_content,feedback_date,labour_id) values('".$feed."',curdate(),'".$_SESSION["labourid"]."')";
  if($conn->query($ins))
  {
    ?>
    <script>
      alert("Feedback Inserted")
    </script>
    <?php
  }
}
if(isset($_GET['id']))
	{
		$del = "delete from tbl_feedback where feedback_id = '".$_GET['id']."'";
		$conn->query($del);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="">
    <table width="605" height="122" border="1" align="center">
      <tr>
        <td width="91" align="center">Feedback</td>
        <td width="93" align="center"><label for="txt_feedback"></label>
        <textarea name="txt_feedback" id="txt_feedback" cols="45" rows="5"></textarea></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
        <input type="submit" name="btn_cancel" id="btn_cancel" value="Cancel" /></td>
      </tr>
    </table>
    <br><br><br>
    <table width="604" border="1" align="center">
      <tr align="center">
        <td width="74" height="52">Sl. No</td>
        <td width="244">Content</td>
        <td width="134">Date</td>
        <td width="124">Action</td>
      </tr>
      <?php 
        $i=0;
        $sellab="select * from tbl_labour";
        $rows = $conn->query($sellab);
        while($res= $rows->fetch_assoc())
        {
            $lid=$res['labour_id'];
            $sel = "SELECT * FROM tbl_feedback WHERE  '" . $lid . "'  = '" . $_SESSION['labourid'] . "'";
	  		$row = $conn->query($sel);
	  		while($data = $row->fetch_assoc())
	  		{
				$i++;
	  ?>
      <tr>
        <td height="66"><?php echo $i;?></td>
        <td><?php echo $data['feedback_content'];?></td>
        <td><?php echo $data['feedback_date'];?></td>
        <td><a href="Feedback.php?id=<?php echo $data["feedback_id"];?>">Delete</a></td>
        
        <?php
			}
        }
		?>
      </tr>
    </table>
    <p>&nbsp;</p>
  </form>
</body>
</html>
<?php
include('Foot.php');
?>


