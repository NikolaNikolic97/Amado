$(document).on('click','#checkoutBtn',function (event) {
    event.preventDefault();
    let user_ids=[];
    let hidden = document.getElementsByClassName('post_id');
    for (h of hidden){
        user_ids.push(h.value);
    }
    let user_id = document.getElementById('user_id').value;
    let quantity = document.getElementById('quantity').innerText;
    $.ajax({
        url:baseUrl+'/checkout',
        method:'post',
        data:{
            _token:csrf,
            id:user_ids,
            id_user:user_id,
            quantity:quantity
        },
        success:function (data) {
            alert("Thank you for purchasing our products");
            window.location.href = baseUrl+'/shop';
        },
        error:function (xhr,status,errMsg) {

        }
    })
});