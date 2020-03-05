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
<div class="container-fluid">
    <h3 align="center">M3 TODO Application</h3><br />

    @if(isset(Auth::user()->username))
        <div class="alert alert-success">
            <strong>Welcome {{ Auth::user()->username }}</strong>
            <br />
        </div>
        <!-- Small modal -->
        <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Logout</button>

        <span><a href="{{ url('/create') }}"><button class="btn btn-primary">Add TODO Item</button></a></span>

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
                    <th></th>
                    <th>Item</th>
                    <th>Date Require</th>
                    <th>Date Added</th>
                    <th>Priority</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Last Login Date</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>$320,800</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>$170,750</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>$86,000</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>$433,060</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>
                    <td>$162,700</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>$372,000</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Herrod Chandler</td>
                    <td>Sales Assistant</td>
                    <td>San Francisco</td>
                    <td>59</td>
                    <td>$137,500</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Rhona Davidson</td>
                    <td>Integration Specialist</td>
                    <td>Tokyo</td>
                    <td>55</td>
                    <td>$327,900</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Colleen Hurst</td>
                    <td>Javascript Developer</td>
                    <td>San Francisco</td>
                    <td>39</td>
                    <td>$205,500</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Sonya Frost</td>
                    <td>Software Engineer</td>
                    <td>Edinburgh</td>
                    <td>23</td>
                    <td>$103,600</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jena Gaines</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>30</td>
                    <td>$90,560</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Quinn Flynn</td>
                    <td>Support Lead</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>$342,000</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Charde Marshall</td>
                    <td>Regional Director</td>
                    <td>San Francisco</td>
                    <td>36</td>
                    <td>$470,600</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Haley Kennedy</td>
                    <td>Senior Marketing Designer</td>
                    <td>London</td>
                    <td>43</td>
                    <td>$313,500</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Tatyana Fitzpatrick</td>
                    <td>Regional Director</td>
                    <td>London</td>
                    <td>19</td>
                    <td>$385,750</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Michael Silva</td>
                    <td>Marketing Designer</td>
                    <td>London</td>
                    <td>66</td>
                    <td>$198,500</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Paul Byrd</td>
                    <td>Chief Financial Officer (CFO)</td>
                    <td>New York</td>
                    <td>64</td>
                    <td>$725,000</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Gloria Little</td>
                    <td>Systems Administrator</td>
                    <td>New York</td>
                    <td>59</td>
                    <td>$237,500</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Bradley Greer</td>
                    <td>Software Engineer</td>
                    <td>London</td>
                    <td>41</td>
                    <td>$132,000</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Dai Rios</td>
                    <td>Personnel Lead</td>
                    <td>Edinburgh</td>
                    <td>35</td>
                    <td>$217,500</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jenette Caldwell</td>
                    <td>Development Lead</td>
                    <td>New York</td>
                    <td>30</td>
                    <td>$345,000</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Yuri Berry</td>
                    <td>Chief Marketing Officer (CMO)</td>
                    <td>New York</td>
                    <td>40</td>
                    <td>$675,000</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Caesar Vance</td>
                    <td>Pre-Sales Support</td>
                    <td>New York</td>
                    <td>21</td>
                    <td>$106,450</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Doris Wilder</td>
                    <td>Sales Assistant</td>
                    <td>Sydney</td>
                    <td>23</td>
                    <td>$85,600</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Angelica Ramos</td>
                    <td>Chief Executive Officer (CEO)</td>
                    <td>London</td>
                    <td>47</td>
                    <td>$1,200,000</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Gavin Joyce</td>
                    <td>Developer</td>
                    <td>Edinburgh</td>
                    <td>42</td>
                    <td>$92,575</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jennifer Chang</td>
                    <td>Regional Director</td>
                    <td>Singapore</td>
                    <td>28</td>
                    <td>$357,650</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Brenden Wagner</td>
                    <td>Software Engineer</td>
                    <td>San Francisco</td>
                    <td>28</td>
                    <td>$206,850</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Fiona Green</td>
                    <td>Chief Operating Officer (COO)</td>
                    <td>San Francisco</td>
                    <td>48</td>
                    <td>$850,000</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Shou Itou</td>
                    <td>Regional Marketing</td>
                    <td>Tokyo</td>
                    <td>20</td>
                    <td>$163,000</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Michelle House</td>
                    <td>Integration Specialist</td>
                    <td>Sydney</td>
                    <td>37</td>
                    <td>$95,400</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Suki Burks</td>
                    <td>Developer</td>
                    <td>London</td>
                    <td>53</td>
                    <td>$114,500</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Prescott Bartlett</td>
                    <td>Technical Author</td>
                    <td>London</td>
                    <td>27</td>
                    <td>$145,000</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Gavin Cortez</td>
                    <td>Team Leader</td>
                    <td>San Francisco</td>
                    <td>22</td>
                    <td>$235,500</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Martena Mccray</td>
                    <td>Post-Sales support</td>
                    <td>Edinburgh</td>
                    <td>46</td>
                    <td>$324,050</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Unity Butler</td>
                    <td>Marketing Designer</td>
                    <td>San Francisco</td>
                    <td>47</td>
                    <td>$85,675</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Howard Hatfield</td>
                    <td>Office Manager</td>
                    <td>San Francisco</td>
                    <td>51</td>
                    <td>$164,500</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Hope Fuentes</td>
                    <td>Secretary</td>
                    <td>San Francisco</td>
                    <td>41</td>
                    <td>$109,850</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Vivian Harrell</td>
                    <td>Financial Controller</td>
                    <td>San Francisco</td>
                    <td>62</td>
                    <td>$452,500</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Timothy Mooney</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>37</td>
                    <td>$136,200</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jackson Bradshaw</td>
                    <td>Director</td>
                    <td>New York</td>
                    <td>65</td>
                    <td>$645,750</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Olivia Liang</td>
                    <td>Support Engineer</td>
                    <td>Singapore</td>
                    <td>64</td>
                    <td>$234,500</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Bruno Nash</td>
                    <td>Software Engineer</td>
                    <td>London</td>
                    <td>38</td>
                    <td>$163,500</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Sakura Yamamoto</td>
                    <td>Support Engineer</td>
                    <td>Tokyo</td>
                    <td>37</td>
                    <td>$139,575</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Thor Walton</td>
                    <td>Developer</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>$98,540</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Finn Camacho</td>
                    <td>Support Engineer</td>
                    <td>San Francisco</td>
                    <td>47</td>
                    <td>$87,500</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Serge Baldwin</td>
                    <td>Data Coordinator</td>
                    <td>Singapore</td>
                    <td>64</td>
                    <td>$138,575</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Zenaida Frank</td>
                    <td>Software Engineer</td>
                    <td>New York</td>
                    <td>63</td>
                    <td>$125,250</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Zorita Serrano</td>
                    <td>Software Engineer</td>
                    <td>San Francisco</td>
                    <td>56</td>
                    <td>$115,000</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jennifer Acosta</td>
                    <td>Junior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>43</td>
                    <td>$75,650</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Cara Stevens</td>
                    <td>Sales Assistant</td>
                    <td>New York</td>
                    <td>46</td>
                    <td>$145,600</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Hermione Butler</td>
                    <td>Regional Director</td>
                    <td>London</td>
                    <td>47</td>
                    <td>$356,250</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Lael Greer</td>
                    <td>Systems Administrator</td>
                    <td>London</td>
                    <td>21</td>
                    <td>$103,500</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jonas Alexander</td>
                    <td>Developer</td>
                    <td>San Francisco</td>
                    <td>30</td>
                    <td>$86,500</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Shad Decker</td>
                    <td>Regional Director</td>
                    <td>Edinburgh</td>
                    <td>51</td>
                    <td>$183,000</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Michael Bruce</td>
                    <td>Javascript Developer</td>
                    <td>Singapore</td>
                    <td>29</td>
                    <td>$183,000</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Donna Snider</td>
                    <td>Customer Support</td>
                    <td>New York</td>
                    <td>27</td>
                    <td>$112,000</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Salary</th>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
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
    $('#example').DataTable( {
    columnDefs: [ {
    orderable: false,
    className: 'select-checkbox',
    targets:   0
    } ],
    select: {
    style:    'os',
    selector: 'td:first-child'
    },
    order: [[ 1, 'asc' ]]
    } );
    } );
</script>
</body>
</html>
