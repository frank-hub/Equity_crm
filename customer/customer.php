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
    </head>
    <style>
        body{
            background-color: #F1 F1F1;
        }
        @charset "utf-8";
/* CSS Document */

/* ---------- GENERAL ---------- */

body {
	background: #e9e9e9;
	color: #9a9a9a;
	font: 100%/1.5em "Droid Sans", sans-serif;
	margin: 0;
}

a { text-decoration: none; }

fieldset {
	border: 0;
	margin: 0;
	padding: 0;
}

h4, h5 {
	line-height: 1.5em;
	margin: 0;
}

hr {
	background: #e9e9e9;
    border: 0;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    height: 1px;
    margin: 0;
    min-height: 1px;
}

img {
    border: 0;
    display: block;
    height: auto;
    max-width: 100%;
}

input {
	border: 0;
	color: inherit;
    font-family: inherit;
    font-size: 100%;
    line-height: normal;
    margin: 0;
}

p { margin: 0; }

.clearfix { *zoom: 1; } /* For IE 6/7 */
.clearfix:before, .clearfix:after {
    content: "";
    display: table;
}
.clearfix:after { clear: both; }

/* ---------- LIVE-CHAT ---------- */

#live-chat {
	/* bottom: 0;
	font-size: 12px;
	right: 24px;
	position: fixed;
	width: 300px; */
}

#live-chat header {
	background: #293239;
	border-radius: 5px 5px 0 0;
	color: #fff;
	cursor: pointer;
	padding: 16px 24px;
}

#live-chat h4:before {
	background: #1a8a34;
	border-radius: 50%;
	content: "";
	display: inline-block;
	height: 8px;
	margin: 0 8px 0 0;
	width: 8px;
}

#live-chat h4 {
	font-size: 12px;
}

#live-chat h5 {
	font-size: 10px;
}

#live-chat form {
	padding: 24px;
}

#live-chat input[type="text"] {
	border: 1px solid #ccc;
	border-radius: 3px;
	padding: 8px;
	outline: none;
	
    height: 50px;
}

.chat-message-counter {
	background: #e62727;
	border: 1px solid #fff;
	border-radius: 50%;
	display: none;
	font-size: 12px;
	font-weight: bold;
	height: 28px;
	left: 0;
	line-height: 28px;
	margin: -15px 0 0 -15px;
	position: absolute;
	text-align: center;
	top: 0;
	width: 28px;
}

.chat-close {
	background: #1b2126;
	border-radius: 50%;
	color: #fff;
	display: block;
	float: right;
	font-size: 10px;
	height: 16px;
	line-height: 16px;
	margin: 2px 0 0 0;
	text-align: center;
	width: 16px;
}

.chat {
	background: #fff;
}

.chat-history {
	height: 252px;
	padding: 8px 24px;
	overflow-y: scroll;
}

.chat-message {
	margin: 16px 0;
}

.chat-message img {
	border-radius: 50%;
	float: left;
}

.chat-message-content {
	margin-left: 56px;
}

.chat-time {
	float: right;
	font-size: 10px;
}

.chat-feedback {
	font-style: italic;	
	margin: 0 0 0 80px;
}
    </style>
    <body>
    <?php 
    session_start();
   if ($_SESSION['status'] == true) {
      $fullName = $_SESSION['full_name'];
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
                    <img src="../img/crm/home/avatar.png" alt="" class="img-thumbnail">
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
                        <input type="text" id="full_name" name="fname" class="form-control" placeholder="<?php echo  $fullName ?>">
                    </div>
                    <div class="md-form">
                        <input type="text" name="fname" class="form-control" placeholder="Mobile No.">
                    </div>
                    <div class="md-form">
                        <input type="text" name="fname" class="form-control" placeholder="Email Add.">
                    </div>
                    <div class="md-form">
                        <input type="text" name="fname" class="form-control" placeholder="Location.">
                    </div>
                    <div class="md-form">
                        <input type="text" name="fname" class="form-control" placeholder="Password">
                    </div>
                    <div class="">
                        <button class="btn btn-block btn-outline btn-orange">UPDATE INFORMATION</button>
                    </div>
                </form>
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
        <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">Contact</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Follow</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">Contact</a>
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

			<form action="#" method="post">
                <div class="form-group">
                    <select name="services" id="" class="form-control">
                        <option value="" selected>--Inquiry On--</option>
                        <option value="">Deposit</option>
                        <option value="">Withdrawal</option>
                        <option value="">Deposit</option>
                        <option value="">Loan</option>
                        <option value="">Other</option>
                    </select>
                </div>
				<div class="form-group">
<fieldset>
					<input type="text" placeholder="Type your message…" autofocus class="form-control">
					<input type="hidden">
				</fieldset>
                </div>

			</form>

		</div> <!-- end chat -->

	</div> <!-- end live-chat -->

    </div>
    <!--/.Panel 1-->
    <!--Panel 2-->
    <div class="tab-pane fade" id="panel2" role="tabpanel">
        <div>
            <button class="btn btn-sm btn-orange">Print PDF</button>
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
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
            reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
            porro voluptate odit minima.</p>
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