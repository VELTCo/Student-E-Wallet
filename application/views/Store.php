<div id="App_HomeArea" class="d-flex flex-row" style="width:100%; height: 100%">
	<!-- Store View Area -->
	<div id="StoreView_HomeArea" class="d-flex flex-row" style="width: 100%;">
		<!-- Store Area -->
		<div id="StoreArea" class="p-3 d-flex flex-column" style="width: 100%; overflow: hidden; overflow-y: scroll;">
			<div class="d-flex flex-column p-3 border">
				<!-- Student Balance -->
				<div class="d-flex flex-row">
					<div class="d-flex flex-column pt-3" style="width: 100%">
						<h6 class="border-bottom pl-2 pr-2" style="margin: 0; font-size: 12px;">Available Balance</h6>
						<h3 id="StoreView_DepositLabel" class="pl-2 pr-2" style="margin: 0">P XXXX.XX</h3>
					</div>
				</div>
				<!-- End of Student Balance -->
				<!-- Tution Fee -->
				<div class="border-top pt-1">
					<h1 class="ml-2" style="margin: 0px; font-size: 12px;">Tution Fee Left</h1>
					<h6 id="StoreView_TuitionLabel" class="d-flex justify-content-center m-0 mt-1" style="font-weight: bold;">P XXXX.XX</h6>
				</div>
				<!-- End of Tution Fee -->
			</div>
			<!-- Payments Area -->
			<h4 class="border-bottom mt-4 pb-1">Payment Store</h4>
			<div id="StoreView_ButtonLoad" class="d-flex justify-content-center row ml-1 mr-1" style="width: 100%">

				<button onclick="new Store().View_OpenButton()" class="d-flex flex-column form-control rounded border-0 mr-3 mb-3 red" style="color: white;  width: 175px; min-height: 125px;">
					<div class="material-icons d-flex align-items-center justify-content-center" style="width: 100%; height: 100%">account_balance</div>
					<div class="d-flex justify-content-center p-2" style="font-size: 12px; font-weight: bold;">Tuition Fee(Default)<div>
				</button>

				<?php 

					foreach ($Store as $value) {
						echo '<div id="School_DynamicItemID' .$value['StoreID']. '" onclick="new Store().View_DynamicButton(' .$value['StoreID']. ')" class="d-flex flex-row mr-3 mb-3">
								<div class="d-flex flex-column border rounded mr-1" style="width: 175px; min-height: 125px;">
									<div class="material-icons d-flex align-items-center justify-content-center" style="width: 100%; height: 100%">' .$value['StoreIcon']. '</div>
									<div class="d-flex justify-content-center p-2" style="font-size: 12px; font-weight: bold;">' .$value['StoreTitle']. '</div>
								</div>
							</div>';					
					}

				?>

			</div>
			<!-- Store Tuition Area -->
			<div id="StoreView_TuitionArea" class="p-3 d-flex flex-column hide" style="width: 100%;">
				<h4>Tuition Fee</h4>

				<h6 style="margin: 0; font-size: 12px; font-weight: bold;">Input your Amount</h6>
				<input id="StoreTuition_Amountbox" type="number" class="form-control" placeholder="ex. 10.59">

				<div class="d-flex flex-row mt-5">
					<button onclick="new Store().View_CancelButton()" class="form-control mr-2 red" style="color:white; width: 100px">Cancel</button>
					<button onclick="new Store().View_TuitionButton()" class="form-control" style="width: 100px">Pay</button>
				</div>
			</div>
			<!-- End of Store Tuition Area -->
			<!-- Store Dynamic Form Area -->
			<div id="StoreView_DynamicArea" class="d-flex flex-column p-3 hide">
				<h4 id="StoreView_TFLabel">XXX-XXX-XXX</h4>

				<h6 style="margin: 0; font-size: 12px; font-weight: bold;">Are you sure?</h6>
				<div class="d-flex flex-row mt-5">
					<button onclick="new Store().DA_CancelButton()" class="form-control mr-2 red" style="color:white; width: 100px">Cancel</button>
					<button id="StoreView_DynamicButton" onclick="new Store().DA_DynamicButton()" class="form-control" style="width: 100px">Pay</button>
				</div>
			</div>
			<!-- End of Store Dynamic Form Area -->
			<!-- End of Payments Area -->
			<h4 class="border-bottom mt-4 pb-1">News & Announcement</h4>
			<div id="StoreView_LoaderArea" class="d-flex flex-column" style="width: 100%">
				<h1 class="mt-5 mb-5">There is no Currently Big News or Announcement Yet!</h1>
			</div>
		</div>
		<!-- End of Store Area -->
		<!-- Store Final Transaction Area -->
		<div class="p-3 d-flex flex-column hide" style="width: 100%; overflow: hidden; overflow-y: scroll;">
			<div>
				<h4 class="border-bottom mb-4 pb-1">Payment Store(Default)</h4>

				<h6 style="margin: 0; font-size: 12px; font-weight: bold;">Amount in words (Optional)</h6>
				<input id="" class="form-control" placeholder="e.g. P 1.00 -> One Pesos Only or One Pesos">

				<table class="table">
					<thead>
						<tr>
							<th>As payment for</th>
							<th>Amount in Figures</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th><div class="d-flex align-items-center form-control border-0 m-0 p-0">Tution and Other Fees</div></th>
							<th><input id="Slip_Tuitionbox" type="number" class="form-control m-0" value="0000.00" disabled="disabled"></th>
						</tr>
						<tr>
							<th><div class="d-flex align-items-center form-control border-0 m-0 p-0">Old Account</div></th>
							<th><input id="Slip_Accountbox" type="number" class="form-control m-0" value="0000.00" disabled="disabled"></th>
						</tr>
						<tr>
							<th><div class="d-flex align-items-center form-control border-0 m-0 p-0">Good / Moral Certification</div></th>
							<th><input id="Slip_Moralbox" type="number" class="form-control m-0" value="0000.00" disabled="disabled"></th>
						</tr>
						<tr>
							<th><div class="d-flex align-items-center form-control border-0 m-0 p-0">Reissuance of Diploma / Certificates, Grade/Assesment Slips, TOR, etc...</div></th>
							<th><input id="Slip_Documentbox" type="number" class="form-control m-0" value="0000.00" disabled="disabled"></th>
						</tr>
						<tr>
							<th><div class="d-flex align-items-center form-control border-0 m-0 p-0">RLE Extension / Completion</div></th>
							<th><input id="Slip_Extensionbox" type="number" class="form-control m-0" value="0000.00" disabled="disabled"></th>
						</tr>
						<tr>
							<th><div class="d-flex align-items-center form-control border-0 m-0 p-0">Testing Fee</div></th>
							<th><input id="Slip_Testingbox" type="number" class="form-control m-0" value="0000.00" disabled="disabled"></th>
						</tr>
						<tr>
							<th><div class="d-flex align-items-center form-control border-0 m-0 p-0">School ID</div></th>
							<th><input id="Slip_IDbox" type="number" class="form-control m-0" value="0000.00" disabled="disabled"></th>
						</tr>
						<tr>
							<th><div class="d-flex align-items-center form-control border-0 m-0 p-0">Graduation Fee</div></th>
							<th><input id="Slip_Graduationbox" type="number" class="form-control m-0" value="0000.00" disabled="disabled"></th>
						</tr>
						<tr>
							<th><div class="d-flex align-items-center form-control border-0 m-0 p-0">Others (Pls. Specift)</div></th>
							<th><input id="Slip_Otherbox" type="number" class="form-control m-0" value="0000.00" disabled="disabled"></th>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th style="font-size: 12px; font-weight: bold;">Previous Available Balance</th>
							<th style="font-size: 12px; font-weight: bold;">P <span id="Slip_PreviousBalance"></span></th>
						</tr>
						<tr>
							<th style="font-size: 12px; font-weight: bold;">Sub Total</th>
							<th style="font-size: 12px; font-weight: bold;">P <span id="Slip_Subtotal"></span></th>
						</tr>
						<tr>
							<th class="red-text" style="font-size: 12px; font-weight: bold;">TOTAL</th>
							<th class="red-text" style="font-size: 12px; font-weight: bold;">P <span id="Slip_Total"></span></th>
						</tr>

						<tr>
							<th class="blue-text" style="font-size: 12px; font-weight: bold;">Available Balance</th>
							<th class="blue-text"style="font-size: 12px; font-weight: bold;">P <span id="Slip_AvailableBalance"></span></th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
		<!-- End of Store Final Transaction Area -->
		<div class="border-left d-flex flex-column h-100 hide" style="width: 550px;">
			<div class="d-flex flex-column" style="height: 50%">
				<!-- Notificaltion Area -->
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
				<!-- End of Notificaltion Area -->
			</div>
			<div class="d-flex flex-column" style="height: 50%">
				<!-- Notificaltion Area -->
				<h5 class="p-2 border-bottom" style="margin: 0">Top-up Records</h5>
				<div style="width: 100%; height: 100%; overflow: hidden; overflow-y: scroll;">
					<div class="d-flex flex-row form-control border-left-0 border-right-0 border-top-0 rounded-0" style="width: 100%; height: 69px">
						<img src="http://localhost/Ewallet/avatar.png" width="50px" height="50px">
						<div class="ml-3">
							<div style="font-size: 12px; font-weight: bold">Z. Redgrave -> School Fee around ￥500.00</div>
							<div style="font-size: 12px">Date and Time: 2020:09:20 13:46</div>
						</div>
					</div>
				</div>
				<!-- End of Notificaltion Area -->
			</div>
			<h5 class="p-2 border-bottom" style="margin: 0; visibility: hidden;">Notificaltions</h5>
		</div>
		
	</div>
	<!-- End of Store View Area -->
	<!-- Store Post View Area -->
	<div id="StorePost_ViewArea" class="d-flex flex-row hide" style="width: 100%; height: 100%">
		<div class="d-flex flex-column" style="width: 100%; height: 100%">
			<div id="StorePost_ImageLoader" class="" style="width: 100%; height: 100%; overflow-y: hidden;">
				<h4 class="d-flex justify-content-center align-items-center" style="width: 100%; height: 100%;">No Image!</h4>
			</div>
			<div class="d-flex flex-row border-top pt-1 pb-1" style="width: 100%;">
				<button onclick="new StorePost().View_BackButton()" class="material-icons form-control ml-1" style="width: 50px">first_page</button>
				<div class="d-flex justify-content-center" style="width: 100%;">
					<div class="d-flex flex-row">
						<button onclick="new StorePost().View_PreviewButton()" class="material-icons form-control mr-1" style="width: 50px">keyboard_arrow_left</button>
						<button onclick="new StorePost().View_ForwardButton()" class="material-icons form-control" style="width: 50px">keyboard_arrow_right</button>
					</div>
				</div>
			</div>
		</div>
		<div class="d-flex flex-column border-left" style="min-width: 500px; max-width: 350px; height: 100%">
			<div class="d-flex flex-row border-bottom p-2" style="width: 100%; overflow: hidden; overflow-y: scroll;">
				<img id="StorePost_HostImage" src="http://localhost/Ewallet/avatar.png" width="50px" height="50px">
				<div class="d-flex flex-column ml-3 mr-3" style="width: 100%">
					<h4 id="StorePost_HostName" style="margin: 0; font-size: 14px; font-weight: bold;">Zeke S. Redgrave [System Administrator]</h4>
					<h4 id="StorePost_DateTime" style="margin: 0; font-size: 12px;">Date and Time : 2020-01-01 00:00:00</h4>

					<div id="StorePost_DescriptionLoader" class="mt-3 mb-3" style="font-size: 12px;">
						<span>Add some text here!</span>
					</div>
				</div>
			</div>
			<!-- Write Comment Area -->
			<div class="d-flex flex-row p-2 border-bottom" style="width: 100%">
				<img id="StorePost_UserImage" src="http://localhost/Ewallet/avatar.png" class="rounded-circle" width="50px" height="50px">
				<div class="d-flex flex-row ml-2" style="width: 100%">
					<textarea id="StoreComment_Writebox" class="form-control border rounded pl-2 pr-2" placeholder="Any Comment?" style="width: 100%; height: 100px; resize: none;"></textarea>
					<button id="StoreComment_SendButton" onclick="new StoreComment().Create_SendButton()" class="material-icons form-control ml-2" style="width: 50px">send</button>
				</div>
			</div>
			<!-- End of Write Comment Area -->
			<!-- Comment Loader Area -->
			<div id="StorePost_CommentLoader" class="" style="width: 100%; height: 100%; min-height: 250px; overflow: hidden; overflow-y: scroll;">
				<h4 class="d-flex align-items-center justify-content-center" style="width: 100%; height: 100%">No Comment Yet!</h4>
			</div>
			<!-- End of Comment Loader Area -->
		</div>
	</div>
	<!-- End of Store Post View Area -->
</div>

<script type="text/javascript">
	var StoreView_ImageCurrent = 0
	var StoreView_ImageLast = 0

	$(document).ready(function() {
		$("title").text("E-Student Wallet Access - Dashboard")

		var StoreView_LoaderArea = $("#StoreView_LoaderArea")

		$.ajax({
			url: window.location.href.replace("/Access", "/Timeline/View_PostLoad"), 
			method: 'POST',
			dataType: 'json',
			success: function(data) {
				if(!data.isError) {
					if(data.TimelineCount != 0) {
						StoreView_LoaderArea.html('')

						for(var value of data.TimelineArray) StoreView_LoaderArea.append(`
							<div id="StoreView_ItemID`+ value.TimelineID +`" class="d-flex flex-row border p-2 mb-1" style="width: 100%">
								<img id="StoreView_ImageID`+ value.TimelineID +`" src="http://localhost/Ewallet/avatar.png" width="50px" height="50px">
								<div class="d-flex flex-column ml-4 mr-4" style="width: 100%">
									<h4 id="StoreView_UsernameID`+ value.TimelineID +`" style="margin: 0; font-size: 18px; font-weight: bold;"></h4>
									<h4 id="StoreView_DateTimeID`+ value.TimelineID +`" style="margin: 0; font-size: 12px;"></h4>

									<div id="StoreView_DescriptionID`+ value +`" class="mt-3 mb-3"></div>
									<div id="StoreView_LoaderID`+ value.TimelineID +`"></div>

									<div class="d-flex flex-row mt-1">	
										<a onclick="new Store().StoreView_PostButton(`+ value.TimelineID +`)" class="material-icons mr-4 d-flex align-items-center justify-content-center" title="Show Comment">comment</a>
									</div>
								</div>
							</div>
						`)
						for(var value of data.TimelineArray) new Store().StoreView_ItemLoad(value.TimelineID)
					}
				}
				else alert(!data.ErrorDisplay)
			},
			error: function(ex) {
		 		console.log('Error: ' + JSON.stringify(ex, null, 2))
			}
		})

		new Store().View_ItemLoad()
	})

	function Store() {
		this.View_ItemLoad = function() {
			$.ajax({
				url: window.location.href.replace("/Access", "")+ "/Account/StoreView_ItemLoad", 
				method: 'POST',
				dataType: 'json',
				success: function(data) {
					if(!data.isError) {
						$("#StoreView_DepositLabel").text('P '+ data.AccountDeposit)
						$("#StoreView_TuitionLabel").text('P '+ data.AccountTuition)
					}
					else $("#root").load(window.location+ "/LoadView?Load=views&Name=entrance")
				},
				error: function(ex) {
			 		console.log('Error: ' + JSON.stringify(ex, null, 2))
				}
			})
		}

		this.View_OpenButton = function() {
			$("#StoreView_ButtonLoad").addClass('hide')
			$("#StoreView_TuitionArea").removeClass('hide')
		}

		this.View_CancelButton = function() {
			$("#StoreView_ButtonLoad").removeClass('hide')
			$("#StoreView_TuitionArea").addClass('hide')
		}

		this.View_TuitionButton = function() {
			var StoreTuition_Amountbox = $("#StoreTuition_Amountbox")

			if(StoreTuition_Amountbox.val() != "") {
				$.ajax({
					url: window.location.href.replace("/Access", "")+ "/Transaction/View_TuitionButton", 
					method: 'POST',
					data: {
				 		Amount: StoreTuition_Amountbox.val()
					},
					dataType: 'json',
					success: function(data) {
						if(!data.isError) {
							alert("Tuition Transaction Successed!");

							$("#StoreView_DynamicArea").addClass('hide')

							new Store().View_ItemLoad()
						}
						else alert(data.ErrorDisplay)
					},
					error: function(ex) {
				 		console.log('Error: ' + JSON.stringify(ex, null, 2))

				 		alert("Error: Unexpected Error Occur!")
					}
				})
			}
			else alert("Error: Please Enter your Amount!")
		}

		this.StoreView_ItemLoad = function(id) {
			$.ajax({
				url: window.location.href.replace("/Access", "")+ "/Timeline/View_ItemLoad?TimelineID="+id, 
				method: 'GET',
				dataType: 'json',
				success: function(data) {
					if(!data.isError) {
						var DescriptionTemp = JSON.parse(data.TimelineDescription).Text.split("\n")
						var ImageTemp = JSON.parse(data.TimelineDescription).Image

						$("#StoreView_ImageID"+ id).attr('src', 'http://localhost/Ewallet/avatar/'+ data.TimelineImage)
						$("#StorePost_UserImage").attr('src', 'http://localhost/Ewallet/avatar/'+ data.TimelineImage)
						$("#StoreView_UsernameID"+ id).text(data.TimelineName)
						$("#StoreView_DateTimeID"+ id).text("Date and Time : "+ data.DateRegister +" "+ data.TimeRegister)

						for(var splitter of JSON.parse(data.TimelineDescription).Text.split("\n")) {
							if(splitter != "") $("#StoreView_DescriptionID"+ id).append('<div style="word-break: break-all;">'+ splitter +'</div>')
							else $("#StoreView_DescriptionID"+ id).append('<br />')
						}

						if(JSON.parse(data.TimelineDescription).Image.length != 0) for(var image of JSON.parse(data.TimelineDescription).Image) {
							$("#StoreView_LoaderID"+ id).append('<img src="'+ window.location.href.replace("/index.php/Access", "/storage/"+ image) +'" width="100%">')
						}
						
					}
				},
				error: function(ex) {
			 		console.log('Error: ' + JSON.stringify(ex, null, 2))

			 		// new Store().StoreView_ItemLoad(id)
				}
			})
		}

		this.StoreView_PostButton = function(id) {
			var StorePost_ViewArea = $("#StorePost_ViewArea")
			var StoreView_HomeArea = $("#StoreView_HomeArea")

			var StorePost_ImageLoader = $("#StorePost_ImageLoader")
			var StorePost_HostName = $("#StorePost_HostName")
			var StorePost_HostImage = $("#StorePost_HostImage")
			var StorePost_DateTime = $("#StorePost_DateTime")
			var StorePost_DescriptionLoader = $("#StorePost_DescriptionLoader")

			$.ajax({
				url: window.location.href.replace("/Access", "")+ "/Timeline/View_PostButton?TimelineID=" +id, 
				method: 'POST',
				dataType: 'json',
				success: function(data) {
					if(!data.isError) {
						StoreView_HomeArea.addClass('hide')
						StorePost_ViewArea.removeClass('hide')

						StorePost_DescriptionLoader.html('')
						StorePost_ImageLoader.html('')

						StorePost_HostName.text(data.PostHostname)
						StorePost_HostImage.attr('src', window.location.href.replace("/index.php/Access", "")+ "/avatar/" +data.PostHostimage)
						StorePost_DateTime.text("Date and Time : "+ data.PostDT)

						for(var splitter of data.PostText.split("\n")) {
							if(splitter != "") StorePost_DescriptionLoader.append('<div style="word-break: break-all;">'+ splitter +'</div>')
							else StorePost_DescriptionLoader.append('<br />')
						}

						if(data.PostImage.length != 0) {
							data.PostImage.forEach(function(element, index) {
								StorePost_ImageLoader.append('<div id="StoreView_HostImageID' +index+ '" class="d-flex align-items-center justify-content-center" style="width: 100%; height: 100%"><img src="' +window.location.href.replace("/index.php/Access", "/storage/"+ data.PostImage[index])+ '" width="100%" /></div>')
							})

							StoreView_ImageLast = data.PostImage.length
						}
						else StorePost_ImageLoader.html('<h4 class="d-flex justify-content-center align-items-center" style="width: 100%; height: 100%;">No Image!</h4>')

						$("#StoreComment_SendButton").attr('onclick', 'new StoreComment().Create_SendButton(' +data.PostID+ ')')

						new StorePost().View_CommentLoad(data.PostID)
					}
					else alert(data.ErrorDisplay)
				},
				error: function(ex) {
			 		console.log('Error: ' + JSON.stringify(ex, null, 2))

			 		alert("Error: Unexpected Error Occur!\n Please Try Again!")
				}
			})
		}

		this.View_DynamicButton = function(id) {
			$("#StoreView_TuitionArea").addClass('hide')
			$("#StoreView_ButtonLoad").addClass('hide')

			$("#StoreView_DynamicArea").removeClass('hide')
			$("#StoreView_DynamicButton").attr('onclick', 'new Store().DA_DynamicButton(' +id+ ')')
		}

		this.DA_CancelButton = function() {
			$("#StoreView_DynamicArea").addClass('hide')
			$("#StoreView_TuitionArea").addClass('hide')
			$("#StoreView_ButtonLoad").removeClass('hide')
		}

		this.DA_DynamicButton = function(id) {
			$.ajax({
				url: window.location.href.replace('/Access', '')+ "/Transaction/View_DynamicButton?id="+ id, 
				method: 'GET',
				dataType: 'json',
				success: function(data) {
					if(!data.isError) {
						new Store().DA_CancelButton()
						new Store().View_ItemLoad()
					}
					else alert(data.ErrorDisplay)
				},
				error: function(ex) {
			 		console.log('Error: ' + JSON.stringify(ex, null, 2))
				}
			})
		}
	}

	function StorePost() {
		this.View_CommentLoad = function(id) {
			var StorePost_CommentLoader = $("#StorePost_CommentLoader")

			StorePost_CommentLoader.html('')

			$.ajax({
				url: window.location.href.replace("/Access", "")+ "/Timeline/View_CommentLoad?TimelineID="+ id,
				method: 'GET',
				dataType: 'json',
				success: function(data) {
					if(!data.isError){
						if(data.CommentArray.length != 0) {
							for(var x of data.CommentArray) {
								if(<?php echo $AccountID ?> == x.AccountID) {
									StorePost_CommentLoader.append( `
										<div id="StoreComment_ItemID` +x.CommentID+ `" class="d-flex flex-row p-2 border-bottom" style="width: 100%;">
											<img id="StoreComment_ImageID` +x.CommentID+ `" src="http://localhost/Ewallet/avatar.png" width="50px" height="50px">
											<div class="d-flex flex-column ml-3 mr-3" style="width: 100%">
												<h4 id="StoreComment_NameID` +x.CommentID+ `" style="margin: 0; font-size: 14px; font-weight: bold;">Zeke S. Redgrave [System Administrator]</h4>

												<div id="StoreComment_LoaderID` +x.CommentID+ `" class="mt-3 mb-3"></div>
												<div class="d-flex flex-row" style="width: 100%">
													<div style="width: 100%"></div>

													<a id="StoreComment_DeleteButtonID` +x.CommentID+ `" onclick="new StoreComment().View_DeleteButton(` +x.CommentID+ `)" class="material-icons red-text ml-2">delete</a>
												</div>
											</div>
										</div>
									`)
								}
								else {
									StorePost_CommentLoader.append( `
										<div id="StoreComment_ItemID` +x.CommentID+ `" class="d-flex flex-row p-2 border-bottom" style="width: 100%;">
											<img id="StoreComment_ImageID` +x.CommentID+ `" src="http://localhost/Ewallet/avatar.png" width="50px" height="50px">
											<div class="d-flex flex-column ml-3 mr-3" style="width: 100%">
												<h4 id="StoreComment_NameID` +x.CommentID+ `" style="margin: 0; font-size: 14px; font-weight: bold;">Zeke S. Redgrave [System Administrator]</h4>

												<div id="StoreComment_LoaderID` +x.CommentID+ `" class="mt-3 mb-3"></div>
											</div>
										</div>
									`)
								}
							}

							for(var x of data.CommentArray) new StoreComment().View_ItemLoad(x.CommentID)
						}
						else StorePost_CommentLoader.append('<h4 class="d-flex align-items-center justify-content-center" style="width: 100%; height: 100%">No Comment Yet!</h4>')
					}
					else alert(data.ErrorDisplay)
				},
				error: function(ex) {
			 		console.log('Error: ' + JSON.stringify(ex, null, 2))

			 		// new Post().View_CommentLoad(id)
				}
			})
		}

		this.View_BackButton = function() {
			$("#StorePost_ViewArea").addClass('hide')
			$("#StoreView_HomeArea").removeClass('hide')
		}

		this.View_PreviewButton = function() {
			StoreView_ImageCurrent -= 1 
			if(StoreView_ImageCurrent == -1) StoreView_ImageCurrent = StoreView_ImageLast - 1
			

			$("#StoreView_HostImageID"+ StoreView_ImageCurrent)[0].scrollIntoView({
			    behavior: "smooth",
				block: "start"
			})
		}

		this.View_ForwardButton = function() {
			StoreView_ImageCurrent += 1
			if(StoreView_ImageCurrent == StoreView_ImageLast) StoreView_ImageCurrent = 0

			$("#StoreView_HostImageID"+ StoreView_ImageCurrent)[0].scrollIntoView({
			    behavior: "smooth", // or "auto" or "instant"
				block: "start" // or "end"
			})
		}
	}

	function StoreComment() {
		this.View_ItemLoad = function(id) {
			var StoreComment_ItemID = $("#StoreComment_ItemID"+ id)
			var StoreComment_NameID = $("#StoreComment_NameID"+ id)
			var StoreComment_ImageID = $("#StoreComment_ImageID"+ id)
			var StoreComment_MentionButtonID = $("#StoreComment_MentionButtonID"+ id)
			var StoreComment_DeleteButtonID = $("#StoreComment_DeleteButtonID"+ id)

			$.ajax({
				url: window.location.href.replace("/Access", "")+ "/Comment/View_ItemLoad?CommentID=" +id, 
				method: 'GET',
				dataType: 'json',
				success: function(data) {
					if(!data.isError) {
						for(var splitter of data.CommentText.split("\n")) {
							if(splitter != "") {
								var HTML = ''

								for(var space of splitter.split(" ")) {
									if(space.split('@').length == 2) {
										if(<?php echo $AccountID; ?> == space.split('#')[0].split("@")[1]) StoreComment_ItemID.addClass('blue').css('color', 'white');
									}

									HTML += "<span class='mr-1'>" +space+ "</span>"
								}
								

								$("#StoreComment_LoaderID"+ id).append('<div style="font-size: 12px; word-break: break-all;">'+ HTML +'</div>')
							}
							else $("#StoreComment_LoaderID"+ id).append('<br />')
						}

						StoreComment_NameID.text(data.CommentMention + data.CommentName)
						StoreComment_ImageID.attr('src', window.location.href.replace("/index.php/Access", "")+ "/avatar/"+ data.CommetImage)
						StoreComment_MentionButtonID.attr('onclick', "new StoreComment().View_MentionButton('"+ data.CommentMention +"')")
						StoreComment_DeleteButtonID.attr('onclick', 'new StoreComment().View_DeleteButton('+ data.CommentID +')')

					}
					else alert(data.ErrorDisplay)
				},
				error: function(ex) {
			 		console.log('Error: ' + JSON.stringify(ex, null, 2))

			 		// new StoreComment().View_ItemLoad(id)
				}
			})
		}

		this.Create_SendButton = function(id) {
			var StoreComment_Writebox = $("#StoreComment_Writebox")
			var StorePost_CommentLoader = $("#StorePost_CommentLoader")

			if(StoreComment_Writebox.val() != "") {
				$.ajax({
					url: window.location.href.replace("/Access", "")+ "/Comment/Create_SendButton?TimelineID=" +id,
					method: 'POST',
					data: {
				 		CommentDescription:StoreComment_Writebox.val()
					},
					dataType: 'json',
					success: function(data) {
						if(!data.isError) {
							if(data.isNew) StorePost_CommentLoader.html('')

							var HTML = `
								<div id="StoreComment_ItemID` +data.CommentID+ `" class="d-flex flex-row p-2 border-bottom" style="width: 100%;">
									<img id=StoreComment_ImageID` +data.CommentID+ `" src="http://localhost/Ewallet/avatar.png" width="50px" height="50px">
									<div class="d-flex flex-column ml-3 mr-3" style="width: 100%">
										<h4 id="StoreComment_NameID` +data.CommentID+ `" style="margin: 0; font-size: 14px; font-weight: bold;">Zeke S. Redgrave [System Administrator]</h4>

										<div id="StoreComment_LoaderID` +data.CommentID+ `" class="mt-3 mb-3"></div>
										<div class="d-flex flex-row" style="width: 100%">
											<div style="width: 100%"></div>

											<a id="StoreComment_DeleteButtonID` +data.CommentID+ `" onclick="new StoreComment().View_DeleteButton(` +data.CommentID+ `)" class="material-icons red-text ml-2">delete</a>
										</div>
									</div>
								</div>
							`
							StorePost_CommentLoader.prepend(HTML)
							StoreComment_Writebox.val('')

							new StoreComment().View_ItemLoad(data.CommentID)
						}
						else alert(data.ErrorDisplay)
					},
					error: function(ex) {
				 		console.log('Error: ' + JSON.stringify(ex, null, 2))
					}
				})
			}
			else alert("Error: Commentbox is empty!")
		}

		this.View_MentionButton = function(id) {
			$("#StoreComment_Writebox").append(id)
		}

		this.View_DeleteButton = function(id) {
			$.ajax({
				url: window.location.href.replace("/Access", "")+ "/Comment/View_DeleteButton?CommentID="+ id, 
				method: 'GET',
				dataType: 'json',
				success: function(data) {
					if(!data.isError) $("#StoreComment_ItemID"+ id).remove()
					else alert(data.ErrorDisplay)
				},
				error: function(ex) {
			 		console.log('Error: ' + JSON.stringify(ex, null, 2))

			 		alert("Error: Unexpected Error Occur\nPlease Try Again!")
				}
			})
		}

	}
</script>