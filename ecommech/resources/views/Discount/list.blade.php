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
                  {{--  <th scope="col">Catagory</th>  --}}
                  <th scope="col">Photo</th>
                  <th scope="col">Price</th>
                  <th scope="col">Discount</th>
                  <th scope="col">Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($discount as $item)


                <tr>
                  <th scope="row">{{ $loop->index+1 }}</th>
                  <td>{{ $item->name }}</td>
                  {{--  <td>{{ $item->Catagory->name }}</td>  --}}
                  <td>     <img src="{{ asset('dis_pic/'.$item->dis_pic) }}" alt="" style="width: 60px;" > </td>
                  <td>{{ $item->price }}</td>
                  <td>{{ $item->discount }}</td>
                  <td>
                    <a href="{{ url('discount/edit') }}/{{ $item->id }}"> <button class="btn btn-primary">Edit</button></a>
                  <a href="{{ url('discount/delete') }}/{{ $item->id }}"> <button class="btn btn-danger">Delete</button></a>

                  </td>

                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
        </div>
@endsection
