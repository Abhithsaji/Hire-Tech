<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>District</title>

</head>
<?php
ob_start();
include('../Connection/Connection.php');
include('Head.php');


?>
<body>
        <section class="main_content dashboard_part">

            <!--/ menu  -->
            <div class="main_content_iner ">
                <div class="container-fluid p-0">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="QA_section">
                                <!--Form-->
                                <div class="white_box_tittle list_header">
                                    <div class="col-lg-12">
                                        <div class="white_box mb_30">
                                            <div class="box_header ">
                                                <div class="main-title">
                                                    <h3 class="mb-0" >Labour Feedback</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table lms_table_active">
                                        <thead>
                                            <tr style="background-color: #74CBF9">
                                                <td align="center" scope="col">Sl.No</td>
                                                <td align="center" scope="col">Name</td>
                                                <td align="center" scope="col">Date</td>
                                                <td align="center" scope="col">Feedback</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $i=0;
                                            $sel = "select * from tbl_feedback f inner join tbl_labour u on f.labour_id=u.labour_id ";
	  		                                $row = $conn->query($sel);
	  		                                while($data = $row->fetch_assoc())
	  		                                {
				                                $i++;
                                        ?>
                                            <tr>
                                                <td align="center"><?php echo $i;?></td>
                                                <td align="center"><?php echo $data['labour_name']; ?></td>
                                                <td align="center"><?php echo $data['feedback_date']; ?></td>
                                                <td align="center"><?php echo $data['feedback_content']; ?></td>
                                            </tr>
                                            <?php                    
                                              }


                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        
</body>
<?php
		include('Foot.php');
		 ob_end_flush();
		?>
</html>