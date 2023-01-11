//ajax code to get all products on click of the button
$(document).ready(function () {
    $("#btnGetProducts").click(function () {
        $.ajax({
            url: "/getproducts",
            type: "GET",
            success: function (result) {
                result.forEach(function (product) {
                    $("#products").append(
                        "<tr><td>" +
                            product.name +
                            "</td><td>" +
                            product.price +
                            "</td></tr>"
                    );
                });
            },
        });
    });
});
