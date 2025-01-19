$(document).ready(function() {
    viewData();
});

function viewData() {
	$.ajax({
		type: "POST",
		url: "view_data.php",
		cache: false,
		success: function (data) {
			$('#tableArea').html(data);
			$(function () {
				$("#dataTable").DataTable({
                    "pageLength": 25
                });
			})
		}
	});
}