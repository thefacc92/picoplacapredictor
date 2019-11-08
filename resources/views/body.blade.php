<div class="container">
    <div class="content">
        <div class="panel panel-default">.
            <div class="row text-center">
                <img src="../img/hoynocircula.jpg" class="img-fluid" alt="Responsive image" width="50%">
            </div>
            <div class="panel-body">
                <div class="col-md-8 col-md-offset-2">
                    <form action="/Find" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6 col-md-4">
                                    <label for="date">License Plate: </label>
                                    <div class='input-group'>
                                        <input type='text' class="form-control" name="licensePlate" oninput="this.value = this.value.toUpperCase()"
                                        />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-modal-window"></span>
                                        </span>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-lg-6 col-md-4">
                                <label for="date">Date: </label>
                                    <div class='input-group date' id='datetimepicker3'>
                                        <input type='text' class="form-control" name="date"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-4">
                                <label for="date">Time: </label>
                                    <div class='input-group date' id='datetimepicker2'>
                                        <input type='text' class="form-control" name="time"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-time"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default btn-primary">Am i available?</button>
                    </form>
                    <br>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            @if(Session::has('success'))
                                @include('message', ['type'=> 'success', 'message' => Session::get('success')])
                            @endif
                            @if(Session::has('error'))
                                @include('message', ['type'=> 'error', 'message' => Session::get('error')])
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>