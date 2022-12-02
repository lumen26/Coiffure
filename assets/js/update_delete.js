$(document).ready(function(){
    let upd_btn = document.querySelectorAll(".b_updateproduct");
    let del_btn = document.querySelectorAll(".b_deleteproduct");
    del_btn.forEach(function(btn){
        btn.addEventListener("click", function(){
            $.redirect('confirmdelete', {del_id: btn.id.replace('del','')}, "POST");
        });
    });
    upd_btn.forEach(function(ubtn){
        ubtn.addEventListener("click", function(){
            $.redirect('p_update', {upd_id: ubtn.id.replace('upd', '')}, "POST");
        });
    });
});