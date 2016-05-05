<div class="modal fade" id="konfirmasi_logout" role="dialog" tabIndex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
            ×
          </button>
          <h4 class="modal-title">Konfirmasi Logout</h4>
        </div>
        <div class="modal-body">
          <p class="lead">
            <i class="fa fa-question-circle fa-lg"></i>  
            Apakah Anda yakin ingin keluar ?
          </p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default"
                    data-dismiss="modal">Batal</button>
            <a href="{{ url('logout') }}"><button type="submit" class="btn btn-danger" id="konfirmasi">
              <i class="fa fa-times-circle"></i> Ya
            </button></a>
        
        </div>
      </div>
    </div>
  </div>