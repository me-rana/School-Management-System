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
          <h5 class="card-title fw-semibold mb-4">নোটিশ</h5>
          <div class="card mb-0">
            <div class="card-body p-4">
             {{-- Write Your Content from Here --}}
            <div
              class="table-responsive"
            >
              <table
                class="table table-white"
              >
                <thead>
                  <tr>
                    <th scope="col-2">ডেট</th>
                    <th scope="col-8">টাইটেল</th>
                    <th scope="col-2">পড়ুন</th>
                  </tr>
                </thead>
                <tbody>
                  @if ($notices->count() > 0)
                      @foreach ($notices as $notice) 
                      <tr class="">
                        <td scope="col-2" class="bg-warning text-white text-center"><h3 class="text-center text-white">{{ date_format($notice->created_at, "d") }}</h3><span class="text-center">{{ date_format($notice->created_at, "F") }}</span></td>
                        <td scope="col-8">{{ $notice->title }}</td>
                        <td scope="col-2"><a href="../../../../{{ $notice->pdf_path }}" target="_blank"><button class="btn btn-warning">পড়ুন</button></a></td>
                      </tr>
                      @endforeach
                  @else 
                      <p class="text-center text-danger">কোন নোটিশ পাওয়া যায়নি!</p>
                  @endif
                </tbody>
              </table>
              {{$notices->links('pagination::bootstrap-5')}}
            </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>



<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">নতুন নোটিশ</h5>
      <div class="card mb-0">
        <div class="card-body p-4">
         {{-- Write Your Content from Here --}}
        <form action="../../admin/notices" method="post" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="" class="form-label">টাইটেল</label>
            <input type="text" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId"  />
            <small id="helpId" class="text-muted">@error('title') {{ $message }} @enderror</small>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">ইমেইজ আপলোড</label>
            <input type="file" class="form-control" name="image" id="" placeholder="" aria-describedby="fileHelpId" />
            <div id="fileHelpId" class="form-text">Help text</div>
          </div>
          <button type="submit" class="btn btn-primary"> যুক্ত করুন </button>
          
          
          
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