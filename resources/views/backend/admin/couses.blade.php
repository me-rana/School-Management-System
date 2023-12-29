@extends('backend.admin.theme.main')
@section('main')

 <!--  Content Begin Here -->
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
          <h5 class="card-title fw-semibold mb-4">কোর্সসমূহ</h5>
          <div class="card mb-0">
            <div class="card-body p-4">
              <div
                class="table-responsive"
              >
                <table
                  class="table table-white"
                >
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">সাবজেক্ট হেডিং</th>
                      <th scope="col">সাবজেক্ট</th>
                      <th scope="col">এডমিশন</th>
                      <th scope="col">টিঊশন (মাস)</th>
                      <th scope="col">সেমিস্টার (গণনা)</th>
                      <th scope="col">ফর্মফ্লাপ (গণনা)</th>
                      <th scope="col">ল্যাব ফি (গণনা)</th>
                      <th scope="col">সর্বমোট</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if ($courses->count() > 0)
                        @foreach ($courses as $key=>$course)
                            <tr>
                              <td>{{ $key+1 }}</td>
                              <td>{{ $course->name }}</td>
                              <td>{{ $course->getSubject->name }}</td>
                              <td>{{ $course->admission." টাকা" }}</td>
                              <td>{{ $course->tution." টাকা (".$course->month." মাস)" }}</td>
                              <td>{{ $course->semester." টাকা (".$course->count." সেমিস্টার)" }}</td>
                              <td>{{ $course->formflap." টাকা (".$course->count." বার)" }}</td>
                              <td>{{ $course->labfee." টাকা (".$course->count." বার)" }}</td>
                              <td>{{ $course->admission + ($course->tution * $course->month) + ($course->semester * $course->count) + ($course->formflap * $course->count) + ($course->labfee * $course->count)}} টাকা</td>
                              <td><a href="../../admin/courses/{{ $course->id }}">U</a></td>
                            </tr>
                        @endforeach
                    @endif
                   
                  </tbody>
                </table>
                {{$courses->links('pagination::bootstrap-5')}}
              </div>
              

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">নতুন কোর্স</h5>
      <div class="card mb-0">
        <div class="card-body p-4">
          <form action="../admin/courses" method="post">
            @csrf
            <div class="mb-3">
              <label for="" class="form-label">Subject Headings</label>
              <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" />
              <small id="helpId" class="text-muted text-danger"><span class="text-danger">@error('name') {{ $message }} @enderror</span></small>
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Subject</label>
              <select class="form-select form-select" name="ssubject" id="">
                @foreach ($subjects as $subject)
                  <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                @endforeach
              </select>
              <small id="helpId" class="text-muted">Select the preferable subject</small>
            </div>
            
            <div class="mb-3">
              <label for="" class="form-label">Admission Fee</label>
              <input type="number" name="admission" id="" class="form-control" placeholder="" aria-describedby="helpId" />
              <small id="helpId" class="text-muted text-danger"><span class="text-danger">@error('admission') {{ $message }} @enderror</span></small>
            </div>

            
              <div class="row">
                <div class="col-6">
                  <div class="mb-3">
                  <label for="" class="form-label">Tution Fee</label>
                  <input type="number" name="tution" id="" class="form-control" placeholder="" aria-describedby="helpId" />
                  <small id="helpId" class="text-muted text-danger"><span class="text-danger">@error('tution') {{ $message }} @enderror</span></small>
                </div>
              </div>
              <div class="col-6">
                <div class="mb-3">
                <label for="" class="form-label">Months</label>
              <input type="number" name="month" id="" class="form-control" placeholder="" aria-describedby="helpId" />
              <small id="helpId" class="text-muted text-danger"><span class="text-danger">@error('month') {{ $message }} @enderror</span></small>
              </div>
            </div>
              </div>

              <div class="row">
                <div class="col-6">
                  <div class="mb-3">
                  <label for="" class="form-label">Semester Fee</label>
                  <input type="number" name="semester" id="" class="form-control" placeholder="" aria-describedby="helpId" />
                  <small id="helpId" class="text-muted text-danger"><span class="text-danger">@error('semester') {{ $message }} @enderror</span></small>
                </div>
              </div>
              <div class="col-6">
                <div class="mb-3">
                <label for="" class="form-label">No of Semester</label>
              <input type="number" name="count" id="" class="form-control" placeholder="" aria-describedby="helpId" />
              <small id="helpId" class="text-muted text-danger"><span class="text-danger">@error('count') {{ $message }} @enderror</span></small>
              </div>
            </div>
              </div>

              <div class="row">
                <div class="col-6">
                  <div class="mb-3">
                  <label for="" class="form-label">Formflap Fee</label>
                  <input type="number" name="formflap" id="" class="form-control" placeholder="" aria-describedby="helpId" />
                  <small id="helpId" class="text-muted text-danger"><span class="text-danger">@error('formflap') {{ $message }} @enderror</span></small>
                </div>
              </div>
              <div class="col-6">
                <div class="mb-3">
                <label for="" class="form-label">Lab Fee</label>
              <input type="number" name="labfee" id="" class="form-control" placeholder="" aria-describedby="helpId" />
              <small id="helpId" class="text-muted text-danger"><span class="text-danger">@error('labfee') {{ $message }} @enderror</span></small>
              </div>
            </div>
              </div>
              <button type="submit" class="btn btn-primary"> Submit </button>
              
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
 <!--  Content End Here -->




@endsection
