(function(a){a(document).ready(function(b){if(a.fn.chosen){a("#da-ex-val-chzn").chosen().bind("change",function(){


	a("#da-ex-validate3").validate().element(a(this))})}

if(a.fn.spinner){a("#da-ex-val-spin").spinner()}if(a.fn.validate){

	a("#da-ex-validate1").validate({
		rules:{
			req1:{required:true},
			email1:{required:true,email:true},
			email2:{required:true,email:true},
			email3:{required:true,email:true},
			description:{required:true},
			url1:{required:true,url:true},
			pass1:{required:true,minlength:5},
			cpass1:{required:true,minlength:5,equalTo:"#pass1"},
			digits1:{required:true,digits:true}},


					invalidHandler:function(e,c){var f=c.numberOfInvalids();
						if(f){var d=f==1?"You missed 1 field. It has been highlighted":"You missed "+f+" fields. They have been highlighted";

						a("#da-ex-val1-error").html(d).show()}else{a("#da-ex-val1-error").hide()}}});

	a("#da-ex-validate2").validate({
		rules:{minl1:{
			required:true,minlength:5},
			maxl1:{required:true,maxlength:5},
			rangel1:{required:true,
				rangelength:[5,10]},
				min1:{required:true,digits:true,min:5},
				max1:{required:true,digits:true,max:5},
				range1:{required:true,digits:true,range:[5,10]}},

				invalidHandler:function(e,c){var f=c.numberOfInvalids();if(f){var d=f==1?"You missed 1 field. It has been highlighted":"You missed "+f+" fields. They have been highlighted";


	a("#da-ex-val2-error").html(d).show()}else{a("#da-ex-val2-error").hide()}}});


a("#da-ex-validate3").validate({

	ignore:".ignore",

	rules:{
		projectName:{required:true},
		schoolSubject:{required:true},
		date:{required:true},
		classYear:{required:true},
		teacher:{required:true},
		consultant:{required:true},
		students:{required:true},
		introText:{required:true},
		analyzationText:{required:true},
		alternativeText:{required:true},
		gender:{required:true},
		sport:{required:true},
		sqlImage:{required:true,accept:[".jpeg"]},
		alternativeImage:{required:true,accept:[".jpeg"]},
		dd1:{required:true},chosen1:{required:true},
		spin1:{required:true,min:5,max:10}}
});

a("#da-ex-validate6").validate({

	ignore:".ignore",

	rules:{
		title:{required:true},
		description:{required:true},
		image:{required:true,accept:[".jpeg"]},
		category_id:{required:true}
}});


	a("#da-ex-validate4").validate({

		rules:{email:{required:true,email:true},
		name:{required:true,minlength:5},
		username:{required:true,minlength:5},
		pass2:{required:true,minlength:5},
		cpass2:{required:true,minlength:5,equalTo:"#pass2"},
		address:{required:"#souvenirs:checked"}}})}})})(jQuery);