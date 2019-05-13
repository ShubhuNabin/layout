<style>
	.action_btn ul{
		display: flex;
		margin: 5px;
		padding: 5px;

	}
	.action_btn ul li{
		list-style: none;
		justify-content: space-between;
		margin: 5px;



	}
</style>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			
		</div>
		<div class="col-md-6 action_btn">
			<ul>
				<li><button class="btn"><i class="fas fa-plus"></i>ADD</button></li>
				<li><button class="btn"><i class="fas fa-trash-alt"></i>REMOVE</button></li>
				<li><button class="btn"><i class="fas fa-tasks"></i>MANAGE</button></li>
			</ul>
		</div>
	</div>

	<hr style="color:black;">

	<div class="manage_list"></div>
</div>