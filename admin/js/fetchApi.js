
document.getElementById("chapter").addEventListener("change", function(event){
       var range = document.getElementById("chapter").value;
       var province = document.getElementById("topic").value;
       var type = document.getElementById("subject").value;
       data_fetch(range, province, type);
})

function data_fetch(range, province, type){

       fetch("../admin/apiPhp.php?cc="+range+"&province="+province+"&type="+type+"")
           .then(response => response.json()).then(response => {
                  var amount = response[0].price;
                  document.getElementById("update").value = amount;

       })

}
