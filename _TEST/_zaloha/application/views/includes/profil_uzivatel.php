<div id="home">
	
		<div id="breadcrumbs">
			<a href="<?php echo base_url(); ?>" class="breadcrumb">Hlavná stránka</a>>>
			<a href="#" class="breadcrumbChecked">môj profil</a>
		</div>

	<div id="homeBottom">

			<div id="appText2">
					<h3 class="fl">Profil užívateľa <?php echo $username ?></h3>
					<div class="fr datum">Dnes je: <?php echo date("d.m.Y");   ?></div>
					<div class="clearfix"></div>
					<div class="greenLine"></div>
					<ul class="fl">
						<li><div class="arrow"></div>Odoslané: <b><?php echo isset($CountCurrentMonth)? $CountCurrentMonth : "0";?></b> tento mesiac</li>
						<li><div class="arrow"></div>Odoslané: <b><?php echo isset($CountAllFeedbacks)? $CountAllFeedbacks : "0" ?></b> celkom</li>
						<li><div class="arrow"></div>Reputácia: <b>1245 bodov</b></li>
					</ul>
				
				<div class="table1Align">
					<h3>Moje spätné väzby <?php echo $username ?></h3>
					<table class="table1">
					    <thead>
					        <tr>
					            <th></th>
					            <th scope="col" abbr="Starter">Dátum</th>
					            <th scope="col" abbr="Medium">Poskytovateľ</th>
					            <th scope="col" abbr="Business">Hodnotenie</th>
					            <th scope="col" abbr="Deluxe">Komentár</th>
					        </tr>
					    </thead>
					   
					    <tbody>
					            <th scope="row"></th>
					            <?php 
					            	if(isset($allFeedbacks))
					            	foreach ($allFeedbacks as $key => $value) {
					            		print_r("<tr><th></th><td>".date("d F  Y", strtotime($value->date))."</td>");
					            		print_r('<td class="provider">'.$value->provider."</td>");
					            		print_r("<td>".$value->stars."</td>");
					            		print_r("<td>".$value->comment."</td></tr>");
					            	}
					            ?>
					    </tbody>
					</table>
				</div></div>
	</div>
	
	<div class="clearfix"></div>
	<div class="fillContainerXL"></div>

</div>

