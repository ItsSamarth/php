

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>


<h5 class="pilih-bulan">Month Choose
     <select id="monthChoose" name="month">
          <option value="0">Pilih bulan</option>
          <option value="Januari">Januari</option>
          <option value="Februari">Februari</option>
          <option value="Maret">Maret</option>
          <option value="April">April</option>
          <option value="Mei">Mei</option>
          <option value="Juni">Juni</option>
          <option value="Juli">Juli</option>
          <option value="Agustus">Agustus</option>
          <option value="September">September</option>
          <option value="Oktober">Oktober</option>
          <option value="November">November</option>
          <option value="Desember">Desember</option>
     </select>
     <button id="button-search-ohr" type="submit">Search</button>
</h5>    

<div id="month">
     <?php 
     if(isset($_POST['month'])) {
          $month = $_POST['month'];
          echo 'This is '.$month;
     }else {
          $month = null;
          echo 'Nothing';
     }?>
</div>




<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script type="text/javascript">
  $(document).ready(function () {


 });


function tester() {
    var id = document.getElementsByClassName("test");
if (id.length > 0) {
    alert (id[0].value);
}
}
</script>
</body>
</html>

<script type="text/javascript">
  $('#button-search-ohr').on('click', function() {
    var month = $('#monthChoose').val();

    if(month == 0) {
        alert('Month must be choosen!');
    }

    $.ajax({
        async   : true,
        type    : 'POST',
        url     : 'http://localhost/practice/test/test2.php', 
        data    : {month:month},
        success : function(data) {
            $('#month').html(data);
        }
    });
});
</script>