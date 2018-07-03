<div id="logo" style="width:150px; height:100px">
        <a href="http://www.zayat.com.mm" class="standard-logo" data-dark-logo="http://www.zayat.com.mm/images/logo-dark.png"><img src="http://www.zayat.com.mm/images/logo-dark.png"></a>        
</div>
<div class="conainter">
	<div class="row">
		<div class="col-md-12">
			<div>
				<h2>You have receive a message from zayat.com.mm</h2>				
				<h3><span>Name</span> 	 : {{ $qcname }}</h3>
				<h3><span>Email</span> 	 : {{ $qcemail }}</h3>
				<ul>
				@foreach($resmember as $member)
				 @foreach($member as $key=>$val)
				  <li>Name: </li>				  
				 @endforeach
				@endforeach
				</ul>
				

				
			</div>
		</div>
	</div>
</div>
