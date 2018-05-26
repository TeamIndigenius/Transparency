@extends('layouts.app')

@section('content')
<!--================= ANNOUNCEMENTS ====================-->

<!-- Styles -->
<link rel="stylesheet" type="text/css" href="css/announcements.css">

<h1>ANNOUNCEMENTS</h1>
<div id="post-div">
	@yield('add-announcement')
	<!--  For execom -->
	<!-- <div class="post" id="add-announcements"> 
		<fieldset>
			<legend align="left">Add Announcement</legend>
			<form>
				{{ csrf_field() }}
				<textarea name="" cols="" rows="" placeholder="Any announcements?"></textarea>
				<input type="submit" name="submit" value="POST">
			</form>
		</fieldset>
	</div> -->

<!-- OPPPPSS!: Dont edit this part without permission. Thank you. -->
	<div class="post">
		<fieldset>
			<legend align="left">Governor</legend>
			<p>Hello people! Victory Party sa Bentoys!</p>
			<div class="post-details">
				<a href=""><i class="fa fa-edit"></i></a> <!--  For execom -->
				<label>[Updated]</label>	<!-- Include if date and time != created_at -->

				<!-- id: use announcements_id :D -->
				<a id="1" class="a" onclick="hide_comment()"><i class="fa fa-comment-o"></i><label>9 comments</label></a>
				<i class="fa fa-calendar"></i><label>March 28, 2018</label>
				<i class="fa fa-clock-o"></i><label>8:15 AM</label>
			</div>
		</fieldset>

		<!-- id : use announcements_id :D -->
		<div class="comments-div" id="1">
			<div class="comments clovers">
				<label class="comments-label">Clovers:</label>
				<p>Oyy pwede ka gate crash?!</p>
			</div>
			<div class="comments skimmers">
				<label class="comments-label">Skimmers:</label>
				<p>Gani man ! Charr</p>
			</div>		            				
			<div class="comments">
				<div class="add-comments">
					<form>
						{{ csrf_field() }}
						<textarea name="" placeholder="Add comments or reply ..."></textarea>
						<input type="submit" name="submit" value="POST">
					</form>
				</div>
			</div>
		</div>
	</div>
<!-- End of OPPPPSS :D -->

	<div class="post">
		<fieldset>
			<legend align="left">Secretary</legend>
			<p>Try this one. This is a very very very long long long announcements.
				I just wanna try how it looks. The tree is tall. The sun is yellow.
				The ocean calls me. See the light, see the light. It calls me. And
					now I know. Just let me know. This is how far ill go.
			</p>
			<div class="post-details">
				<a ><i class="fa fa-comment-o"></i><label>9 comments</label></a>
				<i class="fa fa-calendar"></i><label>March 28, 2018</label>
				<i class="fa fa-clock-o"></i><label>8:15 AM</label>
			</div>
		</fieldset>
	</div>
	<div class="post">
		<fieldset>
			<legend align="left">Governor</legend>
			<p>Support support support!</p>
			<div class="post-details">
				<a class="a" onclick="hide_comment()" ><i class="fa fa-comment-o"></i><label>9 comments</label></a>
				<i class="fa fa-calendar"></i><label>March 28, 2018</label>
				<i class="fa fa-clock-o"></i><label>8:15 AM</label>
			</div>
		</fieldset>

		<div  class="comments-div"> 
			<div class="comments clovers">
				<label class="comments-label">Clovers:</label>
				<p>Oyy pwede ka gate crash?!</p>
			</div>
			<div class="comments skimmers">
				<label class="comments-label">Skimmers:</label>
				<p>Gani man ! Charr</p>
			</div>
			<div class="comments elektrons">
				<label class="comments-label">Elektrons:</label>
				<p>This is a very very very long comment. Ijust wanna see
					how it looks. Okay. Here we go. blablafsdereferegerge
					. So stupid. Im sorry. Very very sorry.
				</p>
			</div>
			<div class="comments">
				<div class="add-comments">
					<form>
						<textarea name="" placeholder="Add comments or reply ..."></textarea>
						<input type="submit" name="submit" value="POST">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	// var btn = document.getElementById('comment-btn');
	// var comments_div = document.getElementsByClassName('comments_div');
	// var index = 0;

	// var d = "none";

	// function hide_comment(){
	// 	if ( d == "none"){
	// 		d = "block";
	// 	}
	// 	else{
	// 		d = "none";
	// 	}

	// 	comments_div[index].style.display = d;
	// }

	// var a = document.getElementsByClassName('a');
	// for(var i = 0; i<2 ;i++){
	// 	a[i].onclick = function(){
	// 		comments_div[i].style.display = "none";
	// 	}
	// }
</script>
<script type="text/javascript" src="js/timeline.js"></script>
@endsection