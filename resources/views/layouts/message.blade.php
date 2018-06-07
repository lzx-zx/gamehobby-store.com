@if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show col-md-12">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ Session::get('success') }}</strong>
    </div>
@endif

@if(Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade show col-md-12">
        <button type="button" class="close" data-dismiss="alert"><span class="fa fa-times"></span></button>
        <p>{{ Session::get('error') }}</p>
    </div>
@endif

@if(Session::has('warning'))
    <div class="alert alert-warning alert-dismissible fade show col-md-12">
        <button type="button" class="close" data-dismiss="alert"><span class="fa fa-times"></span></button>
        <p>{{ Session::get('warning') }}</p>
    </div>
@endif

@if(Session::has('info'))
    <div class="alert alert-info alert-dismissible fade show col-md-12">
        <button type="button" class="close" data-dismiss="alert"><span class="fa fa-times"></span></button>
        <p>{{ Session::get('info') }}</p>
    </div>
@endif

<script>
    $('div.alert').delay(2500).slideUp(300);
</script>