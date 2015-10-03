<?php
	$group_id = $_GET['group_id']; // getting group_id from the ajax request, use this to get other info from db
?>

<div class="section">
	<div class="profile-image"></div>
	<p class="profile-name">Group Name</p>
	<p class="profile-detail">420 members</p>
	<p class="profile-detail">Created in April 2015</p>
	<!-- If user is NOT in group, show Join button: -->
	<p><button class="button-primary" onClick="joinGroup('echo group id', this)"><i class="fa fa-plus"></i> Join Group</button></p>
	<!-- Else, show Leave button: -->
	<p><button class="button-primary" onClick="leaveGroup('echo group id', this)"><i class="fa fa-minus"></i> Leave Group</button></p>
</div>
<div class="section">
	<p class="section-header">About this group</p>
	<p>Lorem ipsum dolor sit amet</p>
</div>
<div class="section">
	<p class="section-header">Activity this month</p>
</div>
<div class="section">
	<p class="section-header">Group members</p>
	<ul class="members-list">
		<!-- Echo group members in alphabetical order -->
		<li><div class="friend-image"></div><p>Soap Mactavish Mactavish</p></li>
		<li><div class="friend-image"></div><p>Captain Price</p></li>
		<li><div class="friend-image"></div><p>Soap Mactavish</p></li>
		<li><div class="friend-image"></div><p>Captain Price</p></li>
		<li><div class="friend-image"></div><p>Soap Mactavish</p></li>
		<li><div class="friend-image"></div><p>Captain Price</p></li>
		<li><div class="friend-image"></div><p>Soap Mactavish</p></li>
		<li><div class="friend-image"></div><p>Captain Price</p></li>
	</ul>
</div>