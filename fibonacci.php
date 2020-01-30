<?php
$before = 0;
$next = 1;

// echo "$before $next";

for ($i=0; $i<10; $i++) {
    $output = $before+$next;
    echo " $output,";

    $before = $next;
    $next = $output;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Fibonacci</title>
</head>
<body>
<?php  error_reporting(null); ?>
    <div class="container">
        <h1>FIBONACCI</h1>
        <form action="" method="post" autocomplete="off">
            <label for="baris" class="col-1">Baris</label>
            <input type="text" name="baris" id="baris" value="<?php echo $_POST['baris']?>" class="col-md-2">
            <br>
            <label for="kolom" class="col-1">Kolom</label>
            <input type="text" name="kolom" id="kolom" value="<?php echo $_POST['kolom']?>" class="col-md-2">
            <!-- <input type="hidden" name="aksi" value="gen"> -->
            <br><br>
            <button type="submit" class="btn btn-primary col-md-4">Submit</button>
        </form>
    </div>
    <?php
        // if($_POST['aksi']=='gen'){
            $sebelum=0;
            $sekarang=1;
        // }
    ?>
    <table>
        <th>
            <tr>
                <td></td>
            </tr>
        </th>
    </table>
    <h3>Hasil fibonacci</h3>
    <?php
        for($i=0;$i<$_POST['baris'];$i++){
            for($j=0;$j<$_POST['kolom'];$j++);{
                if($i==0 && $j==0){
                    $j+=2;
                } else {
                    $hasil = $sekarang + $sebelum;
                    echo "$hasil, ";
                    $sebelum = $sekarang;
                    $sekarang = $hasil;
                }
            }
        }
    ?>
</body>
</html>