@extends('admin/layouts/app')

@section('content')

    <div class="container">
        <div class="row">
            <table id="table" class="table table-bordered">
                <thead>
                <tr>
                    <th>f</th>
                    <th>f</th>
                    <th>ff</th>
                    <th>ff</th>
                </tr>

                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
<script>
    $(document).ready(function () {
        $('#table').DataTable();
    })
</script>
    @endsection