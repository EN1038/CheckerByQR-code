@extends('layouts.layout_dashboard')
@section('content_dashboard')
    
<div class="container-fluid px-4">
    <div class="row">
        <div class="col">
            <h1 class="my-5">Tables Menu</h1>
        </div>
        <div class="col d-flex justify-content-end">
            <button class="btn btn-primary my-5 rounded-5" data-bs-toggle="modal" data-bs-target="#AddmenuModal"><i class="bi bi-plus-circle me-2"></i>Activities and Subjects</button>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Table : Menu
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name Event</th>
                            <th>Name Make By</th>
                            <th>Class</th>
                            <th>Time</th>
                            <th>Student</th>
                            <th>Action</th>
                            <th>QR-Code</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Name Make By</th>
                            <th>Class</th>
                            <th>Time</th>
                            <th>Student</th>
                            <th>Action</th>
                            <th>QR-Code</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>NumSod</td>
                            <td>Mr.Apple</td>
                            <td>P.E.</td>
                            <td>12:00 PM.</td>
                            <td>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EditmenuModal"><i class="bi bi-pencil-square"></i></button>
                            </td>
                            <td>
                                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#EditmenuModal"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#DropmenuModal"><i class="bi bi-trash3"></i></button>
                            </td>
                            <td>
                                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#EditmenuModal"><i class="bi bi-pencil-square"></i></button>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>

            <!-- modal-add-menu -->
    <div class="modal fade" id="AddmenuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Activities and Subjects</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3 px-5">
                      <label for="exampleInputEmail1" class="form-label">Name Activities and Subjects</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 px-5">
                      <label for="exampleInputPassword1" class="form-label">Make by Name</label>
                      <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 px-5">
                      <label for="exampleInputPassword1" class="form-label">Name Subjects</label>
                      <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 px-5">
                      <label for="exampleInputPassword1" class="form-label">Time stamp</label>
                      <input type="time" class="form-control" id="exampleInputPassword1">
                    </div>
                  </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary "><a href="tables_menu.html" class="link-underline-opacity-0 link-light">Confirm Add</a></button>
            </div>
          </div>
        </div>
      </div>

      <!-- modal-edit-menu -->
      <div class="modal fade" id="EditmenuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Menu</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Edit Name Menu</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Edit Cost (Baht)</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                  </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary "><a href="tables_menu.html" class="link-underline-opacity-0 link-light">Confirm Edit</a></button>
            </div>
          </div>
        </div>
      </div>
      <!-- modal-drop-menu -->
      <div class="modal fade" id="DropmenuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Menu</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h2 class="text-center">CONFIRM DELETE</h2>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary "><a href="tables_menu.html" class="link-underline-opacity-0 link-light">Confirm Delete</a></button>
            </div>
          </div>
        </div>
      </div>
        
@endsection