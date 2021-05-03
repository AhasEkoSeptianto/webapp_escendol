var income_table = document.getElementById('income_table');
var product_sold = document.getElementById('product_table');

var queryUpdateIncome = (time, product_sold, payment) => {
	return `<tr>
              <td>${time}</td>
              <td>${product_sold}</td>
              <td>${payment}</td>
            </tr>`
}

var queryUpdateSoldProductType = (time, product_type) => {
	return `<tr>
              <td class='border'>${time}</td>
              <td class="border">
                <p class="border">Recomend</p>
                <p class="border">Special</p>
                <p class="border">Normal</p>
                <p class="border">Material</p>
              </td>
              <td class="border">
                <p class="border">${product_type.recomend.product_sold}</p>
                <p class="border">${product_type.special.product_sold}</p>
                <p class="border">${product_type.normal.product_sold}</p>
                <p class="border">${product_type.material.product_sold}</p>
              </td>
              <td class="border">
                <p class="border">${product_type.recomend.payment}</p>
                <p class="border">${product_type.special.payment}</p>
                <p class="border">${product_type.normal.payment}</p>
                <p class="border">${product_type.material.payment}</p>
              </td>
            </tr>`;
} 




function setIncome(val, id) {
	var time = '';
	var data_product = [];
	let resQuery = '';

	// update table and set grafik
	switch (val) {
		case 'days_grafik' : {
			time = 'day';
			data_product = data_day;
			data_product.map((val) => {
				resQuery += queryUpdateIncome(val.day, val.product_sold, val.payment);
			})
			document.getElementById('time_table_income').innerHTML = 'day';
			break
		}
		case 'monthly_grafik' : {

			time = 'month';
			data_product = data_month;
			data_product.map((val) => {
				resQuery += queryUpdateIncome(val.month, val.product_sold, val.payment);
			})
			document.getElementById('time_table_income').innerHTML = 'month';
			break;
		}
		case 'years_grafik' : {

			time = 'years';
			data_product = data_years;
			data_product.map((val) => {
				resQuery += queryUpdateIncome(val.years, val.product_sold, val.payment);
			})
			document.getElementById('time_table_income').innerHTML = 'years';
			break;
		}
	}

	income_table.innerHTML = resQuery;
	upBtnActiveIncome(id)



	// update grafik
	let labels = [];
	let data_grafik = [];
	
	data_product.map((val) => {
		labels.push(val[time]);
		data_grafik.push(val.payment);
	})

	let datasets = [{
		label: 'Income per ' + time,
        data: data_grafik,
    	backgroundColor: '#66ffb2',
    	borderColor: '#66ff66',
    	borderWidth: 1
	}];

	Profit(labels, datasets, true );
}

const setSoldProductType = (val, id) => {
	var time = '';
	var type = '';
	var data_product = [];
	let resQuery = '';

	// update table and set grafik
	switch (val) {
		case 'days_grafik' : {
			type = 'day';
			data_product = dataProductSold_day;
			data_product.map((val) => {
				resQuery += queryUpdateSoldProductType(val.day, val.product_type);
			})
			document.getElementById('time_table_soldProduct').innerHTML = 'day';
			break
		}
		case 'monthly_grafik' : {
			type = 'month';
			data_product = dataProductSold_month;
			data_product.map((val) => {
				resQuery += queryUpdateSoldProductType(val.month, val.product_type);
			})
			document.getElementById('time_table_soldProduct').innerHTML = 'month';
			break;
		}
		case 'years_grafik' : {
			type = 'year';
			data_product = dataProductSold_year;
			data_product.map((val) => {
				resQuery += queryUpdateSoldProductType(val.year, val.product_type);
			})
			document.getElementById('time_table_soldProduct').innerHTML = 'years';
			break;
		}
	}

	product_sold.innerHTML = resQuery;

	upBtnActiveProductType(id)

	let newlabels = [];

	let recomendvalue = [];
	let specialvalue = [];
	let normalvalue = [];
	let materialvalue = [];
	
	// ambil semua data
	data_product.map((val) => {
		newlabels.push(val[type]);

		recomendvalue.push(val.product_type.recomend.product_sold);
		specialvalue.push(val.product_type.special.product_sold);
		normalvalue.push(val.product_type.normal.product_sold);
		materialvalue.push(val.product_type.material.product_sold);
	})

	let newdataset = [{
          label: 'Recomend',
          backgroundColor: '#66ff66',
          borderColor: '#66ff66',
          data: recomendvalue,
      },
      {
          label: 'Special',
          backgroundColor: '#66ffb2',
          borderColor: '#66ffb2',
          data: specialvalue,
      },
      {
          label: 'Normal',
          backgroundColor: '#66b2ff',
          borderColor: '#66b2ff',
          data: normalvalue,
      },
      {
          label: 'Material',
          backgroundColor: '#ff6666',
          borderColor: '#ff6666',
          data: materialvalue,
      }];
      ChartTranksaksi(newlabels, newdataset, true)
 }


// btn active grafik
function upBtnActiveIncome(id) {
	let allBtn = ['days_grafik_income', 'monthly_grafik_income', 'years_grafik_income'];

	allBtn.map((val) => {
		document.getElementById(val).style.cssText = 'color:rgba(52, 211, 153); background-color:#ffffff ';
	})
 	
 	try {
 		id.style.cssText = 'background-color : rgba(52, 211, 153); color:#ffffff ';
 	} catch {
 		document.getElementById('days_grafik_income').style.cssText = 'background-color : rgba(52, 211, 153); color:#ffffff ';
 	}
}

function upBtnActiveProductType(id) {
	let allBtn = ['days_grafik_soldProduct', 'month_grafik_soldProduct', 'years_grafik_soldProduct'];

	allBtn.map((val) => {
		document.getElementById(val).style.cssText = 'color:rgba(52, 211, 153); background-color:#ffffff ';
	})
 	
 	try {
 		id.style.cssText = 'background-color : rgba(52, 211, 153); color:#ffffff ';
 	} catch {
 		document.getElementById('days_grafik_soldProduct').style.cssText = 'background-color : rgba(52, 211, 153); color:#ffffff ';
 	}
}



// play first page load
setIncome('days_grafik',null)
setSoldProductType('days_grafik', null)
