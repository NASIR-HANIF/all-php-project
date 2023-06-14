$(document).ready(function () {
    $(".genrate-btn").click(function (e) {
        e.preventDefault();
        var width = $(".width").val();
        var heigth = $(".heigth").val();
        var color = $(".color").val();
        var formate = $(".formate").val();
        var red = color[1] + color[2];
        var green = color[3] + color[4];
        var blue = color[5] + color[6];
        var r = parseInt(red, 16);
        var g = parseInt(green, 16);
        var b = parseInt(blue, 16);
        $.ajax({
            type: "POST",
            url: "php/index.php",
            data: {
                width: width,
                heigth: heigth,
                formate: formate,
                red: r,
                green: g,
                blue: b,
            },
            cache: false,
            success: function (response) {
                var image = `
<div class="text-center">
    <img src="images/${response}" alt="">
    <br>
    <a href="images/${response}" download="" class="btn btn-danger mt-2">download</a>
</div>

`;
                $(".message").html(image);
            }

        })

    })
});

// image auto width 
// custom width / origneal width * origneal height
$(document).ready(function () {
    $("#photo").on("change", function () {
        var photo = this.files[0];
        var url = URL.createObjectURL(photo);
        var img = document.createElement("img");
        img.src = url;
        $(".message").html(img);
        $("#photo-width").on("input", function () {
            var width = this.value;
            var c_width = +img.width; // crunt width ko numaric me chang kia + laga ke
            var c_height = +img.height; // crunt height ko numaric me chang kia + laga ke
            var ratio = width / c_width;
            f_height = (ratio * c_height).toFixed(0);
            $("#photo-height").val(f_height);
            img.width = width;
        });

        $("#photo-height").on("input", function () {
            img.height = this.value;
        });
        $("#photo-quality").on("input", function () {
            $(".quality").html(this.value +"%");
        })
    })

})

$(document).ready(function () {
    $(".resize-form").submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "php/resize.php",
            data: new FormData(this),
            contentType: false,
            processData: false,
            catche: false,
            success: function (response) {
                var br = document.createElement("br");
                var a = document.createElement("a");
                a.href = "images/" + response.trim();
                a.download = "images/" + response.trim();
                a.innerHTML = "download";
                a.className = "btn btn-danger mt-2";
                $(".message").append(br);
                $(".message").append(a);
            }
        })
    });
});