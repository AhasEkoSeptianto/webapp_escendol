function livePreviewImage( input ){

	console.log(input)

	var idImg = document.getElementById('showImg');


	if (input.files && input.files[0]){

		var reader = new FileReader();

		reader.onload = function (e) {
			idImg.setAttribute('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);

	}
}