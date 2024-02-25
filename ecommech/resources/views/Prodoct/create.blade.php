@extends('Admin_dasboard.layouts.master')
@section('content')

<section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">General Form Elements</h5>

            <!-- General Form Elements -->
            <form action="{{ url('/prodoct/store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Prodouct Photo</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="file" id="formFile" name="photo">
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
                <label for="inputPassword" class="col-sm-2 col-form-label">Discription</label>
                <div class="col-sm-10">
                  <textarea class="form-control" style="height: 100px" name="discription"></textarea>
                </div>
              </div>





              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Sub Catagory</label>
                <div class="col-sm-10">
                  <select class="form-select" aria-label="Default select example" name="subcatagory_id">
                    <option selected hidden>Open this select menu</option>
                    @foreach ($subcatagory as $item)


                    <option value="{{ $item->id }}">{{ $item->name }}</option>

                    @endforeach

                  </select>
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
