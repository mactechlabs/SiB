$(document).ready(function() {
	$('.exam').attr('disabled',true);
	$('.term').attr('disabled',true);
    $('.name').attr('disabled',true);
	$('.year').attr('disabled',true);
	$('.student').attr('disabled',true);
	$('.enterFinalM').attr('visibility',false);
	$('.subinput').attr('disabled',true);
	$('.finalMark').attr('disabled',true);
	$('.btnEnterMarks').attr('disabled',true);
	$('.class').change(function() {
		$('.term').attr('disabled',false);
			$('.term').change(function() {
				$('.year').attr('disabled',false);
					$('.year').change(function() {
						$('.exam').attr('disabled',false);
							$('.exam').change(function() {
								$('.student').attr('disabled',false);
									$('.student').change(function() {
										$('.btnEnterMarks').attr('disabled',false);
										var selectedID = $(this).val();
										console.log(selectedID+"this id");
										$('.hiddenName').val(selectedID);	
									});
							});
					});
			});
	});
	$('.getresults').click(function(e) {
		event.preventDefault();
		var exam = $('.exam').val();
		$('.examR').html(exam);
		var year = $('.year').val();
		$('.yearR').html(year);
		var term = $('.term').val();
		$('.termR').html(term);
		var classR = $('.class').val();
		$('.classR').html(classR);
		var id = $('.student').val();
		$('.regNoR').html(id);
		$.ajax({
			type	: "POST",
			url		: '../php/calls.php?marksheet=getIndMarks&class=' + classR +'&exam=' + exam +'&term=' + term +' &year=' + year +' &id=' + id,
			data:{id:id},
			dataType:"json",
		}).success(function(data){
			console.log(data);
			var size = data.length;
			var count = 0;
			while (count < size){
				var thisrow = "<tr><td class='subje'>"+data[count].subject_name+"</td><td class='markR' style='width:27px;'>"+data[count].final_score+"</td><td class='gradeR' style='width:27px;'></td> <td class='commentR' ></td></tr>";
				$('.individualbd').append(thisrow);
				count++;
				console.log(count);
			}
			$('.nameR').html(data.class);
			$('.subj').html(data.subject_name);
		});
	});

	$('.subinput1').keydown(function() {
		var grade = $(this).attr('data-id');
		alert(grade);
		$('.grade').val(grade);
	});

	$('#checkbox').change(function(e) {
		if(this.checked){
			$('.subinput').attr('disabled',false);
			$('.finalMark').attr('disabled',true);
			$('.papersStatus').val('yes');
		}else{
			$('.papersStatus').val('no');
			$('.subinput').attr('disabled',true);
			$('.finalMark').attr('disabled',false);
		}
	});
	    // tooltip demo
		$('.tooltip-demo').tooltip({
			selector: "[data-toggle=tooltip]",
			container: "body"
		})
	
		// popover demo
		$("[data-toggle=popover]")
			.popover()

			
});
