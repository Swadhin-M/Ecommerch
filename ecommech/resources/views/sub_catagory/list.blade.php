@extends('Admin_dasboard.layouts.master')
@section('content')
<section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Default Table</h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Catagory</th>
                  <th scope="col">Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($Subcatagory as $item)


                <tr>
                  <th scope="row">{{ $loop->index+1 }}</th>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->catagory->name }}</td>
                  <td>
                    <a href="{{ url('subcatagory/edit') }}/{{ $item->id }}"> <button class="btn btn-primary">Edit</button></a>
                  <a href="{{ url('subcatagory/delete') }}/{{ $item->id }}"> <button class="btn btn-danger">Delete</button></a>

                  </td>

                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
        </div>
@endsection
