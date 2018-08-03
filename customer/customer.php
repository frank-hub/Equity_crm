    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Customer Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="../css/mdb.min.css" rel="stylesheet">
        
        <link href="../css/style.css" rel="stylesheet">
        <link href="customer.css" rel="stylesheet">
    </head>
    
    <body>
    <?php 
    session_start();
   if ($_SESSION['status'] == true) {
      $fullName = $_SESSION['full_name'];
       $email =  $_SESSION['mail'] ;
       $mobile = $_SESSION['phone'];
       $img =  $_SESSION['image'] ;
    $locatioin = $_SESSION['location'];
        $_SESSION['nat_id'] ;


   }
   else {
       header("Location:../auth/");
   }
    ?>
    <div class="container">

    <div class="card">
        <div class="card-body "> 
            <div class="row">
                <div class="col-md-6">
                <h4> Welcome <?php echo  $fullName ?></h4>
                </div>
                <div class="col-md-6 ">
                <h4 class="text-warning float-right"><strong>EQUITY CRM</strong></h4>
                </div>
            </div>
        </div>
    </div>

    <section style="margin-top:5px;">
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                    <img src="../dashboard/uploads/<?php echo $img ?>" alt="" class="img-thumbnail">
                    </div>
                    <div class="col-md-6">
                    <p class"text-muted">
                    <i class="fa fa-clock"></i>
                    <?php echo date('d-m-Y'); ?><br>
                    <span>,Kenya</span></p>
                    </div>
                </div>
                <form method="post" action="">
                    <div class="md-form ">
                        <input type="text" id="full_name" name="fname" required class="form-control" placeholder="Name : <?php echo  $fullName ?>">
                    </div>
                    <div class="md-form">
                        <input type="email" name="email" class="form-control" required placeholder="Email :<?php echo  $email ?>">
                    </div>
                    <div class="md-form">
                        <input type="text" name="mobile" class="form-control" required  placeholder="Phone :<?php echo  $mobile ?>">
                    </div>
                    
                    <div class="md-form">
                        <input type="text" name="loc" class="form-control" required placeholder="Address : <?php echo  $locatioin ?>">
                    </div>
                    <div class="md-form">
                        <input type="text" name="oldPass" class="form-control" required placeholder="Old Password">
                    </div>
                    <div class="">
                        <button class="btn btn-block btn-outline btn-orange" name="update">UPDATE INFORMATION</button>
                    </div>
                </form>
                <?php 
                if (isset($_POST['update'])) {
                    updating();
                }
               function updating(){

                include '../auth/class/conn.php';
                $fname = $_POST['fname'];
                $email = $_POST['email'];
                $mobile = $_POST['mobile'];
                $loc = $_POST['loc'];
                $oldPass = $_POST['oldPass'];
                $update = "UPDATE `customer` SET `fname`='$fname',`email`='$email',`phone`='$mobile',`location`='$loc' WHERE password = '$oldPass'";
                $exc_update = mysqli_query($conn,$update);

               }
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-8">
    <div class="card">
        <div class="card-body text-white bg-warning">
        NOTIFICATIONS (0)
        </div>
    </div>
        <div class="card" style="margin-top: 5px;">
            <div class="card-body">
<!-- Nav tabs -->
<ul class="nav nav-tabs nav-justified" style="margin-bottom:0px;">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Messaging</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Transactions</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">AgencyBanking</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Money Transfers</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">Our Cards</a>
    </li>
</ul>
    <hr style="margin-top:5px;margin-bottom:5px;">
<!-- Tab panels -->
<div class="tab-content ">
    <!--Panel 1-->
    <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
        <br>
        <div id="live-chat">
		
		<header class="clearfix">
			
			<a href="#" class="chat-close">x</a>

			<h4><?php echo  $fullName ?></h4>

			<span class="chat-message-counter">3</span>

		</header>

		<div class="chat">
			
			<div class="chat-history">
				
				<div class="chat-message clearfix">
					
					<img src="" alt="" width="32" height="32">

					<div class="chat-message-content clearfix">
						
						<span class="chat-time">13:35</span>

						<h5><b>Customer :</b><?php echo  $fullName ?></h5>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, explicabo quasi ratione odio dolorum harum.</p>

					</div> <!-- end chat-message-content -->

				</div> <!-- end chat-message -->
				<hr>
				<div class="chat-message clearfix">
					
					<img src="http://gravatar.com/avatar/2c0ad52fc5943b78d6abe069cc08f320?s=32" alt="" width="32" height="32">

					<div class="chat-message-content clearfix info-color text-white">
						
						<span class="chat-time">13:37</span>

						<h5><b>Staff :</b> Biedermann</h5>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, nulla accusamus magni vel debitis numquam qui tempora rem voluptatem delectus!</p>

					</div> <!-- end chat-message-content -->
				</div> <!-- end chat-message -->
				<hr>
			</div> <!-- end chat-history -->
			<p class="chat-feedback">Your partner is typing…</p>

			<form method="post">
                <div class="form-group">
                    <select name="services" class="form-control">
                        <option value="disabled" selected disabled>--Inquiry On--</option>
                        <option value="Deposit">Deposit</option>
                        <option value="Withdrawal">Withdrawal</option>
                        <option value="Loan">Loan</option>
                        <option value="others">Other</option>
                    </select>
                </div>
				<div class="form-group">
                <fieldset>
					<input type="text" placeholder="Type your message…" autofocus name="message" class="form-control">
                </fieldset>
                </div>

            </form>
            <?php
            
            if(isset( $_POST['message'])){
                include '../auth/class/conn.php';
                $receiver = "Biedermann";
                $sender = $fullName ;
                $subject = $_POST['services'];
                $text = $_POST['message'];
                $date = date('d/m/y');
                $userid = $_SESSION['nat_id'] ;

                $send = "INSERT INTO `message`(`receiver`, `sender`, `subject`, `text`, `senddate`, `userid`) VALUES 
                ('$receiver','$sender','$subject','$text','$date','$userid')";
                $exc = mysqli_query($conn,$send);
                if ($exc) {?>
                         <button class="btn btn-success">OK</button>
                    <?php
                }
            }
           
// INSERT INTO `message`(`receiver`, `sender`, `subject`, `text`, `senddate`, `userid`) VALUES 
            ?>

		</div> <!-- end chat -->

	</div> <!-- end live-chat -->

    </div>
    <!--/.Panel 1-->
    <!--Panel 2-->
    <div class="tab-pane fade" id="panel2" role="tabpanel">
        <div>
            <a href="gen_pdf.php" class="btn btn-sm btn-orange" target="_blank">Print PDF</a>
        </div>
        <br>
        <table class="table table-sm table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Date :</th>
      <th scope="col">Ref No.</th>
      <th scope="col">Transaction Type:</th>
      <th scope="col">Amount :</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-info">
      <th scope="row"><?php echo date('d/m/Y') ;  ?></th>
      <td>DP-254</td>
      <td>Deposit</td>
      <td>15,462.00</td>
    </tr>
    <tr class="tabled-primary">
      <th scope="row">01/07/2018</th>
      <td>WD-646</td>
      <td>Withdrawal</td>
      <td>45,566.00</td>
    </tr>
  </tbody>
  <footer>
      <tr>
          <th></th>
          <th></th>
          <th></th>
          <th>50,000.00</th>
      </tr>
  </footer>
</table>
    </div>
    <!--/.Panel 2-->
    <!--Panel 3-->
    <div class="tab-pane fade" id="panel3" role="tabpanel">
        <br>
        <p>Equity Agency Banking enables you to access and enjoy 
        banking services conveniently at your door step. Through our Agency Banking
         model, we offer you the full range of banking serices without having to visit 
         a branch.   
         some of this features include;
        1. Cash Deposit through mobile proccess 
        2. Cash Withdrawal
        3. School fees Rent, Collection Accounts, Bills Payments
         </p>
    </div>
    <!--/.Panel 3-->
</div>
            </div>
        </div>
    </div>
</div>
    </section>
    </div>
    <footer class="page-footer center-on-small-only orange darken-3" style="margin-top:15px;">
    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">
            <!--First column-->
            <div class="col-md-3 col-md-offset-1">
                            </div>
            <!--/.First column-->
            <hr class="hidden-md-up">
            <!--Second column-->
            <div class="col-md-2">
                <h5 class="title">First column</h5>
                <div class="menu"><ul><li class="page_item page-item-2"><a href="https://tutorial-wp-1.mdbootstrap.com/sample-page/">Sample Page</a></li></ul></div>
            </div>
            <!--/.Second column-->
            <hr class="hidden-md-up">
            <!--Third column-->
            <div class="col-md-2">
                <h5 class="title">Second column</h5>
                <div class="menu"><ul><li class="page_item page-item-2"><a href="https://tutorial-wp-1.mdbootstrap.com/sample-page/">Sample Page</a></li></ul></div>
            </div>
            <!--/.Third column-->
            <hr class="hidden-md-up">
            <!--Fourth column-->
            <div class="col-md-2">
                <h5 class="title">Third column</h5>
                <div class="menu"><ul><li class="page_item page-item-2"><a href="https://tutorial-wp-1.mdbootstrap.com/sample-page/">Sample Page</a></li></ul></div>
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer Links-->
    <!--Copyright-->
    <div class="footer-copyright text-center">
        <div class="container-fluid">
            © <?php echo date('Y') ?> Copyright: <a href="../">EQUITY CRM</a>
        </div>
    </div>
    <!--/.Copyright-->
</footer>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <script>
 
  (function() {

	$('#live-chat header').on('click', function() {

		$('.chat').slideToggle(300, 'swing');
		$('.chat-message-counter').fadeToggle(300, 'swing');

	});

	$('.chat-close').on('click', function(e) {

		e.preventDefault();
		$('#live-chat').fadeOut(300);

	});

}) ();
</script>
    </body>
    </html>