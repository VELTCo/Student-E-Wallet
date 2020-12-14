<div id="App_HomeArea" class="d-flex flex-row" style="width:100%; height: 100%">
	<!-- Store View Area -->
	<div id="StoreView_HomeArea" class="d-flex flex-row" style="width: 100%;">
		<!-- Store Area -->
		<div class="d-flex flex-column shadow-sm companyLabel" style="min-width: 400px; max-width: 400px; height: 100%;">
			<div class="d-flex flex-row pl-1 pr-1 mt-2 pb-2 shadow-sm" style="width: 100%">
				<!-- Student Balance -->
				<div class="d-flex flex-column rounded pb-2 companyStatus" title="Indicates the Total Balance Available" style="width: 100%; cursor: zoom-in;">
					<div class="pl-3 pr-3 pt-2 companyForeground" style="font-weight: bold;">DEPOSITS</div>
					<h3 id="StoreView_DepositLabel" class="p-0 pl-2 pr-2 m-0" style="font-size: 12px;">P XXXX.XX</h3>
				</div>
				<!-- End of Student Balance -->
				<!-- Tution Fee -->
				<div class="d-flex flex-column companyStatus rounded ml-1" title="Indicates the Total Tuition Available Left" style="width: 100%; cursor: zoom-in;">
					<div class="pl-3 pr-3 pt-2 companyForeground" style="font-weight: bold;">TUITION</div>
					<h6 id="StoreView_TuitionLabel" class="p-0 pl-2 pr-2 m-0" style="font-size: 12px;">P XXXX.XX</h6>
				</div>
				<!-- End of Tution Fee -->
			</div>

			<div class="pl-3 pr-3 pt-2 pb-2" style="font-weight: bold;">PAYMENT LIST</div>
			<div style="width: 100%; height: 100%; overflow-y: scroll;">
				<!-- Static Store Item -->
				<button onclick="new Store().View_OpenButton()" class="d-flex flex-row pt-3 pb-3 pl-4 pr-4 button-hover" style="background: white !important;">
					<div class="material-icons d-flex align-items-center justify-content-center companyLabel">account_balance</div>
					<div class="d-flex align-items-center companyLabel ml-4" style="width: 100%; font-weight: bold;">Tuition Fee (Default)<div>
				</button>
				<!-- End Static Store Item -->
				<div class="mb-1 mt-1 ml-4 mr-4 rounded" style="border: 1px solid #555555;"></div>

				<!-- Dynamic Store Item Area -->
				<div id="StoreView_DynamicLoad">
				</div>
				<!-- End of Dynamic Store Item Area -->	
			</div>

			<div class="d-flex align-items-center companyStatus" style="min-height: 60px; max-height: 60px">
				<div class="d-flex flex-row pl-3 pr-3" style="width: 100%;">
					<div class="d-flex align-items-center">
						<img id="StoreView_StudentImage" class="rounded-circle" width="40px" height="40px">
					</div>
					<div class="ml-3 pt-1" style="width: 100%">
						<div class="companyForeground" id="StoreView_StudentName" style="font-weight: bold;"></div>
						<div class="companyForeground" id="StoreView_StudentID" style="font-weight: bold; font-size: 12px; margin-top: -5px;"></div>
					</div>
					<div class="d-flex align-items-center">
						<button onclick="new Store().View_RefreshButton()" class="material-icons" title="Refresh If the Payment List, News / Announcement, and Balance not Completely Display">refresh</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End of Store View Area -->
		<div class="d-flex flex-column companyLabel" style="width: 100%; overflow: hidden; overflow-y: scroll;">
			<!-- Timeline Area -->
			<div class="d-flex flex-column" style="width: 100%; height: 100%">
				<div class="pl-3 pr-3 pt-3 pb-3 shadow-sm" style="font-weight: bold;">NEWS / ANNOUNCEMENT</div>
				<div class="d-flex justify-content-center" style="width: 100%">
					<div id="StoreView_LoaderArea" class="d-flex flex-column pl-3 pt-2" style="width: 600px">
						<h1 class="mt-5 mb-5">There is no Currently Big News or Announcement Yet!</h1>
					</div>
				</div>
			</div>
			<!-- End of Timeline Area -->
		</div>	
	</div>
	
</div>
<!-- Store Tuition Area -->
<div id="StoreView_TuitionArea" class="position-fixed hide" style="top: 0; bottom: 0; left: 0; right: 0; width: 100%; height: 100%;">
	<div class="d-flex justify-content-center align-items-center" style="background: #00000099; width: 100%; height: 100%">
		<div class="d-flex flex-column rounded p-3" style="background: #282828; color: #ffffff; width: 400px;">
			<div class="mb-4" style="color: #7289da; font-weight: bold;">TUITION FEE</div>

			<h6 class="pl-2 pr-2 pb-1" style="margin: 0; font-size: 12px; font-weight: bold;">Amount</h6>
			<div class="d-flex flex-row" style="width: 100%">
				<input id="StoreTuition_Amountbox" type="number" class="border-0 rounded p-3 mr-4" placeholder="Ex. 123456789" style="background: #333333; color: #ffffff; width: 100%;" placeholder="Ex. 10.59">

				<button onclick="new Store().View_TuitionButton()" id="StoreView_TuitionButton" class="border-0 rounded pl-4 pr-4 pt-2 pb-2 mr-1 companyBackground" style="width: 125px; font-size: 14px; font-weight: bold;">Pay</button>

				<button onclick="new Store().View_CancelButton()" class="border-0 rounded pl-4 pr-4 pt-2 pb-2 red" style="width: 125px; font-size: 14px; font-weight: bold;">Cancel</button>
			</div>
		</div>
	</div>
</div>
<!-- End of Store Tuition Area -->
<!-- Store Dynamic Form Area -->
<div id="StoreView_DynamicArea" class="position-fixed hide" style="top: 0; bottom: 0; left: 0; right: 0; width: 100%; height: 100%;">
	<div class="d-flex justify-content-center align-items-center" style="background: #00000099; width: 100%; height: 100%">
		<div class="d-flex flex-column rounded p-3" style="background: #282828; color: #ffffff; width: 400px;">
			<div class="ml-2" style="color: #7289da; font-weight: bold;">ARE YOU SURE?</div>

			<div id="StoreView_DisplayLabel" class="d-flex justify-content-center text-center mt-4 mb-4" class="" style="width: 100%; font-size: 14px;">This '??????' Price is XXXX.</div>

			<div class="d-flex flex-row" style="width: 100%">
				<button onclick="new Store().DA_DynamicButton()" id="StoreView_DynamicButton" class="border-0 rounded pl-4 pr-4 pt-2 pb-2 mr-1 companyBackground" style="width: 125px; font-size: 14px; font-weight: bold;">Yes</button>

				<button onclick="new Store().DA_CancelButton()" class="border-0 rounded pl-4 pr-4 pt-2 pb-2 red" style="width: 125px; font-size: 14px; font-weight: bold;">Cancel</button>
			</div>
		</div>
	</div>
</div>
<!-- End of Store Dynamic Form Area -->

<!-- Store Post View Area -->
<div id="StorePost_ViewArea" class="position-fixed d-flex flex-row hide" style="top: 0; bottom: 0; left: 0; right: 0; background: #00000099; width: 100%; height: 100%">
	<div class="d-flex flex-column" style="width: 100%; height: 100%">
		<div id="StorePost_ImageLoader" class="" style="width: 100%; height: 100%; overflow-y: hidden;">
			<h4 class="d-flex justify-content-center align-items-center" style="width: 100%; height: 100%;">No Image!</h4>
		</div>
		<div class="d-flex flex-row pt-2 pb-2 pl-4 pr-4" style="width: 100%;">
			<div class="d-flex justify-content-center" style="width: 100%;">
				<div class="d-flex flex-row">
					<a onclick="new StorePost().View_PreviewButton()" class="material-icons d-flex justify-content-center align-items-center rounded-circle" style="color: #7289da; background: #7289da20; min-width: 50px; max-width: 50px; height: 50px;">keyboard_arrow_left</a>
					<a onclick="new StorePost().View_BackButton()" class="material-icons d-flex justify-content-center align-items-center rounded-circle ml-1 mr-1" style="background: #7289da20; color: #e91e63; min-width: 50px; max-width: 50px; height: 50px;">close</a>
					<a onclick="new StorePost().View_ForwardButton()" class="material-icons d-flex justify-content-center align-items-center rounded-circle" style="color: #7289da; background: #7289da20; min-width: 50px; max-width: 50px; height: 50px;">keyboard_arrow_right</a>
				</div>
			</div>
		</div>
	</div>
	<div class="d-flex flex-column companyLabel" style="background: white; min-width: 500px; max-width: 500px; height: 100%; overflow: hidden; overflow-y: scroll;">
		<div class="d-flex flex-row p-3" style="width: 100%;">
			<img id="StorePost_HostImage" class="rounded-circle" src="http://localhost/Ewallet/avatar.png" width="50px" height="50px">
			<div class="d-flex flex-column ml-3 mr-3" style="width: 100%">
				<h4 id="StorePost_HostName" style="color: #7289da; margin: 0; font-size: 14px; font-weight: bold;">XXXXXXX [System Administrator]</h4>
				<h4 id="StorePost_DateTime" style="margin: 0; font-size: 12px;">Timeline # 2020-01-01 00:00:00</h4>

				<div id="StorePost_DescriptionLoader" class="mt-3 mb-2" style="font-size: 12px;">
					<span>Add some text here!</span>
				</div>
			</div>
		</div>
		<div class="d-flex flex-column" style="width: 100%; height: 100%;">
			<!-- Write Comment Area -->
			<div class="d-flex flex-row p-2" style="width: 100%">
				<!-- <img id="TimelineView_UserImage" src="http://localhost/Ewallet/avatar.png" class="rounded-circle" width="50px" height="50px"> -->
				<div class="d-flex flex-row ml-2" style="width: 100%">
					<textarea id="StoreComment_Writebox" class="rounded border-0 pl-2 pr-2" placeholder="Any Comment?" style="background: #333333; color: #ffffff; width: 100%; height: 100px; resize: none;"></textarea>
					<div class="ml-2">
						<button id="StoreComment_SendButton" onclick="new StoreComment().Create_SendButton()" class="material-icons rounded border-0" style="background: #333333; color: #7289da; width: 50px; height: 50px;">send</button>
					</div>
				</div>
			</div>
			<!-- End of Write Comment Area -->
			<!-- Comment Loader Area -->
			<div id="StorePost_CommentLoader" class="d-flex flex-column border-top" style="width: 100%; height: 100%"></div>
			<!-- End of Comment Loader Area -->
		</div>
		<!-- End of Comment Loader Area -->
	</div>
</div>
<!-- End of Store Post View Area -->



<script type="text/javascript">
	var StoreView_ImageCurrent = 0
	var StoreView_ImageLast = 0

	$(document).ready(function() {
		$("title").text("E-Student Wallet Access - Dashboard")
		$('[title]').tooltip()

		new Store().View_ItemLoad()
		new Store().View_StudentLoad()
		new Store().View_DynamicLoad()
		new Store().View_PostLoad()
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

		this.View_StudentLoad = function() {
			$.ajax({
				url: window.location.href.replace("/Access", "")+ "/Account/View_ProfileLoad", 
				method: 'POST',
				dataType: 'json',
				success: function(data) {
					if(!data.isError) {
						$("#StoreView_StudentImage").attr('src', window.location.href.replace("index.php/Access", "avatar/"+ data.AccountImage))
						$("#StoreView_StudentName").text(data.AccountName)
						$("#StoreView_StudentID").text(data.AccountID.split("#")[1])
					}
					else alert(data.ErrorDisplay)
				},
				error: function(ex) {
			 		console.log('Error: ' + JSON.stringify(ex, null, 2))

				}
			})
		}

		this.View_DynamicLoad = function() {
			var StoreView_DynamicLoad = $("#StoreView_DynamicLoad")
			$.ajax({
				url: window.location.href.replace("/Access", "")+ "/Transaction/View_DynamicLoad", 
				method: 'POST',
				dataType: 'json',
				success: function(data) {
					if(!data.isError) {
						StoreView_DynamicLoad.html('')

						for(var x in data.StoreArray) {
							StoreView_DynamicLoad.append(`
								<div onclick="new Store().View_DynamicButton(` +data.StoreArray[x].StoreID+ `)" class="d-flex flex-row pt-3 pb-3 pl-4 pr-4 border-bottom button-hover" style="background: white !important; cursor: pointer">
									<div class="material-icons d-flex align-items-center justify-content-center companyLabel">` +(data.StoreArray[x].StoreIcon == "" ? "block" : data.StoreArray[x].StoreIcon)+ `</div>

									<div class="d-flex flex-column ml-4" style="width: 100%;">
										<div class="companyLabel" style="width: 100%; font-weight: bold;">` +data.StoreArray[x].StoreTitle+ `<div>
										<div class="companyLabel" style="width: 100%; margin-top: -5px; font-size: 12px;">` +data.StoreArray[x].StoreType+ `<div>
									</div>
								</div>
							`)
						}
					}
				},
				error: function(ex) {
			 		console.log('Error: ' + JSON.stringify(ex, null, 2))
				}
			})
		}

		this.View_PostLoad = function() {
			var StoreView_LoaderArea = $("#StoreView_LoaderArea")
			// Timeline
			$.ajax({
				url: window.location.href.replace("/Access", "/Timeline/View_PostLoad"), 
				method: 'POST',
				dataType: 'json',
				success: function(data) {
					if(!data.isError) {
						if(data.TimelineCount != 0) {
							StoreView_LoaderArea.html('')

							for(var value of data.TimelineArray) StoreView_LoaderArea.append(`
								<div id="StoreView_ItemID`+ value.TimelineID +`" class="d-flex flex-row p-3 mb-1 shadow-sm rounded" style="width: 100%;">
									<img id="StoreView_ImageID`+ value.TimelineID +`" class="rounded-circle" src="http://localhost/Ewallet/avatar.png" width="50px" height="50px">
									<div class="d-flex flex-column ml-4 mr-4" style="width: 100%">
										<h4 id="StoreView_UsernameID`+ value.TimelineID +`" style="color: #7289da; margin: 0; font-size: 18px; font-weight: bold;"></h4>
										<h4 id="StoreView_DateTimeID`+ value.TimelineID +`" style="margin: 0; font-size: 12px; font-weight: bold;"></h4>

										<div id="StoreView_DescriptionID`+ value.TimelineID +`" class="mt-3 mb-3"></div>
										<div id="StoreView_LoaderID`+ value.TimelineID +`"></div>

										<div class="d-flex flex-row mt-3">	
											<button onclick="new Store().StoreView_PostButton(`+ value.TimelineID +`)" class="d-flex align-items-center justify-content-center pt-3 pb-3 rounded" title="Show Comment">Show Comment</button>
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
		}

		this.View_RefreshButton = function() {
			new Store().View_ItemLoad()
			new Store().View_StudentLoad()
			new Store().View_DynamicLoad()
			new Store().View_PostLoad()
		}

		this.View_OpenButton = function() {
			$("#StoreView_TuitionArea").removeClass('hide')
		}

		this.View_CancelButton = function() {
			$("#StoreView_ButtonLoad").removeClass('hide')
			$("#StoreView_TuitionArea").addClass('hide')
		}

		this.View_TuitionButton = function() {
			var StoreTuition_Amountbox = $("#StoreTuition_Amountbox")
			var StoreView_TuitionButton = $("#StoreView_TuitionButton")

			if(StoreTuition_Amountbox.val() != "") {
				StoreView_TuitionButton.attr('disabled', 'disabled')

				$.ajax({
					url: window.location.href.replace("/Access", "")+ "/Transaction/View_TuitionButton", 
					method: 'POST',
					data: {
				 		Amount: StoreTuition_Amountbox.val()
					},
					dataType: 'json',
					success: function(data) {
						if(!data.isError) {
							

							$("#StoreView_DynamicArea").addClass('hide')
							
							new Store().View_CancelButton()
							new Store().View_ItemLoad()

							StoreView_TuitionButton.removeAttr('disabled')
						}
						else {
							alert(data.ErrorDisplay)

							StoreView_TuitionButton.removeAttr('disabled')
						}
					},
					error: function(ex) {
				 		console.log('Error: ' + JSON.stringify(ex, null, 2))

				 		alert("Error: Unexpected Error Occur!")

				 		StoreView_TuitionButton.removeAttr('disabled')
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
						$("#StoreView_DateTimeID"+ id).text("Timeline # "+ data.DateRegister +" "+ data.TimeRegister)

						for(var splitter of JSON.parse(data.TimelineDescription).Text.split("\n")) {
							if(splitter != "") $("#StoreView_DescriptionID"+ id).append('<div style="word-break: break-all;">'+ splitter +'</div>')
							else $("#StoreView_DescriptionID"+ id).append('<br />')
						}

						if(JSON.parse(data.TimelineDescription).Image.length != 0) {
							for(var image of JSON.parse(data.TimelineDescription).Image) {
								var x = window.location.href.replace("/index.php/Access", "/storage/")+ image

								$("#StoreView_LoaderID"+ id).append('<img src="' +x+ '" width="100%">')
							}
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
						StorePost_ViewArea.removeClass('hide')

						StorePost_DescriptionLoader.html('')
						StorePost_ImageLoader.html('')

						StorePost_HostName.text(data.PostHostname)
						StorePost_HostImage.attr('src', window.location.href.replace("/index.php/Access", "")+ "/avatar/" +data.PostHostimage)
						StorePost_DateTime.text("Timeline # "+ data.PostDT)

						for(var splitter of data.PostText.split("\n")) {
							if(splitter != "") StorePost_DescriptionLoader.append('<div style="word-break: break-all;">'+ splitter +'</div>')
							else StorePost_DescriptionLoader.append('<br />')
						}

						if(data.PostImage.length != 0) {
							data.PostImage.forEach(function(element, index) {
								var x = window.location.href.replace("/index.php/Access", "/storage/")+ data.PostImage[index]

								StorePost_ImageLoader.append('<div id="StoreView_HostImageID' +index+ '" class="d-flex align-items-center justify-content-center" style="width: 100%; height: 100%"><img src="' +x+ '" width="100%" /></div>')
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
			$("#StoreView_DynamicArea").removeClass('hide')
			$("#StoreView_DynamicButton").attr('onclick', 'new Store().DA_DynamicButton(' +id+ ')')

			var StoreView_DisplayLabel = $("#StoreView_DisplayLabel")

			$.ajax({
				url: window.location.href.replace('/Access', '')+ "/Transaction/View_PriceButton?id="+ id, 
				method: 'POST',
				dataType: 'json',
				success: function(data) {
					if(!data.isError) StoreView_DisplayLabel.html("This Item's Name ('" +data.StoreTitle+ "') is Cost P " +data.StorePrice+ ". Are you sure you wanna purchase now?")
					else alert(data.ErrorDisplay)
				},
				error: function(ex) {
			 		console.log('Error: ' + JSON.stringify(ex, null, 2))
				}
			})
		}

		this.DA_CancelButton = function() {
			$("#StoreView_DynamicArea").addClass('hide')
			$("#StoreView_TuitionArea").addClass('hide')
		}

		this.DA_DynamicButton = function(id) {
			var StoreView_DynamicButton = $("#StoreView_DynamicButton")
			StoreView_DynamicButton.attr('disabled', 'disabled')

			$.ajax({
				url: window.location.href.replace('/Access', '')+ "/Transaction/View_DynamicButton?id="+ id, 
				method: 'GET',
				dataType: 'json',
				success: function(data) {
					if(!data.isError) {
						StoreView_DynamicButton.removeAttr('disabled')

						new Store().DA_CancelButton()
						new Store().View_ItemLoad()
					}
					else {
						StoreView_DynamicButton.removeAttr('disabled')

						alert(data.ErrorDisplay)
					}
				},
				error: function(ex) {
			 		console.log('Error: ' + JSON.stringify(ex, null, 2))

			 		StoreView_DynamicButton.removeAttr('disabled')

			 		alert("Error: Unexpected Error Occur!")
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
										<div id="StoreComment_ItemID` +x.CommentID+ `" class="d-flex flex-row p-3 border-bottom" style="width: 100%;">
											<img id="StoreComment_ImageID` +x.CommentID+ `" class="rounded-circle" src="http://localhost/Ewallet/avatar.png" width="50px" height="50px">
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
										<div id="StoreComment_ItemID` +x.CommentID+ `" class="d-flex flex-row p-3 border-bottom" style="width: 100%;">
											<img id="StoreComment_ImageID` +x.CommentID+ `" class="rounded-circle" src="http://localhost/Ewallet/avatar.png" width="50px" height="50px">
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
							StoreComment_Writebox.val('')

							new Store().StoreView_PostButton(id)
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