<div class="box">
    <form action="{{ URL::to('/register') }}" method="POST">
        <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
        <div class="box-header">
            <h3 class="box-title">Register a new domain</h3>
        </div>
        <div class="box-body">

<div class="row">
    <div class="col-xs-6">
        <input type="text" name="domain" class="form-control" placeholder="Domain Name">
    </div>
    <div class="col-xs-4">
        <select name="tld_id" class="form-control">
@foreach(TLD::only_public() as $tld)
    
            <option value="{{ $tld->id }}">. {{ $tld->tld }}</option>
@endforeach
        </select>
    </div>
    <div class="col-xs-2">
        <button type="submit" class="btn btn-warning">Register Domain</button>
    </div>
</div>


        </div><!-- /.box-body -->
        <div class="box-footer">
            New domains must comply with the <a href="#">new domain registration charter</a>
        </div><!-- /.box-footer-->
    </form>
</div>
