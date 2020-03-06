<!DOCTYPE html>
<html>
<head>
    <title>M3 TODO Application</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css" />
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <style type="text/css">
    .row_selected{background-color: #ff7f7f  !important; z-index:9999}
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<br />
<div class="container-fluid">

    <h3>M3 TODO Application</h3><br />

    @if(isset(Auth::user()->id))
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @else
            <div class="alert alert-primary"">
                <strong>Welcome {{ Auth::user()->username }}</strong>
                <br />
            </div>
        @endif

        <!-- Small modal -->
        <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Logout</button>

        <span><a href="{{ url('/create') }}"><button class="btn btn-primary">Add TODO Item</button></a></span>

        <button id="delete" class="btn btn-primary">Delete Item(s)</button>

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
            <br />
            <table id="example" class="display" style="width:100%">
                <thead>
                <tr>
                    <th>Item ID</th>
                    <th>Item</th>
                    <th>Date Require</th>
                    <th>Date Added</th>
                    <th>Priority</th>
                    <th>Username</th>
                    <th>Last Login Date</th>
                </tr>
                </thead>
                <tbody>
                @if (isset($items))
                    @foreach($users as $user)
                        @foreach($items as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->item}}</td>
                                <td>{{$item->date_required}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->priority}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->last_login_date}}</td>
                            </tr>
                         @endforeach
                    @endforeach
                @else
                    Sorry You have no items to display
                @endif
                </tbody>
                <tfoot>
                <tr>
                    <th>Item</th>
                    <th>Date Require</th>
                    <th>Date Added</th>
                    <th>Priority</th>
                    <th>Username</th>
                    <th>Last Login Date</th>
                </tr>
                </tfoot>
            </table>
        </div>
    @else
        <script>window.location = "home";</script>
    @endif

    <br />
</div>

<script>

    $(document).ready(function() {
       let itemTable =  $('#example').DataTable( {
            columnDefs: [ {
                orderable: false,
                className: 'select-checkbox',
                targets:   0
            } ],
            select: {
                style: 'multi',
                selector: 'td:first-child'
            },
            order: [[ 1, 'asc' ]]
        } );


        $('#delete').click( function () {
            let r = confirm("Are you sure you want to delete the selected TODO items?");
            if (r === true) {
                let array = [];
                let oData = itemTable.rows('.selected').data();
                for (let i=0; i < oData.length ;i++){
                    array.push(oData[i][0]);
                }
                let item_data = JSON.stringify(array);
                axios.post('delete_todo',{item_data}).then(res => {
                    console.log(res.data);
                    if (res.data === "deleted"){
                        alert("Data Deleted");
                        location.reload();
                    }
                });
            } else {
               return false;
            }
        } );
    } );

</script>
</body>
</html>
