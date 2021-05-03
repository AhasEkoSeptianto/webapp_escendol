// handle deletedshow_input
function isDelete(id) {
	console.log(id);
	
	if (confirm('are you sure want to delete ID ' + id + ' ?')){
		window.location.href = "/dashboard/broadcast/delete/" + id;
	}
}


function pageShow() {
	let perPages = document.getElementById('show_input').value;
	window.location.href = `/dashboard/broadcast/${perPages}?page=1`;
}


var queryUpdateTable = (id, news_image, news_title, news_content, news_upload_at) => {
	return ` <tr>
                <td class="p-4"></td>
                <td class="p-4">${id}</td>
                <td class="p-4">
                    <img src="${news_image}" alt="" class="w-full mx-auto">
                </td>
                <td class="p-4">${news_title}</td>
                <td class="p-4">${news_content}</td>
                <td class="p-4">${news_upload_at}</td>
                <td class=''>
                    <a href="/dashboard/broadcast/detail/${id}">
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-4" title="detail">
                            <img src="/image/icons/detail.svg" alt="" class="w-4">
                        </button>
                    </a>
                    <a href="/dashboard/broadcast/edit/${id}">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-4" title="edit">
                            <img src="/image/icons/edit.svg" alt="" class="w-4">
                        </button>
                    </a>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-3 px-4" onclick="isDelete(${id})" title="delete">
                        <img src="/image/icons/delete.svg" alt="" class="w-4">
                    </button>
                    
                </td>
            </tr> `
}



function search() {

	document.getElementById('news_table').remove();
	let idContainer = document.getElementById('search');
	idContainer.style.display = "table-header-group";

	let idSearch = document.getElementById('show_search').value;

	let searchBy = ['id','title','content','image','upload_at'];

	searchBy.forEach((table)=>{
		news.map((news) => {
			if (idSearch == news[table]){
				console.log(news);
				idContainer.innerHTML += queryUpdateTable( news['id'], news['image'], news['title'], news['content'], news['upload_at']);
			};
		});
	});
}