<div class="page-header"><h1>Ajax</h1></div>



<h2>GET</h2>
<p>Ajax dengan menggunakan methode get</p>

<form>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password">
    </div>
    <button type="button" id="button-submit" class="btn btn-default">Submit</button>
</form>

<hr>
<div class="content jumbotron"></div>

<script>
    // kita buat on click di button nya jadi kayak gini

    $("#button-submit").on("click", function () {
        $.ajax({
            //metode ajax menggunakan file lain untuk proses secara async, dimana kita akan create file ajax-get.php
            url: "ajax-get.php",
            type: "GET",
            data: {
                email: $("#email").val(), password: $("#password").val()
            },
            success: function (data) {
                // ini akan cari selector dengan class content dimasukkan data
                $(".content").html(data);
            }
        });
    });

</script>




