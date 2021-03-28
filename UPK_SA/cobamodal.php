<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Bootstrap Labz</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>

  <body>
    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
      Click Me
    </button>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>

          <div class="modal-body">
            Assalamualaikum, brad!
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>