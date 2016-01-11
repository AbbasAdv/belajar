<div class="page-header"><h1>jQuery</h1></div>


<h2>DOM</h2>
<p>Belajar DOM</p>
<p>Basicly halaman web adalah DOM. Documen Object yang bisa di manipulasi dengan javascript.</p>

<p>Example</p>

<div id="test" class="jumbotron">Ini test</div>
<p>
    
    <input type="text" id="customer" class="form-control" value="Herlina" />
</p>


<hr>
<div class="notice jumbotron">
    Pengumuman
    <div class="danger alert alert-info">Dilarang suka sama Herlina</div>
</div>

<hr>
<div class="notice jumbotron">
    Pengumuman pengumuman
    <div class="danger alert alert-info">Dilarang mendekati</div>
</div>

<script>
    //$("#test").html("Ini test jumbotron");
</script>


<h2>Event</h2>
<p>Belajar Event click</p>
<button id="rubah" class="btn btn-primary">Rubah Jumbroton</button>
<button id="rubah-class" class="btn btn-primary">Rubah Class Jumbroton</button>
<button id="button-herlina" class="btn btn-success">Herlina</button>
<button id="isi-herlina" class="btn btn-danger">Alert Herlina</button>
<button id="isi-dilarang" class="btn btn-danger">Alert Dilarang</button>

<script>
    //ini contoh kalau gw clik tulisan berubah, pake event click
    //$("#rubah") ini selector 
    $("#rubah").on("click",function(){
        //$('#test') ini adalah selector 
             $("#test").html("Ini test jumbotron telah di klik");
    });
    
     $("#rubah-class").on("click",function(){
         //ini gw panggil class jumbotron kan
         //$('.jumbotron') ini adalah selector 
         // ini pake html()
             $(".jumbotron").html("Ini test di class nya jumbotron telah di klik");

    });
      $("#button-herlina").on("click",function(){
          //kalau dia type nya input pake val()
        alert($("#customer").val());
        //coba kita manipulasi lagi
        $("#customer").val("Herlina disenengi Ari...");

    });
     $("#isi-herlina").on("click",function(){
          //kalau dia type nya input pake val()
        alert($(".danger").html());
        //coba kita manipulasi lagi

    });
    
   
     $("#isi-dilarang").on("click",function(){
          //kalau dia type nya input pake val()
       alert("Awas, resiko ditanggung sendiri...!!!");
        //coba kita manipulasi lagi
       

    });
</script>


<hr>
<h3><div class="page-header">Form Data</div></h3>

        <form role="form" class="form-horizontal">
            <div class="danger alert alert-info">
                <label>Nama Lengkap</label>
                <input type="text" name="namaLengkap" class="form-control">
            </div>
            <div class="fdanger alert alert-info">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control">
            </div>
            <div class="danger alert alert-info">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="danger alert alert-info">
                <label>Pesan</label>
                <textarea name="pesan" class="form-control"></textarea>
            </div>
            <div class="from fdanger">
                <button id="kirim" type="button" class="btn btn-success">Kirim</button>
                <button id="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
            <script>
                $("#kirim").on("click", function()
                {
                    //ini kalau mau pake ajax taruh disini yang pernah gw ajarin
                    ////ganti type submit kalau mau submit pake php
                    ////basicly semua otaknya ada
                    //$.ajax({});
                        alert("sukses...! ");
                 });
                 
               $("#reset").on("click",function(){
          //kalau dia type nya input pake val()
       alert("kemabli...! ");
        //coba kita manipulasi lagi
                  });
                
    
            </script>

