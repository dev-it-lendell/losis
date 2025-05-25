<?php
    include '../../connect.php';
    include '../checking.php';

    if (isset($_SESSION['user_id'])) {
		$outgoing_id = $_SESSION['user_id'];
		$incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
		$output = "";
        $sql = "SELECT a.user_id, CONCAT(a.fname, ' ', a.lname) AS clientname, b.msg_id, b.incoming_msg_id, b.outgoing_msg_id, b.msg, b.msg_datetime FROM tbl_client AS a LEFT JOIN messages AS b ON a.user_id = b.incoming_msg_id WHERE (incoming_msg_id = '$outgoing_id' AND outgoing_msg_id = '$incoming_id') OR (incoming_msg_id = '$incoming_id' AND outgoing_msg_id = '$outgoing_id') UNION ALL SELECT a.user_id, CONCAT(a.fname, ' ', a.lname) AS supervisorname, b.msg_id, b.incoming_msg_id, b.outgoing_msg_id, b.msg, b.msg_datetime FROM tbl_supervisor AS a LEFT JOIN messages AS b ON a.user_id = b.incoming_msg_id WHERE (incoming_msg_id = '$outgoing_id' AND outgoing_msg_id = '$incoming_id') OR (incoming_msg_id = '$incoming_id' AND outgoing_msg_id = '$outgoing_id') UNION ALL SELECT a.user_id, CONCAT(a.fname, ' ', a.lname) AS supervisorname, b.msg_id, b.incoming_msg_id, b.outgoing_msg_id, b.msg, b.msg_datetime FROM tbl_operations AS a LEFT JOIN messages AS b ON a.user_id = b.incoming_msg_id WHERE (incoming_msg_id = '$outgoing_id' AND outgoing_msg_id = '$incoming_id') OR (incoming_msg_id = '$incoming_id' AND outgoing_msg_id = '$outgoing_id') ORDER BY msg_id";
		$query = mysqli_query($conn, $sql);
		if (mysqli_num_rows($query) > 0) {
			while ($row = mysqli_fetch_assoc($query)) {
				$msg_datetime = $row['msg_datetime'];
				$newDateTimeMsg = date('F d, Y - g:i A', strtotime($msg_datetime));
				if ($row['outgoing_msg_id'] === $outgoing_id) {
					$output .= '<div class="chat outgoing" data-toggle="tooltip" data-placement="top" title="'.$newDateTimeMsg.'">
									<div class="details">
	                                    <p>'. $row['msg'] .'</p>
	                                </div>
								</div>';
				} else {
	                    $output .= '<div class="chat incoming" data-toggle="tooltip" data-placement="top" title="'.$newDateTimeMsg.'">
	                                		<div class="details">
	                                    	<p>'. $row['msg'] .'</p>
	                                	</div>
	                                </div>';
				}
			}
		} else {
			$output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
		}
		echo $output;
    }
?>