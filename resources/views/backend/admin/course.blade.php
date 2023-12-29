@extends('backend.admin.theme.main')
@section('main')
<div class="container-fluid">
<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        @if (session('success'))
          <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Success!</strong> {{session('success')}}
          </div>
          @endif
        <h5 class="card-title fw-semibold mb-4">আপডেট কোর্স</h5>
        <div class="card mb-0">
          <div class="card-body p-4">
            @if ($course != null)
            <form action="../../admin/courses/{{ $course->id }}" method="post">
                @csrf
                <div class="mb-3">
                  <label for="" class="form-label">Subject Headings</label>
                  <input type="text" name="name" value="{{ $course->name }}" value id="" class="form-control" placeholder="" aria-describedby="helpId" />
                  <small id="helpId" class="text-muted text-danger"><span class="text-danger">@error('name') {{ $message }} @enderror</span></small>
                </div>
    
                <div class="mb-3">
                  <label for="" class="form-label">Subject</label>
                  <select class="form-select form-select" name="ssubject" id="">
                    @foreach ($subjects as $subject)
                      <option value="{{ $subject->id }}" {{ ($subject->id == $course->ssubject) ? 'selected' : '' }}>{{ $subject->name }}</option>
                    @endforeach
                  </select>
                  <small id="helpId" class="text-muted">Select the preferable subject</small>
                </div>
                
                <div class="mb-3">
                  <label for="" class="form-label">Admission Fee</label>
                  <input type="number" name="admission" value="{{ $course->admission }}" id="" class="form-control" placeholder="" aria-describedby="helpId" />
                  <small id="helpId" class="text-muted text-danger"><span class="text-danger">@error('admission') {{ $message }} @enderror</span></small>
                </div>
    
                
                  <div class="row">
                    <div class="col-6">
                      <div class="mb-3">
                      <label for="" class="form-label">Tution Fee</label>
                      <input type="number" name="tution" value="{{ $course->tution }}" id="" class="form-control" placeholder="" aria-describedby="helpId" />
                      <small id="helpId" class="text-muted text-danger"><span class="text-danger">@error('tution') {{ $message }} @enderror</span></small>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="mb-3">
                    <label for="" class="form-label">Months</label>
                  <input type="number" name="month" value="{{ $course->month }}" id="" class="form-control" placeholder="" aria-describedby="helpId" />
                  <small id="helpId" class="text-muted text-danger"><span class="text-danger">@error('month') {{ $message }} @enderror</span></small>
                  </div>
                </div>
                  </div>
    
                  <div class="row">
                    <div class="col-6">
                      <div class="mb-3">
                      <label for="" class="form-label">Semester Fee</label>
                      <input type="number" name="semester" value="{{ $course->semester }}" id="" class="form-control" placeholder="" aria-describedby="helpId" />
                      <small id="helpId" class="text-muted text-danger"><span class="text-danger">@error('semester') {{ $message }} @enderror</span></small>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="mb-3">
                    <label for="" class="form-label">No of Semester</label>
                  <input type="number" name="count" value="{{ $course->count }}" id="" class="form-control" placeholder="" aria-describedby="helpId" />
                  <small id="helpId" class="text-muted text-danger"><span class="text-danger">@error('count') {{ $message }} @enderror</span></small>
                  </div>
                </div>
                  </div>
    
                  <div class="row">
                    <div class="col-6">
                      <div class="mb-3">
                      <label for="" class="form-label">Formflap Fee</label>
                      <input type="number" name="formflap" value="{{ $course->formflap }}" id="" class="form-control" placeholder="" aria-describedby="helpId" />
                      <small id="helpId" class="text-muted text-danger"><span class="text-danger">@error('formflap') {{ $message }} @enderror</span></small>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="mb-3">
                    <label for="" class="form-label">Lab Fee</label>
                  <input type="number" name="labfee" value="{{ $course->labfee }}" id="" class="form-control" placeholder="" aria-describedby="helpId" />
                  <small id="helpId" class="text-muted text-danger"><span class="text-danger">@error('labfee') {{ $message }} @enderror</span></small>
                  </div>
                </div>
                  </div>
                  <button type="submit" class="btn btn-primary"> Submit </button>
                  
              </form>
            @else
                <p class="text-center text-danger">Course Data not Found</p>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
@endsection