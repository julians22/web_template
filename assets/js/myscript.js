const flashdata = $('.flash-data').data('flashdata');
if (flashdata) {
    Swal.fire({
			title: "Menu Data",
			text: "Success " + flashdata,
			type: "success",
			animation: false,
			customClass: {
				popup: "animated jackInTheBox"
			}
		});
}

// alert hapus
$('.hapus').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
			title: "Are you sure?",
			text: "This data will deleted!",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#3085d6",
			cancelButtonColor: "#d33",
			confirmButtonText: "Yes, delete it!"
		}).then(result => {
			if (result.value) {
				document.location.href = href;
			}
		});
})