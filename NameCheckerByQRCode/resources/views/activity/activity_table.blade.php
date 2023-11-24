@extends('layouts.layout_dashboardmodren')
@section('content_body')

<div class="d-flex flex-column">
    <div class="col">
        <h2>Table</h2>
    </div>
    <div class="col">
        <div class="card m-3">
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><button class="btn btn-success p-1">Edits</button></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td><button class="btn btn-success p-1">Edits</button></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>

@endsection