$(document).ready(function() {
    if ($("#myModal").length) {
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        // var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        // var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        // btn.onclick = function() {
        //     modal.style.display = "block";
        // }

        // When the user clicks on <span> (x), close the modal
        // span.onclick = function() {
        //     modal.style.display = "none";
        // }

        // When the user clicks anywhere outside of the modal, close it
        // window.onclick = function(event) {
        //     if (event.target == modal) {
        //         modal.style.display = "none";
        //     }
        // }
        modal.style.display = "block";
    }


    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

    $("#btnSubmit").click(function(e) {
        e.preventDefault();
        var month = $("#month").val();
        var year = $("#year").val();
        if (month == 0 || year == 0) {
            alert("Anda belum memilih bulan atau tahun lahir");
        } else {
            $("#validateForm").submit();
        }
    });

    $(".regular").slick({
        autoplay: true,
        autoplaySpeed: 900,
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    if ($("#submitBtn").length) {
        $("#submitBtn").click(function (e) { 
            var name = $("#name").val();
            var contact = $("#contact").val();
            var email = $("#email").val();
            if(name == "" || contact == "" || email == "") {
                $("#name").focus();
                alert("Anda belum melengkapi data");
            } else {
                $("#registerForm").submit();
            }
        });
    }
});
