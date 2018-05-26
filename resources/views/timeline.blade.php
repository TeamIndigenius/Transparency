@extends('layouts.app')

@section('content')
<!--================= ANNOUNCEMENTS ====================-->

<!-- Styles -->
<link rel="stylesheet" type="text/css" href="css/announcements.css">

<h1 id="ann-header">ANNOUNCEMENTS</h1>
<div id="post-div">
	<!--  For execom -->
	@if($isExecom)
		<div class="post" id="add-announcements"> 
			<fieldset>
				<legend align="left">Add Announcement</legend>
				<form action="/timeline" method="POST">
					{{ csrf_field() }}
					<textarea id="placeholder" name="content" cols="" rows="" placeholder="Any announcements?" autofocus></textarea>
					<input type="hidden" name="membership_id" value="{{ $membership->id }}">
					<input type="hidden" name="is_public" value="1">
					<input type="submit" name="submit" value="POST" class="hover-cursor-pointer">
				</form>
			</fieldset>
		</div>
	@endif

<!-- OPPPPSS!: Dont edit this part without permission. Thank you. -->

<!-- Display Announcements and Comments -->
	@forelse($announcements as $announcement)
	@if ($announcement->is_public == 1)
	<div class="post">
		<fieldset>
			<legend align="left">{{ $announcement->username }}: {{ $announcement->getPosition($announcement->membership_id) }}</legend>
			<p>{{ $announcement->content }}</p>
			<div class="post-details">

				<!-- Determines if the post is updated -->
				@if( $announcement->created_at != $announcement->updated_at )
					<label>[Updated]</label><!-- Include if date and time != created_at -->
				@endif

				<!--  For the Post Owner -->
				@if($announcement->getUserId($announcement->membership_id) == Auth::user()->id )
					<a onclick="showModal({{ $announcement->id }})"><label class="hover-cursor-pointer"><i class="fa fa-edit"></i>Edit</label></a>
					<a><label class="hover-cursor-pointer"><i class="fa fa-trash-o"></i>Delete</label></a>
				@endif

				<a class="hover-cursor-pointer" onclick="showComments({{ $announcement->id }})" ><i class="fa fa-comment-o hover-cursor-pointer"></i><label class="hover-cursor-pointer">{{ count($announcement->comments)}} comment(s)</label></a>
				<label><i class="fa fa-clock-o"></i></label>
				<label>{{ $announcement->created_at->diffForHumans()}}</label>
			</div>
		</fieldset>

		<!-- Edit Modal -->
	    <div id="modal-{{ $announcement->id }}" class="modal-whole-div">
            <div id="modal-div">
                <span id="close-btn">&times;</span>

                <h2>Edit Announcement</h2>
                <form action="/timeline" method="POST">

					<textarea id="edit-textarea" name="content" cols="" rows="20" autofocus>{{ $announcement->content }}</textarea>
					<input type="hidden" name="membership_id" value="{{ $membership->id }}">
					<input type="hidden" name="is_public" value="1">
					<div id="done-btn">
						<input type="submit" name="submit" value="SAVE" class="hover-cursor-pointer">
					</div>
				</form>
               
            </div>
        </div>
		<!-- END OF MODAL -->

		<!-- comments for this announcement -->
		<div class="comments-div" id="{{ $announcement->id }}">
			@forelse($announcement->comments as $comment)
					<div class="comments">
						<label class="comments-label {{ $comment->getOrgName($comment->membership_id) }}">{{ $comment->getUserName($comment->membership_id) }}:</label>
						<p>{{ $comment->content }}</p>
						<div class="comment-details">

							<!-- For the Comment Owner -->
							@if($comment->getUserId($comment->membership_id) == Auth::user()->id )
							<div id="comment-editable-div">
								<label class="hover-cursor-pointer"><i class="fa fa-edit"></i></label>
								<label class="hover-cursor-pointer"><i class="fa fa-trash-o"></i></label>
							</div>
							@endif

							<label class="comment-timestamp">{{ $comment->created_at->diffForHumans()}}</label>
						</div>
					</div>
			@empty
			@endforelse

			<div class="comments">
				<div class="add-comments">
					<form action="/comments" method="POST">
						{{ csrf_field() }}
						<textarea name="content" placeholder="Add comments or reply ..." autofocus></textarea>
						<input type="hidden" name="membership_id" value="{{ $membership->id }}">
						<input type="hidden" name="announcement_id" value="{{ $announcement->id }}">
						<input type="hidden" name="is_public" value="1">
						<input type="submit" name="submit" value="POST" class="hover-cursor-pointer">
					</form>
				</div>
			</div>
		</div>
	</div>
	@endif
	@empty
		No announcements found.
	@endforelse
<!-- End of OPPPPSS :D -->

	<div class="post">
		<fieldset>
			<legend align="left">Governor</legend>
			<p>UI only!</p>
			<div class="post-details">
				<label>[Updated]</label>
				<a href=""><i class="fa fa-edit"></i></a>
				<a href=""><i class="fa fa-trash-o"></i></a>
				<a class="a" onclick="hide_comment()" ><i class="fa fa-comment-o"></i><label>9 comments</label></a>
				<label><i class="fa fa-clock-o"></i></label>
				<label>2 minutes ago</label>
			</div>
		</fieldset>

		<div  class="comments-div" style="display: block;"> 
			<div class="comments clovers">
				<label class="comments-label">Clovers:</label>
				<p>Oyy pwede ka gate crash?!</p>
				<div class="comment-details">
					<label>2 minutes ago</label>
				</div>
			</div>
			<div class="comments skimmers">
				<label class="comments-label">Skimmers:</label>
				<p>Gani man ! Charr</p>
				<div class="comment-details">
					<label>2 minutes ago</label>
				</div>
			</div>
			<div class="comments elektrons">
				<label class="comments-label">Elektrons:</label>
				<p>This is a very very very long comment. Ijust wanna see
					how it looks. Okay. Here we go. blablafsdereferegerge
					. So stupid. Im sorry. Very very sorry.
				</p>
				<div class="comment-details">
					<label>2 minutes ago</label>
				</div>
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
<script type="text/javascript" src="js/timeline.js"></script>
@endsection