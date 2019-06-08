<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-data__tool">
                    <div class="table-data__tool-left ">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="start"> Start date </label>
                                    <input type="date" class="form-control" id="start" name="start" >
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="end"> End date </label>
                                    <input type="date" class="form-control" id="end" name="end" >
                                </div>
                                <div class="col-md-6 mb-3">
                                    <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="#" id="submitFilter">
                                        Filter
                                    </a>
                                </div>
                            </div>
                    </div>
                </div>
                <div id="tabelaActions" class="table-responsive table-responsive-data2">
                    <table  class="table table-data2">
                        <thead>
                        <tr>
                            <th>User</th>
                            <th>Email</th>
                            <th>Action</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($actions as $a)
                            <tr class="tr-shadow">
                                <td>{{$a->full_name}}</td>
                                <td>{{$a->email}}</td>
                                <td>{{$a->action}}</td>
                                <td>{{date('m/d/Y', $a->date)}}</td>
                            </tr>
                            <tr class="spacer"></tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>