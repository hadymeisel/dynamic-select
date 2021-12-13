<h1 class="h3 mb-2 text-gray-800">Edit Jadwal</h1>

<!-- DataTales Example -->
<form enctype="multipart/form-data" method="post">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Meidasi</h6>
        </div>


        <div class="card-body">

            <div class="form-group">
                <label for="exampleFormControlInput1">Tanggal Mediasi</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="mediasi">
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Panitera</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="panitera" placeholder="Masukkan Nama">
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Mediator</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="mediator" placeholder="masukkan nama">
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">No Berita Acara</label>
                <div class="col-sm-10">
                    <input type="text" name="noba" class="form-control" id="exampleFormControlInput1" placeholder="masukkan nomor berita acara">
                </div>
            </div>

        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Keterangan</h6>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Keterangan</label>
                <select class="form-control" name="ket" id="exampleFormControlSelect1">
                    <option value="1">Tercapai Kesepakatan</option>
                    <option value="0">Tidak Tercapai Kesepakatan</option>
                </select>
            </div>

            Choose Car Make:
            <select id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
                <option value=""></option>
                <option value="Chevy">Chevy</option>
                <option value="Dodge">Dodge</option>
                <option value="Ford">Ford</option>
            </select>
            <hr />
            Choose Car Model:
            <select id="slct2" name="slct2"></select>

            <script>
                function populate(s1, s2) {
                    var s1 = document.getElementById(s1);
                    var s2 = document.getElementById(s2);
                    s2.innerHTML = "";
                    if (s1.value == "Chevy") {
                        var optionArray = ["|", "camaro|Camaro", "corvette|Corvette", "impala|Impala"];
                    } else if (s1.value == "Dodge") {
                        var optionArray = ["|", "avenger|Avenger", "challenger|Challenger", "charger|Charger"];
                    } else if (s1.value == "Ford") {
                        var optionArray = ["|", "mustang|Mustang", "shelby|Shelby"];
                    }
                    for (var option in optionArray) {
                        var pair = optionArray[option].split("|");
                        var newOption = document.createElement("option");
                        newOption.value = pair[0];
                        newOption.innerHTML = pair[1];
                        s2.options.add(newOption);
                    }
                }
            </script>
            </head>

        </div>
    </div>

    <button type="submit" name="save" class="btn btn-success">Submit</button>

</form>