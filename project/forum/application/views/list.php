<a class="btn btn-primary btn-xl pull-left" href="#">back</a>
<div class="container" style="padding-top:50px;">
	<div class="col-sm-12">
		<div class="panel panel-white post panel-shadow" style="padding: 5%;">
			<div class="post-heading">
				<div class="pull-left image">
				<img src="https://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
				</div>

				<div class="pull-left meta" >
					<div class="title h2">
						<a href="#"><b>{{list.fname}}</b></a>
						<h6 class="text-muted time">{{list.date}}</h6>
						<h6 class="title h4"><b>Subject: </b>{{list.subject}}</h6>
						<h6 class="title h4"><b>Description: </b>{{list.descn}}</h6>
					</div>
				</div>
			</div> 

		<div class="post-footer">
			<div class="input-group"> <span class="input-group-addon">
				<div class="controls">
				<form class="form-horizontal" >
				<input type="text" name="addcomnt" ng-model="addcomnt" class="form-control" required >
				</div>
				<input  class="btn btn-success" ng-click="addcommentc()" value="Add Comment">
				</form> 
				{{cmessage}}
				</div>
				<br><br><br>
					<div class="" ng-repeat="x in comments" style="padding-top:1%; padding-bottom:1%; padding-left:4%">
						<div class="comment-body" style="display: inline-flex; ">
						<img class="avatar" src="https://bootdey.com/img/Content/user_3.jpg" alt="avatar">
							<div class="comment-heading" style=" padding-left:1%">
							<h4 class="user">{{x.fname}}</h4>
							<h5 class="time">3 minutes ago</h5>
							<p>{{x.comnt}}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
