// handle deletedshow_input
function isDelete(id) {
	console.log(id);
	
	if (confirm('are you sure want to delete ID ' + id + ' ?')){
		window.location.href = "/dashboard/product/delete/" + id;
	}
}


function pageShow() {
	let perPages = document.getElementById('show_input').value;
	window.location.href = `/dashboard/product/${perPages}?page=1`;
}


var queryUpdateTable = (id, product_name, product_image, product_price, product_type, upload_at) => {
	return `<tr>
                <td>oke</td>
                <td>${id}</td>
                <td>${product_name}</td>
                <td>
                    <img src="${product_image}" alt="" id="product_image" class="w-28 mx-auto">
                </td>
                <td>${product_price}</td>
                <td>${product_type}</td>
                <td>${upload_at}</td>
                <td>
                    <a href="/dashboard/product/edit/${id}">
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4">Edit</button>
                    </a>
                    <a href="/dashboard/product/detail/${id}">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4">Detail</button>
                    </a>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4" id="deleteBtn" onclick="isDelete($id)">Delete</button>
                    
                </td>
            </tr>`;
}


function search() {

	document.getElementById('product_table').remove();
	let idContainer = document.getElementById('search');
	idContainer.style.display = "table-header-group";

	let idSearch = document.getElementById('show_search').value;

	let searchBy = ['id','name_product','image_product','price_product','type_product', 'upload_at'];

	searchBy.forEach((table)=>{
		product.map((product) => {
			if (idSearch == product[table]){
				console.log(product);
				idContainer.innerHTML += queryUpdateTable( product['id'], product['name_product'], product['image_product'], product['price_product'], product['type_product'], product['upload_at'] );
			};
		});
	});
}