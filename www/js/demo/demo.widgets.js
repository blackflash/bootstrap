(function(a){a(document).ready(function(c){

	var b=a("#da-ex-wizard-form").validate({onsubmit:false});
	a("#da-ex-wizard-form").daWizard({
		onLeaveStep:function(d,e){
			return b.form()},
			onBeforeSubmit:
			function(){
				return b.form()}})})})(jQuery);