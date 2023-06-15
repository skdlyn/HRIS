@extends('layout.body')
@section('title', 'KPI Group Data')
@section('page-title', 'KPI Group Data')
@section('content')


    <section class="group_data">
        <div class="content">
            <a href="/score-data" class="btn btn-info text-white mb-3">Add Data</a>
            <div class="card text-left">
                <div class="card-body">
                    <div class="d-flex flex-row align-items-center my-3">
                        <p class="p-0 m-0 text-muted">Show</p>
                        <select class="form-select mx-2" name="" id="" style="width: 70px">
                            <option value="">10</option> Entries
                            <option value="">10</option> Entries
                            <option value="">10</option> Entries
                            <option value="">10</option> Entries
                        </select>
                        <p class="p-0 m-0 text-muted">Entries</p>
                    </div>
                    <div class="content">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="bg-light">KPI Group Name</th>
                                    <th class="bg-light">FOR DIVISION</th>
                                    <th class="bg-light">FOR POSITION</th>
                                    <th class="bg-light">DESCRIPTION</th>
                                    <th class="bg-light">IS ACTIVE</th>
                                    <th class="bg-light">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Search KPI Group..."
                                            name="" id="">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Search for Division..."
                                            name="" id="">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Search for Position..."
                                            name="" id="">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Search Description..."
                                            name="" id="">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Search is Active"
                                            name="" id="">
                                    </td>
                                </tr>
                                <tr class="text-center" style="vertical-align: middle; ">
                                    <td class="fw-bold">General KPI</td>
                                    <td>- Semua Devisi -</td>
                                    <td>- Semua Jabatan -</td>
                                    <td></td>
                                    <td>
                                        <div class="form-check form-switch"style="width: 0px">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckDefault" style="height: 30px; width: 70px">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <a href="" class="btn btn-success mb-4"><i
                                                    class="fa-solid fa-pen-to-square me-2"></i>Edit</a>
                                            <a href="" class="btn btn-danger"><i
                                                    class="fa-solid fa-trash me-2"></i>Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="text-center" style="vertical-align: middle; ">
                                    <td class="fw-bold">Computer Skill KPI</td>
                                    <td>Information Technology</td>
                                    <td>- Semua Jabatan -</td>
                                    <td></td>
                                    <td>
                                        <div class="form-check form-switch"style="width: 0px">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckDefault" style="height: 30px; width: 70px">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <a href="" class="btn btn-success mb-4"><i
                                                    class="fa-solid fa-pen-to-square me-2"></i>Edit</a>
                                            <a href="" class="btn btn-danger"><i
                                                    class="fa-solid fa-trash me-2"></i>Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="text-center" style="vertical-align: middle; ">
                                    <td class="fw-bold">Communication KPI</td>
                                    <td>Marketing</td>
                                    <td>- Semua Jabatan -</td>
                                    <td>KPI Khusus untuk divisi marketing</td>
                                    <td>
                                        <div class="form-check form-switch"style="width: 0px">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckDefault" style="height: 30px; width: 70px">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <a href="" class="btn btn-success mb-4"><i
                                                    class="fa-solid fa-pen-to-square me-2"></i>Edit</a>
                                            <a href="" class="btn btn-danger"><i
                                                    class="fa-solid fa-trash me-2"></i>Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex flex-row justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                  <span aria-hidden="true">&laquo;</span>
                                </a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                  <span aria-hidden="true">&raquo;</span>
                                </a>
                              </li>
                            </ul>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
