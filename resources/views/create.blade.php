
<!DOCTYPE html>
<html>
<head>
    <title>M3 TODO Application</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .box{
            width:600px;
            margin:0 auto;
            border:1px solid #ccc;
        }
    </style>
</head>
<body>
<br />
<div class="container box">
    <h3 align="center">M3 TODO Application</h3><br />
    @if(isset(Auth::user()->id))
        <!-- Small modal -->
            <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Logout</button>

            <span><a href="{{ url('/home') }}"><button class="btn btn-primary">Go To Home</button></a></span>

            <div class="modal bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header"><h4>Logout <i class="fa fa-lock"></i></h4></div>
                        <div class="modal-body"><i class="fa fa-question-circle"></i> Are you sure you want to log-off?</div>
                        <div class="modal-footer"><a href="{{ url('logout') }}" class="btn btn-primary btn-block">Logout</a></div>
                    </div>
                </div>
            </div>

         <div>
             <br/>
            <form method="post" action="{{ url('add_todo') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="item">Enter Item</label>
                <textarea class="form-control" name="item" id="item" rows="5" ></textarea>
            </div>
            <div class="form-group">
                <label>Enter Date Required</label>
                <input type="date" name="date_required" class="form-control"  required/>
            </div>
            <div class="form-group">
                <label>Enter Date Required</label>
                <select class="form-control" id="priority" name="priority"  required>
                    <option>Low</option>
                    <option>Medium</option>
                    <option>High</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" name="login" class="btn btn-primary" value="Add TODO Item" />
            </div>
        </form>
     </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
</body>
</html>
