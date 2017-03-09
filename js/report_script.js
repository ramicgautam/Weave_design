var main = function () {
	var deptRadio = $('#dept');
	var userRadio = $('#user');
	var deptSelect = $('#deptID');
	var userSelect = $('#userID');

	deptRadio.click(function(){
		deptSelect.show();
		userSelect.hide();
		$('#userID option[value=0]').attr('selected','selected');
	});

	userRadio.click(function(){
		deptSelect.hide();
		userSelect.show();
		$('#deptID option[value=0]').attr('selected','selected');
	});

	$('#comment').keyup(function(){
		var currentCommentLenght = $(this).val().length;
		$('.count').text(200-currentCommentLenght);
		if(currentCommentLenght > 200){
			$(".alert").show().animate({opacity: "1"},400);
			$(".commentErr").show();
			$('.send-report').attr('disabled','disabled');
			this.value=this.value.substring(0,200);

		}else{
			$(".alert").animate({opacity: "0"},400);
			$(".alert").hide();
			$(".commentErr").hide();
			$('.send-report').removeAttr('disabled','disabled');
		}
		
	});

}

$(document).ready(main);

function dismissUpload(){
	$.get( "asset/upload.html?successUnset=1", function( data ) {
		console.log('sesson unloaded');
	});
}