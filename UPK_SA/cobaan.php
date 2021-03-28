<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="asset/css/bootstrap-theme.min.css">
<script src="asset/js/bootstrap.min.js"></script>
 <script src="asset/js/jquery-1.5.2.js" type="text/javascript"></script>
<script> $(document).ready(function() {
            var count = 0;
            $("#btn_plg").click(function(){
                    count += 1;
                $('#pelanggan').append(
      '<tr class="records" valign="top">'
    + '<td><select class="form-control" id="status_' + count + '" name="status_' + count + '"> <option value ="-">PILIH STATUS</option><option value="tetap" >Tetap</option><option value="tidak" >Tidak Tetap</option></select></td>'
    + '<td><input class="form-control" id="nama_' + count + '" name="nama_' + count + '" type="nama" placeholder="Nama Pelanggan"></td>'
+ '<td><input class="form-control" id="alamat_' + count + '" name="alamat_' + count + '" type="text" placeholder="Alamat Pelanggan"></td>'
    + '<td><button name="hapus_trayek" id="hapus_trayek" type="button" class="remove_item btn btn-danger">Hapus</button>'
    + '<input id="pel_' + count + '" name="pel[]" value="'+ count +'" type="hidden"></td><tr/>'
                    );
                });
                $(".remove_item").live('click', function (ev) {
                if (ev.type == 'click') {
                $(this).parents(".records").fadeOut();
                        $(this).parents(".records").remove();
            }
            });
   
        });
</script>
</head>

<body>

<div class="container">
<form action="#" method="post" class="form-horizontal">
             <div class="row-fluid">
<div class="span12">
<div class="widget-box">
<div class="widget-title">
<span class="icon">
<i class="icon-align-justify"></i> </span>
<h5>DATA PELANGGAN</h5>
</div>
</div>
<div class="row-fluid">
<div class="span12">
<div class="widget-box">
<div class="field">
  </fieldset>
<div class="field" align="right">
      <button name="btn_plg" id="btn_plg" class="btn btn-primary" type="button">Masukan Data Pelanggan</button>
</div>
<fieldset style="width:97%; margin-left:15px;">
        <table style="width: 98%; height: 67px;">
            <tbody>
            <tr>
            </tr>
            </tbody>
            <tbody class="field" id="pelanggan">
     </tbody>
        </table>
</fieldset>
</div> </div>
</div>
</div>
<div class="form-actions">
<button type="submit" name="submit" class="btn btn-primary">SIMPAN</button>
</div>
</form>
</div></div>
</br>
</body>
</html>
