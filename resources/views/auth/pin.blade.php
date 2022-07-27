@extends('layouts.masterpin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">PIN</div>

                <div class="card-body">
                    <form method="POST" action="/pincheck">
                        @csrf
                        @method('put')
                  

                        <div class=" mb-3">
                        
                            <style>
                                input { width: 20px; margin: 5px; border-top:none; border-left:none; border-right:none; text-align:center;  }
                            </style>
                            <div class="" style="">
                                <input id="pin1" type="text" class="inputs " name="pin1" maxlength="1">
                           
                                <input id="pin2" type="text" class="inputs  " name="pin2" maxlength="1" >
                           
                                <input id="pin3" type="text" class="inputs  " name="pin3" maxlength="1" >
                           
                                <input id="pin4" type="text" class="inputs  " name="pin4" maxlength="1" >
                           
                                <input id="pin5" type="text" class="inputs  " name="pin5" maxlength="1" >
                            </div>
                        </div>

                       

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4 ">
                                <button type="submit" class="btn btn-primary ">
                                  submit
                                </button>

                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('Script')
<script>
    $(".inputs").keyup(function () {
    if (this.value.length == 1) {
      $(this).next('.inputs').focus();
    }
});
</script>
    
@endsection
