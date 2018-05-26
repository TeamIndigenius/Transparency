@extends('timeline')

@section('add-announcement')

<!--  For execom -->
<div class="post" id="add-announcements"> 
	<fieldset>
		<legend align="left">Add Announcement</legend>
		<form>
			{{ csrf_field() }}
			<textarea name="" cols="" rows="" placeholder="Any announcements?"></textarea>
			<input type="submit" name="submit" value="POST">
		</form>
	</fieldset>
</div>

@endsection