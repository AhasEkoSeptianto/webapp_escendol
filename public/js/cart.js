const allProduct = {};

const parent = document.getElementById('cart');

const queryAppendChild = (image, name, total ) =>  {
    return `<div class="my-2 flex items-center">
                <img src="${image}" class='w-9' alt="">
                <p class="ml-2 w-1/2 truncate" title="${name}">${name}</p>
                <div class="mt-3 flex items-center absolute right-0 bg-white">
                  <img src="/image/icons/minus.svg" class="w-4 cursor-pointer" alt="minus" onmousedown="ChangeTotalProduct('${name}','-')" />
                  <p class="mx-5">${total}</p>
                  <img src="/image/icons/plus.svg" class="w-4 cursor-pointer" alt="plus" onmousedown="ChangeTotalProduct('${name}','+')" />
                  <img src="/image/icons/cancel_red.svg" class="w-4 cursor-pointer mx-2" alt="minus" onmousedown="DeleteProductSelected('${name}')" />
                </div>
            </div>`
};

function updatePaymentValue () {
  parent.innerHTML = '';
  Object.entries(allProduct).forEach(
    ([key, value]) => {
        parent.innerHTML += queryAppendChild(value.image, key, value.total);
    })
}

function selectProduct(nameProduct, imageProduct) {
  console.log(nameProduct, imageProduct)
  try {
    allProduct[nameProduct] = {
      image:imageProduct,
      total: allProduct[nameProduct].total + 1,
    }    
  } catch (error) {
    allProduct[nameProduct] = {
      image: imageProduct,
      total:1,
    }
  }

  is_showPaymentCart('show');
  
  updatePaymentValue();
}

// ketika user click product maka akan muncul modal product
function selectShowProduct(name_product, price_product, image_product){
  console.log(name_product, price_product, image_product)
  let modal = document.getElementById('modal').style.display = 'flex';
  let modal_nameProduct = document.getElementById('modal_product_name').innerHTML = name_product;
  let modal_priceProduct = document.getElementById('modal_product_price').innerHTML = price_product;
  let modal_imageProduct = document.getElementById('modal_product_image').setAttribute('src', image_product);

}


function ChangeTotalProduct(nameproduct , value){
    switch (value) {
        case "+" : {
            allProduct[nameproduct].total = allProduct[nameproduct].total + 1;
            break;
        }
        case '-' : {
            if (allProduct[nameproduct].total > 0) {
              allProduct[nameproduct].total = allProduct[nameproduct].total - 1 ;
            }
            break;
        }
        default : {
            console.log('error');
        }
    }

    updatePaymentValue();
}

function DeleteProductSelected( nameProduct ) {
  delete allProduct[nameProduct];
  updatePaymentValue();
}

