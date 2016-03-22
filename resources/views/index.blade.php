@extends('master')

@section('content')

<!-- begin #content -->
<div id="content" class="content">
	<!-- begin row -->
	<div class="row">

		<!-- begin col-2 -->
		<div class="col-md-2">
			<form>
				<div class="input-group m-b-15">
					<input type="text" class="form-control input-sm input-white" placeholder="Search" />
					<span class="input-group-btn">
						<button class="btn btn-sm btn-inverse" type="button"><i class="fa fa-search"></i></button>
					</span>
				</div>
			</form>
			<div class="hidden-sm hidden-xs">
				<h5 class="m-t-20">Users</h5>
				<ul class="nav nav-pills nav-stacked nav-inbox">
					<li class="active">
						<a href="#">
							<i class="fa fa-inbox fa-fw m-r-5"></i> All
						</a>
					</li>
					<li><a href="#"><i class="fa fa-inbox fa-fw m-r-5"></i>Active</a></li>
					<li><a href="#"><i class="fa fa-pencil fa-fw m-r-5"></i>Inactive</a></li>
					<li><a href="#"><i class="fa fa-plus fa-fw m-r-5"></i>New</a></li>
					<li><a href="#"><i class="fa fa-trash-o fa-fw m-r-5"></i>Deleted</a></li>
				</ul>
			</div>
		</div>
		<!-- end col-2 -->

		<!-- begin col-10 -->
		<div class="col-md-10">
			<div class="email-btn-row hidden-xs">
				<a href="#" class="btn btn-sm btn-inverse"><i class="fa fa-plus m-r-5"></i> New</a>
				<a href="#" class="btn btn-sm btn-default disabled">Delete</a>
				<a href="#" class="btn btn-sm btn-default disabled">Update</a>
				<a href="#" class="btn btn-sm btn-default disabled">Open</a>
			</div>
			<div class="email-content">
				<table class="table table-email">
					<thead>
						<tr>
							<th class="email-select"><a href="#" data-click="email-select-all"><i class="fa fa-square-o fa-fw"></i></a></th>
							<th colspan="2">
								<div class="dropdown">
									<a href="#" class="email-header-link" data-toggle="dropdown">View All <i class="fa fa-angle-down m-l-5"></i></a>
									<ul class="dropdown-menu">
										<li class="active"><a href="#">All</a></li>
										<li><a href="#">Unread</a></li>
										<li><a href="#">Contacts</a></li>
										<li><a href="#">Groups</a></li>
										<li><a href="#">Newsletters</a></li>
										<li><a href="#">Social updates</a></li>
										<li><a href="#">Everything else</a></li>
									</ul>
								</div>
							</th>
							<th>
								<div class="dropdown">
									<a href="#" class="email-header-link" data-toggle="dropdown">Arrange by <i class="fa fa-angle-down m-l-5"></i></a>
									<ul class="dropdown-menu">
										<li class="active"><a href="#">Date</a></li>
										<li><a href="#">From</a></li>
										<li><a href="#">Subject</a></li>
										<li><a href="#">Size</a></li>
										<li><a href="#">Conversation</a></li>
									</ul>
								</div>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="email-select"><a href="#" data-click="email-select-single"><i class="fa fa-square-o fa-fw"></i></a></td>
							<td class="email-sender">
								Leap Motion
							</td>
							<td class="email-subject">
								<a href="#" class="email-btn" data-click="email-archive"><i class="fa fa-folder-open"></i></a>
								<a href="#" class="email-btn" data-click="email-remove"><i class="fa fa-trash-o"></i></a>
								<a href="#" class="email-btn" data-click="email-highlight"><i class="fa fa-flag"></i></a>
								Maecenas ultrices interdum leo, eu aliquam diam mattis sed.
							</td>
							<td class="email-date">11/4/2014</td>
						</tr>
						<tr>
							<td class="email-select"><a href="#" data-click="email-select-single"><i class="fa fa-square-o fa-fw"></i></a></td>
							<td class="email-sender">
								Leap Motion
							</td>
							<td class="email-subject">
								<a href="#" class="email-btn" data-click="email-archive"><i class="fa fa-folder-open"></i></a>
								<a href="#" class="email-btn" data-click="email-remove"><i class="fa fa-trash-o"></i></a>
								<a href="#" class="email-btn" data-click="email-highlight"><i class="fa fa-flag"></i></a>
								Ut tristique dapibus nibh, sed scelerisque magna vehicula a.
							</td>
							<td class="email-date">11/4/2014</td>
						</tr>
						<tr>
							<td class="email-select"><a href="#" data-click="email-select-single"><i class="fa fa-square-o fa-fw"></i></a></td>
							<td class="email-sender">
								Stefie Chin
							</td>
							<td class="email-subject">
								<a href="#" class="email-btn" data-click="email-archive"><i class="fa fa-folder-open"></i></a>
								<a href="#" class="email-btn" data-click="email-remove"><i class="fa fa-trash-o"></i></a>
								<a href="#" class="email-btn" data-click="email-highlight"><i class="fa fa-flag"></i></a>
								Etiam pretium neque vitae vulputate fermentum.
							</td>
							<td class="email-date">11/4/2014</td>
						</tr>
						<tr>
							<td class="email-select"><a href="#" data-click="email-select-single"><i class="fa fa-square-o fa-fw"></i></a></td>
							<td class="email-sender">
								Alan Tan
							</td>
							<td class="email-subject">
								<a href="#" class="email-btn" data-click="email-archive"><i class="fa fa-folder-open"></i></a>
								<a href="#" class="email-btn" data-click="email-remove"><i class="fa fa-trash-o"></i></a>
								<a href="#" class="email-btn" data-click="email-highlight"><i class="fa fa-flag"></i></a>
								Duis et justo in nisl tristique lobortis id at ligula.
							</td>
							<td class="email-date">11/4/2014</td>
						</tr>
						<tr>
							<td class="email-select"><a href="#" data-click="email-select-single"><i class="fa fa-square-o fa-fw"></i></a></td>
							<td class="email-sender">
								Yu Ming Tan
							</td>
							<td class="email-subject">
								<a href="#" class="email-btn" data-click="email-archive"><i class="fa fa-folder-open"></i></a>
								<a href="#" class="email-btn" data-click="email-remove"><i class="fa fa-trash-o"></i></a>
								<a href="#" class="email-btn" data-click="email-highlight"><i class="fa fa-flag"></i></a>
								Sed dapibus nec velit eget pulvinar. Etiam id erat in eros imperdiet tempus.
							</td>
							<td class="email-date">11/4/2014</td>
						</tr>
						<tr>
							<td class="email-select"><a href="#" data-click="email-select-single"><i class="fa fa-square-o fa-fw"></i></a></td>
							<td class="email-sender">
								Harvinder Signh
							</td>
							<td class="email-subject">
								<a href="#" class="email-btn" data-click="email-archive"><i class="fa fa-folder-open"></i></a>
								<a href="#" class="email-btn" data-click="email-remove"><i class="fa fa-trash-o"></i></a>
								<a href="#" class="email-btn" data-click="email-highlight"><i class="fa fa-flag"></i></a>
								Aliquam diam risus, condimentum ut diam in, fermentum euismod sem.
							</td>
							<td class="email-date">12/4/2014</td>
						</tr>
				</table>
				<div class="email-footer clearfix">
					<ul class="pagination pagination-sm m-t-0 m-b-0 pull-right">
						<li class="disabled"><a href="javascript:;"><i class="fa fa-angle-double-left"></i></a></li>
						<li class="disabled"><a href="javascript:;"><i class="fa fa-angle-left"></i></a></li>
						<li><a href="javascript:;"><i class="fa fa-angle-right"></i></a></li>
						<li><a href="javascript:;"><i class="fa fa-angle-double-right"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end col-10 -->

	</div>
	<!-- end row -->
</div>
<!-- end #content -->

@endsection
