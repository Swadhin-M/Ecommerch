@extends('Admin_dasboard.layouts.master')
@section('content')

<section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Catagory-create</h5>

            <!-- General Form Elements -->
            <form action="{{ $url }}" method="post">

                @csrf

              <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Name:</label>
                <div class="col-sm-10">
                  <textarea name="name" class="form-control" style="height: 100px">{{ $Subcatagory->name }}</textarea>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Catagory Select</label>
                <div class="col-sm-10">
                  <select class="form-select" name="catagory_id">
                    <option value="" hidden>Catagorys</option>
                    @foreach ($catagory as $item)


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

            </form>

          </div>
        </div>

      </div>
      @endsection
