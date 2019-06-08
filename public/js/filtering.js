const cat = $("input:checkbox[name=categories]");
const brands = $("input:checkbox[name=brands]");
let paginationList = document.getElementById('pagination');
let selectedSort;
let changeView;
let arrCategory = [];
let arrBrands = [];
let price = [];
let images = [];
let search;
let page = 0;
let perPage = 6;
let count;

for (let i = 0 ; i < cat.length; i++) {
    cat[i].addEventListener('change', (event) => {
        if (event.target.checked) {
            arrCategory.push(cat[i].value);
            ajax();
        }
        else {
            arrCategory.pop();
            ajax();
        }
    }) ;
}
for (let i = 0 ; i < brands.length; i++) {
    brands[i].addEventListener('change', (event) => {
        if (event.target.checked) {
            arrBrands.push(brands[i].value);
            ajax();
        }
        else {
            arrBrands.pop();
            ajax();
        }
    }) ;
}
$(document).on('keyup','#search',function () {
    search = this.value.toUpperCase();
    ajax();
})
$(document).on('change','#sortBydate',function () {
    const sort = document.querySelector('#sortBydate');
    selectedSort = sort.options[sort.selectedIndex].value;
    ajax();
});
// $(document).on('change','#viewProduct',function () {
//     const view = document.querySelector('#viewProduct');
//     changeView = view.options[view.selectedIndex].value;
//     ajax();
// });

$(document).on('click','#price',function () {
    let value=document.getElementsByClassName('range-price');
        for(v of value){
            let sting=v.innerText;
            let replacedString=sting.replace(' ','');
            let setString=replacedString.replace(' ','').trim();
            let result=setString.split('-');
            price=result;
            ajax();
        }
    });

$(document).on('click','#pagination_link',function (event) {

    event.preventDefault();
    let linkNumber = parseInt(this.innerText);
    page = (perPage)*(linkNumber-1);
    ajax()
});

function ajax() {
    $.ajax({
        url:baseUrl+'/api/images',
        method:'get',
        success:function (data) {
            images = data;
        },
        error:function (xhr,status,errMsg) {

        }
    });

    $.ajax({
       url:baseUrl+'/api/filters',
       method:'get',
       data:{
           category:arrCategory,
           brands:arrBrands,
           sort:selectedSort,
           price:price,
           // view:changeView,
            search:search,
            page:page
       },
       success:function (data) {
           console.log(data);
           let posts = document.getElementById('posts');
           let content = '';
            count = data.count;
           let pagination = '';
           let pageCount = Math.ceil((count)/perPage);
           for (let i=1;i <= pageCount;i++){

               pagination += `<li class="page-item"><a id="pagination_link" class="page-link" href="#">${i}</a></li>`;

           }
           paginationList.innerHTML = pagination;
           for (d of data.posts) {

                   content += `
                   <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                            `;
                   for (i of images) {
                       if (d.id === i.id_post) {
                           content += `<a href = "${baseUrl + '/posts/' + i.id_post}">
                                                        <img src="${i.src}" alt="${i.alt}">
                                                    </a>`;
                           break;
                       }

                   }
                   content += ` </div>
            
                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">$${d.price}</p>
                                    <a href="${baseUrl + '/posts/' + d.id}">
                                        <h6>${d.name}</h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart ">
                                    <div class="cart">
                                        <a href="/add-to-cart/${d.id}" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="${asset}img/core-img/cart.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    `
           }
           //console.log(content);
           posts.innerHTML = content;

       },
       error:function (xhr,status,errMsg) {

       }
    });
}