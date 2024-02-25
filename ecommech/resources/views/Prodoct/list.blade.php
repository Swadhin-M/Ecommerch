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
                  <th scope="col">Sub-Catagory</th>
                  <th scope="col">Photo</th>
                  <th scope="col">Price</th>
                  <th scope="col">Discription</th>
                  <th scope="col">Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($prodoct as $item)


                <tr>
                  <th scope="row">{{ $loop->index+1 }}</th>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->subcatagory->name }}</td>
                  <td>     <img src="{{ asset('photo/'.$item->photo) }}" alt="" style="width: 60px;" > </td>
                  <td>{{ $item->price }}</td>
                  <td>{{ $item->discription }}</td>
                  <td>
                    <a href="{{ url('prodoct/edit') }}/{{ $item->id }}"> <button class="btn btn-primary">Edit</button></a>
                  <a href="{{ url('prodoct/delete') }}/{{ $item->id }}"> <button class="btn btn-danger">Delete</button></a>

                  </td>

                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
        </div>
@endsection
