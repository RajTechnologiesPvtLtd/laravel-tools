@extends('Tool::layouts.app')
@section('title', 'HTTP - Status Codes')
@section('content')
<div class="text-center">
    <h3>HTTP - Status Codes</h3>
</div>

<table id="routetable" class="table table-striped table-bordered nowrap" style="width:100%">
    <thead>
        <tr>
            <th scope="col">HTTP Status Code</th>
            <th scope="col">Name</th>
            <th scope="col">Code</th>
            <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Collection as $data)
        @php
        //dd($data);
        @endphp
        <tr>
            <td>{{$data['status_code']}}</td>
            <td>{{$data['name']}}</td>
            <td>{{$data['code']}}</td>
            <td>{{$data['description']}}</td>
        </tr>

        @endforeach
    </tbody>
</table>
@endsection
@section('script-footer')
<script>
    $(document).ready(function() {
        $('#routetable').DataTable({
            "order": [
                [0, "asc"]
            ]
        });
    });
</script>
@endsection