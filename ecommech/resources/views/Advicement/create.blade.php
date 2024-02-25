@extends('Admin_dasboard.layouts.master')
@section('content')

<section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">General Form Elements</h5>

            <!-- General Form Elements -->
            <form action="{{ url('/heading/store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Advice-back-Photo</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="file" id="formFile" name="image">
                    </div>
                  </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Heading</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="head">
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name">
                </div>
              </div>


              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="price">
                </div>
              </div>












              <div class="row mb-3">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Submit Form</button>
                </div>
              </div>

            </form><!-- End General Form Elements -->

          </div>
        </div>

      </div>
      @endsection
