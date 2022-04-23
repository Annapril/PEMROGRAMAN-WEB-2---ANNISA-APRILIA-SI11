<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Praktikum 2</title>
</head>
<body>
<h2>Belanja Online</h2>
    <div class= "form">
    <form method="POST" action="form_belanja.php" class="box1">
    <div class="form-group row">
        <label for="cust" class="col-4 col-form-label">Customer</label> 
        <div class="col-8">
        <input id="cust" name="customer" value="" placeholder="Customer Name" type="text" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4">Pilih Produk</label> 
        <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
            <label for="produk_0" class="custom-control-label">TV</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
            <label for="produk_1" class="custom-control-label">KULKAS</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
            <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
        <div class="col-8">
        <input id="jumlah" name="jumlah" value="" placeholder="Jumlah" type="text" class="form-control">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="proses" value="" type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
    </form>
    <table class="box2">
        <tr>
            <th>Daftar Harga</th>
        </tr>
        <tr>
            <td>TV : 4.200.000</td>
        </tr>
        <tr>
            <td>Kulkas : 3.100.000</td>
        </tr>
        <tr>
            <td>Mesin Cuci : 3.800.000</td>
        </tr>
        <tr>
            <th>Harga Dapat Berubah Setiap Saat</th>
        </tr>
    </table>
    </div>
    <?php
        $nama_customer = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];
        if ($produk == 'TV'){
            $harga = 4200000;
        }elseif($produk == 'Kulkas'){
            $harga = 3100000;
        }elseif ($produk == 'Mesin Cuci'){
            $harga = 3800000;
        }
        
        echo '<br/>Customer : '.$nama_customer;
        echo '<br/>Produk Pilihan : '.$produk;
        echo '<br/>Jumlah Beli : '.$jumlah;
        echo '<br/>Total Belanja : Rp. '.$harga*$jumlah;
    ?>
</body>
</html>