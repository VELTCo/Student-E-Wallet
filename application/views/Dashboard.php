<div id="App_DashboardArea" class="d-flex flex-row" style="width:100%; height: 100%">
	<div class="d-flex flex-row" style="width: 100%;">
		<div class="p-3 d-flex flex-column" style="width: 100%; overflow: hidden; overflow-y: scroll;">
			<div class="d-flex flex-column p-3 border">
				<!-- Student Balance -->
				<div class="d-flex flex-row">
					<div class="d-flex flex-column pt-3" style="width: 100%">
						<h6 class="border-bottom pl-2 pr-2" style="margin: 0; font-size: 12px;">Available Balance</h6>
						<h3 class="pl-2 pr-2" style="margin: 0">￥ 12,345.67</h3>
					</div>
					<div class="d-flex flex-column ml-4">
						<button class="material-icons form-control rounded-circle">add</button>
						<h6 class="mt-2">Top Up</h6>
					</div>
				</div>
				<!-- End of Student Balance -->
				<!-- Tution Fee -->
				<div class="border-top pt-1">
					<h1 class="ml-2" style="margin: 0px; font-size: 12px;">Tution Fee Left</h1>
					<h6 class="d-flex justify-content-center m-0 mt-1" style="font-weight: bold;">￥ 12,345.67</h6>
				</div>
				<!-- End of Tution Fee -->
			</div>
			<!-- Payments Area -->
			<h4 class="border-bottom mt-4 pb-1">Payments</h4>
			<div class="d-flex justify-content-center row ml-1 mr-1" style="width: 100%">
				<button class="d-flex flex-column form-control m-1" style="height: 90px; width: 200px;">
					<div class="d-flex justify-content-center" style="width: 100%">
						<div class="material-icons rounded-circle border p-2">school</div>
					</div>
					<div class="d-flex justify-content-center mt-2" style="width: 100%">School Fee</div>
				</button>
				<button class="d-flex flex-column form-control m-1" style="height: 90px; width: 200px;">
					<div class="d-flex justify-content-center" style="width: 100%">
						<div class="material-icons rounded-circle border p-2">grading</div>
					</div>
					<div class="d-flex justify-content-center mt-2" style="width: 100%">Grade Slip</div>
				</button>
				<button class="d-flex flex-column form-control m-1" style="height: 90px; width: 200px;">
					<div class="d-flex justify-content-center" style="width: 100%">
						<div class="material-icons rounded-circle border p-2">receipt_long</div>
					</div>
					<div class="d-flex justify-content-center mt-2" style="width: 100%">Evaluation Grades</div>
				</button>

				<button class="d-flex flex-column form-control m-1" style="height: 90px; width: 200px;">
					<div class="d-flex justify-content-center" style="width: 100%">
						<div class="material-icons rounded-circle border p-2">list</div>
					</div>
					<div class="d-flex justify-content-center mt-2" style="width: 100%">Others</div>
				</button>

			</div>
			<!-- End of Payments Area -->
			<h4 class="border-bottom mt-4 pb-1">News & Announcement</h4>
			<div class="d-flex justify-content-center" style="width: 100%">
				<h1 class="mt-5 mb-5">There is no Currently Big News or Announcement Yet!</h1>
			</div>
		</div>
		<!-- Notificaltion Area -->
		<div class="border-left" style="width: 550px; height: 100%;">
			<h5 class="p-2 border-bottom" style="margin: 0">Notificaltions</h5>
			<div style="width: 100%; height: 100%; overflow: hidden; overflow-y: scroll;">
				<div class="d-flex flex-row form-control border-left-0 border-right-0 border-top-0 rounded-0" style="width: 100%; height: 69px">
					<img src="http://localhost/Ewallet/avatar.png" width="50px" height="50px">
					<div class="ml-3">
						<div style="font-size: 12px; font-weight: bold">Z. Redgrave -> School Fee around ￥500.00</div>
						<div style="font-size: 12px">Date and Time: 2020:09:20 13:46</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End of Notificaltion Area -->
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$("title").text("E-Student Wallet Access - Dashboard")	
	})
</script>