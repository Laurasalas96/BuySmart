$(document).on("click", "#search", function () {
    let data = $("#inputProduct").val();
    getSpecificProduct(data);
});

$(document).on("click", "#search", function () {
    let data = $("#inputProduct").val();
    getSpecificProduct(data);
});

const getSpecificProduct = (data) => {
    $.ajax({
        type: "POST",
        url: "getIngredient.php",
        data: {
            type: "search",
            data: data
        }
    }).done(response => {
        response = JSON.parse(response);
        if (Array.isArray(response) && response.length) {
            $("#info-product").css("display", "block");
            $("#product-type").val(response[0].type);
            $("#product-unit").val(response[0].unityType);
            $("#product-weight").val(response[0].weight);
            $("#product-carbon").val(response[0].carbonPrint);
            $("#product-water").val(response[0].waterPrint);
        }
        else {
            $("#info-product").css("display", "none");
            alert("Invalid Product");
        }
    });
};