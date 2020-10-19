<form class="form-horizontal" role="form" method="POST" action="{{ url('/cipher') }}">
    {!! csrf_field() !!}


    <label for="data" class="col-md-4 control-label">Enter Data for encryption</label>

    <div class="col-md-12">
        <input id="data" type="text" class="form-control" name="data">
    </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn" style="background:#2737A6;color:white; font-weight:bold">
                <i class="fa fa-btn fa-ticket"></i> Encrypt
            </button>
        </div>
    </div>
</form>