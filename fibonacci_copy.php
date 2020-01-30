<?php  error_reporting(null); ?>
<form action="" method="POST" autocomplete="off">
rows<br>
<input type="text" value="<?php echo $_POST['rows'] ?>"  name="rows"><br/>

columns<br>
<input type="text" value="<?php echo $_POST['columns'] ?>" name="columns">
<input type="hidden" name="aksi" value="gen">
<br/><br/>
<input type="submit" value="Submit">
</form>

<?php 
if($_POST['aksi']=="gen"){

  $first=0;
  $second=1;
?>    
<table border=1>
<?php
  for ($i=0; $i<$_POST['rows']; $i++) {
?>
  <tr>
<?PHP 
    for ($y=0; $y<=$_POST['columns'] || $y<=$_POST['columns']; $y++) {

      /* first two should be 0 and 1*/
      if($y < 2 && $i == 0) { 
?>
    <td>0</td>
    <td>1</td>
<?php 
        $y += 2;
      } else {

        $third = $second + $first;
?>
    <td><?php echo($third); ?></td>
<?php 

        $first = $second;
        $second = $third;
      }
    }
?>
  </tr>
<?php
  }
}
?>
</table>