function livePreviewImage( input ){

	var idPreview = document.getElementById('img_preview');
		idImg = document.getElementById('showImg');


	if (input.files && input.files[0]){
		console.log(idImg)
		idPreview.style.display = 'block';


		var reader = new FileReader();

		reader.onload = function (e) {
			idImg.setAttribute('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);

	}
}